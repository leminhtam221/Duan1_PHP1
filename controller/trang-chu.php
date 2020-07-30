<?php
$soLuongKhoaHoc = counter('khoa_hoc');
$soLuongHocVien = counter('user');
$soLuongGiangVien= counter('giang_vien');
$featuredCategories = getCataAndQty();
include './view/home.php';