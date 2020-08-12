<?php
  function loadKhoaHocTheoDanhMuc($idDanhMuc, $keyWord="", $trang=1){
    $soLuong = 6;
    $trang -= 1;
    $from = $trang * $soLuong;
    $to = $soLuong;

    $sql = "SELECT * FROM khoa_hoc WhERE 1";
    if($idDanhMuc > 0){
      $sql .= " AND id_danh_muc=".$idDanhMuc;
    }
    if($keyWord != ""){
      $sql .= " AND ten_khoa_hoc like '%".$keyWord."%'";
    }
    $sql .= " order by id desc ";
    $sql .= "limit ".$from.", ".$to;
    return findMultiple($sql);
  }

  function tongSoLuong($idDanhMuc=0){
    $sql = "SELECT * FROM khoa_hoc WhERE 1";
    if($idDanhMuc > 0){
      $sql .= " AND id_danh_muc=".$idDanhMuc;
    }
    return findMultiple($sql);
  }

  function phanTrang($idDanhMuc, $trang, $tongSo){
    $soLuong = 6;
    $soTrang = ceil($tongSo / $soLuong);
    $phanTrang = "";

    for ($i=1; $i <= $soTrang; $i++) { 
      if($trang == $i){
        $cls = 'class="page-item active"';
      }else{
        $cls = 'class="page-item"';
      }
      $link = "index.php?act=khoa-hoc&id-danh-muc=".$idDanhMuc."&trang=".$i;
      $phanTrang.= ' <li '.$cls.'><a class="page-link" href="'.$link.'">'.$i.'</a></li>';
    }
    return $phanTrang;
  }

  function loadKhoaHocChiTiet($idKhoaHoc){
    // $sql = "SELECT * FROM khoa_hoc, danh_muc WhERE danh_muc.id=id_danh_muc and khoa_hoc.id='$idKhoaHoc' ";
    $sql = "SELECT * FROM khoa_hoc WhERE id='$idKhoaHoc' ";
    return find($sql);
  }

  function loadKhoaHocTheoGiangVien($idGiangVien){
    $sql = "SELECT * FROM khoa_hoc WHERE id_giang_vien = '$idGiangVien'";
    $sql .= " ORDER BY id DESC";
    return findMultiple($sql);
  }

  function themKhoaHoc($tenKhoaHoc,$clip,$hinhAnh,$moTa,$idDanhMuc,$donGia,$khuyenMai,$idUser){
    $sql = "INSERT INTO khoa_hoc(ten_khoa_hoc,clip,hinh_anh,mo_ta,id_danh_muc,don_gia,khuyen_mai,id_giang_vien) VALUES('$tenKhoaHoc','$clip','$hinhAnh','$moTa','$idDanhMuc','$donGia','$khuyenMai','$idUser')";
    execSQL($sql,0);
  }

  function loadKhoaHocNoiBat(){
    $sql = "SELECT * FROM khoa_hoc WhERE 1";
    $sql .= " order by luot_mua desc";
    $sql .= " limit 8";
    return findMultiple($sql);
  }

  function loadAllKhoaHocTheoDanhMuc($idDanhMuc){
    $sql = "SELECT * FROM khoa_hoc WhERE 1";
    if($idDanhMuc > 0){
      $sql .= " AND id_danh_muc=".$idDanhMuc;
    }
    return findMultiple($sql);
  }

  function fillterKhoaHoc($idDanhMuc, $trang=1, $minPrice = "", $maxPrice = "", $sqlOrder = ""){
    $soLuong = 6;
    $trang -= 1;
    $from = $trang * $soLuong;

    $sql = "SELECT * FROM khoa_hoc WhERE 1 ";
    if($idDanhMuc > 0){
      $sql .= "AND id_danh_muc= $idDanhMuc ";
    }
    if($minPrice != "" && $maxPrice != ""){
      $sql .= "AND don_gia BETWEEN $minPrice AND $maxPrice ";
    }
    if($sqlOrder != ""){
      $sql .= $sqlOrder;
    }
    $sql .= " limit ".$from.", ".$soLuong." ";
    
    
    
    return findMultiple($sql);
  }

  function phanTrangResultFilter($trang, $tongSo){
    $soLuong = 6;
    $soTrang = ceil($tongSo / $soLuong);
    $phanTrang = "";

    for ($i=1; $i <= $soTrang; $i++) { 
      if($trang == $i){
        $cls = 'class="page-item active"';
      }else{
        $cls = 'class="page-item"';
      }
      $link = "#trang=".$i;
      $phanTrang.= ' <li '.$cls.'><a class="page-link" href="'.$link.'" id="idTrang='.$i.'" onclick="chuyenTrang('.$i.')">'.$i.'</a></li>';
    }
    return $phanTrang;
  }
?>