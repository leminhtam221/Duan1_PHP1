<link rel="stylesheet" href="view/base/vendor.style.css">
<link rel="stylesheet" href="view/base/main.style.css">

<div class="background-body">
  <div class="container py-5">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-4">
            <div class="portlet light profile-sidebar-portlet bordered">
              <div class="profile-userpic">
                <?php
                  if($thongTinUser['avatar'] == ""){
                    $img = 'view/base/images/user-avatar.jpg';
                  }else{
                    if(file_exists('upload/avatar/'.$thongTinUser['avatar'].'')){
                      $img = 'upload/avatar/'.$thongTinUser['avatar'].'';
                    }else{
                      $img = 'view/base/images/user-avatar.jpg';
                    }
                  }
                ?>
                <img src="<?=$img?>" class="img-responsive" id="avatarImg">

                <div class="mt-4">
                  <button class="btn btn-primary" id="buttonUploadAvatar">
                    <label for="inputUpload" class="text-change-avatar">Thay đổi avatar</label>
                  </button>
                  <button class="btn btn-primary" id="buttonSaveAvatar">Cập nhật</button>
                  <button class="btn btn-danger" id="buttonDeleteAvatar">Hủy</button>
                </div>
                <input type="file" id="inputUpload" class="d-none" accept=".jpg,.png,.jpeg,.webp">
              </div>
              <div class="profile-usertitle">
                <div class="profile-usertitle-name"> <?=$thongTinUser['ho_ten'] ?> </div>
                <div class="profile-usertitle-job"> <?=$userType ?> </div>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="portlet light bordered">
              <div class="portlet-title tabbable-line">
                <div class="caption caption-md">
                  <i class="icon-globe theme-font hide"></i>
                  <h5 class="uppercase bold">Thông tin tài khoản</h5>
                </div>
              </div>
              <div class="portlet-body">
                <div>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                      <form action="index.php?act=profile-user&idUser=<?=$idUser ?>" method="POST">
                        <input type="hidden" id="idUser" value="<?=$idUser ?>">
                        <div class="form-group">
                          <label for="inputName" class="heading">Họ tên</label>
                          <input type="text" class="form-control" name="name" id="inputName"
                            value="<?=$thongTinUser['ho_ten'] ?>" required>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1" class="heading">Email</label>
                          <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                            value="<?=$thongTinUser['email'] ?>" required>
                        </div>
                        <div class="form-group">
                          <label for="phoneNumber" class="heading">Số điện thoại</label>
                          <input type="text" class="form-control" name="phoneNumber" id="phoneNumber"
                            value="<?=$thongTinUser['sdt'] ?>" required>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1" class="heading">Mật khẩu</label>
                          <input type="password" class="form-control" name="password" id="exampleInputPassword1"
                            value="<?=$thongTinUser['mat_khau'] ?>" required>
                        </div>

                        <button type="submit" class="btn btn-success" name="submit-profile">Cập nhật</button>
                      </form>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>