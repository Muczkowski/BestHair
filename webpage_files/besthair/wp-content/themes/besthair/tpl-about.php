<?php
	/*
		Template Name: O nas
	*/
	include('header.inc.php');
	
	$section1 = get_field('sekcja_#1');
	$section2 = get_field('sekcja_#2');
	$section3 = get_field('sekcja_#3');
	$section4 = get_field('sekcja_#4');
	$section5 = get_field('sekcja_#5');
	$section6 = get_field('sekcja_#6');
	$section7 = get_field('sekcja_#7');
	$section8 = get_field('sekcja_#8');
	$section9 = get_field('sekcja_#9');
	
	?>

	<section class="about-intro">
		<div class="wrapper wrapper-wider bg about-intro__bg">
			<div class="row">
				<div class="col-12 col-xl-4 col-md-6" style="height: 0;">&nbsp;</div>
				<div class="col-12 col-xl-8 col-md-6 about-intro__bg__img">
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
				<div class="col-12 col-md-7 text about-intro__text">
					<h1 class="animated fadeIn">
						<?php echo $section1['tytul_glowny']; ?>
					</h1>
				</div>
				<div class="col-12 col-md-5" style="height: 0;">&nbsp;</div>
			</div>
		</div>
	</section>
	
	<section class="about-fightBald">
		<div class="wrapper">
			<div class="row">
				<div class="col-12 col-md-6 text about-fightBald__text">
					<h2>
						<strong><?php echo $section2['tytul']; ?></strong>
					</h2>
					<p>
						<?php echo $section2['tekst']; ?>
					</p>
				</div>
				<div class="col-12 col-md-6 about-fightBald__img">
					<div class="logo">
						<a href="">
							<img src="<?php echo $section2['obraz']; ?>" />
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="about-specialists">
		<div class="wrapper wrapper-wider bg about-specialists__bg">
			<div class="row">
				<div class="col-12 col-md-6 about-specialists__bg__img">
					<div class="img img-bg" style="background: url(<?php echo $section3['obraz']; ?>) no-repeat center center; background-size: cover;">
						<?php include('tpl-parts/loader.php'); ?>
					</div>
				</div>
				<div class="col-12 col-md-6" style="height: 0;">&nbsp;</div>
			</div>
		</div>
		
		<div class="wrapper">
			<div class="row">
				<div class="col-12 col-md-6" style="height: 0;">&nbsp;</div>
				<div class="col-12 col-md-6 text about-specialists__text">
					<h2>
						<strong><?php echo $section3['tytul']; ?></strong>
					</h2>
					<p>
						<?php echo $section3['tekst']; ?>
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
	
	<section class="about-care">		
		<div class="wrapper">
			<div class="row">
				<div class="col-12 col-md-6 text about-care__text">
					<h2>
						<strong><?php echo $section4['tytul']; ?></strong>
					</h2>
					<p>
						<?php echo $section4['tekst']; ?>
					</p>
				</div>
				
				
				
				
				
				<?php $advantages = $section4['kolo_z_ikonkami']; ?>
				
				<div class="col-12 col-md-6">
					<div class="about-care__circle">
						<div class="about-care__circle__text">
							<div id="tabs">
							<div class="about-care__circle__text__content doctor js-toggler is-fade is-visible" id="doctor">
								<div class="row">
									<div class="col-12">
										<h3><strong><?php echo $advantages['ikonka_#1']['tytul'] ?></strong></h3>
									</div>
									<div class="col-12">
										<p class="animated fadeInUp"><?php echo $advantages['ikonka_#1']['tekst'] ?></p>
									</div>
								</div>
							</div>
							
							<div class="about-care__circle__text__content surgery-room js-toggler is-fade" id="surgery-room">
								<div class="row">
									<div class="col-12">
										<h3><strong><?php echo $advantages['ikonka_#2']['tytul'] ?></strong></h3>
									</div>
									<div class="col-12">
										<p class="animated fadeInUp"><?php echo $advantages['ikonka_#2']['tekst'] ?></p>
									</div>
								</div>
							</div>
							
							<div class="about-care__circle__text__content boy js-toggler is-fade" id="boy">
								<div class="row">
									<div class="col-12">
										<h3><strong><?php echo $advantages['ikonka_#3']['tytul'] ?></strong></h3>
									</div>
									<div class="col-12">
										<p class="animated fadeInUp"><?php echo $advantages['ikonka_#3']['tekst'] ?></p>
									</div>
								</div>
							</div>
							
							<div class="about-care__circle__text__content bank js-toggler is-fade" id="bank">
								<div class="row">
									<div class="col-12">
										<h3><strong><?php echo $advantages['ikonka_#4']['tytul'] ?></strong></h3>
									</div>
									<div class="col-12">
										<p class="animated fadeInUp"><?php echo $advantages['ikonka_#4']['tekst'] ?></p>
									</div>
								</div>
							</div>
							
							<div class="about-care__circle__text__content security js-toggler is-fade" id="security">
								<div class="row">
									<div class="col-12">
										<h3><strong><?php echo $advantages['ikonka_#5']['tytul'] ?></strong></h3>
									</div>
									<div class="col-12">
										<p class="animated fadeInUp"><?php echo $advantages['ikonka_#5']['tekst'] ?></p>
									</div>
								</div>
							</div>
						</div>
						</div>
						<div class="about-care__circle__togglers">
							<a href="#doctor" data-toggler="tab" data-toggler-collection="#tabs" class="doctor about-care__circle__togglers__toggler">
								<?php include(''.get_bloginfo('template_directory').'/img/about/icons/doctor.svg'); ?>
							</a>
							<a href="#surgery-room" data-toggler="tab" data-toggler-collection="#tabs" class="surgery-room about-care__circle__togglers__toggler">
								<?php include(''.get_bloginfo('template_directory').'/img/about/icons/surgery-room.svg'); ?>
							</a>
							<a href="#boy" data-toggler="tab" data-toggler-collection="#tabs" class="boy about-care__circle__togglers__toggler">
								<?php include(''.get_bloginfo('template_directory').'/img/about/icons/boy.svg'); ?>
							</a>
							<a href="#bank"  data-toggler="tab" data-toggler-collection="#tabs" class="bank about-care__circle__togglers__toggler">
								<?php include(''.get_bloginfo('template_directory').'/img/about/icons/bank.svg'); ?>
							</a>
							<a href="#security"  data-toggler="tab" data-toggler-collection="#tabs" class="security about-care__circle__togglers__toggler">
								<?php include(''.get_bloginfo('template_directory').'/img/about/icons/security.svg'); ?>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<h2 class="about-crew-title"><strong>Poznaj nasz Zespół</strong></h2>
	<section class="about-crew">
		<div class="wrapper bg about-crew__bg">
			<div class="row">
				<div class="col-12 col-md-6" style="height: 0;">&nbsp;</div>
				<div class="col-12 col-md-6 about-crew__bg__img">
					<div class="img img-bg" style="background: url(<?php echo $section5['obraz']; ?>) no-repeat center center; background-size: cover;">
						<?php include('tpl-parts/loader.php'); ?>
					</div>
				</div>
			</div>
		</div>
		
		<div class="wrapper">
			<div class="row">
				<div class="col-12 col-md-6 text about-crew__text">
					<h2>
						<strong><?php echo $section5['tytul']; ?></strong>
					</h2>
					<p>
						<?php echo $section5['tekst']; ?>
					</p>
				</div>
				<div class="col-12 col-md-6">&nbsp;</div>
			</div>
		</div>
	</section>
	
	<section class="about-crew-2">
		<div class="wrapper bg about-crew-2__bg">
			<div class="row">
				<div class="col-12 col-md-6 about-crew-2__bg__img">
					<div class="img img-bg" style="background: url(<?php echo $section6['obraz']; ?>) no-repeat center center; background-size: cover;">
						<?php include('tpl-parts/loader.php'); ?>
					</div>
				</div>
				<div class="col-12 col-md-6" style="height: 0;">&nbsp;</div>
			</div>
		</div>
		
		<div class="wrapper">
			<div class="row">
				<div class="col-12 col-md-6">&nbsp;</div>
				<div class="col-12 col-md-6 text about-crew-2__text">
					<h2>
						<strong><?php echo $section6['tytul']; ?></strong>
					</h2>
					<p>
						<?php echo $section6['tekst']; ?>
					</p>
				</div>
			</div>
		</div>
	</section>
	
	<section class="about-meetTurkey">
		<div class="wrapper wrapper-wider about-meetTurkey__bg bg">
			<div class="row">
 				<div class="col-12 col-md-2" style="height: 0;">&nbsp;</div>
				<div class="col-12 col-md-10 about-meetTurkey__bg__img">
					<div class="img img-bg" style="background: url(<?php echo $section7['obraz']; ?>) no-repeat center center; background-size: cover;">
						<?php include('tpl-parts/loader.php'); ?>
					</div>
				</div>
			</div>
		</div>
		
		<div class="wrapper">
			<div class="row">
				<div class="col-12 col-md-6 text about-meetTurkey__text">
					<h2>
						<strong><?php echo $section7['tytul']; ?></strong>
					</h2>
				</div>
				<div class="col-12 col-md-6" style="height: 0;">&nbsp;</div>
			</div>
		</div>
	</section>
	
	<section class="about-restTurkey">
		<div class="wrapper bg about-restTurkey__bg bg">
			<div class="row">
				<div class="col-12 col-md-6 about-restTurkey__bg__img">
					<div class="img img-bg" style="background: url(<?php echo $section8['obraz']; ?>) no-repeat center center; background-size: cover;">
						<?php include('tpl-parts/loader.php'); ?>
					</div>
				</div>
				<div class="col-12 col-md-6" style="height: 0;">&nbsp;</div>
			</div>
		</div>
		
		<div class="wrapper">
			<div class="row">
				<div class="col-12 col-md-6" style="height: 0;">&nbsp;</div>
				<div class="col-12 col-md-6 text about-restTurkey__text">
					<h2>
						<strong><?php echo $section8['tytul']; ?></strong>
					</h2>
					<p>
						<?php echo $section8['tekst']; ?>
					</p>
				</div>
			</div>
		</div>
	</section>
	
	<section class="about-clinicTurkey">
		<div class="wrapper bg about-clinicTurkey__bg bg">
			<div class="row">
				<div class="col-12 col-md-6" style="height: 0;">&nbsp;</div>
				<div class="col-12 col-md-6 about-clinicTurkey__bg__img">
					<div class="img img-bg" style="background: url(<?php echo $section9['obraz']; ?>) no-repeat center center; background-size: cover;">
						<?php include('tpl-parts/loader.php'); ?>
					</div>
				</div>
			</div>
		</div>
		
		<div class="wrapper">
			<div class="row">
				<div class="col-12 col-md-6 text about-clinicTurkey__text">
					<h2>
						<strong><?php echo $section9['tytul']; ?></strong>
					</h2>
					<p>
						<?php echo $section9['tekst']; ?>
					</p>
				</div>
				<div class="col-12 col-md-6" style="height: 0;">&nbsp;</div>
			</div>
		</div>
	</section>
	
<?php include('footer.inc.php') ?>