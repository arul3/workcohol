<link rel="stylesheet" href="../css/testing.css">
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
              <div class="pro_li"><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i><span id="header_manu_name">home</span></a></div>
              <div class="pro_li"><a href="job-list.html"><i class="fa fa-file-text" aria-hidden="true"></i><span id="header_manu_name">resume</span></a></div>
              <div class="pro_li"><a href="details.html"><i class="fa fa-bell-o" aria-hidden="true"></i><span id="header_manu_name">network</span></a></div>
              <div class="pro_li"><a href="chating.php"><i class="fa fa-envelope" aria-hidden="true"></i><span id="header_manu_name">Message</span></a></div>
              
          <div class="pro_li" id="pro_slide">
          <a class="profile_list"><i class="fa fa-user-circle" aria-hidden="true"></i><span id="header_manu_name">Profile</span></i></a>
          <div id="pro_manu_list_2">
            <div id="pro_lool_nav" ><i class="fa fa-caret-up" aria-hidden="true"></i></div>
                 <a> <div class="pro_nav_li">Profile</div></a>
                 <a> <div class="pro_nav_li">Post Resume</div></a>
                 <a> <div class="pro_nav_li">Applied Jobs</div></a>
                 <a> <div class="pro_nav_li">Resume Edit</div></a>
                 <a> <div class="pro_nav_li">Book Marked</div></a>
                 <a> <div class="pro_nav_li">Log out</div></a>
          </div>
      </div>
        
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
  <!-- header -->

	
	
    <!-- JS -->
    <script src="js/jquery.min.js"></script>
	<script type="text/javascript">

		

      $(".profile_list").click(function(){
		      $(".pro_nav_li").css("visibility", "visibile");
		      $("#pro_manu_list_2").slideToggle(1);
		      $(".pro_nav_li").slideToggle(1);
      }); 
	  $(".navbar_brand").click(function(){
		      $(".header_left").css("visibility", "visibile");
		      $(".header_left").slideToggle("slow");
     }); 

     // $("#pro_manu_list").mouseleave(function(){
     //          $("#pro_manu_list").slideToggle(1);
     //          $(".pro_nav_li").slideToggle(1);
     // });	
     // $(".profile_list").mouseleave(function(){
     //          $("#pro_manu_list").slideToggle(1);
     //          $(".pro_nav_li").slideToggle(1);
     // });				
    
  function click_search(){

      document.getElementById('sea_rch_input').style.cssText = 'width: 87%;overflow: initial;border-top-left-radius:3px ;   border-top-right-radius: 0px; border-bottom-left-radius: 3px;border-bottom-right-radius:0px ;';
      document.getElementById('search_icon_2').style.cssText = 'display: initial;';
      document.getElementById('search_icon_1').style.cssText = 'display: none;';

  }
  $("#sea_rch_input").focusout(function(){

      document.getElementById('sea_rch_input').style.cssText = 'width: 87%;overflow: hidden;border-top-left-radius:0px ;   border-top-right-radius: 3px; border-bottom-left-radius: 0px;border-bottom-right-radius:3px ;';
      document.getElementById('search_icon_1').style.cssText = 'display: initial;';
      document.getElementById('search_icon_2').style.cssText = 'display: none;';

  });
    document.getElementById('chat_window').scrollTop = (document.getElementById('new_mess_line').offsetTop)-(document.getElementById('chat_resend').offsetTop);
</script>
 