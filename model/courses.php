<?php
  function loadKhoaHocTheoDanhMuc($id_danh_muc, $keyword=""){
    $sql = "SELECT * FROM khoa_hoc WhERE 1";
    if($id_danh_muc > 0){
      $sql .= " AND id_danh_muc=".$id_danh_muc;
    }
    if($keyword != ""){
      $sql .= " AND ten_khoa_hoc like '%".$keyword."%'";
    }
    $sql .= " order by id desc";

    return findMultiple($sql);
  }
?>