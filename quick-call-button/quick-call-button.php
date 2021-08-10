<?php 
/* 
Plugin Name: 	Quick Call Button
Plugin URI: 	https://longvietweb.com/plugins/
Description: 	add quick call button, call now button for any wordpress website on ipad and mobile phone.
Tags: 			LongVietWeb, quick call button, call now button, ipad, mobile, responsive, buttons, phone, call, contact
Author URI: 	https://longvietweb.com/
Author: 		LongViet
Version: 		1.2.6
License: 		GPL2
Text Domain:    quickcallbutton
*/

define('QUICK_CALL_BUTTON_VERSION', '1.2.6');
define('QUICK_CALL_BUTTON_DIR', plugin_dir_path(__FILE__));
define('QUICK_CALL_BUTTON_URL', plugins_url('/', __FILE__));

class LV_Quick_Call_Button
{
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'quickcallbutton',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}
	public $menu_id;
	
	/**
	 * Plugin initialization
	 *
	 * @since 1.0.1
	 */
	public function __construct() {
		
		// localization
		load_plugin_textdomain( 'quickcallbutton' );

		// admin
		add_action( 'admin_menu', array( $this, 'lv_add_admin_menu' ));
		add_action( 'admin_enqueue_scripts', array( $this, 'lv_admin_scripts' ));
		
		// Load jQuery and jQuery-ui script
		add_action( 'wp_enqueue_scripts', array( $this, 'lv_enqueue_scripts' ));
		
		// create needed initialization
		add_action('admin_init', array( $this, 'lv_register_options_settings') );
		
		// create custom footer
		add_action('wp_footer', array( $this, 'lv_add_buttons'), 10);
		
		// Register meta boxes.
		add_action( 'add_meta_boxes', array( $this, 'lv_register_meta_boxes' ) );
		
		// Save meta box content.
		add_action( 'save_post', array( $this, 'lv_save_meta_box' ) );
		
		// grab the options, use for entire object
		$this->lv_options = $this->lv_options();
	}

	/**
	 * Add Menu Page
	 *
	 * @since 1.0.1
	 */
	public function lv_add_admin_menu() {
    	add_options_page('Settings Page for Quick Call Button', 'Quick Call Button', 'publish_posts', 'lv_quick_call_button', array($this,'lv_options_page') ); 
	}
	
	/**
	 * Add Resources
	 *
	 * @since 1.0.1
	 */
	function lv_admin_scripts() {

		if (get_current_screen()->base == 'settings_page_lv_quick_call_button') {
	        wp_register_script( 'lv_js', plugins_url('assets/js/quick-call-button-admin.js', __FILE__), array('jquery'), '1.2.6', true );
	        wp_enqueue_script( 'lv_js' );
			wp_register_style( 'lv_css', plugins_url('/assets/css/quick-call-button-admin.css', __FILE__) , false, '1.2.6' );
			wp_enqueue_style( 'lv_css');

		    wp_enqueue_style('wp-color-picker');
		    wp_enqueue_script('iris', admin_url('js/iris.min.js'),array('jquery-ui-draggable', 'jquery-ui-slider', 'jquery-touch-punch'), false, 1);
		    wp_enqueue_script('wp-color-picker', admin_url('js/color-picker.min.js'), array('iris'), false,1);
	    }
	}

	/**
	 * Whitelist Options
	 *
	 * @since 1.0.1
	 */
	function lv_register_options_settings() { 
	    register_setting( 'lv_custom_options-group', 'lv_options' );
	}  
	    
	/**
	 * Options Page
	 *
	 * @since 1.0.1
	 */
	function lv_options_page() {
		global $_wp_admin_css_colors, $wp_version;
		
		// access control
	    if ( !(isset($_GET['page']) && $_GET['page'] == 'lv_quick_call_button' )) 
	    	return;
		?>
	
		<div class='wrap'>
			<h2><?php _e('Settings Quick Call Button','quickcallbutton') ?></h2>
			<form method="post" action="options.php" class="form-table">
				<?php
				wp_nonce_field('lv_options');
				settings_fields('lv_custom_options-group');
				?>
				<input type="hidden" name="action" value="update" />
				<input type="hidden" name="page_options" value="lv_options" />
				<tr>
				    <h3><?php _e('Rate <a href="https://wordpress.org/support/plugin/quick-call-button/reviews/?filter=5" target="_blank"> 5 Stars </a>','quickcallbutton') ?><span>(⭐️⭐️⭐️⭐️⭐️) </span><?php _e('if you guys like it.','quickcallbutton') ?></h3>
				</tr>
				<p><?php _e('Change the appearance of the quick call button display on the screen.The default is 860px.','quickcallbutton') ?></p>
				<table border=0 cellpadding=2 cellspacing="2">
				<tr>
				    <th><?php _e('Display On Screen','quickcallbutton') ?></th>
				        <td>
					        <label><span class="dashicons dashicons-smartphone"></span><span class="dashicons dashicons-minus"></span><span class="dashicons dashicons-tablet"></span><span class="dashicons dashicons-minus"></span><span class="dashicons dashicons-laptop"></span><span class="dashicons dashicons-minus"></span><span class="dashicons dashicons-desktop"></span> <span class="dashicons dashicons-arrow-down-alt"></span></label><br />
							<input name="lv_options[screen_size]" placeholder="860" value='<?php echo $this->lv_options['screen_size']; ?>' /><label>px</label><br />
							<label for="quick-call-button-text-1"><?php _e('Display on the screen is smaller than the number you install.','quickcallbutton') ?></label>
				        </td>
				</tr>
				</table>
				
				<p><?php _e('Quick Call Button Position . Default Top is 50% & Left is 3% .','quickcallbutton') ?></p>
				<table border=0 cellpadding=2 cellspacing="2">
				<tr>
				    <th><?php _e('Top','quickcallbutton') ?></th>
				        <td>
					        <input name="lv_options[move_top]" placeholder="50" value='<?php echo $this->lv_options['move_top']; ?>' /><label>%</label><br />
							<label for="quick-call-button-text-1"><?php _e(' Position On The Top','quickcallbutton') ?></label>
				        </td>
				</tr>
				<tr>
				    <th><?php _e('Left','quickcallbutton') ?></th>
				        <td>
					        <input name="lv_options[move_left]" placeholder="3" value='<?php echo $this->lv_options['move_left']; ?>' /><label>%</label><br />
							<label for="quick-call-button-text-1"><?php _e(' Position On The Left','quickcallbutton') ?></label>
				        </td>
				</tr>
				</table>
				
				<p><?php _e('Adding a phone number for a quick call button will appear on your website.','quickcallbutton') ?></p>
				<table border=0 cellpadding=2 cellspacing="2">
				<tr>
					<th><?php _e('Phone Number','quickcallbutton') ?></th>
					<td>
						<input name="lv_options[phone_number]" placeholder="+08495558888" value='<?php echo $this->lv_sanitize_phone($this->lv_options['phone_number']); ?>' /><label><?php _e(' Phone number is required.','quickcallbutton') ?></label><br />
						<input name="lv_options[phone_number_1]" placeholder="+08495558887" value='<?php echo $this->lv_sanitize_phone($this->lv_options['phone_number_1']); ?>' /><br />
						<input name="lv_options[phone_number_2]" placeholder="+08495558886" value='<?php echo $this->lv_sanitize_phone($this->lv_options['phone_number_2']); ?>' /><br />
						<label><?php _e('Phone numbers will be randomly picked from the above numbers out call button.','quickcallbutton') ?></label>
					</td>
				</tr>
				</table>
				
				<p><?php _e('Adding a text for a quick call button will appear on your website.','quickcallbutton') ?></p>
				<table border=0 cellpadding=2 cellspacing="2">
				<tr>
				    <th><?php _e('Text','quickcallbutton') ?></th>
				        <td>
					        <input type="text" id="quick-call-button-text" name="lv_options[call_text]" value="<?php echo $this->lv_options['call_text'] ?>" placeholder="Call Now" /><br />
							<input type="checkbox" id="quick-call-button-text-0" name="lv_options[call_text_mobile]" value="680" <?php checked('680', $this->lv_options['call_text_mobile']) ?>"  />
							<label for="quick-call-button-text-0"><?php _e('Disabled Text On Mobile','quickcallbutton') ?></label><br />
							<input type="checkbox" id="quick-call-button-text-1" name="lv_options[call_text_tablet]" value="680" <?php checked('680', $this->lv_options['call_text_tablet']) ?>"  />
							<label for="quick-call-button-text-1"><?php _e('Disabled Text On Tablet','quickcallbutton') ?></label><br />
							<input type="checkbox" id="quick-call-button-text-2" name="lv_options[call_text_desktop]" value="1024" <?php checked('1024', $this->lv_options['call_text_desktop']) ?>"  />
							<label for="quick-call-button-text-2"><?php _e('Disabled Text On Desktop','quickcallbutton') ?></label><br />
				        </td>
				</tr> 

				<tr>
				    <th><?php _e('Text Color','quickcallbutton') ?></th>
				        <td>
					        <input type="text" class="colourme" name="lv_options[call_text_color]" value="<?php echo $this->lv_options['call_text_color']; ?>"><br />
				        </td>
				</tr>  
				
				<tr>
				    <th><?php _e('Bar Background','quickcallbutton') ?></th>
					    <td>
						    <input type="text" class="colourme" name="lv_options[bg_color]" value="<?php echo $this->lv_options['bg_color']; ?>">
					    </td>
				</tr>
				      
				<tr>
					<th><?php _e('Button Color','quickcallbutton') ?></th>
					    <td>
						    <input type="text" class="colourme" name="lv_options[call_color]" value="<?php echo $this->lv_options['call_color']; ?>">
					    </td>
				</tr>
				
				<tr>
					<th><?php _e('Button Effect','quickcallbutton') ?></th>
						<td>
							<input type="checkbox" id="quick-call-button-effect" name="lv_options[call_wave_effect]" value="inactive" <?php checked('inactive', $this->lv_options['call_wave_effect']) ?>"  />
							<label for="quick-call-button-effect"><?php _e(' Disabled Wave Effect','quickcallbutton') ?></label><br />
						    <input type="checkbox" id="quick-call-button-shake-effect" name="lv_options[call_shake_effect]" value="notshake" <?php checked('notshake', $this->lv_options['call_shake_effect']) ?>"  />
							<label for="quick-call-button-shake-effect"><?php _e(' Disabled Shake Effect','quickcallbutton') ?></label><br />
						</td>
				</tr>
				
				<tr>
					<th><?php _e('Disabled Drag and Drop','quickcallbutton') ?></th>
						<td>
							<input type="checkbox" id="disabled-drag-drop" name="lv_options[disabled_drag_drop]" value="active" <?php checked('active', $this->lv_options['disabled_drag_drop']) ?>"  />
							<label for="disabled-drag-drop"><?php _e(' Disabled Drag and Drop','quickcallbutton') ?></label><br />
						</td>
				</tr>
				
				<tr>
					<th><?php _e('Select Images Button','quickcallbutton') ?></th>
						<td>
							<select type="text" class="lvwidefat" name="lv_options[call_image]" value="<?php echo $this->lv_options['call_image']; ?>">
								<option value="quick-alo-ph-img-circle" <?php selected ( $this->lv_options['call_image'], 'quick-alo-ph-img-circle' ) ?>><?php _e('Select Style Images 1','quickcallbutton') ?></option>
								<option value="quick-alo-phone-img-circle" <?php selected ( $this->lv_options['call_image'], 'quick-alo-phone-img-circle' ) ?>><?php _e('Select Style Images 2','quickcallbutton') ?></option>
							</select>
						</td>
				</tr>
				<tr>
					<th><?php _e('Click Tracking','quickcallbutton') ?></th>
						<td>
							<input type="checkbox" id="quick-call-button-tracking" name="lv_options[tracking]" value="tracking" <?php checked('tracking', $this->lv_options['tracking']) ?>"  />
							<label for="quick-call-button-tracking"><?php _e('Google Universal Analytics (analytics.js)','quickcallbutton') ?></label><br />
						<p class="description"><?php _e('Click tracking turned on? Wait for about a day then log into your Google Analytics accunt and click in the <strong>Behavior</strong> section on <strong>Events</strong>.','quickcallbutton') ?></br>
						<span class="whatsThis"><?php _e('Your website page needs to integrate Google Analytics (<a href="https://support.google.com/analytics/answer/1033068#SeeAlerts" target="_blank"> Learn more here</a>)','quickcallbutton') ?></span></p>
						</td>
				</tr>
				
				</table>
				<p class="submit">
					<input type="submit" class="button-primary" value="<?php _e('Save Changes','quickcallbutton') ?>" />
					<a class="button button-primary" href="http://longvietweb.com/contact/" target="_blank">Support</a>
				</p>
			</form>
		</div>
		<?php
    
	}
	
	/**
	 * Register meta boxes.
	 */
	public function lv_register_meta_boxes() {
		add_meta_box( 'quickcallbutton', __( 'Quick Call Button Settings', 'quickcallbutton' ), array( $this, 'lv_display_callback' ), array(
			'post',
			'page',
			'product',
		) );
	}
	
	/**
	 * Meta box display callback.
	 *
	 * @param WP_Post $post Current post object.
	 */
	public function lv_display_callback( $post ) {
		$phone_number_fields = get_post_meta($post->ID, 'phone_number', true);
		$call_hiden = get_post_meta( get_the_ID(), 'call_hiden' );
		$call_hiden = isset( $call_hiden[0] ) ? $call_hiden[0] : 0;

		wp_nonce_field( 'phone_number_meta_box_nonce', 'phone_number_meta_box_nonce' );
		include QUICK_CALL_BUTTON_DIR . './form.php';
	}

	/**
	 * Save meta box content.
	 *
	 * @param int $post_id Post ID
	 */
	public function lv_save_meta_box( $post_id ) {
		if ( ! isset( $_POST['phone_number_meta_box_nonce'] ) ||
		! wp_verify_nonce( $_POST['phone_number_meta_box_nonce'], 'phone_number_meta_box_nonce' ) )
			return;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
		if ( $parent_id = wp_is_post_revision( $post_id ) ) {
			$post_id = $parent_id;
		}
		//$call_hiden  = ( isset( $_POST['call_hiden'] ) && '1' === $_POST['call_hiden'] ) ? 1 : 0; // WPCS: CSRF ok.
		$fields = [
			'phone_number',
			'call_hiden',
		];
		foreach ( $fields as $field ) {
			if ( array_key_exists( $field, $_POST ) ) {
				update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
			} else {
				delete_post_meta( $post_id, $field );
			}
		 }
	}
	
	// Adding Custom Quick Call Buttons.
	function lv_add_buttons() {
		
		$return =  "\n\n
			<!-- Start Quick Call Buttons By LongVietWeb.com -->";

		// Setup valuable settings.
		if ($this->lv_mandatory_have_info()) {
			
			// adding the enque here will setup the style.
			wp_register_style( 'lv_css', QUICK_CALL_BUTTON_URL."assets/css/quick-call-button.css",array(),"1.2.6" );
			wp_enqueue_style( 'lv_css');
			if ( empty( $this->lv_options['disabled_drag_drop'] ) ){
				wp_register_script( 'lv_js', QUICK_CALL_BUTTON_URL."assets/js/drag-quick-call-button.js",array(),false,true);
				wp_enqueue_script( 'lv_js' );
			}
			
			// code button
			$call_hiden = get_post_meta( get_the_ID(), 'call_hiden' );
			if ( empty( $call_hiden ) ) { 
				$return .=  "
				<div class='quick-call-button'></div>
				<div class='call-now-button' id='draggable'>";
				
				if($this->lv_options['tracking'] == 'tracking'){
					$tracking = "onclick=\"ga('send', 'event', 'Contact', 'Quick Call Button', 'Phone');\"";
				}else {
					$tracking = "";
				}
				$phone_number_id = esc_attr( get_post_meta( get_the_ID(), 'phone_number', true ) );
				
				if( $phone_number_id ){
					$phone_number__id = apply_filters( 'lv_phone_number', $phone_number_id );
					//echo $phone_number__id;
				}else {
					$phone__number = array(
						$this->lv_sanitize_phone($this->lv_options['phone_number']),
						$this->lv_sanitize_phone($this->lv_options['phone_number_1']),
						$this->lv_sanitize_phone($this->lv_options['phone_number_2']),
					);
					
					$currentPage = basename($_SERVER['SCRIPT_NAME']);

					$count = 0;
					$currentIndex = NULL;
					foreach($phone__number as $link) {
						if(strpos($link, "/".$currentPage)>-1)  $currentIndex = $count;
						$count++; 
					}
					
					if($currentIndex) {
						do{
							$random = mt_rand(0, sizeof($phone__number) - 1);
						} while($random==$currentIndex);
					} else {
						$random = mt_rand(0, sizeof($phone__number) - 1);
					}
					if ( empty($phone__number[$random]) ) { 
						$phone_number__id = $this->lv_sanitize_phone($this->lv_options['phone_number']);
					} else {
						$phone_number__id = $phone__number[$random];
					}
				}
				
				if ( !empty($this->lv_options['phone_number']) ) { 
					$return .= "
					<div>
						<p class='call-text'> {$this->lv_options['call_text']} </p>
						<a href='tel:".$phone_number__id."' id='quickcallbutton' ".$tracking." title='Call Now' >
						<div class='quick-alo-ph-circle {$this->lv_options['call_wave_effect']}'></div>
						<div class='quick-alo-ph-circle-fill {$this->lv_options['call_wave_effect']}'></div>
						<div class='{$this->lv_options['call_image']} {$this->lv_options['call_shake_effect']}'></div>
						</a>
					</div>"; 
				}
				$return .= "
				</div>
				<style> 
					@media screen and (max-width: {$this->lv_options['screen_size']}px) { 
					.call-now-button { display: flex !important; background: {$this->lv_options['bg_color']}; }  
					.quick-call-button { display: block !important; } 
					}
					@media screen and (min-width: {$this->lv_options['call_text_desktop']}px) { 
					.call-now-button .call-text { display: none !important; } 
					} 
					@media screen and (max-width: 1024px) and (min-width: {$this->lv_options['call_text_tablet']}px) { 
					.call-now-button .call-text { display: none !important; } 
					}
					@media screen and (max-width: {$this->lv_options['call_text_mobile']}px) { 
					.call-now-button .call-text { display: none !important; } 
					} 
					.call-now-button { top: {$this->lv_options['move_top']}%; }
					.call-now-button { left: {$this->lv_options['move_left']}%; }
					.call-now-button { background: {$this->lv_options['bg_color']}; }
					.call-now-button div a .quick-alo-ph-img-circle, .call-now-button div a .quick-alo-phone-img-circle { background-color: {$this->lv_options['call_color']}; }
					.call-now-button .call-text { color: {$this->lv_options['call_text_color']}; }";
				$return .= "
				</style>";
			}
		} 
		$return .= "
			<!-- /End Quick Call Buttons By LongVietWeb.com -->\n\n";
			
		echo apply_filters('lv_output',$return);
	}
	
	// Checking and setting the default options.
	function lv_options() { 
		$defaults = array(
			'screen_size' 	    => '860',
			'move_left'         => '3',
			'move_top'          => '50',
			'bg_color' 		    => '#1a1919',
			'call_text_mobile'  => '',
			'call_text_tablet'  => '',
			'call_text_desktop' => '',
			'call_text'   	    => __('Call Now','quickcallbutton'),
			'call_color' 	    => '#0c3',
			'call_text_color'   => '#fff',
			'phone_number'		=> '',
			'phone_number_1'	=> '',
			'phone_number_2'	=> '',
			'call_wave_effect'  => 'active',
			'call_shake_effect' => 'shake',
			'disabled_drag_drop'=> '',
			'tracking'          => 'nottracking',
		);

		// Get user options
		$lv_options = get_option('lv_options');		
		
		// if the user hasn't made settings yet, default
		if (is_array($lv_options)) {
			// Lets make sure we have a value for each as some might be new.
			foreach ($defaults as $k => $v)
				if (!isset($lv_options[$k]) || empty($lv_options[$k]))
					$lv_options[$k] = $v;
		} 
		// Must be first, lets use defaults
		else {
			$lv_options = $defaults;
		}
		
		return $lv_options;
	}
	
	/**
	 * Mandatory phone number information is required.
	 *
	 * @since 1.0.1
	 */
	function lv_mandatory_have_info() {
		return ((isset($this->lv_options['phone_number']) && !empty($this->lv_options['phone_number']))) ? true : false;
	}

	/**
	 * helper, clean phone
	 *
	 * @since 1.0.1
	 */
	function lv_sanitize_phone($number) {
		return str_replace( array(' ','(',')','.'), array('','','-','-'), $number);
	}
	
	function lv_enqueue_scripts() {
		if ( empty( $this->lv_options['disabled_drag_drop'] ) ){
			wp_enqueue_script('jquery-ui',QUICK_CALL_BUTTON_URL."assets/js/jquery-ui.js",array(),false,true);
			wp_enqueue_script('jquery-ui-touch',QUICK_CALL_BUTTON_URL."assets/js/jquery.ui.touch-punch.min.js",array(),false,true);
			wp_enqueue_script( 'jquery');
		}
	}
	
}
new LV_Quick_Call_Button();