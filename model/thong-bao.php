<?php
  function loadThongBaoUser($idUser){
    $sql = "SELECT * FROM thong_bao WHERE id_user='$idUser'";
    return findMultiple($sql);
  }
  function loadThongBaoGiangVien($idGiangVien){
    $sql = "SELECT * FROM thong_bao WHERE id_giang_vien='$idGiangVien'";
    return findMultiple($sql);
  }
?>