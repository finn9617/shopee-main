<?php 
add_action( 'init-1', "theme_setup");



function theme_setup(){
  // PHP Script here
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://shopee.vn/api/v4/flash_sale/get_all_itemids", 
    CURLOPT_CUSTOMREQUEST => "GET", 
  ));
  // $responsePromotionid = curl_exec($curl);
  // $err = curl_error($curl);

  // curl_close($curl);
  // if ($err) {
  //   echo "cURL Error #:" . $err;
  // } else {
  //   // print( json_decode($responsePromotionid)[0]);
    
  //   // echo gettype( $idColetion);
  // }
  // $idColetion = json_decode($responsePromotionid)[0];

  // curl_setopt_array($curl, array(
  //   CURLOPT_URL => "https://shopee.vn/api/v4/flash_sale/get_all_itemids?need_personalize=true&promotionid=187710547644417&sort_soldout=true&tracker_info_version=0", 
  //   CURLOPT_CUSTOMREQUEST => "GET", 
  // ));
  // $response = curl_exec($curl);
  // $err = curl_error($curl);
  // curl_close($curl);
  // if ($err) {
  //   echo "cURL Error #:" . $err;
  // } else {
  //   echo $response;
  // }

 }
?>