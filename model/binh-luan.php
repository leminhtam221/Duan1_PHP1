<?php
  function loadComment($idKhoaHoc){
    $sql = "SELECT * FROM binh_luan WhERE id_khoa_hoc=".$idKhoaHoc;
    $sql .= " order by id desc";
    return findMultiple($sql);
  }

  function addComment($commentContent, $ngayTao, $idKhoaHoc, $idUser){
    $sql = "INSERT INTO binh_luan(noi_dung,ngay_tao,id_khoa_hoc,id_user) VALUES ('$commentContent','$ngayTao','$idKhoaHoc','$idUser')";
    execSQL($sql,0);
  }
?>