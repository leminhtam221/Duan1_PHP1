<?php
  function kiemTraMaKichHoat($maKichHoat){
    $sql = "SELECT * FROM ma_kich_hoat WHERE ma_code ='$maKichHoat'";
    return find($sql);
  }

  function deleteMaKichHoat($idMaKichHoat){
    $sql = "DELETE FROM ma_kich_hoat WHERE id = '$idMaKichHoat'";
    execSQL($sql,0);
  }

  function addMaKichHoat($maKichHoat, $idKhoaHoc){
    $sql = "INSERT INTO ma_kich_hoat(ma_code, id_khoa_hoc) VALUES('$maKichHoat', '$idKhoaHoc')";
    execSQL($sql,0);
  }
?>