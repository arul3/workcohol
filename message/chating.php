<!DOCTYPE html>
<?php

session_start();

if(empty($_SESSION['id'])){

	header("location:../index.php");

}
$user_id = $_SESSION['id'];
// $user_name = $_SESSION['name'];

 
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


	

	<!-- Template Developed By ThemeRegion -->
 <?php 
  			if($_SESSION['type'] == "job_seeker")

  				include 'header_seek.php';

  			if($_SESSION['type'] == "employer")
  				
  				include 'header_emp.php';
  			

  ?>
	

	<div id="chat_main_div">
		
			<div id="friends_list">

			
					<div id="fir_list">

						<div id="tit_fri_list">
							<span id="tit_letterss">Chat list</span>
						</div>
						<div id="box_sh_use"></div>
						<div id="next_slide_list">
								
						<?php
								
								$q1="SELECT * from contacts where user_id = $user_id";
								$r1=mysqli_query($dbc,$q1);
									if($r1){
										if(mysqli_num_rows($r1) >  0){
											
											while( $row = mysqli_fetch_array($r1,MYSQLI_ASSOC)){
												$fri_id = $row['cu_id'];
												$q2 = "SELECT * FROM `user_info` WHERE id = $fri_id";
												$r2 = mysqli_query($dbc,$q2);
												if($r2){
													if(mysqli_num_rows($r2) >  0){
														$row2 = mysqli_fetch_array($r2,MYSQLI_ASSOC);
			                                            $your_fri_name=$row2['name'];
													

						?>
												<div  class="manu_fri_list" >
												<div class="fri_img" onclick="chating_id(<?=$fri_id?>,'<?=$your_fri_name?>');">
													<img src="../php/chat_avatar.php?id=1&w=150&h=150">
												</div>
												<div class="fri_name" onclick="chating_id(<?=$fri_id?>,'<?=$your_fri_name?>');">
													<span id="tit_list_name"><?=$your_fri_name?></span><!-- <?=$your_fri_name?> -->
												</div>
												<i class="fa fa-times" aria-hidden="true" onclick="cansal_friend(<?=$fri_id?>);" id="remove_fun"></i>
												</div>
												<?php
												}
												}
														//echo "$your_fri_name<br>";
											}
										}
										else{ ?><div id="no_frind">no frinds</div><?php }
									}
									

						?>
						
					    </div>
						
					</div>

				
			</div>
			<div id="message_window">
				

					
					<div id="chat_person">
						<div id="chat_our_img" ><img src="../php/chat_avatar.php?id=1&w=150&h=150" style="width: 30px;height: 30px;"></div>
						<span id="our_name">Your name</span>
						<i class="fa fa-ellipsis-h" aria-hidden="true"></i>
						<div id="go_link"></div>
					</div>

					<div id="chat_window" style=""  >
					
				<!-- 	<button id="old_chats" onclick="old_msg();">old chats</button> -->
						
								
					</div>
	<div id="text_box">
		<!-- <input type="text" autofocus="true" name="chat_text" id="send_box"> -->
		<textarea  name="chat_text" placeholder="Enter your message"  wrap="hard" id="send_box" autofocus></textarea>
		<button id="send" onclick="send_msg()">Send</button>
	</div>
	<div id="mirror_error">
						<div id="text_logo_chat"><!-- <?=$user_name?> --><i class="fa fa-users" aria-hidden="true"></i><span id="init_our_mge">Chat your friends</span></div>
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
					// console.log(res);
					//refresh ajax funcition
					$('#send_box').val("");
					document.getElementById("send_box").focus();
					get_new_messages();
				},
				error :function(err){
					// console.log(err);
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
								var msg_text =  new_msg.msg ; 
								var time_da = data.send_date ;
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
										var fri_iid = data.fst_msg_id;
										var tep_msg = '<button id="old_chats" onclick="old_msg('+fri_iid+')">old chats</button>';
										
										$('#chat_window').prepend(tep_msg);
									}else{
										// console.log('no new message');
									}
								}
								load_pre = false;
							}
							

						}
													
					}
				
					
				},
				error :function(err){
					// console.log(err);
				}

			});	
}
	// fst_msg_id = 10;

		function old_msg(fri_id) {
			$.ajax({
				url : 'old_chats.php',
				data : {
					cu_id : c_id,
					last_id : fri_id
				},
				type : 'post',
				dataType : 'json',
				success : function(res){
					// console.log(res);
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
							var tep_msg = '<button id="old_chats" onclick="old_msg('+fst_msg_id+');">old chats</button>';
							
							$('#chat_window').prepend(tep_msg);
						}else{
							// console.log('no message');
						}
						
													
					}
				},
				error :function(err){
					// console.log(err);
				}

			});	
		}
	
				function cansal_friend(cansal_id){


    			$.ajax({
				url : 'remove_frid.php',
				data : {
					
					fri_id : cansal_id
				
				},
				
				type : 'post',

				dataType : 'json',

				success : function(res){
				
					$(this).empty();
				
				},
				error :function(err){
					
					 console.log(err.responseText);
				
				}  			


                });
    			


}


			
	

	</script>

	<script type="text/javascript">
		

			var frie_id = <?=$cu_id?>;
			if (frie_id == 0) {

				$("#chat_person").css("display" , "none");
				$("#text_box").css("display" , "none");
				$("#chat_window").css("display" , "none");
				$('#mirror_error').css("display" , "inherit");
			}


	</script>
	
	<script type="text/javascript">
	function chating_id(frd_id,name){
		$("#chat_person").css("display" , "inline-flex");
				$("#text_box").css("display" , "inline-flex");
				$("#chat_window").css("display" , "inherit");
				$('#mirror_error').css("display" , "none");
      	$('#chat_window').html('');
		$('#our_name').html(name);
	   	c_id = frd_id;
	   	load_pre  = true;   
		document.getElementById("send_box").focus();
	  	get_new_messages();
    }
    
      
    //	document.getElementById('chat_window').scrollTop = (document.getElementById('new_mess_line').offsetTop)-(document.getElementById('chat_resend').offsetTop);
</script>

	<?php  include '../job_employer/header_script.php';  ?>

	<script type="text/javascript">

		

    // document.getElementById('chat_window').scrollTop = (document.getElementById('new_mess_line').offsetTop)-(document.getElementById('chat_resend').offsetTop);



    $(".fa-times").click(function(){

    	

    	th = $(this).parent();
    	th.remove();
    	        $("#chat_person").css("display" , "none");
				$("#text_box").css("display" , "none");
				$("#chat_window").css("display" , "none");
				$('#mirror_error').css("display" , "inherit");
    	


    });
</script>

  </body>

<!-- Mirrored from demo.themeregion.com/jobs-updated/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Sep 2017 09:35:11 GMT -->
</html>