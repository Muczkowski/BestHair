			</div>
			
			<footer data-sticky-footer class="footer">
				<div class="wrapper">
					<div class="row footer-row">
						<div class="col col-12 col-md-3 col-sm-6 footer__logo">
							<div class="logo">
								<a href="<?php get_site_url(); ?>">
									<img class="logo" src="<?php bloginfo('template_directory'); ?>/img/global/header/logo.png" />
								</a>
							</div>
						</div>
						
						<div class="col col-6 col-md-4 col-sm-6 footer__contact">
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
						
						<div class="col col-6 col-md-3 footer__nav">
							<?php 
								$footerNav = array(
								    'sort_column' => 'menu_order',
								    'level' => 0,
								    'theme_location' => 'footer_nav',
								    'container'      => ''
								);
								
								wp_nav_menu( $footerNav );
							?>
						</div>
						
						<div class="col col-12 col-md-2 col-sm-6 footer__social">
							<div>
								<ul>
									<li>
										<a href="<?php echo of_get_option('fb_url'); ?>" target="_blank">
											<img src="<?php bloginfo('template_directory'); ?>/img/global/footer/fb.png" />
										</a>
									</li>
									<li>
										<a href="<?php echo of_get_option('inst_url'); ?>" target="_blank">
											<img src="<?php bloginfo('template_directory'); ?>/img/global/footer/inst.png" />
										</a>
									</li>
									<li>
										<a href="<?php echo of_get_option('twitt_url'); ?>" target="_blank">
											<img src="<?php bloginfo('template_directory'); ?>/img/global/footer/twitt.png" />
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-12 footer__copy"><p>Copyrights Best Hair. All rights reserved.</p></div>
<!--
						<div class="col-12 footer__madeby">
							<a href="https://websitestyle.pl" alt="Website Style">Website Style<br />Strony Internetowe</a>
						</div>
-->
					</div>
				</div>
			</footer>
		</main>
		<?php wp_footer(); ?>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/compressed.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/lightgallery.js"></script>
		
		<script>
			// Images Loaded
			/* $grid.imagesLoaded('CONTAINER').done( function() {
				
			} */
			
			stickyFooter.init();

			var myLazyLoad = new LazyLoad({
			    elements_selector: ".lazy"
			});
			
			// 	Nav
			function menu() {
				var togglerbt = document.getElementById('menu-toggler');
				var nav = document.getElementById('menu');
				var navElem = document.querySelectorAll('nav.fixed ul li')
				
				var i = 0;
				for(one of navElem) {
					one.style.animationDelay = ''+i*(0.1)+'s';
					i++;
				}
				
				togglerbt.addEventListener('click', function() {
					nav.classList.toggle('open');
				});
			}
			menu();
			
			lightGallery(document.getElementById('lightgallery'), {
			    thumbnail:true
			});
			
			function lazyimgs() {
				
				var bg_images = document.querySelectorAll('.img-bg');
				bg_images.forEach(loadbg_img);
				
				i=0
				
				function loadbg_img(item) {
				  imagesLoaded( item, { background: true }, function(item) {
					var elms = document.querySelectorAll("[id='loader']");
					elms[i].classList.add('loaded');
					i++;
				  });
				}
				  
			};
			
			lazyimgs();
			
			// 	Animations:
			ScrollReveal({
			    reset: false,
			    duration: 1500,
			    distance: '10px',
			    delay: 100
			}).reveal('button.btn');
			
			ScrollReveal({
			    reset: false,
			    duration: 2000,
			    distance: '30px'
			}).reveal('h1');
			
			ScrollReveal({
			    reset: false,
			    duration: 1500,
			    distance: '20px'
			}).reveal('p');
			
			ScrollReveal({
			    reset: false,
			    duration: 1000,
			    distance: '20px'
			}).reveal('h2');
			
			ScrollReveal({
			    reset: false,
			    duration: 1000,
			    distance: '50px',
			    delay: 300
			}).reveal('.about-care__circle__togglers__toggler');
			
			
			
			
			
			<?php if($post_slug === 'o-nas') { ?>
				// 	Toggler
				Toggler.Init();
			<?php }if($post_slug === 'home') { ?>
			var slideWrapper = $(".slickSlider"),
			    iframes = slideWrapper.find('.embed-player'),
			    lazyImages = slideWrapper.find('.slide-image'),
			    lazyCounter = 0;
			
			// POST commands to YouTube or Vimeo API
			function postMessageToPlayer(player, command){
			  if (player == null || command == null) return;
			  player.contentWindow.postMessage(JSON.stringify(command), "*");
			}
			
			// When the slide is changing
			function playPauseVideo(slick, control){
			  var currentSlide, slideType, startTime, player, video;
			
			  currentSlide = slick.find(".slick-current");
			  slideType = currentSlide.attr("class").split(" ")[1];
			  player = currentSlide.find("iframe").get(0);
			  startTime = currentSlide.data("video-start");
			
			  if (slideType === "vimeo") {
			    switch (control) {
			      case "play":
			        if ((startTime != null && startTime > 0 ) && !currentSlide.hasClass('started')) {
			          currentSlide.addClass('started');
			          postMessageToPlayer(player, {
			            "method": "setCurrentTime",
			            "value" : startTime
			          });
			        }
			        postMessageToPlayer(player, {
			          "method": "play",
			          "value" : 1
			        });
			        break;
			      case "pause":
			        postMessageToPlayer(player, {
			          "method": "pause",
			          "value": 1
			        });
			        break;
			    }
			  } else if (slideType === "youtube") {
			    switch (control) {
			      case "play":
			        postMessageToPlayer(player, {
			          "event": "command",
			          "func": "mute"
			        });
			        postMessageToPlayer(player, {
			          "event": "command",
			          "func": "playVideo"
			        });
			        break;
			      case "pause":
			        postMessageToPlayer(player, {
			          "event": "command",
			          "func": "pauseVideo"
			        });
			        break;
			    }
			  } else if (slideType === "video") {
			    video = currentSlide.children("video").get(0);
			    if (video != null) {
			      if (control === "play"){
			        video.play();
			      } else {
			        video.pause();
			      }
			    }
			  }
			}
			
			// Resize player
			function resizePlayer(iframes, ratio) {
			  if (!iframes[0]) return;
			  var win = $(".slickSlider"),
			      width = win.width(),
			      playerWidth,
			      height = win.height(),
			      playerHeight,
			      ratio = ratio || 16/9;
			
			  iframes.each(function(){
			    var current = $(this);
			    if (width / ratio < height) {
			      playerWidth = Math.ceil(height * ratio);
			      current.width(playerWidth).height(height).css({
			        left: (width - playerWidth) / 2,
			         top: 0
			        });
			    } else {
			      playerHeight = Math.ceil(width / ratio);
			      current.width(width).height(playerHeight).css({
			        left: 0,
			        top: (height - playerHeight) / 2
			      });
			    }
			  });
			}
			
			// DOM Ready
			$(function() {
			  // Initialize
			  slideWrapper.on("init", function(slick){
			    slick = $(slick.currentTarget);
			    setTimeout(function(){
			      playPauseVideo(slick,"play");
			    }, 1000);
			    resizePlayer(iframes, 16/9);
			  });
			  
			  slideWrapper.on("beforeChange", function(event, slick) {
			    slick = $(slick.$slider);
			    playPauseVideo(slick,"pause");
			  });
			  
			  slideWrapper.on("afterChange", function(event, slick) {
			    slick = $(slick.$slider);
			    playPauseVideo(slick,"play");
			  });
			  
			  slideWrapper.on("lazyLoaded", function(event, slick, image, imageSource) {
			    lazyCounter++;
			    if (lazyCounter === lazyImages.length){
			      lazyImages.addClass('show');
			      // slideWrapper.slick("slickPlay");
			    }
			  });
			
				//start the slider
				slideWrapper.slick({
					fade:true,
					autoPlay: true,
					autoplaySpeed: 2000,
					speed:600,
					arrows: false,
					cssEase:"cubic-bezier(0.87, 0.03, 0.41, 0.9)"
				});
			  
				
				$('.textSlider').slick({
					autoplaySpeed:4000,
					autoPlay: true,
					arrows: false,
					autoplaySpeed: 2000,
					speed:600,
				});	
		  		
				document.getElementById('pag-prev').addEventListener('click', function() {
					$(slideWrapper).slick('slickPrev');
					$('.textSlider').slick('slickPrev');
				});		
				
				document.getElementById('pag-next').addEventListener('click', function() {
					$(slideWrapper).slick('slickNext');
					$('.textSlider').slick('slickNext');
				});
			  
			});
			
			// Resize event
			$(window).on("resize.slickVideoPlayer", function(){  
			  resizePlayer(iframes, 16/9);
			});

			<?php } if($post_slug === 'przeszczep') { ?>
			
			var video_container = document.getElementById('videoPlayer-overlay');
			var video = document.getElementById('video');
			var video_outer = document.querySelector('.graft-play__inner');
			var video_inner = document.querySelector('.graft-play__inner__video');
			
			video_container.addEventListener('click', function() {
				video_inner.classList.add('play');
				video_outer.classList.add('play');
				$("#video")[0].src += "&autoplay=1";
				ev.preventDefault();
			});
			
			<?php } ?>
		</script>
	</body>
</html>