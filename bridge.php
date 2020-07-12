<?php

// INCLUDE model
include './model/DB.php';
include "./model/danh-muc.php";
include './model/signin.php';


$danhSachDanhMuc = loadDanhMuc();

// INCLUDE controller
include "./controller/controller.php";