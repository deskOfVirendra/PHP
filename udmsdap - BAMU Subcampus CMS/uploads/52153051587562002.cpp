#include<iostream>
using namespace std;
class node
{
	 public:
	 	     int data;
	 	     node *left,*right;
	 	     node(int x)
								{
									data = x;
									left = right = NULL;
								}
};

class stack
{
	public:
		 int top;
		 node* arr[10];
		 
		 stack()
			{
				top = -1;
			}
			
			void push(node *temp)
			{
				top = top + 1;
				arr[top] = temp;
			}
			
			node* pop() 
			{
				node* temp = arr[top];
				top = top - 1;
				return temp;
			}
			
			node* topelement()
			{
				return arr[top];
			}
			
			bool isempty() 
			{
				 if (top == -1)
				     return true;
				 return false;
			}
			
			bool isfull()
			{
				if (top == 9)
								return true;
    return false;
			}
			friend class Binary_tree;
};

class Binary_tree
{
	public:
							node *root;
							Binary_tree()
							{
								root = NULL;
							}
	
	friend class node;
//	friend class stack;
	void create()
	{
		root = create_tree();
	}					
	
	
	
	node *create_tree()
	{
		int x;
		cout<<"\nEnter data or -1 to stop!";
		cin>>x;
		if(x == -1)
		   return NULL;
		node *p = new node(x);
		cout<<"\nEnter left of "<<x;
		p->left = create_tree();
		cout<<"\nEnter right of "<<x;
		p->right = create_tree();
		return p;
	}
	
	void preorder(node *root)
	{
		if(root != NULL)
		{
			cout<<root->data<<" ";
			preorder(root->left);
			preorder(root->right);
		}
	}
	
	void inorder(node *root)
	{
			if(root != NULL)
			{
				inorder(root->left);
				cout<<root->data<<" ";
				inorder(root->right);
			}
			
	}
	
	void postorder(node *root)
	{
		if(root != NULL)
		{
			
			postorder(root->left);
			postorder(root->right);
			cout<<root->data<<" ";
		
		}
	}
	
	node *getroot()
	{
		return root;
	}
	
	int height_of_tree(node *root)
	{
		if (root == NULL)
	   	return 0;
		
		
		if (root->left == NULL && root->right == NULL)
		 					return 0;

		int hl,hr;
		
		hl = height_of_tree(root->left);
		hr = height_of_tree(root->right);
		if (hl > hr)
		   return hl + 1;
		return hr + 1;   
		
	}
	
	void mirror_of_tree(node *root) 
	{
		if(root != NULL)
		{
			mirror_of_tree(root->left);
			mirror_of_tree(root->right);
			
			node *temp = root->left;
			root->left = root->right;
			root->right = temp;
		}
		return;
	} 
	
	int check_equivalence_of_two_trees(node *t1, node *t2)
	{
		 if (t1 == NULL && t2 == NULL)
		  						return 1;
		 if (t1 != NULL && t2 != NULL)
			{
				if (t1->data == t2->data && 
				check_equivalence_of_two_trees(t1->left,t2->left) 
				&& check_equivalence_of_two_trees(t1->right,t2->right))
				      return 1;
			}
			return 0;
	}

node *copy(node *t)
{
	node *p ;
	p = NULL;
	if(t != NULL)
	{
		 p = new node(0);
		 p->data = t->data;
		 p->left = copy(t->left);
		 p->right = copy(t->right);
	}
	return p;
}

void copy_tree_to_another(node *s)
{
	
	 root = copy(s);
	 
}

int show_internal_nodes(node *t)
{
		if(t == NULL)
	    return 0;
	    
	 if(t->left != NULL || t->right != NULL){
		       cout<<t->data<<endl;    
  
		}		
		
		show_internal_nodes(t->left);
	 show_internal_nodes(t->right);
	  
		return 0;
}

int show_leaf_nodes(node *t)
{
		if(t == NULL)
	    return 0;
   
  if(t->left == NULL && t->right == NULL){
		
     cout<<t->data<<endl;
     
 }
     show_leaf_nodes(t->left);
		   show_leaf_nodes(t->right);
		   
		return 0;
}

int show_all_nodes(node *t)
{
	cout<<"Internal nodes : ";
	 show_internal_nodes(t);
  cout<<"leaf nodes : ";
  show_leaf_nodes(t);
			 
}

node* Erase_all_nodes(node *root)
{
	
	 if (root != NULL)
		{
			Erase_all_nodes(root->left);
			Erase_all_nodes(root->right);
			delete root;
		}
		return NULL;

}

void iterative_inorder_traversal(node* root)
{
	stack s;
	node *curr = root;
  while(true)
		{
			  while(curr)
					{
						s.push(curr);
						curr = curr->left;
					}
					if (s.isempty())
					   break;
			
			  curr = s.pop();
			  cout<<curr->data<<" ";
			  curr = curr->right;
		}
		

	}
	
	
void iterative_preorder_traversal(node *root)
{
	
	 if (root == NULL) 
        return; 
  
    stack s;  
    node* curr = root; 
    while(true)
				{
					  while(curr)
							{
								cout<<curr->data<<" ";
								s.push(curr);
								curr = curr->left; 
							}
							
							if(s.isempty())
							  break;
							  
							 curr = s.pop();
							 curr = curr->right;
				}
}


void iterative_postorder_traversal(node *root)
{
	  stack s;
	  node *curr = root;
	  node *previous;
	  while(true)
			{
				   if(curr)
							{
								
								s.push(curr);
								curr = curr->left;
							
							}
							else{
								
							      if(s.isempty())
													{
														break;
													}
													else
													{
														 if(s.topelement()->right == NULL)
														 {
															 curr = s.pop();
															 cout<<curr->data<<" ";
														 }
														
														if(!s.isempty())
														   curr = s.topelement()->right;
														   else
														   curr = NULL;
													}
							}
				
			
    }
}
};

int main()
{
	Binary_tree b,b1;
	b.create();
	cout<<"Preorder : ";
	b.preorder(b.getroot());
	cout<<"\nInorder : ";
	b.inorder(b.getroot());
	cout<<"\nPostorder : ";
	b.postorder(b.getroot());
	cout<<"Height of tree : "<<b.height_of_tree(b.getroot());
 b.show_all_nodes(b.getroot());
 //b.mirror_of_tree(b.getroot());
 //if(!b.Erase_all_nodes(b.getroot()))
   //  cout<<"Erased..!";
	//cout<<"copying one tree to another...!";
	//b1.copy_tree_to_another(b.getroot());
	//cout<<"Inorder of b1 is : ";
	//b1.inorder(b1.getroot());
	cout<<"iterative inorder traversal is"<<endl;
	b.iterative_inorder_traversal(b.getroot());
		cout<<"\niterative preorder traversal is"<<endl;
	b.iterative_preorder_traversal(b.getroot());
	cout<<"\niterative postorder traversal is"<<endl;
	b.iterative_postorder_traversal(b.getroot());
		return 0;
}
