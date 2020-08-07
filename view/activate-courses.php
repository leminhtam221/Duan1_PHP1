<section class="form-active">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="col-7">
          <form>
            <h2>KÍCH HOẠT KHÓA HỌC</h2>
            <p>Lưu ý: Mỗi khoá học chỉ cần kích hoạt 1 lần duy nhất.</p>
            <?php if(empty($_COOKIE["user_id"]) && empty($_COOKIE["lecturer_id"])){ ?>
            <p><span class="so">1</span> Bạn chưa có tài khoản đăng nhập?, vui lòng <a href="index.php?act=dang-ky">Đăng
                ký tài khoản mới</a>.</p>
            <p><span class="so">2</span> Bạn đã có tài khoản đăng nhập?, vui lòng <a href="index.php?act=dang-nhap">Đăng
                nhập tài khoản.</a>.</p>
            <?php } ?>
            <div class="key-check-new">
              <input type="text" placeholder="Nhập mã kích hoạt" class="text-center" id="activateCode">
            </div>
            <button type="button" id="buttonActivate" class="btn-submit"><i class="fa fa-unlock-alt icon-unblock"></i>
              KÍCH HOẠT
              NGAY
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>

</section>