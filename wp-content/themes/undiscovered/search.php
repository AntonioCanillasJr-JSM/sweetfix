<?php get_header();  ?>

<div class="contentbg">

	<div class="container" >
	<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'search' ); ?>
			<?php endwhile; ?>

			<?php undiscovered_paging_nav(); ?>
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
		
	</div>

</div>
<?php get_footer(); ?>
