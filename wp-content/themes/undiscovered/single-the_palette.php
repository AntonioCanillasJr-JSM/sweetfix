<?php get_header();  ?>



<div class="contentbg">
	<div class="container">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="first-border-bg" style="margin-top:50px; margin-bottom:50px;">
				<div class="second-border-bg"  style="clear:both; overflow:hidden;">
					
						<h2><?php the_title() ?></h2>
						<div style="text-align:center; padding:10px 0 10px 0;">
							<img src = "<?php echo bloginfo('template_url')?>/img/border-arrow.png" alt="" />
						</div>
						<span class="entry-date" style="font-weight:bold; color:#bb8c15"><?php echo get_the_date(); ?></span>

							<div style="margin-top:20px;">
							<img class="single-image" src="<?php  echo the_post_thumbnail_url(); ?>">
							</div>
						
					
						<div class="single-blog-content the-palette-text">
							  <?php 
					      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					      $i = 0;
					      $args = array('post_type' => 'the_palette ','paged'=> $paged,'order'=>'DESC','posts_per_page'=>1 ,
							'prev_text'          => __(' Previous '),
							'next_text'          => __(' Next '),
					      	);
					      query_posts( $args );
						?>
						<?php while (have_posts()) : the_post(); ?>
						<?php wp_reset_postdata() ?>
						<div class="the-palette-blog-content"><?php the_content(); ?></div>
						
							<?php endwhile;	?>
						</div>
						<div style="margin-bottom:25px;" class="col-md-12 pagenationnumber" style='text-align:center'>
	<a href="/sweetfixbakery/the-palette/">Back</a>
</div>


					
					
				</div>		
			</div>
		</article>	
	</div>
</div>

<?php get_footer(); ?>
