<div class="header-main">
  <div class="header-left">
      <div class="logo-name">
           <a href="citychange.php"> <h3>sabziday</h3>
           <h6><?php echo $_REQUEST['city'];?>(change)</h6>
          <!--<img id="logo" src="" alt="Logo"/>-->
          </a>
      </div>
      <!--search-box 
      
        <div class="search-box">
          <form action="searchresult.php" method="post">
            <input type="text" placeholder="Search..." name="paddy" >
            <input type="submit" value="">
          </form>
        </div> 
        
        end-search-box-->
        
      <div class="clearfix"> </div>
     </div>
     <div class="header-right">
      <div class="profile_details_left"><!--notifications of menu start -->

        <div class="clearfix"> </div>
      </div>
      <!--notification menu end -->
      <?php if(isset($_COOKIE['user'])){
        ?>

      <div class="profile_details">
        <ul>
          <li class="dropdown profile_details_drop">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              <div class="profile_img">
            <!--    <span class="prfil-img"><img src="images/p1.png" alt=""> </span>-->
                <div class="user-name">
                  <p><?php echo $_COOKIE['user'];?></p>

                </div>
                <i class="fa fa-angle-down lnr"></i>
                <i class="fa fa-angle-up lnr"></i>
                <div class="clearfix"></div>
              </div>
            </a>
            <ul class="dropdown-menu drp-mnu">

              <li> <a href="profile.php"><i class="fa fa-user"></i>  Profile</a> </li>
              <li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
            </ul>
          </li>
        </ul>
      </div>
      <?php }else {?>
        <a href="login.php"><i class="fa fa-user"></i> Login </a>
      <?php } ?>
        <a href="checkout.php"><i class="fa fa-shopping-cart"></i> My cart 
        
      <?php 
      
      
      $user=$_COOKIE['user'];
      
      
      if($user != ""){

$select="SELECT COUNT(productname) from cart where user='$user' AND deliverto = ''";
$result=mysqli_query($conn,$select);
if(mysqli_num_rows($result)>0){
  while($row=mysqli_fetch_assoc($result)){
    $countdowner=$row['COUNT(productname)'];
    // echo "(" . $countdowner . ")";
  }

}
}
?>
        
        </a>

      <div class="clearfix"> </div>
    </div>
     <div class="clearfix"> </div>
</div>
