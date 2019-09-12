<?php
	/*
		Template Name: Kontakt
	*/
	include('header.inc.php') ?>

	<section class="contact">
		<div class="wrapper">
				<div class="logo desktop">
					<a href="/">
						<img class="logo" src="<?php bloginfo('template_directory'); ?>/img/global/header/logo.png" />
					</a>
				</div>
			<div class="row">
				<div class="col-12 col-md-6 text contact__text">
					<h1 class="animated fadeIn">
						<strong>Kontakt</strong>
					</h1>
					<li>
						<div class="img"><img src="<?php bloginfo('template_directory'); ?>/img/global/footer/phone.png" /></div>
						<?php echo of_get_option('phone'); ?>
					</li>
					<li>
						<div class="img"><img src="<?php bloginfo('template_directory'); ?>/img/global/footer/mail.png" /></div>
						<?php echo of_get_option('mail'); ?>
					</li>
					<li>
						<div class="img"><img src="<?php bloginfo('template_directory'); ?>/img/global/footer/address.png" /></div>
						<?php echo of_get_option('address'); ?>
					</li>
				</div>
				<div class="col-12 col-md-6 form contact__form">
					<?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]'); ?>
				</div>
			</div>
		</div>
	</section>
		
<?php include('footer.inc.php') ?>