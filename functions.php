<?php 

$response = wp_remote_get( 'https://example.com/api/data' );
if ( is_array( $response ) ) {
  $header = $response['headers']; // array of http header lines
  $body = $response['body']; // use the content
}


?>