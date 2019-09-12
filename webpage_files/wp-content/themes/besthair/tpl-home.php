<?php
	/*
		Template Name: Strona główna
	*/
	
	$section1 = get_field('slider_glowny');
	$section2 = get_field('sekcja_#2');
	$section3 = get_field('sekcja_#3');
	$section4 = get_field('sekcja_#4');
	$section5 = get_field('sekcja_#5');
	$section6 = get_field('sekcja_#6');
	
	include('header.inc.php') ?>
	<section class="home-intro">
		<div class="wrapper wrapper-wider bg home-intro__bg">
			<div class="row">
				<div class="col-12 col-md-2" style="height: 0;">&nbsp;</div>
				<div class="col-12 col-md-10">
					<div class="img">
					    <div class="slickSlider">
							<?php
								$slider_img = $section1;
								if($slider_img) {
									foreach($slider_img as $slide_img) { ?>
								        <div class="item image">
								            <figure>
								                <div class="slide-image slide-media" style="background: url(<?php echo $slide_img['slide']['zdjecie_slajdu']; ?>) no-repeat center center; background-size: cover;">
									                <img data-lazy="<?php echo $slide_img['slide']['zdjecie_slajdu']; ?>" class="image-entity">
									            </div>
								            </figure>
								        </div>
								<?php }
								}
							?>
						    
						    
					
<!--
					        <div class="item youtube">
					            <iframe class="embed-player slide-media" width="980" height="520" src="https://www.youtube.com/embed/QV5EXOFcdrQ?enablejsapi=1&controls=0&fs=0&iv_load_policy=3&rel=0&showinfo=0&loop=1&playlist=QV5EXOFcdrQ&start=1" frameborder="0" allowfullscreen=""></iframe>
					        </div>
					        
					        <div class="item image">
					            <figure>
					                <div class="slide-image slide-media" style="background: url(<?php bloginfo('template_directory'); ?>/img/home/pht-1.jpg) no-repeat center center; background-size: cover;">
						                <img data-lazy="<?php bloginfo('template_directory'); ?>/img/home/pht-1.jpg" class="image-entity">
						            </div>
					            </figure>
					        </div>
-->
					    </div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="wrapper">
			<div class="row">
				<div class="logo">
					<a href="/">
						<img class="logo" src="<?php bloginfo('template_directory'); ?>/img/global/header/logo.png" />
					</a>
				</div>
				
				<div class="col-12 col-md-7 col-xl-9 text home-intro__text">
				    <div class="textSlider">
						<?php
							$slider_text = $section1;
							if($slider_text) {
								foreach($slider_text as $slide_text) { ?>
							        <div class="item">
							            <h1 class="animated fadeIn">
											<?php echo $slide_text['slide']['tytul_slajdu']; ?>
										</h1>
										<p class="animated fadeIn">
											<?php echo $slide_text['slide']['tekst_slajdu']; ?>
										</p>
					
										<div class="btn-right">
											<a href="<?php echo $slide['slide']['przycisk']; ?>">
												<button class="btn animated fadeIn">
													Pokaż szczegóły
												</button>
											</a>
										</div>
							        </div>
							<?php }
							}
						?>
				    </div>
				</div>
				<div class="col-12 col-md-3">&nbsp;</div>
			</div>
		</div>
	</section>
	
	<section class="home-intro-slider">		
		<div class="wrapper">
			<div class="row">
				<div class="col-12 col-md-8">
					<div class="row">
						<div class="col-12 col-md-6 text home-intro-slider__img" style="background: url(<?php bloginfo('template_directory'); ?>/img/home/be.png) no-repeat center center; background-size: cover;">
						</div>
						<div class="col-12 col-md-6 text home-intro-slider__controls">
							<div class="home-intro-slider__controls__inner">
								<button id="pag-prev"></button>
								<div class="rect"></div>
								<button id="pag-next"></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="home-costs">
		<div class="wrapper wrapper-wider bg home-costs__bg">
			<div class="row">
				<div class="col-12 col-md-6" style="height: 0;">&nbsp;</div>
				<div class="col-12 col-md-6 home-costs__bg-after">
					<div class="img img-bg" style="background: url(<?php echo $section2['obraz']['url']; ?>) no-repeat center center; background-size: cover;">
						<?php include('tpl-parts/loader.php'); ?>
					</div>
				</div>
			</div>
		</div>
		
		<div class="wrapper">
			<div class="row">
				<div class="col-12 col-md-6 text home-costs__text">
					<h2>
						<strong><?php echo $section2['tytul']; ?></strong>
					</h2>
					<p>
						<?php echo $section2['tekst']; ?>
					</p>
				</div>
				<div class="col-12 col-md-6">&nbsp;</div>
			</div>
		</div>
	</section>
	
	<section class="home-security">
		<div class="wrapper wrapper-wider bg home-security__bg">
			<div class="row">
				<div class="col-12 col-md-6 home-security__bg__img">
					<div class="img img-bg" style="background: url(<?php echo $section3['obraz']['url']; ?>) no-repeat center center; background-size: cover;">
						<?php include('tpl-parts/loader.php'); ?>
					</div>
				</div>
				<div class="col-12 col-md-6"style="height: 0;">&nbsp;</div>
			</div>
		</div>
		
		<div class="wrapper">
			<div class="row">
				<div class="col-12 col-md-6">&nbsp;</div>
				<div class="col-12 col-md-6 text home-security__text">
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
	
	<section class="home-security-icons"> 
		<div class="wrapper">
			<div class="row">
				<?php
					$icons = $section4;
					foreach($icons as $icon) { ?>
					<div class="col-6 col-md-4">
						<div class="col-12 home-security-icons__pic">
							<img src="<?php echo $icon['ikonka']; ?>">
						</div>
								
						<div class="col-12 home-security-icons__text">
							<?php echo $icon['tekst']; ?>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>
	
	<section class="home-care">
		
		<div class="wrapper wrapper-wider bg home-care__bg">
			<div class="row">
				<div class="col-12 col-md-6" style="height: 0;">&nbsp;</div>
				<div class="col-12 col-md-6 home-care__bg__img">
					<div class="img img-bg" style="background: url(<?php echo $section5['obraz']['url']; ?>) no-repeat center center; background-size: cover;">
						<?php include('tpl-parts/loader.php'); ?>
					</div>
				</div>
			</div>
		</div>
		
		<div class="wrapper">
			<div class="row">
				<div class="col-12 col-md-6 text home-care__text">
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
	
	<section class="home-rest">
		<div class="wrapper wrapper-wider bg home-rest__bg">
			<div class="col-12 col-md-6" style="height: 0;">&nbsp;</div>
			<div class="col-12 col-md-6">
				<div class="img img-bg" style="background: url(<?php echo $section6['obraz']['url']; ?>) no-repeat center center; background-size: cover;">
					<?php include('tpl-parts/loader.php'); ?>
				</div>
			</div>
		</div>
		
		<div class="wrapper">
			<div class="row">
				<div class="col-12 col-md-6">&nbsp;</div>
				<div class="col-12 col-md-6 text home-rest__text">
					<h2>
						<strong><?php echo $section6['tytul']; ?></strong>
					</h2>
					<p>
						<?php echo $section6['tekst']; ?>
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
	
	<?php include('tpl-parts/effects.php');
include('footer.inc.php') ?>