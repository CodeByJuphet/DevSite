	<?php



		$license = get_option('of_options_atlk');
		$dir = "https://s3.amazonaws.com/socialvid-instaportfolio/instaport-popup/popup-thumb/";



		// $reqsec = get_option('popup_security'); 

		// $usrsec = get_option('popup_secret_key'); 



		// if($reqsec != $usrsec) {

		// 	echo '<meta http-equiv="refresh" content="0;url=themes.php?page=instaport_pop">';

		// } else { 



	?>

	<!-- Latest compiled and minified CSS -->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

	<link rel="stylesheet" href="<?php echo plugin_dir_url( __FILE__ ); ?>assets/css/colpick.css">

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

	iframe {

		width:320px;

		height:180px;

		-webkit-box-shadow: 0px 0px 15px 1px rgba(0,0,0,0.75);

		-moz-box-shadow: 0px 0px 15px 1px rgba(0,0,0,0.75);

		box-shadow: 0px 0px 15px 1px rgba(0,0,0,0.75);

	}

	label {

		color: transparent;

		background: url('http://rainycafe.com/img/sprite.png') -40px 0  no-repeat;

		border-radius: 14px;

		box-shadow: 0 1px 2px #888, 0 0px 3px #777, inset 0 -1px 5px #333;

		display: block;

		position: relative;

		text-indent: 100%;

		width: 65px; height: 29px;

		-webkit-transition: background-position .3s ease;

		-moz-transition: background-position .3s ease;

		cursor: pointer;

		font-size: .01em;

		float: left;

	}



	input[type=checkbox] {

		display: none;

	}



	label span {

		background: url('http://rainycafe.com/img/sprite.png') -1px -30px no-repeat;

		border: 0px solid transparent;

		border-radius: 14px;

		box-shadow: 0 1px 3px #000, 0 2px 13px #000;

		content: "";

		display: block;

		position: absolute; top: 0; left: -1px;

		width: 28px; height: 28px;

		-webkit-transition: left .3s ease;

		-moz-transition: left .3s ease;

	}



	input[type=checkbox]:checked + label {

		background-position: 0 0;

	}



	input[type=checkbox]:checked + label span {

		left: 40px;

	}

	</style>



	<div class="wrap">



	<?php

/*	if ($license) {

	?>

	<div class="col-md-12">

	<p style="font-family:Adam;font-size:18px;font-weight:bold;" class="text-center">Sorry, but you don't have an access to this feature.</p>

	</div>

	<?php

	} else {*/

	?>



		<div class="col-md-12">





			<?php



				$popup_header_color = get_option('popup_header_color');

				$popup_slogan_color = get_option('popup_slogan_color');

				$popup_action_code = get_option('popup_action_code');

				$popup_webform_id = get_option('popup_webform_id');

				$popup_bg = get_option('popup_background');



				$popup_autoresponder = get_option('popup_autoresponder');



				// $url = get_site_url()."/";

				// $key = rtrim(strtr(base64_encode($url), '+/', '-_'), '=');

				$key = get_option('popup_secret_key');



				$popup_form_action = "https://app.getresponse.com/add_contact_webform.html?u=".$popup_action_code;

				$popup_javascript = 'http://app.getresponse.com/view_webform.js?wid='.$popup_webform_id.'&mg_param1=1&u='.$popup_action_code;



				$popup_aw_action_code = get_option('popup_aw_actioncode');

				$popup_aw_list_id = get_option('popup_aw_listid');

				$popup_aw_redirect = get_option('popup_aw_redirect');



				$popup_gw_actioncode = get_option('popup_gw_actioncode');

				$popup_gw_webinarid = get_option('popup_gw_webinarid');



			?>



			<div class="row">

				<div class="col-md-7">

					<h2>Current Instafolio Popup</h2>


					<div class="col-md-6 fixme">

	    				<div id="xda">

		    				<div style="background-image:url('<?php echo $dir."".$popup_bg; ?>');background-repeat:no-repeat;width:600px;height:400px;border-radius:5px;">

		    					<div class="col-md-12" style="width:100%;height:50px;"></div>

		    					<h1 id="popup_title_2" style="color:#<?php echo $popup_header_color; ?>;text-align:center;font-family:Adam;text-shadow: 0px 0px 5px #000;"><?php echo get_option('popup_header'); ?></h1>

		    					<p id="popup_description_2" style="color:#<?php echo $popup_slogan_color; ?>;text-align:center;margin-top:-10px;font-family:Adam;text-shadow: 0px 0px 5px #000;"><?php echo get_option('popup_slogan'); ?></p>



		    					<div style="color:#fff;width:320px;height:180px;margin:0 auto;">

		    						<div id="popup_video_embed_2">

		    							<iframe src="https://player.vimeo.com/video/61797903" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

		    						</div>

		    					</div>



		    					<form class="form-inline col-md-offset-1 aweber box" style="margin-top:35px;<?php if($popup_autoresponder == "aweber") { echo ""; } else { echo "display:none"; } ?>">

		    					  <div class="form-group">

		    					    <label class="sr-only" for="exampleInputEmail3">Email address</label>

		    					    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter Email">

		    					    <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Enter Name">

		    					  </div>

		    					  <input type="submit" class="btn btn-default" id="popup_submitval_2" value="Subscribe">

		    					</form>



		    					<form class="form-inline col-md-offset-1 getresponse box" style="margin-top:35px;<?php if($popup_autoresponder == 'getresponse') { echo ""; } else { echo "display:none"; }?>">

		    					  <div class="form-group">

		    					    <label class="sr-only" for="exampleInputEmail3">Email address</label>

		    					    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter Email">

		    					    <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Enter Name">

		    					  </div>

		    					  <input type="submit" class="btn btn-default" id="popup_submitval_2" value="Subscribe">

		    					</form>



		    					<form class="form-inline col-md-offset-1 gotowebinar box" style="margin-top:35px;<?php if($popup_autoresponder == 'gotowebinar') { echo ""; } else { echo "display:none"; }?>">

		    					  <div class="form-group">

		    					    <input type="text" class="form-control" placeholder="First Name" style="width:120px;">

		    					    <input type="text" class="form-control" placeholder="Last name" style="width:120px;">

		    					    <input type="email" class="form-control" placeholder="Email" style="width:150px;">

		    					  </div>

		    					  <input type="submit" class="btn btn-default" id="popup_submitval_2" value="Subscribe">

		    					</form>

		    					<form class="form-inline col-md-offset-1 infusionsoft box" style="margin-top:35px;<?php if($popup_autoresponder == 'infusionsoft') { echo ""; } else { echo "display:none"; }?>">">

		    					  <div class="form-group">

		    					    <label class="sr-only" for="exampleInputEmail3">Email address</label>

		    					    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="First Name">

		    					    <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Email Address">

		    					  </div>

		    					  <input type="submit" class="btn btn-default" id="popup_submitval_2" value="Subscribe">

		    					</form>

		    					<form class="form-inline col-md-offset-1 mailchimp box" style="margin-top:35px;<?php if($popup_autoresponder == 'mailchimp') { echo ""; } else { echo "display:none"; }?>">">

		    					  <div class="form-group">

		    					    <label class="sr-only" for="exampleInputEmail3">Email address</label>

		    					    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="First Name">

		    					    <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Email Address">

		    					  </div>

		    					  <input type="submit" class="btn btn-default" id="popup_submitval_2" value="Subscribe">

		    					</form>

		    					<form class="form-inline col-md-offset-1 sendreach box" style="margin-top:35px;<?php if($popup_autoresponder == 'sendreach') { echo ""; } else { echo "display:none"; }?>">">

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

	    				<a href="http://socialvid.instaportfolio.com/wp-admin/themes.php?page=instaport_pop&step=2&image=<?php echo $popup_bg; ?>&update=1" type="button" class="btn btn-primary" style="width:100%;margin-top:22px;margin-left:15px;"><i class="fa fa-pencil"></i> Edit Current Popup Template</a>


				</div>

				<div class="col-md-4" style="margin-top:57px;">

				<form name="popup_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">

					<div class="form-group">

						<p style="font-family:Adam;font-size:18px;font-weight:bold;">General Controls</p>

					</div>





					<div class="form-group">

						<p style="font-family:Adam;font-size:14px;font-weight:bold;">Popup Status:

						<?php $popactive = get_option('popup_active'); $popoption = ($popactive == 1 ? 'checked' : ''); ?></p>

		    			<input type="hidden" name="popup_hidden" value="Y">

		    			<input type="hidden" name="popup_active_now" value="0">

		    			<input type="hidden" name="popup_api_key" value="<?php echo $key; ?>">



						<input id="toggle" type="checkbox" value="1" name="popup_active" <?php echo $popoption;?> >

						<label for="toggle"><span>Power</span></label>

					</div>



					<div class="form-group">

					<br/><br/>

					  <p style="font-family:Adam;font-size:14px;font-weight:bold;">Seconds until Popup Shows:</p>

						<input type="text" class="form-control" placeholder="2" name="popup_seconds" value="<?php echo get_option('popup_seconds')?>">

					</div>



					<?php $popanim_open_select = get_option('popup_animation'); ?>



					<div class="form-group">

					<p style="font-family:Adam;font-size:14px;font-weight:bold;">Popup Open Animation:</p>

						<select name="popup_animation" id="animation" class="form-control" style="text-transform:capitalize;">

	                    <option value="">Select Animation</option>



                    <?php

                    $popanims  = array(

								"bounce",

								"bounce In",

								"bounce In Up",

								"bounce In Down",

								"bounce In Left",

								"bounce In Right",

								"fade In",

								"fade In Up",

								"fade In Down",

								"fade In Left",

								"fade In Right",

								"fade In Up Big",

								"fade In Down Big",

								"fade In Left Big",

								"fade In Right Big",

								"flash",

								"flip",

								"flip In X",

								"flip In Y",

								"light Speed In",

								"pulse",

								"rotate In",

								"rotate In Up Left",

								"rotate In Down Left",

								"rotate In Up Righ",

								"rotate In Down Right",

								"roll In",

								"shake",

								"swing",

								"tada",

								"wiggle",

								"wobble");

                    foreach($popanims as $popupanim) {

                    	$pop_anim_code = str_replace(' ', '', $popupanim);

                    	$pop_anim_name = ucfirst($popupanim);

                    ?>

	                    <option value="<?php echo $pop_anim_code; ?>" <?php if($pop_anim_code == $popanim_open_select) { echo 'selected'; } else { ''; } ?>><?php echo $pop_anim_name; ?></option>

	

                    <?php

                    }

                    ?>

	                </select>

					</div>



					<div class="form-group" style="display:none;">

					  <p style="font-family:Adam;font-size:14px;font-weight:bold;">Seconds after close button click:</p>

						<input type="text" class="form-control" placeholder="2" name="popup_secclose" value="1">

					</div>



					<?php $popanim_close_select = get_option('popup_aniclose'); ?>

					<div class="form-group">

					<p style="font-family:Adam;font-size:14px;font-weight:bold;">Popup Close Animation:</p>

						<select name="popup_aniclose" id="animation" class="form-control">

	                    <option value="">Select Animation</option>



                    <?php

                    $popanims_close  = array(

								"bounce Out",

								"bounce Out Up",

								"bounce Out Down",

								"bounce Out Left",

								"bounce Out Right",

								"fade Out",

								"fade Out Up",

								"fade Out Down",

								"fade Out Left",

								"fade Out Right",

								"fade Out Up Big",

								"fade Out Down Big",

								"fade Out Left Big",

								"fade Out Right Big",

								"flip Out X",

								"flip Out Y",

								"hinge",

								"light Speed Out",

								"rotate Out",

								"rotate Out Up Left",

								"rotate Out Down Left",

								"rotate Out Up Right",

								"rotate Out Down Right",

								"roll Out");

                    foreach($popanims_close as $popupanim_close) {

                    	$popc_anim_code = str_replace(' ', '', $popupanim_close);

                    	$popc_anim_name = ucfirst($popupanim_close);

                    ?>

	                    <option value="<?php echo $popc_anim_code; ?>" <?php if($popc_anim_code == $popanim_close_select) { echo 'selected'; } else { ''; } ?>><?php echo $popc_anim_name; ?></option>

	

                    <?php

                    }

                    ?>

	                </select>

					</div>



					<div class="form-group">



					  <p style="font-family:Adam;font-size:14px;font-weight:bold;">Day(s) before showing the popup again:</p>

						<input type="text" class="form-control" placeholder="Default: 1 Day" name="popup_cookieexpiry" value="<?php echo get_option('popup_cookieexpiry')?>">

					</div>



					<div class="form-group">

						<input type="submit" class="form-control btn btn-success" value="Save Popup Settings" class="save_popup_form">

					</div>


				</form>

				<?php 





				if($_POST['popup_hidden'] == 'Y') {



				    //Form data sent

				    $popup_active = $_POST['popup_active'];

					if(!$popup_active) {

				    	$popup_active = 0;

					}

				    update_option('popup_active', $popup_active);



				    $popup_seconds = $_POST['popup_seconds'];

				    update_option('popup_seconds', $popup_seconds);



				    $popup_animation = $_POST['popup_animation'];

				    update_option('popup_animation', $popup_animation);



				    $popup_aniclose = $_POST['popup_aniclose'];

				    update_option('popup_aniclose', $popup_aniclose);



				    $popup_secclose = $_POST['popup_secclose'];

				    update_option('popup_secclose', $popup_secclose);



				    $popup_api_key = $_POST['popup_api_key'];

				    update_option('popup_api_key', $popup_api_key);



				    $popup_active_now = $_POST['popup_active_now'];

				    update_option('popup_active_now', $popup_active_now);



				    $popup_cookieexpiry = $_POST['popup_cookieexpiry'];

				    if(!$popup_cookieexpiry) {
				    	$popup_cookieexpiry = 1;
				    }

				    update_option('popup_cookieexpiry', $popup_cookieexpiry);



				?>

				<div class="updated"><p><strong><?php _e('Saving...' ); ?></strong></p></div>

				<meta http-equiv="refresh" content="0">

				<?php } ?>



				</div>

			</div>



			



			<h3>Choose a Popup Template</h3>





			<?php 

			 

			if ($license == 0) {

				$limit = 5;

			} elseif ($license == 1) {

				$limit = 4;

			} elseif ($license == 2) {

				$limit = 28;

			}

			if( $limit == 5){

				$files1 = array("temp (22).jpg", "temp (23).jpg", "temp (24).jpg", "temp (25).jpg","temp (26).jpg");
				
				foreach ($files1 as $image) {

					echo "<div class='col-md-2'>";

					echo "<a href='themes.php?page=instaport_pop&step=2&image=".$image."'><img src='".$dir."".$image."' class='img-thumbnail' style='width:100%:;margin:15px;'/></a>";

					echo "</div>";

				}

			} elseif ( $limit == 10 ) {


				$files1 = array("temp (22).jpg", "temp (23).jpg", "temp (24).jpg", "temp (25).jpg","temp (26).jpg");



				foreach ($files1 as $image) {

					echo "<div class='col-md-2'>";

					echo "<a href='themes.php?page=instaport_pop&step=2&image=".$image."'><img src='".$dir."".$image."' class='img-thumbnail' style='width:100%:;margin:15px;'/></a>";

					echo "</div>";

				}

				

			} elseif ($limit == 28) {

			


				// $files1 = array_diff(scandir($dir), array('..', '.'));

				$pop_images  = array(
					"temp (1).jpg",
					"temp (2).jpg",
					"temp (3).jpg",
					"temp (4).jpg",
					"temp (5).jpg",
					"temp (6).jpg",
					"temp (7).jpg",
					"temp (8).jpg",
					"temp (9).jpg",
					"temp (10).jpg",
					"temp (11).jpg",
					"temp (12).jpg",
					"temp (13).jpg",
					"temp (14).jpg",
					"temp (15).jpg",
					"temp (16).jpg",
					"temp (17).jpg",
					"temp (18).jpg",
					"temp (19).jpg",
					"temp (20).jpg",
					"temp (21).jpg",
					"temp (22).jpg",
					"temp (23).jpg",
					"temp (24).jpg",
					"temp (25).jpg",
					"temp (26).jpg",
					"temp (27).jpg",
					"temp (28).jpg",
					"temp (29).jpg",
					"temp (30).jpg",
					"temp (31).jpg"
					);

	

				$i = 0;

				foreach($pop_images as $image) {

					echo "<div class='col-md-2'>";

					echo "<a href='themes.php?page=instaport_pop&step=2&image=".$image."'><img src='".$dir."".$image."' class='img-thumbnail' style='width:100%:;margin:15px;'/></a>";

					echo "</div>";

					if (++$i == $limit) break;

				}



			}



			?>



		</div>



	</div>



	<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js" charset="UTF-8"></script>

	<script type="text/javascript" src="<?php echo plugin_dir_url( __FILE__ ); ?>/assets/js/my-jquery.js" charset="UTF-8"></script>



<?php 



	 /*}*/ 

?>