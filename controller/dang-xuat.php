<?php

setcookie("user_id",'', time() - (86400 * 180), "/");

header("Location: index.php?act=dang-nhap");