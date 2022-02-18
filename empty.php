<?php
require('config.php');

// if (isset($_POST['paid'])) {
    // $emaili = $_SESSION['email'];
    // $_SESSION['plan'] = $_POST['plan'];
    $paid = $_POST['paid_into'];  
    $plans= $_POST['plan'];
    $_SESSION['plan'] =  $_POST['plan'];
    $email= $_POST['email']; 
 
    $_SESSION['payment_ID'] = $paymentId;
//     $sql = "UPDATE collage SET `plan`= '{$plans}',`paid_into`= '{$paid}' WHERE email = '{$emaili}'";

//     if ($result = mysqli_query($conn, $sql)) {
//         header("Location: home.php");
//         echo 'sucessfully';
//        $result->free();

// $one = strtoupper(bin2hex(random_bytes(4)));
// $two = strtoupper(bin2hex(random_bytes(4)));
// $three = strtoupper(bin2hex(random_bytes(4)));
// $four = strtoupper(bin2hex(random_bytes(4)));
// $five = strtoupper(bin2hex(random_bytes(4)));
// $six = strtoupper(bin2hex(random_bytes(4)));
// $seven = strtoupper(bin2hex(random_bytes(4)));
// $eight = strtoupper(bin2hex(random_bytes(4)));
$paymentid = strtoupper(bin2hex(random_bytes(4)));
// }

$sql = "INSERT INTO `payment`(`email`,`paid_into`, `paymentid`, `plan`, `date`) VALUES ('$email','$paid','$paymentid','$plans',now())";
mysqli_query($conn, $sql);
// Page on which the user will be
header('location: index.php');
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);




// Close connection
mysqli_close($conn);

?>