<?php
session_start();

if(isset($_SESSION['id'])) 

{
    $type = $_SESSION['type'];

  if($type == "job_seeker")
  {
        $path = "job_seeker/index.php";

        header("Location:$path");


  }
if($type == "employer")
{
      $path ="job_employer/index.php";

      header("Location:$path");

}


  die();
}



//pending check_session function add    



?>




<link rel="stylesheet" href="testing.css">
  <!-- header -->
    </head>

    <body>
               <div id="hea_der">
    <!-- navbar -->
    
      <div class="con_tainer">
        <!-- navbar-header -->
        <div id="logo">
          <div id="logo_img">
            <a href="index.html"><img  src="img/techno1.png" alt="Workcohol" title="Workcohol" style="width: 35px;height: 35px;" ></a>
          </div>
          <div id="sea_rch_jabs">
            <span id="search_icon_1" onclick="click_search();"><i class="fa fa-search" aria-hidden="true"></i></span><input type="text" name="" onclick="click_search();" id="sea_rch_input" placeholder=" Search"><span id="search_icon_2" onclick="click_search();"><i class="fa fa-search" aria-hidden="true"></i></span>
        </div>
          
        </div>

        <div class="navbar_header">
          
          <a class="navbar_brand"><i class="fa fa-navicon"></i></a>
          
        </div>
        

        

        <div class="header_left">
            <div class="header_cont">
              <a href="index.php" id="header_le_a" class="header_le"><div class="pro_li"><i class="fa fa-home" aria-hidden="true"></i><span id="header_manu_name">home</span></div></a>

              <a id="header_le_a"><div class="pro_li"><i class="fa fa-file-text" aria-hidden="true"></i><span id="header_manu_name">resume</span></div></a>

              <a id="header_le_a"><div class="pro_li"><i class="fa fa-bell-o" aria-hidden="true"></i><span id="header_manu_name">network</span></div></a>

              <a id="header_le_a"><div class="pro_li"><i class="fa fa-envelope" aria-hidden="true"></i><span id="header_manu_name">Message</span></div></a>
              
          <a class="profile_list" id="header_le_a">
          <div class="pro_li" id="pro_slide">
          <i class="fa fa-user-circle" aria-hidden="true"></i><span id="header_manu_name">Profile</span></div></a>
          
      
    
        
            </div>
            <div id="pro_manu_list_2">

                 <div id="pro_lool_nav" ><i class="fa fa-caret-up" aria-hidden="true"></i></div>

                 <a href="js.html"> <div class="pro_nav_li">Profile</div></a>
                 <a href="post-resume.html"> <div class="pro_nav_li">Post Resume</div> </a>
               
                 <a href=""> <div class="pro_nav_li">Resume Edit</div> </a>
                 <a href="bookmark-list.php"> <div class="pro_nav_li">Book Marked</div> </a>
                 <a> <div class="pro_nav_li">Log out</div></a>
          </div>
          
        </div>
        <!-- /navbar-header -->
        
        <div id="kode_div"></div>

        <!-- nav-right -->
        <div class="top_icons">
              <ul class="social_icons">
              <li class="facebook"><a href="#" target="_blank" data-placement="bottom" title="Workcohol @ Facebook">Facebook</a></li>
              <li class="googleplus"><a href="#" target="_blank" data-placement="bottom" title="Workcohol @ Google+">Google+</a></li>
              <li class="twitter"><a href="#" target="_blank" data-placement="bottom" title="Workcohol @ Twitter">Twitter</a></li>
              <li class="linkedin"><a href="#" target="_blank" data-placement="bottom" title="Workcohol @ Linkedin">Linkedin</a></li>
              <li class="youtube"><a href="#" target="_blank" data-placement="bottom" title="Workcohol YouTube">YouTube</a></li>
              </ul>
        </div>


      </div><!-- container -->
    
  </div>



