<?php
	/*
		Template Name: Oferta
	*/
	include('header.inc.php');
	
	$section1 = get_field('sekcja_#1');
	$section2 = get_field('sekcja_#2');
	$section3 = get_field('sekcja_#3');
?>

	<section class="offer-intro">
		<div class="wrapper wrapper-wider bg offer-intro__bg">
			<div class="row">
				<div class="col-12 col-xl-4 col-md-6" style="height: 0;">&nbsp;</div>
				<div class="col-12 col-xl-8 col-md-6 offer-intro__bg__img">
					<div class="img img-bg" style="background: url(<?php echo $section1['obraz']; ?>) no-repeat center center; background-size: cover;">
						<?php include('tpl-parts/loader.php'); ?>
					</div>
				</div>
			</div>
		</div>
		
		<div class="wrapper">
			<div class="logo desktop">
				<a href="/">
					<img class="logo" src="<?php bloginfo('template_directory'); ?>/img/global/header/logo.png" />
				</a>
			</div>
			
			<div class="row">
				<div class="col-12 col-md-7 text offer-intro__text">
					<h1 class="animated fadeIn">
						<?php echo $section1['tytul']; ?>
					</h1>
				</div>
				<div class="col-12 col-md-5" style="height: 0;">&nbsp;</div>
			</div>
		</div>
	</section>
	
	<section class="offer-packages">
		<div class="offer-packages__title">
			<?php echo $section2['tytul']; ?>
		</div>
		<div class="wrapper">
			<div class="row">
				<?php
					$package = $section2['pakiet'];
					if($package) {
						foreach($package as $pack) { ?>
						<div class="col-12 col-md-6 offer-packages__package">
							<?php echo $pack['tytul']; ?>
							<ul>
								<?php 
									$list = $pack['lista'];
									
									foreach($list as $li) {  ?>
									<li>
										<?php echo $li['punkt']; ?>
									</li>
									<?php
									}
								?>
							</ul>
							
							<div class="row">
								<div class="col-12">
									<div class="btn-right">
										<span class="cost"><?php echo $pack['cena']; ?></span>
										<a href="#">
											<button class="btn">
												Zarezerwuj
											</button>
										</a>
									</div>
								</div>
							</div>
						</div>
					<?php }
					}
				?>
			</div>
		</div>
	</section>
	
	<section class="offer-howthislook">
		<div class="wrapper wrapper-wider">
			<div class="row">
				<div class="col-12">
					<div class="offer-howthislook__inner" style="background: url(<?php bloginfo('template_directory'); ?>/img/offer/pht-2.png) no-repeat center center; background-size: cover;">
						<?php include('tpl-parts/loader.php'); ?>
						<h2><strong>Jak to wygląda?</strong></h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="offer-icons">		
		<div class="wrapper wrapper-wider">
			<div class="row">				
				<?php
					$steps = $section3['ikonki'];
					if($steps) {
						foreach($steps as $step) { ?>
							<div class="col-6 col-md-4 offer-icons__outer">
								<div class="offer-icons__inner">
									<div class="img img-bg"><img src="<?php echo $step['ikona'] ?>" /></div>
									<h3>
										<strong><?php echo $step['tytul'] ?></strong>
									</h3>
									<ul>
										<?php 
											$list = $step['tekst'];
											
											foreach($list as $li); ?>
											<li><?php echo $li['punkt']; ?></li>
									</ul>
								</div>
							</div>
					<?php }
					}
				?>
			</div>
		</div>
	</section>
	
<?php include('footer.inc.php') ?>