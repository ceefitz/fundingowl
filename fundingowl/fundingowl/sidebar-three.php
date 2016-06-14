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

<?php
if (is_category()) {
    $cat = get_query_var('industries');
    $this_category = get_category($industries);
    $this_category = wp_list_categories('hide_empty=0&hierarchical=true&orderby=id&show_count=0&title_li=&use_desc_for_title=1&child_of='.$this_category->cat_ID."&echo=0");
    if($this_category !='<li>No categories</li>')
    {
     echo '<h3>Search by industry</h3>'; 
     echo '<ul>'.$this_category.'</ul>'; 
    }
}
?>