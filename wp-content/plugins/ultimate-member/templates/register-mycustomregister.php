<?php /*Template: Register Scream */?>

<div class="um <?php echo $this->get_class( $mode ); ?> um-<?php echo $form_id; ?>">

	<div class="um-form">
	
		<form method="post" action="">
	
		<?php

			/*do_action("um_before_form", $args);
			
			do_action("um_before_{$mode}_fields", $args);
			
			do_action("um_main_{$mode}_fields", $args);
			
			do_action("um_after_form_fields", $args);
			
			do_action("um_after_{$mode}_fields", $args);
			
			do_action("um_after_form", $args);*/
            
            <input name="Your name" type="text" placeholder="Your name" id = "scream_oneline"/>
            <input name="Your e-mail" type="text" placeholder="Your e-mail" id = "scream_oneline"/>    
			<input name="Your password" type="text" placeholder="Your password" id = "scream_oneline"/>
            <input name="Your password confirmation" type="text" placeholder="Confirm your password" id = "scream_oneline"/>
                
            <button type="button" id = "project_btn">Start your first project</button>
		?>
		
		</form>
	
	</div>
	
</div>