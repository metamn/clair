<?php 




// Getting the content of a page identified by $title
// - used in Archives to insert a brief description about an archive item
function get_page_by($title) {
  return false;
}

// Returns only the meaningful categories of a post excluding parent categories like Aspects, Business, Technology ...
function post_categories($id) {
  $exclude = array(3, 8, 14);
  foreach ((get_the_category($id)) as $cat) {    
    if (!(in_array($cat->cat_ID, $exclude))) {
      echo '<li><a href="'.get_category_link($cat->cat_ID).'">'.$cat->cat_name .'</a></li>';
    }
  }
}

?>
