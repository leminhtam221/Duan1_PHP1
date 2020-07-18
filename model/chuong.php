<?php
  function loadChuongTheoKhoaHoc($idKhoaHoc){
    $sql = "SELECT * FROM chuong WHERE id_khoa_hoc='$idKhoaHoc'";
    return findMultiple($sql);
  }
?>