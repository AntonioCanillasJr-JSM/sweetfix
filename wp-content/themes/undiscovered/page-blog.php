<?php get_header();  ?>



<div class="contentbg">
	<div class="container">
		<div class="first-border-bg" style="margin-top:50px; margin-bottom:50px;">
			<div class="second-border-bg-blog"  style="clear:both; overflow:hidden;">
				<div class="row">
					<h2><?php the_title(); ?></h2> 
					<div style="text-align:center; padding:10px 0 10px 0;">
						<img src = "<?php echo bloginfo('template_url')?>/img/border-arrow.png" alt="" />
					</div>

					<?php 
					      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				      $i = 0;
				      $args = array('post_type' => 'the_blog ','paged'=> $paged,'orderby' => 'post_date','posts_per_page'=>9 ,
						'prev_text'          => __('«  Previous '),
						'next_text'          => __(' Next »'),
				      	);
				      query_posts( $args );
    
					?>
					<?php $r = 1?>
					<?php while (have_posts()) : the_post(); ?>
						<?php if(($r % 3) == 0) { ?>
						<div class="col-md-4 col-sm-6" style="margin-top:30px; margin-bottom:30px;">
							<div class="palette-images border-right-none">
								<div class="module">	
								<a href="<?php the_permalink() ?>">

														
								<div class="blog-section blog-section-bg" style=" background-image: url('<?php the_post_thumbnail_url(); ?>')">
								<div class="bg-home-thumb-blog"></div>
								</div>
								</a>
								<div class="palette-border">
						        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
						          <p style="font-size:12px; color:#58595b"><?php echo get_the_date(); ?></p>
						        <p><?php echo the_excerpt(); ?></p>
						         <span class="custom-button-blog"><a href="<?php the_permalink() ?>">Read More</a></span>
						        </div>
						        </div>
					        </div>
					    </div>  
					     	<?php }else{ ?>
					     	<div class="col-md-4 col-sm-6" style="margin-top:30px; margin-bottom:30px;">
							<div class="palette-images ">
								<div class="module">
								<a href="<?php the_permalink() ?>">

								<div class="blog-section blog-section-bg" style=" background-image: url('<?php the_post_thumbnail_url(); ?>')">
									<div class="bg-home-thumb-blog"></div>
								</div>
								</a>
								<div class="palette-border">
						        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
						          <p style="font-size:12px; color:#58595b"><?php echo get_the_date(); ?></p>
						        <p><?php echo the_excerpt(); ?></p>
						         <span class="custom-button-blog"><a href="<?php the_permalink() ?>">Read More</a></span>
						        </div>
						        </div>
					        </div>
					    </div>  
					    	<?php }	$r++;		?>
					<?php endwhile;


					?>
						<div class="col-md-12 pagenationnumber" style='text-align:center'>
					 	 <?php echo paginate_links( $args );  ?>
					 	 </div>
					 	 <p>&nbsp;</p>
				</div>

						
			</div>		
		</div>
	</div>
</div>

<?php get_footer(); ?>
