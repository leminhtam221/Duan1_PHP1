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
				  <div class="col-sm-3 hidden-xs"><img src="./view/base/images/<?=$item['hinh_anh']?>" alt="..." class="img-responsive" /></div>
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
			 <td class="hidden-xs"></td>
			 <td class="hidden-xs text-center"><strong>Tổng: 200,000đ</strong></td>
			 <td><a href="#" class="btn btn-success btn-block">Đặt Hàng&nbsp;<i class="fa fa-angle-right"></i></a></td>
		  </tr>
		</tfoot>
	 </table>
  </div>
