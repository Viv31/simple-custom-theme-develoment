<!DOCTYPE html>
<html>
<head>
	<?php wp_head(); ?>
</head>
<body <?php body_class();?>>
	<?php 
if ( function_exists( 'the_custom_logo' ) ) {
 the_custom_logo();
}



	?>
	<header class="sticky-top">
		<div class="container">
		<?php wp_nav_menu(
			array(
				'theme-location'=>'top-menu',
				'menu_class'=> 'navigation'
			)

		); 
		?>
	</div>
	</header>
