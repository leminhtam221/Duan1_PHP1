<style>
	th, td{
		text-align: center;
	}
	.table>tbody>tr>td,
.table>tfoot>tr>td {
  vertical-align: middle;
}

@media screen and (max-width: 600px) {
  table#cart tbody td .form-control {
    width: 20%;
    display: inline !important;
  }
  .actions .btn {
    width: 36%;
    margin: 1.5em 0;
  }
  .actions .btn-info {
    float: left;
  }
  .actions .btn-danger {
    float: right;
  }
  table#cart thead {
    display: none;
  }
  table#cart tbody td {
    display: block;
    padding: .6rem;
    min-width: 320px;
  }
  table#cart tbody tr td:first-child {
    background: #333;
    color: #fff;
  }
  table#cart tbody td:before {
    content: attr(data-th);
    font-weight: bold;
    display: inline-block;
    width: 8rem;
  }
  table#cart tfoot td {
    display: block;
  }
  table#cart tfoot td .btn {
    display: block;
  }
}
</style>

  <!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->
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
  <div class="container" style="margin-top: 4rem !important;margin-bottom: 4rem !important;">
  <div class="row">
  <div class="col-8">
  <?php if(!isset($myCart)): ?>
  <h3>Bạn chưa có sản phẩm nào trong giỏ hàng!</h3>
  <?php else: ?>
  <h3>Giỏ Hàng Của Bạn</h3>
	 <table id="cart" class="table table-hover table-condensed mt-2">
		<thead>
		  <tr>
			 <th style="width:50%">Khóa Học</th>
			 <th style="width:25%;">Giảng Viên</th>
			 <th style="width:15%;">Đơn Giá</th>
			 <th style="width:10%"></th>
		  </tr>
		</thead>
		<tbody>
      <?php foreach ($myCart as $item): ?>
		  <tr>
			 <td data-th="Product">
				<div class="row">
				  <div class="col-sm-3 hidden-xs"><img src="./view/base/images/<?=@$item['hinh_anh']?>" alt="..." class="img-responsive" /></div>
				  <div class="col-sm-9 d-flex align-items-center">
					 <h4 class="nomargin"><?=$item['ten_khoa_hoc']?></h4>
				  </div>
				</div>
			 </td>
			 <td data-th="Price"><?=@$item['ho_ten']?></td>
			 <td data-th="Quantity">
       <?=$item['don_gia']?>
			 </td>
			 <td class="actions" data-th="">
				<button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
			 </td>
		  </tr>
      <?php endforeach ?>
		</tbody>
		<tfoot>
		  <tr>
			 <td style="text-align: left;"><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i>&nbsp;Quay Lại</a></td>
			 
			 <td class="hidden-xs text-center"><strong>Tổng: 200,000đ</strong></td>
			 <td><a href="#" class="btn btn-outline-success btn-block">Làm Mới</a></td>
			 <td><a href="#" class="btn btn-success btn-block">Đặt Hàng&nbsp;<i class="fa fa-angle-right"></i></a></td>
		  </tr>
		</tfoot>
	 </table>
   <?php endif ?>
   </div>
   <div class="col-4">
   <div class="container-fluid">
			
			<h4 class="my-4">
					Billing Address
			</h4>
			
			<form>
				<div class="form-row">
					<div class="col-md-6 form-group">
						<label for="firstname">First Name</label>
						<input type="text" class="form-control" id="firstname" placeholder="First Name">
						<div class="invalid-feedback">
							Valid first name is required.
						</div>
					</div>

					<div class="col-md-6 form-group">
						<label for="lastname">Last Name</label>
						<input type="text" class="form-control" id="lastname" placeholder="Last Name">
						<div class="invalid-feedback">
							Valid last name is required.
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="username">Username</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">@</span>
							</div>	
							<input type="text" class="form-control" id="username" placeholder="Username" required>
							<div class="invalid-feedback">
								Your username is required.
							</div>
						</div>
				</div>

				<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" placeholder="you@example.com" required>
				</div>

				<div class="form-group">
					<label for="adress">Address</label>
					<input type="text" class="form-control" id="adress" placeholder="1234 Main Street" required>
					<div class="invalid-feedback">
						Please enter your shipping address.
					</div>
				</div>

				<div class="form-group">
					<label for="address2">Address 2
						<span class="text-muted">(Optional)</span>
					</label>
					<input type="text" class="form-control" id="adress2" placeholder="Flat No">
				</div>

				<div class="row">
					<div class="col-md-4 form-group">
						<label for="country">Country</label>
						<select type="text" class="form-control" id="country">
							<option value>Choose...</option>
							<option>United Kingdom</option>
						</select>
						<div class="invalid-feedback">
							Please select a valid country.
						</div>
					</div>

					<div class="col-md-4 form-group">
						<label for="city">City</label>
						<select type="text" class="form-control" id="city">
							<option value>Choose...</option>
							<option>London</option>
						</select>
						<div class="invalid-feedback">
							Please provide a valid city.
						</div>
					</div>
						
					<div class="col-md-4 form-group">
						<label for="postcode">Postcode</label>
						<select type="text" class="form-control" id="postcode">
							<option value>Choose...</option>
							<option>NW6 2LS</option>
						</select>
						<div class="invalid-feedback">
							Postcode required.
						</div>
					</div>
				</div>

				<hr>
				
				<div class="form-check">
					<input type="checkbox" class="form-check-input" id="shipping-adress"> 
						Shipping address is the same as my billing address
					<label for="shipping-adress" class="form-check-label"></label>
				</div>

				<div class="form-check">
					<input type="checkbox" class="form-check-input" id="same-adress">
						Save this information for next time
					<label for="same-adress" class="form-check-label"></label>					
					</div>

				<hr>

				<h4 class="mb-4">Payment</h4>
				
				<div class="form-check">
					<input type="radio" class="form-check-input" id="credit" name="payment-method" checked required>
					<label for="credit" class="form-check-label">Credit Card</label>
				</div>

				<div class="form-check">
					<input type="radio" class="form-check-input" id="debit" name="payment-method" required>
					<label for="debit" class="form-check-label">Debit Card</label>
				</div>

				<div class="form-check">
					<input type="radio" class="form-check-input" id="paypal" name="payment-method"  required>
					<label for="paypal" class="form-check-label">PayPal</label>
				</div>
			
				<div class="row mt-4">
					<div class="col-md-6 form-group">
							<label for="card-name">Name on card</label>
							<input type="text" class="form-control" id="card-name" placeholder required>
							<div class="invalid-feedback">
								Name on card is required
							</div>
						</div>

						<div class="col-md-6 form-group">
							<label for="card-no">Card Number</label>
							<input type="text" class="form-control" id="card-no" placeholder required>
							<div class="invalid-feedback">
								Credit card number is required
							</div>
						</div>
				</div>

				<div class="form-row">
					<div class="col-md-5 form-group">
							<label for="expiration">Expire Date</label>
							<input type="text" class="form-control" id="card-name" placeholder required>
							<div class="invalid-feedback">
								Expiration date required
							</div>
						</div>
					

					<div class="col-md-5 form-group">
							<label for="ccv-no">Security Number</label>
							<input type="text" class="form-control" id="sec-no" placeholder required>
							<div class="invalid-feedback">
								Security code required
							</div>
					</div>
				</div>

					<hr class="mb-4">
				
					<button class="btn btn-primary bt-lg btn-block" type="submit">Continue to Checkout</button>
			</form>
		</div>
   </div>
   </div>
  </div>
