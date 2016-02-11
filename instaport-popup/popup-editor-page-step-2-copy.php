<?php 
	// $check_pop = get_option('popup_active'); 
	// if($check_pop != 1) { 
	// 	echo '<meta http-equiv="refresh" content="0;url=themes.php?page=instaport_pop">'; 
	// 	} else { 
	// 		echo ''; 
	// 	} 
	$update = $_GET['update'];

	$image = $_GET['image'];
	$dir = "https://s3.amazonaws.com/socialvid-instaportfolio/instaport-popup/popup-images/";

	$pu_header = get_option('popup_header');
	$pu_headerc = get_option('popup_header_color');
	$pu_slogan = get_option('popup_slogan');
	$pu_sloganc = get_option('popup_slogan_color');
	$pu_video_embed = get_option('popup_video_embed');

?>
	<!-- Latest compiled and minified CSS -->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

	<link rel="stylesheet" href="<?php echo plugin_dir_url( __FILE__ ); ?>assets/css/colpick.css">

	<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="<?php echo plugin_dir_url( __FILE__ ); ?>assets/js/html2canvas.js"></script>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

	<script type="text/javascript" src="<?php echo plugin_dir_url( __FILE__ ); ?>assets/js/colpick.js"></script>

	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	

	<style>

	@font-face {

	    font-family: Adam;

	    src: url(<?php echo plugin_dir_url( __FILE__ ); ?>/assets/font/adam.cg-pro.woff);

	}



	body {

		background:#F1F1F1;

	}

	#picker {

		margin:0;

		padding:0;

		border:0;

		border-right:40px solid green;

		line-height:20px;

	}

	iframe {

		width:320px;

		height:180px;

		-webkit-box-shadow: 0px 0px 15px 1px rgba(0,0,0,0.75);

		-moz-box-shadow: 0px 0px 15px 1px rgba(0,0,0,0.75);

		box-shadow: 0px 0px 15px 1px rgba(0,0,0,0.75);

	}

	</style>



	<div class="wrap">





				<div class="col-md-12">



				<!-- This is where the Controls Go -->

				<div class="row">

					<div class="col-md-7">

					<h2>Popup Preview</h2>

						<div class="col-md-6 fixme">

						<a href="themes.php?page=instaport_pop"type="button" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Back to Popup Templates</a>

		    				<div id="xda">

			    				<div style="background-image:url('<?php echo $dir."".$image; ?>');background-repeat:no-repeat;width:600px;height:400px;border-radius:5px;">

			    					<div class="col-md-12" style="width:100%;height:50px;"></div>

			    					<h1 id="popup_title_2" style="color:#<?php if(!$update) echo 'fff'; else echo $pu_headerc; ?>;text-align:center;font-family:Adam;text-shadow: 0px 0px 5px #000;"><?php if(!$update) echo 'Subscribe Now!'; else echo $pu_header; ?></h1>


			    					<p id="popup_description_2" style="color:#<?php if(!$update) echo 'fff'; else echo $pu_sloganc; ?>;text-align:center;margin-top:-10px;font-family:Adam;text-shadow: 0px 0px 5px #000;"><?php if(!$update) echo 'Short Slogan of our Site'; else echo $pu_slogan; ?></p>



			    					<div style="color:#fff;width:320px;height:180px;margin:0 auto;">

			    						<div id="popup_video_embed_2">

			    							<iframe src="https://player.vimeo.com/video/61797903" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

			    						</div>

			    					</div>



<!-- 			    					<div style="width:320px;height:180px;margin:0 auto;">

			    						<div class="data" id="data"></div>

			    					</div> -->



			    					<form class="form-inline col-md-offset-1 aweber box" style="margin-top:35px;">

			    					  <div class="form-group">

			    					    <label class="sr-only" for="exampleInputEmail3">Email address</label>

			    					    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter Email">

			    					    <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Enter Name">

			    					  </div>

			    					  <input type="submit" class="btn btn-default" id="popup_submitval_2" value="Subscribe">

			    					</form>



			    					<form class="form-inline col-md-offset-1 getresponse box" style="margin-top:35px;">

			    					  <div class="form-group">

			    					    <label class="sr-only" for="exampleInputEmail3">Email address</label>

			    					    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter Email">

			    					    <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Enter Name">

			    					  </div>

			    					  <input type="submit" class="btn btn-default" id="popup_submitval_2" value="Subscribe">

			    					</form>



			    					<form class="form-inline col-md-offset-1 gotowebinar box" style="margin-top:35px;">

			    					  <div class="form-group">

			    					    <input type="text" class="form-control" placeholder="First Name" style="width:120px;">

			    					    <input type="text" class="form-control" placeholder="Last name" style="width:120px;">

			    					    <input type="email" class="form-control" placeholder="Email" style="width:150px;">

			    					  </div>

			    					  <input type="submit" class="btn btn-default" id="popup_submitval_2" value="Subscribe">

			    					</form>

			    					<form class="form-inline col-md-offset-1 infusionsoft box" style="margin-top:35px;">

			    					  <div class="form-group">

			    					    <label class="sr-only" for="exampleInputEmail3">Email address</label>

			    					    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="First Name">

			    					    <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Email Address">

			    					  </div>

			    					  <input type="submit" class="btn btn-default" id="popup_submitval_2" value="Subscribe">

			    					</form>

			    					<form class="form-inline col-md-offset-1 mailchimp box" style="margin-top:35px;">

			    					  <div class="form-group">

			    					    <label class="sr-only" for="exampleInputEmail3">Email address</label>

			    					    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="First Name">

			    					    <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Email Address">

			    					  </div>

			    					  <input type="submit" class="btn btn-default" id="popup_submitval_2" value="Subscribe">

			    					</form>

			    					<form class="form-inline col-md-offset-1 sendreach box" style="margin-top:35px;">

			    					  <div class="form-group">

			    					    <label class="sr-only" for="exampleInputEmail3">Email address</label>

			    					    <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Name">

			    					    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email Address">

			    					  </div>

			    					  <input type="submit" class="btn btn-default" id="popup_submitval_2" value="Subscribe">

			    					</form>



			    				</div>

		    				</div>

		    			</div>

		    			<div class="col-md-6" style="display:none;">

							<canvas id="h2bdivcanvas" width="600" height="400"></canvas>

		    			</div>

	    			</div>



	    			<form name="popup_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">

	    			<input type="hidden" name="popup_hidden" value="Y">

	    			<input type="hidden" name="popup_background" value="<?php echo $_GET['image']; ?>">



					<div class="col-md-4" style="margin-top:15px;">

					<h2>Popup Controls</h2>

						<div class="form-group">

						  <label for="Popup Title">Header</label>

							<input type="text" id="popup_title" name="popup_header" class="form-control" placeholder="Subscribe Now!" value="<?php if(!$update) echo 'Subscribe Now!'; else echo $pu_header; ?>">

						</div>

							

						<div class="form-group">

							<label for="Popup Title">Title Text Color</label>

							<div class="form-inline">

							<label>#</label>

								<input type="text" id="picker" name="popup_header_color" class="form-control" placeholder="ffffff" value="<?php if(!$update) echo 'ffffff'; else echo $pu_headerc; ?>">

							</div>

						</div>



						<div class="form-group">

						  <label for="Popup Description">Slogan</label>

							<textarea id="popup_description" class="form-control" name="popup_slogan" placeholder="Short Slogan of our Site"><?php if(!$update) echo 'Short Slogan of our Site'; else echo $pu_slogan; ?></textarea>

						</div>



						<div class="form-group">

							<label for="Popup Title">Slogan Text Color</label>

							<div class="form-inline">

							<label>#</label>

								<input type="text" id="picker_2" name="popup_slogan_color" class="form-control" placeholder="ffffff" value="<?php if(!$update) echo 'ffffff'; else echo $pu_sloganc; ?>">

							</div>

						</div>



<!-- 						<div class="form-group">

						  <label for="Popup Title">Popup Youtube Link</label>

							<input type="text" id="url" class="form-control" oninput="search(this.value)" />

						</div> -->



						<div class="form-group">

						  <label for="Popup Title">Video Embeded Code</label>

							<textarea id="popup_video_embed" class="form-control" name="popup_video_embed" rows="5">
							<?php if(!$update) { ?>
							<iframe src="https://player.vimeo.com/video/61797903" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							<?php } else {  echo str_replace('\"','', get_option('popup_video_embed')); } ?>
							</textarea>

						</div>	



						<div class="form-group">

						  <label for="Popup Title">Autoresponder</label>

							

							<select class="form-control" name="popup_autoresponder">

							  <option>-Select Autoresponder-</option>

							<?php
							$pop_autores_code_select = get_option('popup_autoresponder');
							$pop_autores = array("aweber", "getresponse", "gotowebinar", "infusionsoft", "mailchimp", "sendreach");

							foreach($pop_autores as $pop_autoress) {
								$pop_autores_code = str_replace(' ', '', $pop_autoress);
								$pop_autores_name = ucfirst($pop_autoress);

								?>

	                    			<option value="<?php echo $pop_autores_code; ?>" <?php if($pop_autores_code == $pop_autores_code_select) { echo 'selected'; } else { ''; } ?>><?php echo $pop_autores_name; ?></option>

							  <?php } ?>

							</select>

						</div>



						<div class="aweber box">



							<div class="form-group">

							  	<label for="Title">Action URL</label>

								<input type="text" id="disabledInput" class="form-control" value="https://www.aweber.com/scripts/addlead.pl" disabled>

								<input type="hidden" name="popup_aw_actioncode" class="form-control" value="https://www.aweber.com/scripts/addlead.pl">

								<code>Default Action URL</code>

							</div>

							

							<div class="form-group">

							  	<label for="Title">Unique List ID</label>

								<input type="text" name="popup_aw_listid" class="form-control" value="<?php echo get_option('popup_aw_listid')?>">

								<p class="help-block">Copy and Paste the <mark> UNIQUE LIST ID </mark> from your form</p>

							</div>



							<div class="form-group">

							  	<label for="Title">Redirect Page</label>

								<input type="text" name="popup_aw_redirect" class="form-control" placeholder="http://www.example.com/thankyou.htm" value="<?php echo get_option('popup_aw_redirect')?>">

								<code>http://www.example.com/thankyou.htm</code>

							</div>



						</div>



						<div class="getresponse box">



							<div class="form-group">

							  	<label for="Title">Action Code</label>

								<input type="text" name="popup_gr_actioncode" class="form-control" value="<?php echo get_option('popup_gr_actioncode')?>">

								<p class="help-block">Copy and Paste the <mark>code</mark> from your form</p>

								<code>https://app.autoresponder.com/add_contact_webform.html?u=BcPo</code>

							</div>

							

							<div class="form-group">

							  	<label for="Title">Webform ID</label>

								<input type="text" name="popup_gr_webformid" class="form-control" placeholder="13464305" value="<?php echo get_option('popup_gr_webformid')?>">

								<p class="help-block">Copy and Paste the <mark>value</mark> from your form</p>

								<code>&lt;input type="hidden" name="webform_id" value="13464305" /&gt;</code>

							</div>

							

						</div>



						<div class="gotowebinar box">



							<div class="form-group">

							  	<label for="Title">Action URL</label>

								<input type="text" id="disabledInput" class="form-control" value="https://attendee.gotowebinar.com/registration.tmpl" disabled>

								<input type="hidden" name="popup_gw_actioncode" class="form-control" value="https://attendee.gotowebinar.com/registration.tmpl">

								<code>Default Action URL</code>

							</div>



							<div class="form-group">

							  	<label for="Title">Webinar Key ID</label>

								<input type="text" name="popup_gw_webinarid" class="form-control" value="<?php echo get_option('popup_gw_webinarid')?>">

								<p class="help-block">Copy and Paste the set of numbers <code> 1234567890123456789 </code> from your url</p>

								<code>https://attendee.gotowebinar.com/register/1234567890123456789</code>

							</div>



							

						</div>

						<div class="infusionsoft box">



							<div class="form-group">

							  	<label for="Title">InfusionSoft ID</label>

								<input type="text" name="popup_is_isid" class="form-control" value="<?php echo get_option('popup_is_isid')?>">

								<p class="help-block">Your InfusionSoft ID</p>

								<code>Example: d4a96f14049d25d703ef44544d5a0007</code>

							</div>


						</div>

						<div class="mailchimp box">

							<div class="form-group">

							  	<label for="Title">MailChimp Code:</label>

								<input type="text" name="popup_mc_code" class="form-control" value="<?php echo get_option('popup_mc_code')?>" placehodler="mywebsite.us1">

								<p class="help-block">The code can be seen in action code Example: "mywebsite.us1"</p>

								<code>Example Code: http://mywebsite.us1.list-manage.com/subscribe/post?u=ID_HERE&id=LIST_ID_HERE</code>

							</div>

							
							<div class="form-group">

							  	<label for="Title">MailChimp ID</label>

								<input type="text" name="popup_mc_uid" class="form-control" value="<?php echo get_option('popup_mc_uid')?>" placeholder="cb5166d7c10e243eaf93cd7f5">

								<p class="help-block">The code can be seen in action code Example: "cb5166d7c10e243eaf93cd7f5"</p>

								<code>Example Code: http://MAILCHIMP_CODE_HERE.list-manage.com/subscribe/post?u=cb5166d7c10e243eaf93cd7f5&id=LIST_ID_HERE</code>

							</div>

							<div class="form-group">

							  	<label for="Title">MailChimp List ID</label>

								<input type="text" name="popup_mc_id" class="form-control" value="<?php echo get_option('popup_mc_id')?>" placeholder="c17abc837c">

								<p class="help-block">The code can be seen in action code Example: "c17abc837c"</p>

								<code>Example Code: http://MAILCHIMP_CODE_HERE.list-manage.com/subscribe/post?u=ID_HERE&id=c17abc837c</code>

							</div>

							

						</div>

						<div class="sendreach box">

							<div class="form-group">

							  	<label for="Title">SendReach List ID</label>

								<input type="text" name="popup_sr_lid" class="form-control" value="<?php echo get_option('popup_sr_lid')?>">

								<p class="help-block">Example List ID</p>

								<code>12345</code>

							</div>


						</div>



							<!--  Aweber = (Key: Akl5dXmz8cCK8ZD8ad2i5DZN Secret: bfz6z1UGA0cq06drv3FyiVr8nJQ7DDUSXi5SiLaI) -->



<!-- 						<div class="form-group">

							<textarea id="popup_autoresponder_form" class="form-control" name="popup_autoresponder_form"></textarea>

						</div> -->



<!-- 						<div class="form-group">

						  <label for="Popup Title">Popup Submit Name</label>

							<input type="text" id="popup_submitval" class="form-control" placeholder="Subscribe" value="Subscribe">

						</div>

-->


						<!-- <button id="h2bcanvas">Preview</button> -->



						<div class="form-group">

							<input type="submit" class="form-control btn btn-success" value="Save Popup Form" >

						</div>



						<?php

						if($_POST['popup_hidden'] == 'Y') {

						    //Form data sent

						    $popup_background = $_POST['popup_background'];

						    update_option('popup_background', $popup_background);

						     

						    $popup_header = $_POST['popup_header'];

						    update_option('popup_header', $popup_header);

						     

						    $popup_header_color = $_POST['popup_header_color'];

						    update_option('popup_header_color', $popup_header_color);

						     

						    $popup_slogan = $_POST['popup_slogan'];

						    update_option('popup_slogan', $popup_slogan);

						

						    $popup_slogan_color = $_POST['popup_slogan_color'];

						    update_option('popup_slogan_color', $popup_slogan_color);

						

						    $popup_video_embed = $_POST['popup_video_embed'];

						    update_option('popup_video_embed', $popup_video_embed);



						    $popup_autoresponder = $_POST['popup_autoresponder'];

						    update_option('popup_autoresponder', $popup_autoresponder);



						    $popup_gr_actioncode = $_POST['popup_gr_actioncode'];

						    update_option('popup_gr_actioncode', $popup_gr_actioncode);



						    $popup_gr_webformid = $_POST['popup_gr_webformid'];

						    update_option('popup_gr_webformid', $popup_gr_webformid);



						    $popup_aw_actioncode = $_POST['popup_aw_actioncode'];

						    update_option('popup_aw_actioncode', $popup_aw_actioncode);



						    $popup_aw_listid = $_POST['popup_aw_listid'];

						    update_option('popup_aw_listid', $popup_aw_listid);



						    $popup_aw_redirect = $_POST['popup_aw_redirect'];

						    update_option('popup_aw_redirect', $popup_aw_redirect);



						    $popup_gw_actioncode = $_POST['popup_gw_actioncode'];

						    update_option('popup_gw_actioncode', $popup_gw_actioncode);



						    $popup_gw_webinarid = $_POST['popup_gw_webinarid'];

						    update_option('popup_gw_webinarid', $popup_gw_webinarid);


						    $popup_is_isid = $_POST['popup_is_isid'];

						    update_option('popup_is_isid', $popup_is_isid);


						    $popup_mc_code = $_POST['popup_mc_code'];

						    update_option('popup_mc_code', $popup_mc_code);

						    $popup_mc_uid = $_POST['popup_mc_uid'];

						    update_option('popup_mc_uid', $popup_mc_uid);

						    $popup_mc_id = $_POST['popup_mc_id'];

						    update_option('popup_mc_id', $popup_mc_id);

						    $popup_sr_lid = $_POST['popup_sr_lid'];

						    update_option('popup_sr_lid', $popup_sr_lid);

						?>



						    <div class="updated"><p><strong><?php _e('Options saved.' ); ?></strong></p></div>
							<meta http-equiv="refresh" content="0;url=<?php echo get_site_url(); ?>/wp-admin/themes.php?page=instaport_pop&step=2&image=<?php echo $image; ?>&update=1">


						<?php } ?>



					</div>

					</div>



				</div>



			</div>



	<script type="text/javascript">



	$('#picker').colpick({

		layout:'hex',

		submit:0,

		colorScheme:'dark',

		onChange:function(hsb,hex,rgb,el,bySetColor) {

			$(el).css('border-color','#'+hex);

	    	$("#popup_title_2").css("color", '#' + hex);

			// Fill the text box just if the color was set using the picker, and not the colpickSetColor function.

			if(!bySetColor) $(el).val(hex);

		}

	}).keyup(function(){

		$(this).colpickSetColor(this.value);

	});



	$('#picker_2').colpick({

		layout:'hex',

		submit:0,

		colorScheme:'dark',

		onChange:function(hsb,hex,rgb,elz,bySetColor) {

			$(elz).css('border-color','#'+hex);

	    	$("#popup_description_2").css("color", '#' + hex);

			// Fill the text box just if the color was set using the picker, and not the colpickSetColor function.

			if(!bySetColor) $(elz).val(hex);

		}

	}).keyup(function(){

		$(this).colpickSetColor(this.value);

	});



	$(document).ready(function(){

	    $("select").change(function(){

	        $( "select option:selected").each(function(){

	            if($(this).attr("value")=="aweber"){

	                $(".box").not(".aweber").hide();

	                $(".aweber").show();

	            }

	            else if($(this).attr("value")=="getresponse"){

	                $(".box").not(".getresponse").hide();

	                $(".getresponse").show();

	            }

	            else if($(this).attr("value")=="gotowebinar"){

	                $(".box").not(".gotowebinar").hide();

	                $(".gotowebinar").show();

	            }

	            else if($(this).attr("value")=="infusionsoft"){

	                $(".box").not(".infusionsoft").hide();

	                $(".infusionsoft").show();

	            }

	            else if($(this).attr("value")=="mailchimp"){

	                $(".box").not(".mailchimp").hide();

	                $(".mailchimp").show();

	            }

	            else if($(this).attr("value")=="sendreach"){

	                $(".box").not(".sendreach").hide();

	                $(".sendreach").show();

	            }

	            else{

	                $(".box").hide();

	            }

	        });

	    }).change();

	});



	var fixmeTop = $('.fixme').offset().top;

	$(window).scroll(function() {

	    var currentScroll = $(window).scrollTop();

	    if (currentScroll >= fixmeTop) {

	        $('.fixme').css({

	            position: 'fixed',

	            top: '50px',

	            left: '150'

	        });

	    } else {

	        $('.fixme').css({

	            position: 'static'

	        });

	    }

	});

	</script>



	<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js" charset="UTF-8"></script>

	<script type="text/javascript" src="<?php echo plugin_dir_url( __FILE__ ); ?>/assets/js/my-jquery.js" charset="UTF-8"></script>