<?php
  function loadChuongTheoKhoaHoc($idKhoaHoc){
    $sql = "SELECT * FROM chuong WHERE id_khoa_hoc='$idKhoaHoc'";
    return findMultiple($sql);
  }

  function themChuongHoc($tenChuong, $idKhoaHoc){
    $sql = "INSERT INTO chuong(ten_chuong,id_khoa_hoc) VALUES('$tenChuong','$idKhoaHoc')";
    execSQL($sql,0);
  }

  function loadChiTietChuongHoc($idChuong){
    $sql = "SELECT * FROM chuong WHERE id='$idChuong'";
    return find($sql);
  }

  function capNhatChuongHoc($idChuong,$tenChuong){
    $sql = "UPDATE chuong SET ten_chuong='$tenChuong' WHERE id='$idChuong'";
    execSQL($sql,1);
  }
?>