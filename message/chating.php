<!DOCTYPE html>
<?php

session_start();

if(empty($_SESSION['user_id'])){

	$_SESSION['user_id'] = 1;
}$_SESSION['user_id'] = 1;
$user_id = $_SESSION['user_id'];

 
if (isset($_GET['id'])) {

	$cu_id 	 = $_GET['id'];	
}
else{
	$cu_id = 0;
}


require 'mysql_cnct.php';
?>
<html lang="en">
  
<!-- Mirrored from demo.themeregion.com/jobs-updated/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Sep 2017 09:34:50 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Theme Region">
   	<meta name="description" content="">

    <title>Jobs | Job Portal / Job Board HTML Template</title>
    <link rel="stylesheet" type="text/css" href="chating.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css"> 
    <link rel="stylesheet" href="../css/main.css">  

    <!-- icons -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Template Developed By ThemeRegion -->
  <?php 
  			include 'header.php';

  ?>
	

	<div id="chat_main_div">
		
			<div id="friends_list">

			
					<div id="fir_list">

						<div id="tit_fri_list">
							<span id="tit_letterss">Chat list</span>
						</div>
						<div id="box_sh_use"></div>
						
								
						<?php
								
								$q1="SELECT * from contacts where user_id = $user_id";
								$r1=mysqli_query($dbc,$q1);
									if($r1){
											
											while( $row = mysqli_fetch_array($r1,MYSQLI_ASSOC)){
												$fri_id = $row['cu_id'];

						?>
												<div  class="manu_fri_list" onclick="chating_id(<?=$fri_id?>,'Friend Name');">
												<div class="fri_img">
													<img src="../php/chat_avatar.php?id=1&w=150&h=150">
												</div>
												<div class="fri_name">
													<span id="tit_list_name">Friend Name</span><!-- <?=$your_fri_name?> -->
												</div>
												<i class="fa fa-times" aria-hidden="true"></i>
												</div>
												<?php
														//echo "$your_fri_name<br>";
											}
										}
									

						?>
						
					    
						
					</div>

				
			</div>
			<div id="message_window">
				

					
					<div id="chat_person">
						<div id="chat_our_img" ><img src="../php/chat_avatar.php?id=1&w=150&h=150" style="width: 30px;height: 30px;"></div>
						<span id="our_name">Y</span>
						<i class="fa fa-ellipsis-h" aria-hidden="true"></i>
					</div>

					<div id="chat_window" style=""  >
					
					<!-- 	<button id="old_chats" onclick="old_msg();">old chats</button> -->
						
								<?php
								$from  = 0;
                                $q = "SELECT * from read_messages where user_id = $user_id  and cu_id = $cu_id";
                                $r = mysqli_query($dbc,$q);
                                if($r){
                                	$row = mysqli_fetch_array($r);
                                	if($row != null)
                                		$from = $row['msg_id'];
                                }

                                $n = 0;
                                $fst_msg_id = 0;
								$q1="SELECT * from message where ((user_1 = '$cu_id' and user_2 = '$user_id') or (user_2 = '$cu_id' and user_1 = '$user_id') ) and id >= ". ( $from - 10 )." order by id asc";
								$r1=mysqli_query($dbc,$q1);
								if($r1){
								
									
									$tot_cnt = mysqli_num_rows($r1);
									while( $row = mysqli_fetch_array($r1,MYSQLI_ASSOC)){
							            $msg_text = $row['msg_text'];
										$my_userid = $row['user_1'];
										$frd_id = $row['user_2'];
										$msg_id = $row['id'];
										$da_time = $row['date_send'];
										$send_date=date_create($da_time);
										$time_da = date_format($send_date,"d M Y") ;
										$n++;
										if($n == 1){
											$fst_msg_id = $row['id'];
										}
										if($n == $tot_cnt){
											// update read message
											if($from == 0)


												$q3 = "INSERT into read_messages values (NULL,$user_id,$msg_id,$cu_id)";
											else
												$q3 = "UPDATE read_messages set msg_id = $msg_id where user_id = $user_id and cu_id = $cu_id";
											$r3 = mysqli_query($dbc,$q3);
											
										}								
										
										$color = ($msg_id == $from+1) ? "<div id=\"new_mess_line\"><div><hr></div><span>NEW MESSAGE</span><div><hr></div></div>" : "" ;
											 	echo $color;
											 
										 	
										$my_msg_pane = ($my_userid == $user_id) ? "right" : "left";
                                        $alt_msg_pane = ($my_userid == $user_id) ? "<div id=\"joined_mess1\">" : "<div id=\"joined_mess2\">";
										$fri_mess_alt = ($my_userid == $user_id) ? "<div id=\"mess1\"><div id=\"mess_age1\">" : "<div id=\"mess2\"><div id=\"mess_age2\">";
										$img_fri1 = ($my_userid == $user_id) ? "inherit;" : "none;";
										$img_fri2 = ($my_userid == $user_id) ? "none;" : "inherit;";

										?>
										

										

										<div id="chat_resend" style="word-wrap: break-word;text-align: <?=$my_msg_pane?>;"><?=$alt_msg_pane?>
											 <div class="fir_img2" style="display: <?=$img_fri2?>"><img src="../php/chat_avatar.php?id=1&w=150&h=150" ></div> <?=$fri_mess_alt?>
											<span style=""><?php echo nl2br(htmlentities($msg_text)); ?><div id="da_tes"><?=$time_da?></div> </span>
										</div>
									</div>
										<div class="fir_img1" style="display: <?=$img_fri1?>"><img src="../php/chat_avatar.php?id=1&w=150&h=150" ></div>
									</div>
									</div>
									<?php											
									
								
									}


								}
								else {
							           echo mysqli_error($dbc);
							 }
							
						?>
					</div>
	<div id="text_box">
		<!-- <input type="text" autofocus="true" name="chat_text" id="send_box"> -->
		<textarea  name="chat_text" placeholder="Enter your message"  wrap="hard" id="send_box" autofocus></textarea>
		<button id="send" onclick="send_msg()">Send</button>
		<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
	</div>

	



			</div>

<div id="other_list">
	
</div>



	</div>

	
	
	<!-- footer -->
	<footer id="footer" class="clearfix">
		<!-- footer-top -->
		<section class="footer-top clearfix">
			<div class="container">
				<div class="row">
					<!-- footer-widget -->
					<div class="col-sm-3">
						<div class="footer-widget">
							<h5>Quik Links</h5>
							<ul>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">All Cities</a></li>
								<li><a href="#">Help & Support</a></li>
								<li><a href="#">Advertise With Us</a></li>
							</ul>
						</div>
					</div><!-- footer-widget -->

					<!-- footer-widget -->
					<div class="col-sm-3">
						<div class="footer-widget">
							<h5>How to sell fast</h5>
							<ul>
								<li><a href="#">How to sell fast</a></li>
								<li><a href="#">Membership</a></li>
								<li><a href="#">Banner Advertising</a></li>
								<li><a href="#">Promote your ad</a></li>
								<li><a href="#">Jobs Delivers</a></li>
								<li><a href="#">FAQ</a></li>
							</ul>
						</div>
					</div><!-- footer-widget -->

					<!-- footer-widget -->
					<div class="col-sm-3">
						<div class="footer-widget social-widget">
							<h5>Follow us on</h5>
							<ul>
								<li><a href="#"><i class="fa fa-facebook-official"></i>Facebook</a></li>
								<li><a href="#"><i class="fa fa-twitter-square"></i>Twitter</a></li>
								<li><a href="#"><i class="fa fa-google-plus-square"></i>Google+</a></li>
								<li><a href="#"><i class="fa fa-youtube-play"></i>youtube</a></li>
							</ul>
						</div>
					</div><!-- footer-widget -->

					<!-- footer-widget -->
					<div class="col-sm-3">
						<div class="footer-widget news-letter">
							<h5>Newsletter</h5>
							<p>Jobs is Worldest leading Portal platform that brings!</p>
							<!-- form -->
							<form action="#">
								<input type="email" class="form-control" placeholder="Your email id">
								<button type="submit" class="btn btn-primary">Sign Up</button>
							</form><!-- form -->			
						</div>
					</div><!-- footer-widget -->
				</div><!-- row -->
			</div><!-- container -->
		</section><!-- footer-top -->

		<div class="footer-bottom clearfix text-center">
			<div class="container">
				<p>Copyright &copy; <a href="#">Jobs</a> 2017. Developed by <a href="http://themeregion.com/">ThemeRegion</a></p>
			</div>
		</div><!-- footer-bottom -->
	</footer><!-- footer -->
	
	<!--/Preset Style Chooser--> 
	<div class="style-chooser">
		<div class="style-chooser-inner">
			
			<h4>Presets</h4>
			<ul class="preset-list clearfix">
				<li class="preset1 active" data-preset="1"><a href="#" data-color="preset1"></a></li>
				<li class="preset2" data-preset="2"><a href="#" data-color="preset2"></a></li>
				<li class="preset3" data-preset="3"><a href="#" data-color="preset3"></a></li>
				<li class="preset4" data-preset="4"><a href="#" data-color="preset4"></a></li>
			</ul>
		</div>
	</div>
	<!--/End:Preset Style Chooser-->
	
    <!-- JS -->
    <script src="../js/jquery.min.js"></script>  

<script type="text/javascript">

	
	var c_id = <?=$cu_id?>;
		// $('#send_box').keyup(function(e){
		// 	var key = e.which || e.keyCode;

		// 	if(key == 13){
		// 		send_msg(c_id);	
		// 	}
		// });

	function send_msg() {
		if($('#send_box').val() != "")
		$.ajax({
				url : 'send_msg.php',
				data : {
					cu_id : c_id,
					msg   : $('#send_box').val()
				},
				type : 'post',
				dataType : 'json',
				success : function(res){
					console.log(res);
					//refresh ajax funcition
					$('#send_box').val("");
					document.getElementById("send_box").focus();
					get_new_messages();
				},
				error :function(err){
					console.log(err);
				}

			});
		}
	load_pre = false;

		setInterval(function(){
			get_new_messages();
		},3000);

		get_new_messages();
		var objDiv = document.getElementById("chat_window");
		objDiv.scrollTop = objDiv.scrollHeight;	
		function get_new_messages() {


			$.ajax({
				url : 'get_message.php',
				data : {
					cu_id : c_id,
					msg   : $('#send_box').val(),
					load_ten : load_pre
				},
				type : 'post',
				dataType : 'json',
				success : function(res){
					var data = res;
					if(data.error == false){
						if(data.new_msg == true){
							var msg_data = data.chat_data;
							for(i in msg_data){
								var new_msg = msg_data[i];
								var msg_text =  new_msg.msg ;           var time_da = data.send_date ;
								var msg_pane = (new_msg.my_msg == true) ? "right" : "left";

								        var alt_msg_pane = (new_msg.my_msg == true) ? "<div id=\"joined_mess1\">" : "<div id=\"joined_mess2\">";
										var fri_mess_alt = (new_msg.my_msg == true) ? "<div id=\"mess1\"><div id=\"mess_age1\">" : "<div id=\"mess2\"><div id=\"mess_age2\">";
										var img_fri1 = (new_msg.my_msg == true) ? "inherit;" : "none;";
										var img_fri2 = (new_msg.my_msg == true) ? "none;" : "inherit;";

								var temp_msg = '<div id="chat_resend" style="text-align: '+msg_pane+';">'+alt_msg_pane+'<div class=fir_img2 style="display: '+img_fri2+'"><img src="../php/chat_avatar.php?id=1&w=150&h=150" style="width: 100%;height: 100%;"></div> '+fri_mess_alt+'<span style = "">'+msg_text+'<div id="da_tes">'+time_da+'</div></span>\
												</div></div><div class=fir_img1 style="display: '+img_fri1+'"><img src="../php/chat_avatar.php?id=1&w=150&h=150" style="width: 100%;height: 100%;"></div>	</div>	</div>';
								$('#chat_window').append(temp_msg);
								var objDiv = document.getElementById("chat_window");
								objDiv.scrollTop = objDiv.scrollHeight;	
								if(load_pre == true){
									if (msg_data.length > 0) {
										$("#old_chats").remove();
										var tep_msg = '<button id="old_chats" onclick="old_msg()">old chats</button>';
										
										$('#chat_window').prepend(tep_msg);
									}else{
										console.log('no new message');
									}
								}
								load_pre = false;
							}
							

						}
													
					}
				
					
				},
				error :function(err){
					console.log(err);
				}

			});	
}
	fst_msg_id = <?=$fst_msg_id?>;

		function old_msg() {
			$.ajax({
				url : 'old_chats.php',
				data : {
					cu_id : c_id,
					last_id : fst_msg_id
				},
				type : 'post',
				dataType : 'json',
				success : function(res){
					console.log(res);
					var data = res;
					if(data.error == false){

							var msg_data = data.chat_data;
							fst_msg_id = data.last_id;
							for(i in msg_data){
								var new_msg = msg_data[i];
								var msg_text = new_msg.msg;                         var time_da = new_msg.send_date ;
								var msg_pane = (new_msg.my_msg == true) ? "right" : "left";
								eachmsg_id = new_msg.each_id;
								

								var alt_msg_pane = (new_msg.my_msg == true) ? "<div id=\"joined_mess1\">" : "<div id=\"joined_mess2\">";
										var fri_mess_alt = (new_msg.my_msg == true) ? "<div id=\"mess1\"><div id=\"mess_age1\">" : "<div id=\"mess2\"><div id=\"mess_age2\">";
										var img_fri1 = (new_msg.my_msg == true) ? "inherit;" : "none;";
										var img_fri2 = (new_msg.my_msg == true) ? "none;" : "inherit;";

								var temp_msg = '<div id="chat_resend" style="text-align: '+msg_pane+';">'+alt_msg_pane+'<div class=fir_img2 style="display: '+img_fri2+'"><img src="img.png" style="width: 100%;height: 100%;"></div> '+fri_mess_alt+'<span style = "">'+msg_text+'<div id="da_tes">'+time_da+'</div></span>\
												</div></div><div class=fir_img1 style="display: '+img_fri1+'"><img src="img.png" style="width: 100%;height: 100%;"></div>	</div>	</div>';
								
								$('#chat_window').prepend(temp_msg);
								var objDiv = document.getElementById("chat_window");
								objDiv.scrollTop = 0;
								
							

						}
						if (msg_data.length > 0) {
							$("#old_chats").remove();
							var tep_msg = '<button id="old_chats" onclick="old_msg()">old chats</button>';
							
							$('#chat_window').prepend(tep_msg);
						}else{
							console.log('no message');
						}
						
													
					}
				},
				error :function(err){
					console.log(err);
				}

			});	
		}
	

	

	</script>

	<script type="text/javascript">
		

			var frie_id = <?=$cu_id?>;
			if (frie_id == 0) {

				$("#text_box").css("display" , "none");
				$("#old_chats").css("display" , "none");
				$("#chat_window").css("height" , "100%");
				var temp_init = '<div id="text_logo_chat"><i class="fa fa-users" aria-hidden="true"></i><span id="init_our_mge">Chat your friends</span></div>';
				$('#chat_window').html(temp_init);

			}


	</script>
	
	<script type="text/javascript">
	function chating_id(frd_id,name){
      	$('#chat_window').html('');
      	$("#chat_window").css("height" , "54%");
		$('#our_name').html(name);
	   	c_id = frd_id;
	   	load_pre  = true;   
	   	$("#text_box").css("display" , "inline-flex");
	   	$("#text_box").css("height" , "98px");
		$("#old_chats").css("display" , "inherit");
		document.getElementById("send_box").focus();
	  	get_new_messages();
    }

      
    //	document.getElementById('chat_window').scrollTop = (document.getElementById('new_mess_line').offsetTop)-(document.getElementById('chat_resend').offsetTop);
</script>

	<script type="text/javascript">

		

      $(".profile_list").click(function(){
		      $(".pro_nav_li").css("visibility", "visibile");
		      $("#pro_manu_list").css("visibility", "visibile");
		      $("#pro_manu_list_2").slideToggle(1);
		      $(".pro_nav_li").slideToggle(1);
      }); 
	  $(".navbar_brand").click(function(){
		      $(".header_left").css("visibility", "visibile");
		      $(".header_left").slideToggle("slow");
     }); 

     $("#pro_slide").mouseleave(function(){
              $("#pro_manu_list").css("visibility", "hidden");
     });	
     $(".profile_list").mouseleave(function(){
              $("#pro_manu_list").slideToggle(1);
              $(".pro_nav_li").slideToggle(1);
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

  </body>

<!-- Mirrored from demo.themeregion.com/jobs-updated/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Sep 2017 09:35:11 GMT -->
</html>