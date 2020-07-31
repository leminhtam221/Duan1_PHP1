<?php

require_once './../model/DB.php';
require_once './../model/user.php';
require_once './../model/giang-vien.php';
require_once './../model/cart.php';

if(isset($_POST['utemp'])){
   $data1 = getUser();
   $data2 = getLecture();
   $isExist = false;
   $arr = array_merge($data1, $data2);
   foreach($arr as $i){
      if($_POST['utemp']==$i['tai_khoan']){
         $isExist = true;
      }
   }
   
   echo $isExist;
}

if(isset($_POST['prodid'])){
   addToCart($_POST['prodid']);
}

if(isset($_POST['delId'])){
   deleteCartItem($_POST['delId']);
   echo true;
}