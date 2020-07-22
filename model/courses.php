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
    $sql = "SELECT * FROM khoa_hoc, danh_muc WhERE danh_muc.id=id_danh_muc and khoa_hoc.id='$idKhoaHoc' ";
    return find($sql);
  }
?>