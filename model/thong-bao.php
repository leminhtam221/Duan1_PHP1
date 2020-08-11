<?php
  function loadThongBaoUser($idUser){
    $sql = "SELECT * FROM thong_bao WHERE id_user='$idUser'";
    $sql .= " ORDER BY id DESC";
    return findMultiple($sql);
  }
  function loadThongBaoGiangVien($idGiangVien){
    $sql = "SELECT * FROM thong_bao WHERE id_giang_vien='$idGiangVien'";
    $sql .= " ORDER BY id DESC";
    return findMultiple($sql);
  }
  function notificationHaveSeen($idPeople,$column){
    $sql = "UPDATE thong_bao SET trang_thai = 2 WHERE trang_thai = 1 AND $column = '$idPeople'";
    execSQL($sql,1);
  }
  function detailNotificationHaveSeen($idThongBao){
    $sql = "UPDATE thong_bao SET trang_thai = 3 WHERE id = '$idThongBao'";
    execSQL($sql,1);
  }
?>