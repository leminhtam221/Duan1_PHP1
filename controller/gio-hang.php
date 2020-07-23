<?php

if(isset($_COOKIE['cart'])){
  $myCart = getCart();
}

include './view/cart.php';