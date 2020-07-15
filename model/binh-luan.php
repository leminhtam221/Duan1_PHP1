<?php
  function loadComment($idKhoaHoc){
    $sql = "SELECT * FROM binh_luan WhERE id_khoa_hoc=".$idKhoaHoc;
    $sql .= " order by id desc";
    return findMultiple($sql);
  }

  function addComment($commentContent,$idKhoaHoc,$idUser){
    $sql = "INSERT INTO binh_luan(noi_dung,id_khoa_hoc,id_user) VALUES ('$commentContent', '$idKhoaHoc','$idUser')";
    execSQL($sql,0);
  }
?>