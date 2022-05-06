<?php
session_start();
session_destroy();
echo "<script>{window.alert('已登出！'); location.href='index.php'}</script>";
?>
