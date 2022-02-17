<?php
 require("config.php");
 $emaili = $_SESSION['email'];
 if ($_SESSION['referral_code'] != ''){
    $sql = "SELECT ref_amount FROM collage WHERE refer = '".$_SESSION['referral_code']."' " ;
    $result = mysqli_query($conn, $sql);
    $result_fetch = mysqli_fetch_assoc($result);
    $bonus = $result_fetch["ref_amount"] + 2;
    echo $bonus;
 }
    $sql = "UPDATE collage SET `ref_amount`= '{$bonus}' WHERE refer = '".$_SESSION['referral_code']."'";
    if ($result = mysqli_query($conn, $sql)) {
        echo 'sucessfully';
    }
 