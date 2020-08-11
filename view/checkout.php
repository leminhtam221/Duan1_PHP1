<div class="page-banner">
  <div class="hvrbox">
    <img src="./view/base/images/bn.jpg" alt="Mountains" class="hvrbox-layer_bottom">
    <div class="hvrbox-layer_top">
      <div class="container">
        <div class="overlay-text text-left">
          <h3>Thanh Toán</h3>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
              <li class="breadcrumb-item active" aria-current="page">Thanh Toán</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container py-5">
  <div class="row">
    <div class="col-md-8" style="padding: 0 15px;">

      <form method="POST" style="box-shadow: 0 10px 20px 0 rgba(0,0,0,0.07);padding: 15px 20px;border-radius: .25rem;">
        <h4 class="mb-5">
          Thông Tin Đặt Hàng
        </h4>
        <div class="form-row">
          <div class="col-md-6 form-group">
            <label for="firstname">Tên</label>
            <input type="text" class="form-control" id="firstname" placeholder="Tên">
            <div class="invalid-feedback">
              Vui lòng nhập...
            </div>
          </div>

          <div class="col-md-6 form-group">
            <label for="lastname">Họ</label>
            <input type="text" class="form-control" id="lastname" placeholder="Họ">
            <div class="invalid-feedback">
              Vui lòng nhập...
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="username">Số Điện Thoại</label>
          <div class="input-group">
            <input type="" class="form-control" id="username" placeholder="Số Điện Thoại" required>
            <div class="invalid-feedback">
              Vui lòng nhập...
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="adress">Địa Chỉ</label>
          <input type="text" class="form-control" id="adress" placeholder="1234 đường số 1" required>
          <div class="invalid-feedback">
            Vui lòng nhập...
          </div>
        </div>

        <div class="form-group">
          <label for="address2">Địa Chỉ 2
            <span class="text-muted">(Optional)</span>
          </label>
          <input type="text" class="form-control" id="adress2" placeholder="Flat No">
        </div>

        <div class="row">
          <div class="col-md-4 form-group">
            <label for="country">Thành phố / tỉnh</label>
            <select type="text" class="form-control" id="country">
              <option value>Chọn...</option>
              <option>United Kingdom</option>
            </select>
            <div class="invalid-feedback">
              Vui lòng nhập...
            </div>
          </div>

          <div class="col-md-4 form-group">
            <label for="city">Quận / huyện</label>
            <select type="text" class="form-control" id="city">
              <option value>Chọn...</option>
              <option>London</option>
            </select>
            <div class="invalid-feedback">
              Vui lòng nhập...
            </div>
          </div>

          <div class="col-md-4 form-group">
            <label for="postcode">Phường / xã</label>
            <select type="text" class="form-control" id="postcode">
              <option value>Chọn...</option>
              <option>NW6 2LS</option>
            </select>
            <div class="invalid-feedback">
              Vui lòng nhập...
            </div>
          </div>
        </div>

        <hr>


        <div class="form-check">
          <label for="same-adress" class="form-check-label"></label>
          <input type="checkbox" class="form-check-input" id="same-adress" style="transform: translateY(0.2rem);"
            checked>
          Save this information for next time
        </div>

        <button class="btn btn-primary bt-lg btn-block" type="submit">Đặt Hàng</button>
      </form>
    </div>
    <div class="col-md-4">

      <!-- Card -->
      <div class="card mb-3 border-0" style="box-shadow: 0 10px 20px 0 rgba(0,0,0,0.07);">
        <div class="card-body">

          <h5 class="mb-3">Đơn hàng của bạn</h5>

          <ul class="list-group  list-group-flush m-0 p-0">
            <?php if(isset($_COOKIE['cart'])): ?>
            <?php foreach( $myCart as $i ): ?>
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0">
              <p style="display: block; width:100%;"><?=@$i['ten_khoa_hoc']?><span
                  style="float: right; color: royalblue;"> &times; <i class="priCe"><?=@$i['khuyen_mai']?></i>
                </span></p>
            </li>
            <?php endforeach ?>
            <li class="list-group-item d-flex justify-content-between align-items-center border-bottom-0 px-0">
              Phí vận chuyển
              <span style="float: right; color: royalblue;"><i class="priCe">30000</i>
              </span </li>
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
              <div>
                <strong>Tổng tiền</strong>
              </div>
              <span><strong class="priCe"><?=@$tong?></strong></span>
            </li>
            <?php endif ?>
          </ul>
        </div>
      </div>
      <!-- Card -->

      <!-- Card -->
      <div class="card mb-3 border-0" style="box-shadow: 0 10px 20px 0 rgba(0,0,0,0.07);">
        <div class="card-body">

          <a class="dark-grey-text d-flex justify-content-between" data-toggle="collapse" href="#collapseExample1"
            aria-expanded="false" aria-controls="collapseExample1">
            Coupon khuyến mãi
            <span><i class="fas fa-chevron-down pt-1"></i></span>
          </a>

          <div class="collapse" id="collapseExample1">
            <div class="mt-3">
              <div class="md-form md-outline mb-0">
                <input type="text" id="discount-code1" class="form-control font-weight-light"
                  placeholder="Enter discount code">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Card -->

    </div>
  </div>
</div>
<script>
  $.getJSON("view/base/local.json", function (result) {
    $.each(result, function (i, field) {
      console.log(field)
    });
  });
</script>