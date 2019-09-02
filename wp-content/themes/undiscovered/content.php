<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="contentbg">
	<div class="container">
		<div class="first-border-bg" style="margin-top:50px; margin-bottom:50px;">
			<div class="second-border-bg">
	<header class="entry-header">
		

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php undiscovered_posted_on(); ?>
		</div>
		<?php endif; ?>

			<h2><?php the_title(); ?></h2>
					<div style="text-align:center; padding:10px 0 10px 0;"><img src = "<?php echo bloginfo('template_url')?>/img/border-arrow.png" alt="" /></div>

	</header>

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary" style="color:#000">
		<?php the_excerpt(); ?>
	</div>
	<?php else : ?>
	<div class="entry-content">
		<?php the_content( __( 'read more <span class="meta-nav">&raquo;</span>', 'undiscovered' ) ); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'undiscovered' ),
				'after'  => '</div>',
			) );
		?>
	</div>
	<?php endif; ?>
</article>
</div>
</div>
</div>
</div>