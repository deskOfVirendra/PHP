<div class="header-main">
  <div class="header-left">
      <div class="logo-name">
           <a href="index.html"> <h1>Shoppy</h1>
          <!--<img id="logo" src="" alt="Logo"/>-->
          </a>
      </div>
      <!--search-box-->
        <div class="search-box">
          <form action="searchresult.php" method="post">
            <input type="text" placeholder="Search..." name="paddy" >
            <input type="submit" value="">
          </form>
        </div><!--//end-search-box-->
      <div class="clearfix"> </div>
     </div>
     <div class="header-right">
      <div class="profile_details_left"><!--notifications of menu start -->

        <div class="clearfix"> </div>
      </div>
      <!--notification menu end -->
      <?php if(isset($_SESSION['user'])){
        ?>

      <div class="profile_details">
        <ul>
          <li class="dropdown profile_details_drop">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              <div class="profile_img">
            <!--    <span class="prfil-img"><img src="images/p1.png" alt=""> </span>-->
                <div class="user-name">
                  <p><?php echo $_SESSION['user'];?></p>

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
      <?php }?>
      <div class="clearfix"> </div>
    </div>
     <div class="clearfix"> </div>
</div>
