<?php
session_start();
?>
<div class="top-bar_sub_w3layouts container-fluid">
	<div class="row">

		<div class="col-md-4 col-sm-6 log-icons mt-2">
			<p class="py-2"><i class="fas fa-phone"></i> Call  : +91 9096139047 </p>
		</div>

		<div class="col-md-4 col-sm-6 logo">
			<a class="navbar-brand" href="index.php">
				<i class="fas fa-taxi"></i> Omeaga Drive</a>
		</div>

<?php if(!isset($_SESSION['user']))
{
	?>
		<div class="col-md-4 top-forms mt-md-3 mt-2 mb-md-0 mb-3">
			<span class="mx-lg-4 mx-md-2  mx-1">
				<a href="login.php"  >
					<i class="fas fa-lock"></i> Sign In</a>
			</span>
			<span>
				<a href="register.php"  >
					<i class="fas fa-user"></i> Register</a>
			</span>
		</div>
<?php
}
else{
?>
<div class="col-md-4 top-forms mt-md-3 mt-2 mb-md-0 mb-3">
	<span>
		<a href="logout.php"  >
			<i class="fas fa-user"></i> Logout</a>
	</span>
</div>
<?php

}
?>
	</div>
</div>
