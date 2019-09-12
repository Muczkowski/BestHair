<?php
	/*
		Template Name: Galeria
	*/
	include('header.inc.php') ?>

	<section class="graft-intro">
		<div class="wrapper wrapper-wider bg graft-intro__bg">
			<div class="row">
				<div class="col-12 col-md-5" style="height: 0;">&nbsp;</div>
				<div class="col-12 col-md-7 graft-intro__bg__img">
					<div class="img img-bg" style="background: url(<?php bloginfo('template_directory'); ?>/img/graft/pht-1.png) no-repeat center center; background-size: cover;">
						<?php include('tpl-parts/loader.php'); ?>
					</div>
				</div>
			</div>
		</div>
		
		<div class="wrapper">
			<div class="logo logo-intro">
				<a href="/">
					<img class="logo" src="<?php bloginfo('template_directory'); ?>/img/global/header/logo.png" />
				</a>
			</div>
			
			<div class="row">
				<div class="col-12 col-md-5 text graft-intro__text">
					<h1>
						<strong>Galeria</strong><br />
						Lorem Ipsum
					</h1>
				</div>
				<div class="col-12 col-md-7" style="height: 0;">&nbsp;</div>
			</div>
		</div>
	</section>
	
	<?php include('tpl-parts/effects.php'); ?>
	
	<section class="graft-play">
		<div class="wrapper">
			<div class="row">
				<div class="col-12">
					<div class="graft-play__inner" style="background: url(<?php bloginfo('template_directory'); ?>/img/graft/pht-5.png) no-repeat center center; background-size: cover;">
						<h2><strong>PLAY</strong></h2>
					</div>
				</div>
			</div>
		</div>
	</section>
		
<?php include('footer.inc.php') ?>