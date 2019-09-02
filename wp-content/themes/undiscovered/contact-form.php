<div class=" row" style="margin-top:50px; margin-bottom:50px;">
		<div class="col-md-6 module" >
			<div style="border:1px solid #bb8c15; background:#fff">
			<iframe style="margin-top:9px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2883.521248243537!2d-79.6016422852756!3d43.72049745609576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b3a4be0c4a249%3A0x21d351ad2b025fac!2sWoodbine+Shopping+Centre+%26+Fantasy+Fair!5e0!3m2!1sen!2sph!4v1483507625225" width="100%" height="536" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
		<div class="col-md-6 margin-contact">  
			<div class="first-border-bg">
				<div class="second-border-bg-contact contact-form-height ">

				<div class="module">
				<h2>Contact</h2>

				<div style="text-align:center; padding:10px 0 10px 0;"><img src = "<?php echo bloginfo('template_url')?>/img/border-arrow.png" alt="" /></div>
				<div class="back-toggle"><a href="#back"  style="text-align:left;"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></div>
				<div class="contacttext">
					<p><img style="margin-top:-5px;" src = "<?php echo get_bloginfo('template_directory'); ?>/img/icon-address.png" alt="" />
					 <?php echo the_field('contact_address', 64); ?></p>
 
					<p>
						<img style="margin-top:-5px;" src = "<?php echo get_bloginfo('template_directory'); ?>/img/icon-phone.png" alt="" />
						<span class="phone-text"><?php echo the_field('contact_phone', 64); ?></span>
						<span class="email-wrapp"><img style="margin-top:-3px;" src = "<?php echo get_bloginfo('template_directory'); ?>/img/icon-email.png" alt="" /></i>
						<span class="email-text"><?php echo the_field('contact_email', 64); ?></span></span>
					
					<div style="text-align:center;">
						<img src = "<?php echo bloginfo('template_url')?>/img/contact-border.png" alt="" />
					</div>

					<span class="title-hours">Hours of Operation</span>
					<span class="scheduled-text">
					<?php echo the_field('hours_of_operation', 64); ?>
					</span>
					<div class="cust-btn" style="margin-top:50px;">
					  <a class="custom-button autobtn" href="#contact" id="show">Contact Us</a>
					  </div>

					  </div>
				</div>

				<div class="contactpage-form" style="padding-bottom:20px;">
				<?php echo do_shortcode('[contact-form-7 id="94" title="Contact Form" html_class="use-floating-validation-tip"]'); ?>
				</div>
				</div>
			</div>
		</div>
	</div>

