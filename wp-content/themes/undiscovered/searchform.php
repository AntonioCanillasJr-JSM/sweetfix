
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php _ex( 'Search for:', 'label', 'undiscovered' ); ?></span>
		<input type="search" class="search-field search-field1" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'undiscovered' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'undiscovered' ); ?>">
</form>

