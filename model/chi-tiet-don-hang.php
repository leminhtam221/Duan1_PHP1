<?php 
  function loadChiTietDonHang($idDonHang){
    $sql = "SELECT * FROM chi_tiet_don_hang WHERE id_don_hang = '$idDonHang'";
    return findMultiple($sql);
  }

?>