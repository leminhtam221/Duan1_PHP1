<?php
  function layTenGiangVien($idGiangVien){
    $sql = "select ho_ten from giang_vien where id=".$idGiangVien;
    return find($sql);
  }
  
  function layThongTinGiangVien($idGiangVien){
    $sql = "select * from giang_vien where id=".$idGiangVien;
    return find($sql);
  }

  function getLecture(){
    $sql = "select tai_khoan from giang_vien";
    $res = findMultiple($sql);
    return $res;
  }

  function lectureSignUp($uname, $pwd, $email, $fname, $lname){
    $sql = "insert into giang_vien(tai_khoan, mat_khau, email, ho_ten) values('$uname','$pwd','$email','$fname $lname')";
    execSQL($sql,0);
  }

  function loginGV($uname){
    $user = find("select * from giang_vien where tai_khoan='$uname' or email='$uname'");
    return $user;
 }

 function capNhatThongTinGV($name, $email, $phoneNumber, $password, $idUser){
  $sql = "UPDATE giang_vien SET ho_ten = '$name', email = '$email', sdt = '$phoneNumber', mat_khau = '$password' WHERE id = '$idUser'";
  execSQL($sql,1);
 }

 function capNhatAvatarGiangVien($idUser, $avatar){
  $sql = "UPDATE giang_vien SET avatar = '$avatar' WHERE id = '$idUser'";
  execSQL($sql,1);
}
?>