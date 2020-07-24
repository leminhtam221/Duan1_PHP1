<?php
  function loadVideoTheoChuongHoc($idChuong){
    $sql = "SELECT * FROM video WHERE id_chuong = '$idChuong'";
    return findMultiple($sql);
  }

  function loadChiTietVideo($idVideo){
    $sql = "SELECT * FROM video WHERE id = '$idVideo'";
    return find($sql);
  }
?>