<?php
  function loadDanhMuc($sqlAdditional = ""){
    $sql = "SELECT * FROM danh_muc";
    $sql .= " order by sap_xep asc ";
    if($sqlAdditional != ""){
      $sql .= $sqlAdditional;
    }
    return findMultiple($sql);
  }

  function layTenDanhMuc($idDanhMuc){
    $sql = "SELECT ten_danh_muc FROM danh_muc WHERE id='$idDanhMuc'";
    return find($sql);
  }

  function getCataAndQty(){
    $sql = "select danh_muc.id, danh_muc.ten_danh_muc from danh_muc limit 5";
    return findMultiple($sql);
  }
?>