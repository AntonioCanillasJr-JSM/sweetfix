<?php get_header();  ?>



<div class="contentbg">
	<div class="container">
		
			<div class="first-border-bg" style="margin-top:50px; margin-bottom:50px;">
				<div class="second-border-bg-blog the-pallete-border"  style="clear:both; overflow:hidden;">
							<h2><?php the_title(); ?></h2>
						<div style="text-align:center; padding:10px 0 10px 0;"><img src = "<?php echo bloginfo('template_url')?>/img/border-arrow.png" alt="" /></div>

					
					

						  <?php 
					      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					      $i = 0;
					      $args = array('post_type' => 'the_palette ','paged'=> $paged,'order'=>'DESC','posts_per_page'=>12 ,
							'prev_text'          => __(' Previous '),
							'next_text'          => __(' Next '),
					      	);
					      query_posts( $args );
						?>
						<?php $r = 1?>
						<?php while (have_posts()) : the_post(); ?>
						<?php if(($r % 3) == 0) { ?>
							<div class="col-md-4">
								<div class="palette-images palette-images-1 border-right-none">
									<div class="module">
									<a href="<?php the_permalink() ?>"><img src ="<?php the_post_thumbnail_url('full'); ?> " alt="" /></a>
									<div class="palette-border">
							        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
							        <p><?php echo get_the_excerpt(); ?></p>
							        </div>
							        </div>
						        </div>
						    </div>  
					
					
					 	<?php }else{ ?>
							<div class="col-md-4">
								<div class="palette-images  palette-images-1">
									<div class="module">
									<a href="<?php the_permalink() ?>"><img src ="<?php the_post_thumbnail_url('full'); ?> " alt="" /></a>
									<div class="palette-border">
							        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
							        <p><?php echo get_the_excerpt(); ?></p>
							        </div>
							        </div>
						        </div>
						    </div>  
						  
					 	<?php }	$r++;		?>
					 		<?php endwhile;	?>
					 	 <p>&nbsp;</p>
					 	   


<div class="col-md-12 pagenationnumber" style='text-align:center'>
<?php echo paginate_links( $args );  ?>
</div>

					
				</div>		
			</div>
		
	

	</div>

</div>

<?php get_footer(); ?>
