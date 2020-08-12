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
			echo true;
		}
		else{
			echo false;
		}
	}
}

// lay cac san pham trong gio hang
function getCart(){
	$items=[];
	$cart = explode(',',$_COOKIE['cart']);
	foreach ($cart as $item) {
		$sql = "select khoa_hoc.id, ten_khoa_hoc, khoa_hoc.hinh_anh, don_gia, khuyen_mai, ho_ten, ten_danh_muc from khoa_hoc inner join giang_vien on id_giang_vien=giang_vien.id inner join danh_muc on khoa_hoc.id_danh_muc=danh_muc.id where khoa_hoc.id=$item";
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
	if(isset($_COOKIE['cart'])){
		$cart = explode(',',$_COOKIE['cart']);
		$qty = count($cart);
		unset($cart);
	}else{
		$qty=0;
	}
	
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