<?php get_header();  ?>



<div class="contentbg">
	<div class="container">
	<?php $query = new WP_Query(array('post_type' => 'the_auction',  'order' => 'ASC')); ?>
	<?php $i = 1 ?>
	<?php while ($query->have_posts()) { $query->the_post();?>
	<?php if( ($i % 2) != 0){ ?>
		<div class="row">
			<div class="col-md-6 the-auction-img hidden-md hidden-lg " style="margin-top:50px; margin-bottom:50px;">
				<div class="module">
				<div class="banner-section-auction animated fadeIn" style=" background-image: url('<?php echo the_post_thumbnail_url('full'); ?>')">
				
				</div>
					</div>
			</div>
			<div class="col-md-6">
				<div class="first-border-bg clearfix-margin">
					<div class="second-border-bg auction-height" >
						<div class="module">		
						<h2><?php the_title() ?></h2>
						
						<div style="text-align:center; padding:10px 0 10px 0;"><img src = "<?php echo bloginfo('template_url')?>/img/border-arrow.png" alt="" /></div>
						<?php the_content() ?>
						<span class="custom-button autobtn" style="margin-top:35px;"><a href="/sweetfixbakery/contact-form/">Contact Us</a></span>
						</div>
					</div>		
				</div>
			</div>
			<div class="col-md-6 the-auction-img hidden-sm hidden-xs " style="margin-top:50px; margin-bottom:50px;">
				<div class="module">
				<div class="banner-section-auction animated fadeIn" style=" background-image: url('<?php echo the_post_thumbnail_url('full'); ?>')">
				
				</div>
					</div>
			</div>
		</div>	

		<?php }else{ ?>
		<div class="row">
			<div class="col-md-6 the-auction-img " style="margin-top:50px; margin-bottom:50px;">
			<div class="module">
					<div class="module">
				<div class="banner-section-auction animated fadeIn" style=" background-image: url('<?php echo the_post_thumbnail_url('full'); ?>')">
				
				</div>
					</div>
					</div>
			</div>
			<div class="col-md-6">
				<div class="first-border-bg clearfix-margin">
					<div class="second-border-bg auction-height" >
					<div class="module">
						<h2><?php the_title() ?></h2>
							
						<div style="text-align:center; padding:10px 0 10px 0;"><img src = "<?php echo bloginfo('template_url')?>/img/border-arrow.png" alt="" /></div>
						<?php the_content() ?>
						<span class="custom-button autobtn" style="margin-top:35px;"><a href="/sweetfixbakery/contact-form/">Contact Us</a></span>
						</div>
					</div>		
				</div>
			</div>
		</div>	
		
	
	<?php } 
			$i++;
		}	
			wp_reset_query();

		?>
	</div>
</div>

<?php get_footer(); ?>
