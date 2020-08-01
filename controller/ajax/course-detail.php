<?php
  require_once "./../../model/DB.php";
  require_once "./../../model/binh-luan.php";
  require_once "./../../model/user.php";

  if(isset($_POST['idKhoaHoc']) && isset($_POST['commentContent'])){
    $idKhoaHoc = $_POST['idKhoaHoc'];
    $idUser = $_POST['idUser'];
    $commentContent = $_POST['commentContent'];
    $ngayTao = $_POST['ngayTao'];

    addComment($commentContent,$ngayTao,$idKhoaHoc,$idUser);
    $danhSachBinhLuan = loadComment($idKhoaHoc);
    $html = "";
    foreach ($danhSachBinhLuan as $binhLuan) {
      $idUser = $binhLuan['id_user'];
      $tenUser = getNameUser($idUser);  
      $html .= '<div class="media">
                  <a href="#"><img src="./view/base/images/speaker-4.png" alt="Generic placeholder image"></a>
                  <div class="media-body">
                    <p>'.$binhLuan['noi_dung'].'</p>
                    <h4>'.$binhLuan['ngay_tao'].'</h4>
                    <h5>'.$tenUser['ho_ten'].' <span><a href="#">Reply <i class="fas fa-reply"></i> </a></span>
                    </h5>
                  </div>
                </div>';
    }
    echo $html;
  }
?>