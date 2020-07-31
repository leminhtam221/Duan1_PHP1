<!--Section: Block Content-->
<div class="page-banner">
	<div class="hvrbox">
		<img src="./view/base/images/bn.jpg" alt="Mountains" class="hvrbox-layer_bottom">
		<div class="hvrbox-layer_top">
			<div class="container">
				<div class="overlay-text text-left">
					<h3>Giỏ Hàng</h3>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
							<li class="breadcrumb-item active" aria-current="page">Giỏ Hàng</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
<section class="container my-5">

	<!--Grid row-->
	<div class="row">

		<!--Grid column-->
		<div class="col-lg-8">

			<!-- Card -->
			<div class="card wish-list mb-3 border-0" style="box-shadow: 0 10px 20px 0 rgba(0,0,0,0.07);">
				<div class="card-body" id='cart'>

					<h5 class="mb-4">Giỏ Hàng Của Bạn (<span id="cart-counter2"><?=rowCount()?></span> khóa học)</h5>
					<?php $i = 0; ?>
					<?php if(isset($myCart)): ?>
					<?php foreach($myCart as $item):?>
					<div class="row mb-4">
						<div class="col-md-5 col-lg-3 col-xl-3">
							<div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
								<img class="img-fluid w-100" src="./view/upload/<?=$item['hinh_anh']?>" alt="Sample">
							</div>
						</div>
						<div class="col-md-7 col-lg-9 col-xl-9">
							<div>
								<div class="d-flex justify-content-between">
									<div>
										<h5><?=$item['ten_khoa_hoc']?></h5>
										<p class="mb-3 mt-4 text-muted text-uppercase small">Giảng viên: <?=$item['ho_ten']?></p>
										<p class="mb-3  text-uppercase small">Danh mục: <?=$item['ten_danh_muc']?></p>
									</div>
								</div>
								<div class="d-flex justify-content-between align-items-center">
									<div>
										<a onmouseover="this.style.color='red'" onclick="onHdlBtnDel2(this)"
											onmouseout="this.style.color='#454545'" style="cursor: pointer" type="button"
											class="card-link-secondary small text-uppercase mr-3" data-id="<?=$item['id']?>"><i
												class="fas fa-trash-alt mr-1"></i> Xóa
											item </a>
										<a href="#" type="button" class="card-link-secondary small text-uppercase"><i
												class="fas fa-heart mr-1"></i> Thêm vào wish list </a>
									</div>
									<p class="mb-0"><span><strong class="itemPrice"><?=$item['don_gia']?></strong></span></p>
								</div>
							</div>
						</div>
					</div>
					<?php 
						$i++;
						if($i!=rowCount()){ echo '<hr class="mb-4">';}
					?>
					<?php endforeach ?>
					<p class="text-primary mb-0"><i class="fas fa-info-circle mr-1"></i> Do not delay the purchase, adding
						items to your cart does not mean booking them.</p>
					<?php else: ?>
					<a href="#" type="button" class="card-link-secondary "><i class="fa fa-home mr-1"></i>
						Trở lại trang chủ </a>
					<?php endif ?>
				</div>
			</div>
			<!-- Card -->

			<!-- Card -->
			<?php if(isset($myCart)): ?>
			<div class="card mb-3 border-0 " id="expectTimeEl" style="box-shadow: 0 10px 20px 0 rgba(0,0,0,0.07);">
				<div class="card-body">

					<h5 class="mb-4">Dự kiến giao hàng</h5>

					<p class="mb-0" id="expectTime">

					</p>
					<script>
						var getExpectTime = () => {
							var d = new Date()
							var dayWillShipping = new Date(d.getTime() + 432000000)
							var weekday = ['Chủ Nhật', 'Thứ Hai', 'Thứ Ba', 'Thứ Tư', 'Thứ Năm', 'Thứ Sáu', 'Thứ Bảy']
							var day = weekday[dayWillShipping.getDay()] + ', ngày ' + dayWillShipping.getDate() + ' tháng ' + (dayWillShipping.getMonth() + 1) + ' năm ' + dayWillShipping.getFullYear()
							return day
						}
						document.getElementById('expectTime').innerHTML = getExpectTime();
					</script>
				</div>
			</div>
			<!-- Card -->

			<!-- Card -->
			<div class="card mb-3 border-0" id="payment" style="box-shadow: 0 10px 20px 0 rgba(0,0,0,0.07);">
				<div class="card-body">

					<h5 class="mb-4">We accept</h5>

					<img class="mr-2" width="45px"
						src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
						alt="Visa">
					<img class="mr-2" width="45px"
						src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
						alt="American Express">
					<img class="mr-2" width="45px"
						src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
						alt="Mastercard">
					<img class="mr-2" width="45px"
						src="https://z9t4u9f6.stackpathcdn.com/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.png"
						alt="PayPal acceptance mark">
				</div>
			</div>
			<!-- Card -->
			<?php endif ?>

		</div>
		<!--Grid column-->

		<!--Grid column-->
		<div class="col-lg-4">

			<!-- Card -->
			<div class="card mb-3 border-0" style="box-shadow: 0 10px 20px 0 rgba(0,0,0,0.07);">
				<div class="card-body">

					<h5 class="mb-3">Chi Tiết</h5>

					<ul class="list-group  list-group-flush m-0 p-0">
						<li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
							Khóa học
							<span id="totalPrice"></span>
							<script>
								window.addEventListener('load', () => {
									var totalPrice = 0;
									var itemsPrice = document.getElementsByClassName('itemPrice')
									for (i of itemsPrice) {
										i.innerHTML = new Intl.NumberFormat().format(i.innerHTML) + ' đ'
										totalPrice += Number(i.innerHTML.replace(/\D/g, ''))
									}
									document.getElementById('totalPrice').innerHTML = new Intl.NumberFormat().format(totalPrice) + ' đ'
								})
							</script>
						</li>
						<li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0">
							Phí vận chuyển
							<span>Gratis</span>
						</li>
						<li class="list-group-item d-flex justify-content-between align-items-center border-bottom-0 px-0 mb-3">
							<div>
								<strong>Tổng tiền</strong>
							</div>
							<span><strong>$53.98</strong></span>
						</li>
					</ul>

					<a href="index.php?act=thanh-toan"><button type="button"
							class="btn btn-primary btn-block waves-effect waves-light" style="cursor:pointer">Thanh
							Toán</button></a>
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
		<!--Grid column-->

	</div>
	<!--Grid row-->

</section>

<!--Section: Block Content-->