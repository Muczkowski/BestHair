<?php include('meta.php'); 	
	global $post;
	$post_slug = $post->post_name;
    	
    if ( is_user_logged_in() ) { ?>
    <style>
        header#desktop {
            top: 32px !important;
        }
    </style>
<?php } ?>

	<nav class="fixed" id="menu">
		<div class="burger" id="menu-toggler">
			<a></a>
		</div>
		
		<ul>
			<?php 
				$headNav = array(
				    'sort_column' => 'menu_order',
				    'level' => 0,
				    'theme_location' => 'header_nav'
				);
				
				wp_nav_menu( $headNav );
			?>
		</ul>
	</nav>
		
	<div class="logo-fixed">
		<a href="/">
			<img class="logo" src="<?php bloginfo('template_directory'); ?>/img/global/header/logo.png" />
		</a>
	</div>
	
	</nav>

	<main>
		<div id="content" data-sticky-wrap class="<?php echo $post_slug; ?>">