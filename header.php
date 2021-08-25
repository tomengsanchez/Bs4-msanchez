<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Bs4-msanchez
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


	<div id="page" class="site">
		<div class="header-section purple-bg">
			<div class="container-fluid mycon purple-bg  ">
				<div class="row myrow ">
					<div class="col" >
						<nav id='main-nav' class="navbar navbar-expand-lg navbar-light  "  role='navigation'>
							<div class='col-lg-8 col-md-12'>
								<span class='navbar-brand'><?php the_custom_logo();?></span>
								<button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
								</button>
							</div>
							
							<?php 
								$args = [
									'theme_location'=>'primary',
									
									'depth'           => 6, // 1 = no dropdowns, 2 = with dropdowns.
									'container'       => 'div',
									'container_class' => 'collapse navbar-collapse col-lg-4col-md-0 float-right pt-2',
									'container_id'    => 'bs-example-navbar-collapse-1',
									'menu_class'      => 'navbar-nav mr-auto top-menu',
									'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
									'walker'          => new WP_Bootstrap_Navwalker(),
								];
								wp_nav_menu($args);
							?>
							
						</nav> 
					</div>
				</div>
			</div>
		</div>
		
		
		