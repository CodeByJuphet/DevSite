<?php 

    /*

    Plugin Name: Insta Portfolio Popup Editor

    Plugin URI: http://instaportfolio.com

    Description: This is an Integration Popup for Instaportfolio.

    Author: Squeezemobi

    Version: 1.0

    Author URI: http://instaportfolio.com

    */



    add_action( 'admin_menu', 'instaport_pop' );



    /**

    	Adding Video Pro on Menu

    **/



    function instaport_pop() {

    	add_theme_page( 'Opt-In Pop Up Editor', 'Opt-In Pop Up Editor', 'manage_options', 'instaport_pop', 'instaport_pop_options' );

    }



    /**

    	Adding Page for Video Portfolio Plugin

    **/



    function instaport_pop_options() {



    	if ( !current_user_can( 'manage_options' ) )  {

    		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );

    	}





	/**

		Insert the Editor Page

	**/
        $step = $_GET['step'];

        if(!$step) {
            $step = 0;
        }

        if ($step == 2) {

            require_once 'popup-editor-page-step-2.php';

        // } elseif($step == 0) {

        //     require_once 'popup-activation.php';

        } elseif($step == 0) {

            require_once 'popup-editor-page-step-1.php';

        }
        //  elseif($step == 4) {

        //     require_once 'popup-activate.php';

        // }

          // require_once 'popup-editor-page-step-1.php';



    }
    
    require_once('wp-updates-plugin.php');
    new WPUpdatesPluginUpdater_1139( 'http://wp-updates.com/api/2/plugin', plugin_basename(__FILE__));


?>