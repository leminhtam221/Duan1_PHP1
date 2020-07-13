<?php

// INCLUDE model
include './model/DB.php';
include "./model/danh-muc.php";
include "./model/courses.php";
include './model/signin.php';
include "./model/giang-vien.php";


$danhSachDanhMuc = loadDanhMuc();

// INCLUDE controller
include "./controller/controller.php";