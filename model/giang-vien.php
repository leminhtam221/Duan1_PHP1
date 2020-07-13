<?php
  function layTenGiangVien($idGiangVien){
    $sql = "select ho_ten from giang_vien where id=".$idGiangVien;
    return find($sql);
  }
?>