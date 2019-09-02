<?php get_header();  ?>



<div class="contentbg">
	<div class="container">
		
			<div class="first-border-bg" style="margin-top:50px; margin-bottom:50px;">
				<div class="second-border-bg"  style="clear:both; overflow:hidden;">
							<h2>What They Say</h2>

						<div style="text-align:center; padding:10px 0 10px 0;">
							<img src = "<?php echo bloginfo('template_url')?>/img/border-arrow.png" alt="" />
						</div>

						<!--?php    query_posts(array('post_type' => 'what_they_say'  ) ); ?>
						<?php while (have_posts()) : the_post(); ?>
							
							<div class="col-md-6 testimonial-align" style="padding-bottom:30px; position:relative;">
								<div class="module">   
								<p><img height="30" width="38"  src = "<?php echo bloginfo('template_url')?>/img/icon-quote.png" alt="" /></p>	
								    
								<p><?php echo get_the_excerpt(); ?></p>
								<p style="font-family: 'Dancing Script', cursive; font-size:26px; font-weight:bold;"><?php the_title(); ?></p>
						 	   </div>  
						    </div>
						<?php endwhile;?>-->
						<div style="color:#bb8c15; font-family: 'Dancing Script', cursive; font-size:45px; padding-bottom:30px; padding-top:25px; font-weight:normal;">Coming Soon...</div>
					
				</div>		
			</div>
		
	

	</div>

</div>

<?php get_footer(); ?>
