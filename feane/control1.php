<?php
session_start();
require_once("conn.php");

if(isset($_GET["seatnum"])){
    $seatnum = $_GET["seatnum"];
    $rs = $conn->query("update `seat_condition` set cond = '0' where seat_id='$seatnum'");
    if($rs){
        header("Location: rseat.php");
    }
    else {
        echo"<script>{window.alert('請再試一次!'); location.href='rseat.php'}</script>";
    }
}
?>