<?php 
  function loadChiTietDonHang($idDonHang){
    $sql = "SELECT * FROM chi_tiet_don_hang WHERE id_don_hang = '$idDonHang'";
    $sql.= " ORDER BY id DESC";
    return findMultiple($sql);
  }
  function addToOrderDetails($price, $orderId, $courseId, $code){
    $sql = "INSERT into chi_tiet_don_hang(don_gia,id_don_hang,id_khoa_hoc, active_code) values('$price', '$orderId', '$courseId', '$code')";
    execSQL($sql,0);
  }

?>