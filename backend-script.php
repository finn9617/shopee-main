<?php 


// $table_name = $wpdb->prefix . 'shop_product'; 
// $data = array( 
//     'promotionid' => 123, 
//     'shopid' => 321,  
//     'image' => 'value2',  
//     'is_shop_official' => true,  
//     'raw_discount' => 20,  
//     'price_before_discount' => 10000,  
//     'price' => 5000,  
//     'name' => 'value2',  
//     'flash_sale_stock' =>600,  
// ); 
// $wpdb->insert($table_name, $data); 


if(isset($_GET['last_id']) && !empty($_GET['last_id']) ){
  $lastId= validate($_GET['last_id']);
  $fetchMoreData=fetch_more_data($lastId);
//   echo display_data($fetchMoreData);

}else{
  $fetchDefaultData=fetch_default_data();
  $displayDefaultData= display_data($fetchDefaultData);
}

// validate last id
function validate($value) {
  $value = trim($value);
  $value = stripslashes($value);
  $value = htmlspecialchars($value);
  return $value;
}
function fetch_more_data($lastId ){
  global $wpdb; 
  $posts = $wpdb->get_results($wpdb->prepare("SELECT ID, post_title FROM bz_posts WHERE post_status = 'publish' AND post_type='post' ORDER BY post_date ASC LIMIT 4,10"));
   return $posts; 
}

function display_data($displayData){

    if(is_array($displayData)){

      $text='';
      $text='<div class="display-content" id="load-content">';

    foreach($displayData as $data){
      $text.= "<div class='record'>";
     $text.= "<h1>"  .$data->post_title."</h1>";
      $text.= "</div>";
  }

    $text.="<div class='loader-symbol'><div class='loader' id='10' style='display: none;'></div></div>";
    $text.="</div>";
    return $text;
 }else{
     return $displayData;
 }
}
// fetching padination data
function fetch_default_data( ){
    global $wpdb; 
    $posts = $wpdb->get_results($wpdb->prepare("SELECT ID, post_title FROM bz_posts WHERE post_status = 'publish' AND post_type='post' ORDER BY post_date ASC LIMIT 0,4"));
     return $posts; 
}
?>