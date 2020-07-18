<?php
  function loadVideoTheoChuongHoc($idChuong){
    $sql = "SELECT * FROM video WHERE id_chuong = '$idChuong'";
    return findMultiple($sql);
  }
?>