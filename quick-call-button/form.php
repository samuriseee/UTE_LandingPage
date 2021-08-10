<div class="lv_box">
	<p class="meta-options lv_field">
		<label for="call_hiden"><?php _e('Disabled','quickcallbutton') ?></label>
        <input id="call_hiden"
            type="checkbox"
            name="call_hiden"
            value="1"  <?php checked( $call_hiden, 1 ); ?>>
    </p>
	<p class="meta-options lv_field">
        <label for="phone_number"><?php _e('Phone Number','quickcallbutton') ?></label>
        <input id="phone_number"
            type="text"
            name="phone_number"
			placeholder="+08495558888"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'phone_number', true ) ); ?>">
    </p>
</div>