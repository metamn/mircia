<?php



// Query for multiple posts
// - the query string has the syntax of the query_posts WP function
function query_posts2($query_string) {
  $q = new WP_Query($query_string);
  return $q;
}

// Returns the content of a page
// - $page is the page slug
function page_content($page) {
    $p = get_page_by_path($page);   
    return $p->post_content;
}

// Get next or prev link for post
function post_link($id, $cat) {
  $post = get_previous_post(true); 
  $link = $post->guid;
  if ($post->ID == '') {
    $posts = get_posts('numberposts=1&category='. $cat);
    $link = get_permalink($posts[0]->ID);
  }
  return $link;		
}

// Get post image
function post_image($id, $size='thumbnail') {
  $imgs = post_attachements($id);
  $img = $imgs[0];
  $ret = wp_get_attachment_image_src($img->ID, $size);
  return $ret[0];
}

// Get post attachements
function post_attachements($post_id) {  
  $args = array(
	  'post_type' => 'attachment',
	  'numberposts' => null,
	  'post_status' => null,
	  'post_parent' => $post_id,
	  'orderby' => 'menu_order',
	  'order' => 'ASC'
  ); 
  $attachments = get_posts($args);
  return $attachments;
}

?>
