<?php

setcookie("duan1_user[0]",'', time() - (86400 * 180), "/");
setcookie("duan1_user[1]",'', time() - (86400 * 180), "/");
setcookie("duan1_user[2]",'', time() - (86400 * 180), "/");

header("Location: index.php?act=dang-nhap");