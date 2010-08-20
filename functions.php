<?php


// Get next or prev link for post
function post_link($id) {
  $p = get_previous_post(true); 
  if (!($p->guid)) {
    $p = get_next_post(true);    
  }
  return $p->guid;		
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
