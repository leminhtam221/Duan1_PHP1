<?php

if(isset($_COOKIE['cart'])){
  $myCart = getCart();
  $tong = 30000;
  foreach($myCart as $i){
    $tong+=$i['khuyen_mai'];
  }
}

include './view/checkout.php';