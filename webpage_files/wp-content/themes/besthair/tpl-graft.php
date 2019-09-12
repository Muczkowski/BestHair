<?php
	/*
		Template Name: Przeszczep
	*/
	include('header.inc.php'); 
	
	$section1 = get_field('sekcja_#1');
	$section2 = get_field('sekcja_#2');
	$section3 = get_field('sekcja_#3');
	$section4 = get_field('sekcja_#4');
	$section5 = get_field('sekcja_#5');
	
	?>

	<section class="graft-intro">
		<div class="wrapper wrapper-wider bg graft-intro__bg">
			<div class="row">
				<div class="col-12 col-md-5" style="height: 0;">&nbsp;</div>
				<div class="col-12 col-md-7 graft-intro__bg__img">
					<div class="img img-bg" style="background: url(<?php echo $section1['obraz']; ?>) no-repeat center center; background-size: cover;">
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
					<h1 class="animated fadeIn">
						<?php echo $section1['tytul_glowny']; ?>
					</h1>
				</div>
				<div class="col-12 col-md-7" style="height: 0;">&nbsp;</div>
			</div>
		</div>
	</section>
		
	<section class="graft-hair">
		<div class="wrapper wrapper-wider bg graft-hair__bg">
			<div class="row">
				<div class="col-12 col-md-6 graft-hair__bg__img">
					<div class="img img-bg" style="background: url(<?php echo $section2['obraz']; ?>) no-repeat center center; background-size: cover;">
						<?php include('tpl-parts/loader.php'); ?>
					</div>
				</div>
				<div class="col-12 col-md-6" style="height: 0;">&nbsp;</div>
			</div>
		</div>
		
		<div class="wrapper">
			<div class="row">
				<div class="col-12 col-md-6" style="height: 0;">&nbsp;</div>
				<div class="col-12 col-md-6 text graft-hair__text">
					<h2>
						<strong><?php echo $section2['tytul']; ?></strong>
					</h2>
					<p>
						<?php echo $section2['tekst']; ?>
					</p>
				</div>
			</div>
		</div>
	</section>
		
	<section class="graft-cost">
		<div class="wrapper wrapper-wider bg graft-cost__bg">
			<div class="row">
				<div class="col-12 col-md-6" style="height: 0;">&nbsp;</div>
				<div class="col-12 col-md-6 graft-cost__bg__img">
					<div class="img img-bg" style="background: url(<?php echo $section3['obraz']; ?>) no-repeat center center; background-size: cover;">
						<?php include('tpl-parts/loader.php'); ?>
					</div>
				</div>
			</div>
		</div>
		
		<div class="wrapper">
			<div class="row">
				<div class="col-12 col-md-6 text graft-cost__text">
					<h2>
						<strong><?php echo $section3['tytul']; ?></strong>
					</h2>
					<p>
						<?php echo $section3['tekst']; ?>
					</p>
				</div>
				<div class="col-12 col-md-6" style="height: 0;">&nbsp;</div>
			</div>
		</div>
	</section>
	
	<?php include('tpl-parts/effects.php'); ?>
	
	<section class="graft-security">
		<div class="wrapper wrapper-wider bg graft-security__bg">
			<div class="row">
				<div class="col-12 col-md-6 graft-security__bg__img">
					<div class="img img-bg" style="background: url(<?php echo $section4['obraz']; ?>) no-repeat center center; background-size: cover;">
						<?php include('tpl-parts/loader.php'); ?>
					</div>
				</div>
				<div class="col-12 col-md-6" style="height: 0;">&nbsp;</div>
			</div>
		</div>
		
		<div class="wrapper">
			<div class="row">
				<div class="col-12 col-md-6" style="height: 0;">&nbsp;</div>
				<div class="col-12 col-md-6 text graft-security__text">
					<h2>
						<strong><?php echo $section4['tytul']; ?></strong>
					</h2>
					<p>
						<?php echo $section4['tekst']; ?>
					</p>
					
					<div class="btn-right">
						<button class="btn">
							Pokaż szczegóły
						</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="graft-play" id="videoPlayer-overlay">
		<div class="wrapper">
			<div class="row">
				<div class="col-12">
					<div class="graft-play__inner" style="background: url(<?php echo $section5['obraz']; ?>) no-repeat center center; background-size: cover;">
						<h2><strong>PLAY</strong></h2>
						
						<div class="graft-play__inner__video">
							<iframe id="video" width="100%" height="100%" src="<?php echo $section5['url_filmu']; ?>" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
		
<?php include('footer.inc.php') ?>