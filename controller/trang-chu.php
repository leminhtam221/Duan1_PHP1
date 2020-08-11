<?php
$soLuongKhoaHoc = counter('khoa_hoc');
$soLuongHocVien = counter('user');
$soLuongGiangVien= counter('giang_vien');
$featuredCategories = getCataAndQty();

$danhSachDanhMucNoiBat = loadDanhMuc($sqlAdditional = "limit 5");
$danhSachKhoaHocNoiBat = loadKhoaHocNoiBat();
include './view/home.php';