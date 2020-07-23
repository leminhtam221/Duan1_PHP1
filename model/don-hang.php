<?php
  function loadDonHangDaThanhToan($idUser){
    $sql = "SELECT * FROM don_hang WHERE id_user='$idUser' AND trang_thai = 2";
    return findMultiple($sql);
  }

?>