<?php $license = get_option('of_options_atlk'); $popoption = get_option('popup_active'); if(empty($popoption)) { $popoption = 0; } else { }?>

<?php if($popoption == 1) { ?>

<?php
	if($license == 0) {

	} else {
		$plugin_dir = ABSPATH . 'wp-content/plugins/instaport-popup/';
		include_once ''.$plugin_dir.'popup-template.php';
	}
?>

<?php } elseif($popoption == 0) { } ?>