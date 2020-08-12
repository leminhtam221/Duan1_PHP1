<?php

function RandomString(){
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $randstring = '';
  for ($i = 0; $i < 10; $i++) {
      $randstring .= $characters[rand(0, strlen($characters)-1)];
  }
  return $randstring;
}


if(isset($_COOKIE['cart'])){
  $ordered = false;
  $myCart = getCart();
  $tong = 30000;
  foreach($myCart as $i){
    $tong+=$i['khuyen_mai'];
  }
  if(isset($_POST['order'])){
    $lastId = order($_COOKIE['user_id'],$_POST['phone-number'],$_POST['address'].' '.$_POST['village'].' '.$_POST['district'].' '.$_POST['province'],$_POST['fname'],$_POST['lname'],$tong);
    $cartArr = explode(',',$_COOKIE['cart']);
    for($i=0;$i<count($cartArr);$i++){
      $khoaHoc = loadKhoaHocChiTiet($cartArr[$i]);
      addToOrderDetails($khoaHoc['khuyen_mai'], $lastId, $khoaHoc['id'], RandomString());
      clearCart();
      $ordered = true;
    }
    
  }
}


include './view/checkout.php';