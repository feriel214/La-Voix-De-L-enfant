<?php
		$datepicker_date_format 	= WP_Event_Manager_Date_Time::get_datepicker_format();
		
		//covert datepicker format  into php date() function date format
		$php_date_format 		= WP_Event_Manager_Date_Time::get_view_date_format_from_datepicker_date_format( $datepicker_date_format );
					$event_date = get_post_meta( $event->ID, '_' . $key, true );
					$this->fields[ $group_key ][ $key ]['value'] = date($php_date_format ,strtotime($event_date) );
				}