
		<!-- BOF: Kline Line of Code -->
		<?php
		if(isset($_COOKIE['showOnlyOne'])){
		?>
		<style>
		.lightbox {
			display:none !important;
		}
		</style>
		<?php	
		} else { }
		?>

		<style>
		.lightbox {
			position:fixed;
			z-index:999;
			top:0;
			left:0;
			width:100%;
			height:100%;
			background:rgba(0, 0, 0, .8);
		}
		.lightbox_div {
			width:100%;
			height:100%;
		}
		#lightbox_content {
			max-width:600px;
			margin:0 auto;
			border: solid 4px #fff;
			border-radius:5px;
			margin-top:12%;
		}
		html {
			overflow:hidden;
		}
		</style>

		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans">
		<link rel="stylesheet" type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/instaport-popup/assets/css/animation.css">

		<?php 

			$popup_aniclose = get_option('popup_aniclose');
				if(!$popup_aniclose) { $popupaniclose = 'fadeOut'; }

			$popup_secclose = get_option('popup_secclose'); 
				if(!$popup_secclose) { $popup_secclose = 1; }
			$popup_secclose = $popup_secclose * 1000;

			$popupsec = get_option('popup_seconds');
				if(!$popupsec) { $popupsec = 1; }

			$popup_cookieexpiry = get_option('popup_cookieexpiry');
				if(!$popup_cookieexpiry) { $popup_cookieexpiry = 1;}

			$popup_active = get_option('popup_active');
			$license = get_option('of_options_atlk');
			
		?> 

		<script>
		function lightboxgone() {
			document.getElementById('lightbox').style.display='none';
		}
		function bodyscroll() {
			document.getElementById('html').style.overflowY='auto';
		}
		function parallaxscroll() {
			document.getElementById("lightbox_content").className = "animated <?php echo $popup_aniclose;?>";
			document.getElementById('html').style.overflowY='auto';
			setTimeout(lightboxgone, <?php echo $popup_secclose; ?>);
		}
		function lightboxcloseanimation() {
			document.getElementById("lightbox_content").className = "animated <?php echo $popup_aniclose;?>";
			setTimeout(lightboxgone, <?php echo $popup_secclose; ?>);
		}
		</script>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
		<script src="<?php echo WP_PLUGIN_URL; ?>/instaport-popup/assets/js/jquery.cookie.js"></script>

		<script type="text/javascript">                                         
		$(document).ready(function() {
		    if( $.cookie('showOnlyOne') ){
		        $('#lightbox').hide();
		        $('#lightbox').next().css("display","none");
		        bodyscroll();
		    } else {
		        $.cookie('showOnlyOne', 'showOnlyOne', { expires: <?php echo $popup_cookieexpiry; ?> });
			    <?php 

			    if(isset($_COOKIE['showOnlyOne'])){

			    } else {
			    	echo "$('#lightbox').show(); lightboxshow();";
			    }

			    ?>
		       
		    }
		});
		</script> 

		<script type="text/javascript">
		function lightboxshow() {
			var delayseconds = <?php echo $popupsec; ?>;
			setTimeout(function(){
			  document.getElementById('lightbox').style.display='inline';
			}, delayseconds * 1000);
		}
		</script>


		<!-- EOF: Kline Line of Code -->
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   

		<!-- Pop up starts here -->

		<div id="lightbox" class="lightbox" >

		<style>

		@font-face {

		    font-family: Adam;

		    src: url(<?php echo WP_PLUGIN_URL; ?>/instaport-popup/assets/font/adam.cg-pro.woff);

		}

		iframe {

			width:320px;

			height:180px;

			-webkit-box-shadow: 0px 0px 15px 1px rgba(0,0,0,0.75);

			-moz-box-shadow: 0px 0px 15px 1px rgba(0,0,0,0.75);

			box-shadow: 0px 0px 15px 1px rgba(0,0,0,0.75);

		}

		.bootform {

			border:1px solid #ddd !important;

			border-radius:4px;

			background-color:#fff;

			color:#333;

			transition:.05s border-color ease-in-out;

			height:34px !important;

			font-size:14px !important;

			line-height:1.42857143;

			padding-top:0px !important;

		}

		.bootsub {

			padding:6px 12px;

			margin-bottom:0;

			font-size:14px;

			font-weight:400;

			line-height:1.42857143;

			text-align:center;

			white-space:nowrap;

			vertical-align: middle;

			touch-action:manipulation;

			border:1px solid transparent !important;

			border-radius:4px;

			background-color:#fff;

			border-color:#ccc;

			color:#333;

			height:37px;

			margin-top:7px;

		}

		.bootsub:hover {

			color:#595959;

		}

		</style>



		   <div class="lightbox_div">



				<?php 



					$popup_header_color = get_option('popup_header_color');

					$popup_slogan_color = get_option('popup_slogan_color');

					$popup_action_code = get_option('popup_action_code');

					$popup_webform_id = get_option('popup_webform_id');

					$popup_s3dir =  "https://s3.amazonaws.com/socialvid-instaportfolio/instaport-popup/popup-images/";


					$popup_bg = $popup_s3dir."".get_option('popup_background');



					$popup_autoresponder = get_option('popup_autoresponder');



					$popup_form_action = "https://app.getresponse.com/add_contact_webform.html?u=".$popup_action_code;

					$popup_javascript = 'http://app.getresponse.com/view_webform.js?wid='.$popup_webform_id.'&mg_param1=1&u='.$popup_action_code;



					$popup_aw_action_code = get_option('popup_aw_actioncode');

					$popup_aw_list_id = get_option('popup_aw_listid');

					$popup_aw_redirect = get_option('popup_aw_redirect');



					$popup_gw_actioncode = get_option('popup_gw_actioncode');

					$popup_gw_webinarid = get_option('popup_gw_webinarid');


					$popup_is_isid = get_option('popup_is_isid');


					$popup_mc_code = get_option('popup_mc_code');

					$popup_mc_uid = get_option('popup_mc_uid');

					$popup_mc_id = get_option('popup_mc_id');

					$popup_sr_lid = get_option('popup_sr_lid');

					$popup_animation = get_option('popup_animation');
						if(!$popup_animation) { $popup_animation = 'Bounce'; }


				?>



		        <div id="lightbox_content" style="background:url('<?php echo $popup_bg;?>')repeat-y;" class="animated <?php echo $popup_animation; ?>">
					<a id="lightboxclose" class="popclose" onclick="parallaxscroll();" style="cursor:pointer;position:relative;top:-15px;"><img src="<?php echo WP_PLUGIN_URL; ?>/instaport-popup/assets/images/close_button.png" style="width:25px;height:25px;float:right;position:relative;top:0px;right:-15px;" id="popup-close"></a>

					<div style="text-align:center;position:relative;">

						<div style="width:100%;height:34px;"></div>

						<h1 style="color:#<?php echo $popup_header_color; ?>;font-family:Adam;text-shadow: 0px 0px 5px #000;font-size:36px;margin-top:10px;"><?php echo str_replace("\'","'", get_option('popup_header'));?></h1>

						<p style="color:#<?php echo $popup_slogan_color; ?>;font-size:13px;text-align:center;margin-top:-10px;font-family:Adam;text-shadow: 0px 0px 5px #000;"><?php echo str_replace("\'","'", get_option('popup_slogan'));?></p>

						<?php echo str_replace('\"','', get_option('popup_video_embed')); ?>

						

					</div>





					<?php if($popup_autoresponder == "aweber") { ?>



					<div style="margin-top:20px;margin-left:14.5%">



						<form method="post" action="https://www.aweber.com/scripts/addlead.pl">

							<input type="hidden" name="listname" value="<?php echo $popup_aw_list_id; ?>" />

							<input type="hidden" name="redirect" value="<?php echo $popup_aw_redirect;?>" />

							<input type="hidden" name="meta_adtracking" value="custom form" />

							<input type="hidden" name="meta_message" value="1" /> 

							<input type="hidden" name="meta_required" value="name,email" /> 

							<input type="hidden" name="meta_forward_vars" value="1" /> 

						    <input type="text" name="name" placeholder="Name" style="display:inline;" class="bootform" required>

						    <input type="text" name="email" placeholder="Email Address" style="display:inline;" class="bootform" required>

						  	<button type="submit" class="bootsub" style="position:relative;top:-4px;">Subscribe</button>

						</form>



					</div>



					<?php } elseif($popup_autoresponder == "getresponse") { ?>



					<div style="margin-top:20px;margin-left:14.5%">



						<form accept-charset="utf-8" action="<?php echo $popup_form_action; ?>">

						    <input type="text" name="name" placeholder="Name" style="display:inline;" class="bootform" required>

						    <input type="text" name="email" placeholder="Email Address" style="display:inline;" class="bootform" required>

						    <input type="hidden" name="webform_id" value="<?php echo $popup_webform_id; ?>" />

						  	<button type="submit" class="bootsub" style="position:relative;top:-4px;">Subscribe</button>

						</form>

						<script type="text/javascript" src="<?php echo $popup_javascript; ?>"></script>



					</div>



					<?php } elseif($popup_autoresponder == "gotowebinar") { ?>



					<div style="margin-top:20px;margin-left:3.5%">

						<form action="<?php echo $popup_gw_actioncode; ?>" method="POST">

							<input type="hidden" name="webinar" size="30" maxlength="30" value="<?php echo $popup_gw_webinarid; ?>">

							<input type="text" name="registrant.givenName" size="10" placeholder="First Name" style="display:inline;" class="bootform" required>

							<input type="text" name="registrant.surname" size="10" placeholder="Last Name" style="display:inline;" class="bootform" required>

							<input type="text" name="registrant.email" size="30" placeholder="Email" style="display:inline;" class="bootform" required>

						  	<button type="submit" class="bootsub" style="position:relative;top:-4px;">Register</button>

						</form>

					</div>



<!-- 						<form action="<?php //echo $popup_gw_actioncode; ?>" method="POST">

						<input name="WebinarKey" type="text" size="30" maxlength="30" value="<?php //echo $popup_gw_webinarid; ?>">

						<input name="registrant.givenNameLabel" type="text" size="30" maxlength="30">

						<input name="registrant.surnameLabel" type="text" size="30" maxlength="50">

						<input name="registrant.emailLabel" type="text" size="30" maxlength="50">



						<input type="hidden" name="Form" value="webinarRegistrationForm">

						<input type="hidden" name="ViewArchivedWebinar" value="false">

						<input type="hidden" name="registrant" value="">

						<input type="hidden" name="RegistrantTimeZoneKey" value="67">

						<input type="hidden" name="RegistrantTimeZoneKey2" value="67">

						<button type="submit" name="registration.submit.button" class="btn btn-default" style="position:relative;top:-4px;">Register</button>

						</form> -->



					<?php } elseif($popup_autoresponder == "infusionsoft") { ?>

						<div style="margin-top:20px;margin-left:14.5%">

							<form accept-charset="UTF-8" method="post" action="https://sgh.infusionsoft.com/AddForms/processFormSecure.jsp">

								<input type="hidden" id="infusion_xid" name="infusion_xid" value="<?php echo $popup_is_isid; ?>">

								<input type="hidden" id="infusion_type" name="infusion_type" value="CustomFormWeb">

							    <input type="text" name="Contact0FirstName" placeholder="First Name" style="display:inline;" class="bootform" required>

							    <input type="text" name="Contact0Email" placeholder="Email Address" style="display:inline;" class="bootform" required>

							  	<button type="submit" class="bootsub" style="position:relative;top:-4px;">Subscribe</button>

							</form>



						</div>

					<?php } elseif($popup_autoresponder == "mailchimp") { ?>

					<div style="margin-top:20px;margin-left:14.5%">

						<form action="http://<?php echo $popup_mc_code; ?>.list-manage.com/subscribe/post?u=<?php echo $popup_mc_uid; ?>&id=<?php echo $popup_mc_id; ?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">

						    <input type="text" name="FNAME" placeholder="First Name" style="display:inline;" id="mce-FNAME" class="bootform" required>

						    <input type="text" name="EMAIL" placeholder="Email Address" style="display:inline;" id="mce-EMAIL" class="bootform" required>

						  	<button type="submit" class="bootsub" name="subscribe" id="mc-embedded-subscribe" style="position:relative;top:-4px;">Subscribe</button>

						</form>

					</div>

					<?php } elseif($popup_autoresponder == "sendreach") { ?>

					<div style="margin-top:20px;margin-left:14.5%">

					<form action="https://register.sendreach.com/forms/?listid=<?php echo $popup_sr_lid; ?>" method="post">

						<input type="hidden" name="lid" value="<?php echo $popup_sr_lid; ?>">

					    <input type="text" data-field="name" data-required="1" data-validation="none" name="name" placeholder="Name" style="display:inline;" id="mce-FNAME" class="bootform" required>

					    <input type="text" data-field="email" data-required="1" data-validation="email" name="email" placeholder="Email Address" style="display:inline;" id="mce-EMAIL" class="bootform" required>

					  	<button type="submit" class="bootsub" name="subscribe" style="position:relative;top:-4px;">Subscribe</button>

					</form>

					</div>

					<?php } ?>
					

		      	</div>



		   </div>



		</div>

		<!-- Pop up ends here -->

		<script type="text/javascript">
			// if(!readCookie('visitedPreviously')){
			// 	document.getElementById('lightbox');
			// 	createCookie('visitedPreviously', 'visitedPreviously', 1);   // 365 days persistence
			// }

			//eraseCookie('visitedPreviously');  // FOR TEST PURPOSES
			

		</script>