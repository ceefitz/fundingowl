<?php
if (is_category( )) {
  $industries = get_query_var('industries');
  $parent = get_category ($industries);
  if ($industries->parent) {
    wp_list_categories ('child_of=' . $industries->parent);
    } else {
    wp_list_categories ('child_of=' . $industries);
  }
}
?>
<?php if ( is_active_sidebar( 'three' ) ) : ?>
	<div id="sidebar-three" class="secondary" role="complementary">
		<?php dynamic_sidebar( 'three' ); ?>
	</div>
<?php endif; ?>