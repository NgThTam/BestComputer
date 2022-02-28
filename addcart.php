<?php 
    session_start();
    // include_once('connect.php');
    if (isset($_REQUEST["q"])) {
        $mhh = $_REQUEST["q"];
        if (!isset($_SESSION['giohang'][$mhh])) {
            $_SESSION['giohang'][$mhh] = 1;
        }
        else {
            $_SESSION['giohang'][$mhh] += 1;
        }
        $_SESSION['giohang'][$mhh]; 
    }
    if (isset($_REQUEST["xoa"])) {
        $idxoa = $_REQUEST["xoa"];
        unset($_SESSION['giohang'][$idxoa]);
    }
?>