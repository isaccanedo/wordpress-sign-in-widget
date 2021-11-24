<div class="wrap">
	<h1>Login Sign-In Widget</h1>

	<form method="post" action="options.php">
		<?php settings_fields( 'Login-sign-in-widget' ); ?>
		<?php do_settings_sections( 'Login-sign-in-widget' ); ?>
		<?php submit_button(); ?>
	</form>
</div>
