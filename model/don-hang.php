<?php
  function loadDonHangDaThanhToan($idUser){
    $sql = "SELECT * FROM don_hang WHERE id_user='$idUser' AND trang_thai = 2";
    $sql.= " ORDER BY id DESC";
    return findMultiple($sql);
  }
  function order($id, $phonenumber, $address, $fname, $lname, $tong){
    $sql = "INSERT into don_hang(id_user, dia_chi, dien_thoai, ho_ten, tong_tien) values('$id','$address','$phonenumber','$lname $fname','$tong')";
    $conn = connection();
    $conn->exec($sql);
    return $conn->lastInsertId();
  }

?>