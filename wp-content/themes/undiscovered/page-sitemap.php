<?php get_header();  ?>

  

<div class="contentbg">
	<div class="container">
		<div class="first-border-bg" style="margin-top:50px; margin-bottom:50px;">
			<div class="second-border-bg">
						<h2><?php the_title(); ?></h2>
					<div style="text-align:center; padding:10px 0 10px 0;"><img src = "<?php echo bloginfo('template_url')?>/img/border-arrow.png" alt="" /></div>
					<div class="sitemap module" style="margin-bottom:50px;">
					<?php wp_nav_menu( array(
								'container'      => 'ul',
								'container_id'   => '',
								'menu_class'     => '',
								'menu_id'        => '',
								'depth'          => '',
								'theme_location' => 'sitemap',
								));
							?>
					</div>		 

			</div>
		</div>
	

		

	</div>

</div>

<?php get_footer(); ?>
