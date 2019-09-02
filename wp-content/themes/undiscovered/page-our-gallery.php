<?php get_header();  ?>

<div class="contentbg">

	<div class="container" >
		<div class="gallery-image">

		<div class="row">	
		<?php
/* 
 * Paginate Advanced Custom Field repeater
 */

if( get_query_var('page') ) {
  $page = get_query_var( 'page' );
} else {
  $page = 1;
}

// Variables
$row              = 0;
$images_per_page  = 15; // How many images to display on each page
$images           = get_field( 'image' );
$total            = count( $images );
$pages            = ceil( $total / $images_per_page );
$min              = ( ( $page * $images_per_page ) - $images_per_page ) + 1;
$max              = ( $min + $images_per_page ) - 1;

// ACF Loop
if( have_rows( 'image' ) ) : ?>
  	<?php
	$images = get_field('image');
  	 foreach( $images as $image  ):  $row++;
	    // Ignore this image if $row is lower than $min
	    if($row < $min) { continue; }
	    // Stop loop completely if $row is higher than $max
	    if($row > $max) { break; } ?>                     
      <div class="col-md-4 col-sm-6 col-xs-12" style="margin-top:20px; margin-bottom:20px;">

      <div class="module">
       <a class="borderthumbnail" href="#" data-image-id="" data-toggle="modal" data-title="<?php echo $image['title']; ?>" data-caption="<?php echo $image['caption']; ?>" data-image="<?php echo $image['url']; ?>" data-target="#image-gallery">
     <div class="blog-section-gallery " style="    border: 3px solid #bb8c15; background-image: url('<?php echo $image['url']; ?>')"></div>
     
    
     </a>	 
     </div>
	  </div>

	  <?php endforeach;

	  echo "</div><div class='col-md-12 pagenationnumber module' style='text-align:center;  padding-bottom: 10px;'>";
	  // Pagination
	  echo paginate_links( array(
	    'base' => get_permalink() . '%#%' . '/',
	    'format' => '?page=%#%',
	    'current' => $page,
	    'total' => $pages,
		'prev_text'          => __('  Previous '),
		'next_text'          => __(' Next '),
	  ) );

	  echo "</div>";
	  ?>

<?php else: ?>

  No images found

<?php endif; ?>
			
			
		</div>



	</div>




	<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div style="clear:both; overflow:hidden; padding:10px;">
	                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" style="font-size:35px; margin-right:20px;">×</span><span class="sr-only">Close</span></button>
	                <!--h4 class="modal-title title-gallery" id="image-gallery-title"></h4-->
	            </div>
	            <div class="modal-body img-responsive" >
	                <img id="image-gallery-image" class="img-responsive" src="">
	            </div>
	            <div class="modal-footer">

	                <div class="col-md-2">
	                	<div class="gallerybtn">
	                    <button type="button" class="btn btn-primary" id="show-previous-image">Previous</button>
	                    </div>
	                </div>

	                <div class="col-md-8 text-justify" id="image-gallery-caption">
	                   <?php echo $image['caption']; ?>
	                </div>

	                <div class="col-md-2">
	                <div class="gallerybtn">
	                    <button type="button" id="show-next-image" class="btn btn-default">Next</button>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

</div>
<?php get_footer(); ?>
