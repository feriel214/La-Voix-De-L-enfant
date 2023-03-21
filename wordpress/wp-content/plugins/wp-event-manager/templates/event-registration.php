<?php  if ( $register = get_event_registration_method() ) :
	wp_enqueue_script( 'wp-event-manager-event-registration' );
	
	?>
	<div class="event_registration registration">
		<?php do_action( 'event_registration_start', $register ); ?>
		
		<?php do_action( 'event_registration_end', $register ); ?>
	</div>
<?php endif; ?>
