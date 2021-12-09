<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Tt_Timer
 * @subpackage Tt_Timer/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Tt_Timer
 * @subpackage Tt_Timer/admin
 * @author     Your Name <email@example.com>
 */
class Tt_Timer_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $tt_timer    The ID of this plugin.
	 */
	private $tt_timer;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $tt_timer       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $tt_timer, $version ) {

		$this->tt_timer = $tt_timer;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Tt_Timer_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Tt_Timer_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->tt_timer, plugin_dir_url( __FILE__ ) . 'css/admin.css', array(), $this->version, 'all' );
		// bootstrap css v5.0.2
		wp_enqueue_style( 'tt-bootstrap', plugin_dir_url( __FILE__ ) . 'css/bootstrap.min.css', array(), $this->version, 'all' );
		wp_enqueue_style( 'tt-print', plugin_dir_url( __FILE__ ) . 'css/print.css', array(), $this->version, 'print' );		

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Tt_Timer_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Tt_Timer_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->tt_timer, plugin_dir_url( __FILE__ ) . 'js/admin-scripts.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script('tt-bootstrap', plugin_dir_url(__FILE__) . 'js/bootstrap.min.js', array('jquery'), $this->version, false);

	}


	/**
	 * Add admin menu to wp backend
	 * 
	 * The hook is defined at includes/class-tt-timer.php define_admin_hooks()
	 * 
	 * @since 1.0.0
	 */
	public function tt_admin_menu_pages(){
		// https://developer.wordpress.org/reference/functions/add_submenu_page/
		// https://wordpress.org/support/article/roles-and-capabilities/

		// create admin page which loads callback tt_timer_admin_home_page()
		// administrative rights: manage_options
		// contributor rights: edit_posts
			
	}


}
