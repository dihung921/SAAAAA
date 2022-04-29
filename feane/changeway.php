<?php
session_start();
if(isset($_SESSION["way"])){
    unset($_SESSION["way"]);
    header("Location:index.php" );
}
?>