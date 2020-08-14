<?php
  function addRating($idUser, $idKhoaHoc, $soSao){
    $sql = "INSERT INTO danh_gia(so_sao,id_khoa_hoc,id_user) VALUES('$soSao','$idKhoaHoc','$idUser')";
    execSQL($sql,0);
  }

  function updateRating($idUser, $soSao){
    $sql = "UPDATE danh_gia SET so_sao = '$soSao' WHERE id_user = '$idUser'";
    execSQL($sql,1);
  }

  function checkRatingIsExist($idUser,$idKhoaHoc){
    $sql = "SELECT * FROM danh_gia WHERE id_user = '$idUser' AND id_khoa_hoc = '$idKhoaHoc'";
    return find($sql);
  }

  function checkCourseRatingIsExist($idKhoaHoc){
    $sql = "SELECT * FROM danh_gia WHERE id_khoa_hoc = '$idKhoaHoc'";
    return find($sql);
  }

  function sumRating($idKhoaHoc){
    $sql = "SELECT so_sao FROM danh_gia WHERE id_khoa_hoc = '$idKhoaHoc'";
    return findMultiple($sql);
  }
?>