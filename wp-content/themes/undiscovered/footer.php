	</div><!-- #content -->

	<footer id="colophon" class="site-footer border-footer" role="contentinfo">
		<div class="container ">
			<div class="row module">
				<div class="col-md-3 col-sm-12 col-xs-12">
					<div class="borderfooter">
						<?php if ( undiscovered_options( 'logotype' ) ) : ?>
							<a class="logotype-img" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img class="img-responsive1" src="<?php echo undiscovered_options( 'logotype' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
						<?php else : ?>
							<a class="logotype-text" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
						<?php endif; ?>
						<div class="social-icons hidden-sm  hidden-xs margin-icons" >
							<?php social_icons_list(); ?>
						</div>
					</div>
				</div>


				<div class="col-md-3 col-sm-12 col-xs-12">
					<div class="borderfooter">
					
							<?php wp_nav_menu( array('theme_location' => 'second', 'menu_class'     => 'footer', )); ?>
						
					</div>
				</div>

				<div class="col-md-3 col-sm-12 col-xs-12">
					<div class="borderfooter">
					
							<?php wp_nav_menu( array('theme_location' => 'third', 'menu_class'     => 'footer', )); ?>
						
					</div>
				</div>

				<div class="col-md-3 col-sm-12 col-xs-12">
					<div class="weeklysignup">
						<h2>Weekly Signup</h2>
						<p>Sign up for our eNewsletter to stay up to date with our specials, promotions, and updates with our products.</p>
						
							<?php echo do_shortcode('[contact-form-7 id="82" title="Weekly Sign Up" html_class="use-floating-validation-tip"]'); ?>
						
					</div>
				</div>
			
			</div>


			<div class=" module" style="margin-top:30px; padding-bottom:10px;">
				<div class="col-md-4 ">
					<div class="social-icons hidden-md hidden-lg" style="text-align:center;"><?php social_icons_list(); ?></div>
				<div class="title-copyright">
					<a href="http://slim-ent.com/" target="_blank">Website Design</a> by  SLIM Enterprises
				</div>
				</div>
				<div class="col-md-4 " style="text-align:center;">
				<div class="title-copyright">
					©2016. <a href="<?php echo get_home_url(); ?>">sweetfixbakery.com</a>. All Rights Reserved.
				</div>
				</div>
				<div class="col-md-4 " style="text-align:right;">
					<div class="title-copyright">
						<a href="https://junespringmultimedia.com" target="_blank">Web Hosting</a> by June Spring Multimedia
					</div>
				</div>
			</div>
		</div>
	</footer>
<span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
<meta itemprop="streetAddress" content="Woodbine Shopping Centre, 500 Rexdale Blvd">
<meta itemprop="addressLocality" content="Toronto, ON">
<meta itemprop="addressCountry" content="Canada"></span>
<span itemprop="review" itemscope itemtype="http://schema.org/Review">
<span itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
<meta itemprop="ratingValue" content="5">
<meta itemprop="bestRating" content="5">
<meta itemprop="worstRating" content="1"></span></span>
<meta itemprop="name" content="Sweet Fix Bakery">
<meta itemprop="url" content="http://sweetfixbakery.com/">
<meta itemprop="telephone" content="(647) 350-1105">
<meta itemprop="email" content="elaine@sweetfixbakery.com">

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
