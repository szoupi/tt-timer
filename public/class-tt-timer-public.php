<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Tt_Timer
 * @subpackage Tt_Timer/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Tt_Timer
 * @subpackage Tt_Timer/public
 * @author     Your Name <email@example.com>
 */
class Tt_Timer_Public {

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
	 * @param      string    $tt_timer       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $tt_timer, $version ) {

		$this->tt_timer = $tt_timer;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_style( $this->tt_timer, plugin_dir_url( __FILE__ ) . 'css/tt-timer-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in class_xxxxxxx_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The class_xxxxxxx_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->tt_timer, plugin_dir_url( __FILE__ ) . 'js/tt-timer-public.js', array( 'jquery' ), $this->version, false );

	}

		/**
		 * SHORTCODE CALLBACK.
		 * 
		 * An instance of this class should be passed to the run() function (STEP S2)
		 * defined in class_xxxxxxx_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The class_xxxxxxx_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 * 
		 * use in a page the shortcode [tt_display_timer1_shortcode] 
		 * the SHORTCODE NAMD is defined at includes/class-tt-timer.php
		 * inside define_public_hooks()
		 */
		public function tt_display_timer1_shortcode(){
			return '
				<div class="container">
				<br>
				<!-- <div style="float:right;"><span id="currentTime"></span> </div> -->
				<div>Έναρξη πρακτικής δοκιμασίας: <br><strong>Τετάρτη 27 Οκτωβρίου 2021</strong> στις <strong>17:30</strong></div>
			
				<p id="done"></p>
			
					<p>
					<strong><span id="days">0</span></strong> Ημέρες
					<strong><span id="hours">0</span></strong> ώρες 
					<strong><span id="minutes">0</span></strong> λεπτά και 
					<strong><span id="seconds">0</span></strong> δευτερόλεπτα
					</p>
				</ul>
				</div>
			
			
				<script>
					// TIMER
					const end = new Date("2021-10-27 17:30:00").getTime(); // set the end date
					const dayEl = document.getElementById("days");
					const hoursEl = document.getElementById("hours");
					const minutesEl = document.getElementById("minutes");
					const secondsEl = document.getElementById("seconds");
					const currentTimeEl = document.getElementById("currentTime");
			
					const seconds = 1000;
					const minutes = seconds * 60;
					const hours = minutes * 60;
					const days = hours * 24;
			
			
						
			
					const x = setInterval(function () {
						let now = new Date().getTime();
						const difference = end - now;
			
						if (difference < 0) {
						clearInterval(x);
						document.getElementById("done").innerHTML = "Τέλος Χρόνου!";
						document.getElementById("btn-upload-cv").innerHTML = "Τέλος Χρόνου!";
						document.getElementById("btn-upload-cv").disabled = true;
						
						return;
						}
						
						dayEl.innerText = Math.floor(difference / days);
						hoursEl.innerText = Math.floor( (difference % days) / hours );
						minutesEl.innerText = Math.floor( (difference % hours) / minutes );
						secondsEl.innerText = Math.floor( (difference % minutes) / seconds );
						
						// DIPSLAY CURRENT TIME
						var today = new Date();
						var date = today.getFullYear()+"-"+(today.getMonth()+1)+"-"+today.getDate();
						// if minute is < 10 it will be displayed as e.g. "10:03" and not "10:3"
						if(today.getMinutes() < 10){
						var time = today.getHours() + ":0" + today.getMinutes();
						}
						var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
						var dateTime = date+" "+time;  
						currentTimeEl.innerText = dateTime;
						
					}, seconds);
				</script>
			'; // end echo
		  
		}	

}
