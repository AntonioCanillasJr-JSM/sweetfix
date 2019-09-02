<?php get_header();  ?>

<div class="banner-section animated fadeIn" style=" background-image: url('<?php echo the_field('home_banner_image'); ?>')">
	<div class="container" >
		<div class="padding-top-bottom module">
	<span class="banner-1st-title"><?php echo the_field('home_banner_text'); ?></span>
	<span class="banner-2nd-title"><?php echo the_field('home_banner_text_sub'); ?></span>
	<span class="custom-button"><a href="/sweetfixbakery/contact-form/">Contact Us</a></span>
	</div>
	</div>

</div>

<div class="contentbg">
	<div class="container">
		<div class="first-border-bg" style="margin-top:50px; margin-bottom:50px;">
			<div class="second-border-bg ">
				<div class="module">
						<h2><?php echo the_field('artist_title'); ?></h2>
					<div style="text-align:center; padding:10px 0 10px 0;"><img src = "<?php echo bloginfo('template_url')?>/img/border-arrow.png" alt="" /></div>
					<?php echo the_field('artist_content'); ?>
					<?php echo the_field('artist_signature'); ?>
				</div>	
			</div>
		</div>
	
		<div class="row module ">
			<div class="col-md-4 col-sm-4 col-xs-12">
				<a href="/sweetfixbakery/our-gallery/"><div class="module"><img class="img-responsive" src = "<?php echo the_field('first_image'); ?>" alt="" /></div></a>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<a href="/sweetfixbakery/our-gallery/"><div class="module"><img class="img-responsive" src = "<?php echo the_field('second_image'); ?>" alt="" /></div></a>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<a href="/sweetfixbakery/our-gallery/"><div class="module"><img class="img-responsive" src = "<?php echo the_field('third_image'); ?>" alt="" /></div></a>
			</div>
		</div>


		<div class="first-border-bg" style="margin-top:50px; margin-bottom:50px;">
			<div class="second-border-bg">
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
					<div style="clear:both; overflow: hidden;color: #bb8c15; font-size: 15px; font-family: ProximaNova;">
					
					<?php echo get_the_excerpt(); ?>
					<p style="font-family: 'Dancing Script', cursive; font-size:26px; font-weight:bold;"><?php the_title(); ?></p>
					</div>
					<?php endwhile;?>   
	        	</div-->
	        	<div style="color:#bb8c15; font-family: 'Dancing Script', cursive; font-size:45px; padding-bottom:30px; padding-top:25px; font-weight:normal;">Coming Soon...</div>
	        	</div>
			</div>
		</div>


		<div class="module">
		<div class="row " >
			<?php 
			    query_posts(array( 
			        'post_type' => 'the_blog', 'posts_per_page' => 2
			     
			    ) );  
			?>
			<?php while (have_posts()) : the_post(); ?>
				<div class=" col-md-6 col-sm-12 padding0" style="margin-top:30px; margin-bottom:30px;">
					<div class="homeblog-section " style=" background-image: url('<?php the_post_thumbnail_url(); ?>')">
						<div class="bg-home-thumb">
						<div class="home-blog-content" style=" vertical-align: middle;  display: table-cell;">
							<div class="module">
					        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					        <span style="font-size:18px; color:#fff; display:block; text-align:center;"><?php echo get_the_date(); ?></span>
					        <p><?php echo get_the_excerpt(); ?></p>
					        <span class="custom-button autobtn"><a href="<?php the_permalink() ?>">Read Blog</a></span>
					        </div>
				        </div>	
				        </div>					
			        </div>
			    </div>  
			<?php endwhile;?>
		</div>
	</div>


	<div class="first-border-bg" style="margin-top:50px; margin-bottom:50px;">
		<div class="second-border-bg">
			<div class="module">
			<h2>Instagram Feed</h2>
			<div style="text-align:center; padding:10px 0 30px 0;">
				<img src = "<?php echo bloginfo('template_url')?>/img/border-arrow.png" alt="" />
			</div>
			<style type="text/css">

			.wdi_feed_users {
				display:none!important;

			}

			#wdi_feed_0 .wdi_load_more_wrap, #wdi_feed_0 .wdi_spinner_wrap {
				    margin: 0px auto 0px auto!important;
			    display: block!important;
			    background: #bb8c15!important;
			    border: 1px solid #bb8c15!important;
			    text-align: center!important;
			    font-size: 20px!important;
			    color: #ffffff;
			    font-family: 'Playfair Display', serif!important;
			    width: inherit!important;
			    text-transform: uppercase!important;
			    padding: 5px 40px 5px 40px!important;
			    box-shadow: none!important;
			    height:inherit!important;
			     border-radius: 0!important;
			  
			}



			#wdi_feed_0  .wdi_load_more_text {
				color: #fff!important;
				font-size: 20px!important;

			}
 
			#wdi_feed_0  .wdi_load_more_spinner{
				margin:0 auto!important;
				display: block!important
			}

			#wdi_feed_0 .wdi_load_more_wrap_inner, #wdi_feed_0 .wdi_spinner_wrap_inner {
				display: block!important
			}
			</style>
			<?php echo wdi_feed(array('id'=>'1')); ?>
        	</div>
		</div>
	</div>

	</div>
</div>

<?php get_footer(); ?>
