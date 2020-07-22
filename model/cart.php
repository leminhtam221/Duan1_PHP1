<?php

// them san pham moi vao gio hang
function addToCart($id){
	
	if(!isset($_COOKIE['cart'])){ // case gio hang rong
		$cart = array($id);
		$cart_str = join($cart, ',');
		setcookie('cart',$cart_str,time() + (86400 * 180), "/");
		unset($cart);
	}
	else{  // da co san pham trong gio hang
		$cart = explode(',',$_COOKIE['cart']);
		if(!in_array($id, $cart)){
			array_push($cart, $id);
			$cart_str = join($cart, ',');
			setcookie('cart',$cart_str,time() + (86400 * 180), "/");
			unset($cart);
		}
	}
}

// lay cac san pham trong gio hang
function getCart(){
	$items=[];
	$cart = explode(',',$_COOKIE['cart']);
	foreach ($cart as $item) {
		$sql = "select * from khoa_hoc where id=$item";
		$temp=find($sql);
		array_push($items, $temp);
	}
	return $items;
}

// lam moi gio hang
function clearCart(){
	setcookie('cart','',time() - (86400 * 180), "/");
}

// dem so hang -> so luong san pham gio hang
function rowCount(){
	$cart = explode(',',$_COOKIE['cart']);
	$qty = count($cart);
	unset($cart);
	return $qty;
}

// xoa san pham trong gio hang
function deleteCartItem($id){
	// tim va xoa
	$cart = explode(',',$_COOKIE['cart']);
	for($i=0;$i<count($cart);$i++) {
		if($cart[$i]==$id){
			array_splice($cart, $i,1);
		}
	}
	$cart_str = join($cart, ',');
	setcookie('cart',$cart_str,time() + (86400 * 180), "/");
	unset($cart);
}