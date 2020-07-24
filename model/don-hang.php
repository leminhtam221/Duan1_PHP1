<?php
  function loadDonHangDaThanhToan($idUser){
    $sql = "SELECT * FROM don_hang WHERE id_user='$idUser' AND trang_thai = 2";
    $sql.= " ORDER BY id DESC";
    return findMultiple($sql);
  }

?>