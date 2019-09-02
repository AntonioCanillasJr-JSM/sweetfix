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
						<div class="module">
						<span class="entry-date" style="font-family:ProximaNova, serif; font-size: 12px; color:#bb8c15"><?php echo get_the_date(); ?></span>

							<div style="margin-top:20px;">
							<img class="single-image" src="<?php  echo the_post_thumbnail_url(); ?>">
							</div>
						</div>
						<div class="single-blog-content">
						<div class="module">
						<?php wp_reset_postdata() ?>
						<?php the_content(); ?>
						</div>
							
						
						</div>
					
					
						<div class="col-md-6">
							<div class="row module">
								<div class="share-post-icons">
								<span style="font-family: 'Playfair Display', serif;">Share Post:</span>
									   <?php
					              // Get current page URL
					              $crunchifyURL = get_permalink();

					              // Get current page title
					              $crunchifyTitle = str_replace( ' ', '%20', get_the_title());

					              $twitterURL = 'https://twitter.com/intent/tweet?text='.$crunchifyTitle.'&amp;url='.$crunchifyURL.'&amp;via=Crunchify';
					              $facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$crunchifyURL;
					              $instagram = 'https://www.instagram.com/dkicanada/='.$crunchifyURL;

           						 ?>


									<a href="<?php echo $facebookURL ?>" onclick="window.open('<?php echo $facebookURL ?>', 'newwindow', 'width=500, height=300'); return false;" ><img src = "<?php echo bloginfo('template_url')?>/img/social/social_facebook_circle.png" alt="" /></a>
									<a href="<?php echo $twitterURL ?>" onclick="window.open('<?php echo $twitterURL ?>', 'newwindow', 'width=500, height=300'); return false;" >	<img src = "<?php echo bloginfo('template_url')?>/img/social/social_twitter_circle.png" alt="" /></a>
									<a href="<?php echo $instagram ?>" onclick="window.open('<?php echo $instagram ?>', 'newwindow', 'width=500, height=300'); return false;" ><img src = "<?php echo bloginfo('template_url')?>/img/social/social_instagram_circle.png" alt="" /></a>

								
								</div>
									<?php include_once'comment-form.php';?>
							
							</div>
						</div>
						<div class="col-md-6">
							<div class="row module">
								<div class="searchtags" style="margin-top: 73px;">
								<h2>Search By Tags</h2>
								<div style="margin-top:30px; "></div>
								<div style="font-family: 'Playfair Display', serif;">
								<?php
									$posttags = get_the_tags();
									if ($posttags) {
									  foreach($posttags as $tag) {
									  	echo "<div class='tagsspacing'>";
									  	 echo $tag->name . ''; 
									  	 	echo "</div>";
									  	 

									  }

									}
									else {
										echo "This Post has No tags";
									}
								?>
								</div>
								</div>
 
								<div class="searchtags" style="margin-top:48px;">
								<h2>Other Articles</h2>
								<div style="margin-top:10px;"></div>
								<div style="margin-left:-10px;">
								<?php    query_posts(array('post_type' => 'the_blog','posts_per_page' => '3', 'orderby'   => 'rand'  ) ); ?>
								<?php while (have_posts()) : the_post(); ?>
								<div class="col-md-4 col-sm-12 col-xs-12" style="margin-top:10px; ">
									<div class="row other-img" style="position:relative;">
										<div class="other-bg-thumb"></div>
										<img class="single-image" src=" <?php  echo the_post_thumbnail_url('thumbnail');  ?>">
										<div class="position-blog-text">
											<div class="blog-thumb-other">
												<span><?php the_title(); ?></span>
												<div class="btn-other"><a href="<?php echo get_permalink(); ?>">Read More</a></div>
											</div>
										</div>
									</div>
								</div>
								<?php endwhile;?>
								</div>
								</div>
							</div>
						</div>
				</div>		
			</div>
		</article>	
	</div>
</div>

<?php get_footer(); ?>
