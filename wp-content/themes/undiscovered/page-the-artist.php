<?php get_header();  ?>

<div class="banner-section" style=" background-image: url('<?php echo the_field('the_artist_banner_image'); ?>')">
	<div class="container" >
		<div class="padding-top-bottom module">
	<span class="the-artist-1st-title"><?php echo the_field('artist_banner_title'); ?></span>
	<span class="the-artist-2nd-title"><?php echo the_field('artist_banner_sub_title'); ?></span>
	<span class="custom-button"><a href="/sweetfixbakery/contact-form/">Contact Us</a></span>
	</div>
	</div>

</div>

<div class="contentbg">
	<div class="container">
		<div class="first-border-bg" style="margin-top:50px; margin-bottom:50px;">
			<div class="second-border-bg">
				<div class="module">
						<h2><?php echo the_field('artist_title'); ?></h2>
					<div style="text-align:center; padding:10px 0 10px 0;"><img src = "<?php echo bloginfo('template_url')?>/img/border-arrow.png" alt="" /></div>
					<?php echo the_field('artist_content'); ?>
					<?php echo the_field('artist_signature'); ?>
				</div>		
			</div>
		</div>
	
	
	<?php include_once 'contact-form.php';?>


		<div class="first-border-bg" style="margin-top:50px; margin-bottom:50px;">
			<div class="second-border-bg ">
			<div class="module">
				<h2>What They Say</h2>
				
				<div style="text-align:center; padding:10px 0 10px 0;">
					<img src = "<?php echo bloginfo('template_url')?>/img/border-arrow.png" alt="" />
				</div>
				<!--div id ="owl-meettheteam" class="owl-carousel ">
					<?php
					$args = array('post_type' => 'what_they_say ');
					query_posts( $args );
					while (have_posts()) : the_post();
					?>
					<div style="clear:both; overflow: hidden;">
					
					<div style="clear:both; overflow: hidden;color: #bb8c15; font-size: 15px; font-family: ProximaNova;"><?php echo get_the_excerpt(); ?></div>
					<p style="font-family: 'Dancing Script', cursive; font-size:26px; font-weight:bold;"><?php the_title(); ?></p>
					</div>
					<?php endwhile;?>   
	        	</div-->
	        	 <div style="color:#bb8c15; font-family: 'Dancing Script', cursive; font-size:45px; padding-bottom:30px; padding-top:25px; font-weight:normal;">Coming Soon...</div>
	        	</div>
			</div>
		</div>


		

	</div>

</div>

<?php get_footer(); ?>
