<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

class DePay_Donations_Run{

	function __construct(){
		$this->add_hooks();
	}

	private function add_hooks(){
	
		add_action( 'admin_enqueue_scripts', array( 'DePay_Donations_Admin', 'add_scripts_and_styles' ));
		add_action( 'admin_menu', array( 'DePay_Donations_Admin', 'add_admin_menu' ));
		add_action( 'admin_init', array( 'DePay_Donations_Admin', 'add_admin_settings' ));
		add_action( 'widgets_init', array( 'DePay_Donations_Widget', 'register' ));
		add_action( 'init', array( 'DePay_Donations_Block', 'register' ));
		add_action( 'init', array( 'DePay_Donations_Link', 'register' ));
		
	}
}
