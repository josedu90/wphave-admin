/**************************************************************************/
/**************************************************************************/
/* WPHAVE ADMIN -> CUSTOM LOGIN CSS BY USER */
/**************************************************************************/
/**************************************************************************/

<?php if( wphave_option('css_login') ) {
	
	echo wp_kses_post( wphave_option('css_login') );
						 
} ?>