<?php get_header();  ?>


<div class="contentbg">
	<div class="container">
		<div class="first-border-bg" style="margin-top:50px; margin-bottom:50px;">
			<div class="second-border-bg">
						<h2><?php the_title(); ?></h2>
					<div style="text-align:center; padding:10px 0 10px 0;"><img src = "<?php echo bloginfo('template_url')?>/img/border-arrow.png" alt="" /></div>

         <div style="color:#bb8c15; font-family: 'Dancing Script', cursive; font-size:45px; padding-bottom:30px; padding-top:25px; font-weight:normal;">Coming Soon...</div>
					   <!--div class="fancy-collapse-panel">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

              <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : -1;
                $i = 0;
                $args = array('post_type' => 'the_faq','paged'=> $paged,'order'=>'ASC','posts_per_page'=>-1);
                query_posts( $args );
                while (have_posts()) : the_post();
              ?>

                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading<?php echo $i; ?>">
                    <h4 class="panel-title text-left-xs">
                        <a class="<?php echo ($i==0 ? '' : 'collapsed'); ?>" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>" aria-expanded="<?php echo ($i==0 ? 'true' : 'false'); ?>" aria-controls="collapse<?php echo $i; ?>">
                          <?php echo get_the_title(); ?>
                        </a>
                    </h4>
                  </div>
                  <div id="collapse<?php echo $i; ?>" class="panel-collapse collapse <?php echo ($i==0 ? 'in' : ''); ?>" role="tabpanel" aria-labelledby="heading<?php echo $i; ?>">
                    <div class="panel-body">
                      <?php the_content(); ?>
                    </div>
                  </div>
                </div>
              <?php
                $i++;
                endwhile;
              ?>
            </div>
          </div-->

			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>


