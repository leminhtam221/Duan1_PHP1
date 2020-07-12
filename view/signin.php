
	<div class="page-banner">           			
        <div class="hvrbox">
            <img src="./view/base/images/bn.jpg" alt="Mountains" class="hvrbox-layer_bottom">
            <div class="hvrbox-layer_top">
                <div class="container">
                    <div class="overlay-text text-left">						
                        <h3>Sign In</h3>
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sign In</li>
                          </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>	                     
    </div>
 
	<div class="sign-in-1x">
		<div class="container">
			<div class="form-container">
				<div class="row">
					<div class="col-md-4">
						<div class="sign-in-form">
							<h3>Đăng Nhập</h3>
							<?php if($signin_error==true): ?>
							<div style="color: red;font-size: 0.8rem;transform: translateY(-30px);">* Sai tên tài khoản hoặc mật khẩu</div>
							<?php endif ?>
							<form id="signin-form" method="post" action="index.php?act=dang-nhap">
								<div class="row">
									<div class="col-md-12">	
										<div class="single-input">
											<i class="fas fa-envelope"></i>	  
											<div class="form-group">
												<input id="si-name" type="text" class="form-control" placeholder="Tên tài khoản hoặc E-mail" aria-label="Name" name="uname"><div id="si-name-err"class="error-text"></div>
											</div>
										</div>
									</div>	
									<div class="col-md-12">
										<div class="single-input">
											<i class="fas fa-key"></i>																  
											<div class="form-group">							    
											    <input id="si-pwd" type="password" class="form-control" placeholder="Mật Khẩu" name="pwd">	    
											</div>
									  	</div>
									</div>  		
									<div class="col-md-12">
										<div class="sign-in-btn">																
											<span><a href="#">Quên mật khẩu?</a></span>
											<a style="color:#fff;cursor:pointer;" id="btn-signin" class="btn-small">Đăng Nhập </a>
											<p>Hoặc đăng nhập với</p>
											<ul>
												<li><a href=""> Facebook </a></li>
												<li><a href=""> Linkedin </a></li>
												<li><a href=""> Google </a></li>
											</ul>
											<h4>Bạn Chưa Có Tài Khoản? <a href="index.php?act=dang-ky">Tạo Tài Khoản!</a></h4>	
										</div>								
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="col-md-7 offset-md-1">
						<div class="sign-in-right" style="background-image: url(https://www.myfitnesschat.com/wp-content/uploads/2019/03/pexels-photo-1509428.jpeg)">
							<a href="https://www.youtube.com/watch?v=gwinFP8_qIM" class="btn-circle video"><i class="fas fa-play"></i></a>
						</div>
					</div>													
				</div>
			</div>
		</div>
	</div> 
