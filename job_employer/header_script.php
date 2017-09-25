<script type="text/javascript">

    

      $(".navbar_brand").click(function(){
            $(".header_left").css("visibility", "visibile");
            $(".header_left").slideToggle("slow");
       }); 
      $(".profile_list").click(function(){
          $(".pro_nav_li").css("visibility", "visibile");
          $("#pro_manu_list_2").css("visibility", "visibile");
          $("#pro_manu_list_2").slideToggle(1);
          $(".pro_nav_li").slideToggle(1);
      }); 
     $("#pro_manu_list_2").mouseleave(function(){
              $("#pro_manu_list_2").hide();
              $(".pro_nav_li").hide();
      });       
     $("#pro_manu_list_2").mouseover(function(){
              $("#pro_manu_list_2").show();
              $(".pro_nav_li").show();
      }); 
     
     $(".notifi_click_fun").click(function(){
          $(".notifi_li").css("visibility", "visibile");
          $("#notification_list_2").css("visibility", "visibile");
          $("#notification_list_2").slideToggle(1);
          $(".notifi_li").slideToggle(1);
      }); 
     $("#notification_list_2").mouseleave(function(){
              $("#notification_list_2").hide();
              $(".notifi_li").hide();
      });       
     $("#notification_list_2").mouseover(function(){
              $("#notification_list_2").show();
              $(".notifi_li").show();
      }); 
    
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
    // document.getElementById('chat_window').scrollTop = (document.getElementById('new_mess_line').offsetTop)-(document.getElementById('chat_resend').offsetTop);
</script>
 