<?php
function wpc_remove_height_cropping($height) {
	return '9999';
}
function wpc_remove_width_cropping($width) {
	return '9999';
}

add_filter( 'et_pb_blog_image_height', 'wpc_remove_height_cropping' );
add_filter( 'et_pb_blog_image_width', 'wpc_remove_width_cropping' );

