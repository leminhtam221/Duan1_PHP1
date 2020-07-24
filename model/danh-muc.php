<?php
  function loadDanhMuc(){
    $sql = "SELECT * FROM danh_muc";
    return findMultiple($sql);
  }

  function layTenDanhMuc($idDanhMuc){
    $sql = "SELECT ten_danh_muc FROM danh_muc WHERE id='$idDanhMuc'";
    return find($sql);
  }
?>