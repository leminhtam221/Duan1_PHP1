<style>
  
</style>
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
<div class="container mb-5">
			
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