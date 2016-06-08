
	<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
		<div class="search-form-section"
			<label>
				<span class="screen-reader-text"><?php echo _x( '', 'label' ) ?></span>
				<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search for...', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
			</label>
			<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
		</div>
		<div class="icon">
			    <a href="javascript:void(0);" onclick="myFunction()"><img src="http://fundingowl.ca/wp-content/uploads/2016/06/search-icon.png"></a>
		</div>
	</form>