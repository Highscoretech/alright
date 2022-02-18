


<?php
// generating random referral codes

 require("config.php");
 $emaili = $_SESSION['email'];

//  $sql = "SELECT * FROM collage WHERE email = '{$emaili}' " ;
//  $result = mysqli_query($conn, $sql);
//  $result_fetch = mysqli_fetch_assoc($result);

$sql = "SELECT * FROM collage WHERE email = '{$emaili}'";
	if ($result = mysqli_query($conn, $sql)) {
        while ($row = $result->fetch_assoc()) {
            $plan = $row["confirm_plan"];
            $amount = $row["amount"];

            // pearl plan
            function pearl($amount){
                $amount += 0.93;
                $_SESSION['click'] =+ $amount;
                return $amount;
                if ($amount > 30){
                    echo "<script>
                    alert('You have completed your subscription') </script>";
                    session_destroy();
                    header("Location: home.php");
                }else{

                }
            }
            //>Red coral plan
            function red($amount){
                $amount += 2;
                $_SESSION['click'] =+ $amount;
                return $amount;
                if ($amount > 61){
                    echo "<script>
                    alert('You have completed your subscription') </script>";
                    session_destroy();
                    header("Location: home.php");
                }else{

                }
            }
            //Tanzanite plan
            function tani($amount){
                $amount += 5;
                $_SESSION['click'] =+ $amount;
                return $amount;
                if ($amount > 151){
                    echo "<script>
                    alert('You have completed your subscription') </script>";
                    session_destroy();
                    header("Location: home.php");
                }else{

                }
            }

            //Sapphire plan
            function sapphire($amount){
                $amount += 7;
                $_SESSION['click'] =+ $amount;
                return $amount;
                if ($amount > 141){
                    echo "<script>
                    alert('You have completed your subscription') </script>";
                    session_destroy();
                    header("Location: home.php");
                }else{

                }
            }

            //Opal plan
            function opal($amount){
                $amount += 10;
                $_SESSION['click'] =+ $amount;
                return $amount;
                if ($amount > 301){
                    echo "<script>
                    alert('You have completed your subscription') </script>";
                    session_destroy();
                    header("Location: home.php");
                }else{

                }
            }

            function diamond($amount){
                $amount += 20 ;
                $_SESSION['click'] =+ $amount;
                return $amount;
                if ($amount > 601){
                    echo "<script>s
                    alert('You have completed your subscription') </script>";
                    session_destroy();
                    header("Location: home.php");
                }else{

                }
            }

            function benito($amount){
                $amount += 50;
                $_SESSION['click'] =+ $amount;
                return $amount;
                if ($amount > 1501){
                    echo "<script>
                    alert('You have completed your subscription') </script>";
                    session_destroy();
                    header("Location: home.php");
                }else{

                }
            }


            function ruby($amount){
                $amount += 100;
                $_SESSION['click'] =+ $amount;
                return $amount;
                if ($amount > 3001){
                    echo "<script>
                    alert('You have completed your subscription') </script>";
                    session_destroy();
                    header("Location: home.php");
                }else{

                }
            }

            function meg($amount){
                $amount += 200;
                $_SESSION['click'] =+ $amount;
                return $amount;
                if ($amount > 6001){
                    session_destroy();
                    header("Location: home.php");
                }else{

                }
            }

            if (isset($_POST['click_button'])) {
                $conn = mysqli_connect("localhost", "root", "", "facaulty");
                    
                // Check connection
                if($conn === false){
                    die("ERROR: Could not connect. "
                        . mysqli_connect_error());
                }
                if ( $plan == 1){
                    $acc = pearl($amount);
                    $sql = "UPDATE collage SET `amount`= '{$acc}' WHERE email = '{$emaili}'";
                    if ($result = mysqli_query($conn, $sql)) {
                        echo 'sucessfully';
                        header("Location: home.php");
                    }
                }elseif ( $plan == 2){
                    $acc = red($amount);
                    $sql = "UPDATE collage SET `amount`= '{$acc}' WHERE email = '{$emaili}'";
                    if ($result = mysqli_query($conn, $sql)) {
                        echo 'sucessfully';
                        header("Location: home.php");
                    }
                    
                } if ( $plan == 3){
                    $acc = tani($amount);
                    $sql = "UPDATE collage SET `amount`= '{$acc}' WHERE email = '{$emaili}'";
                    if ($result = mysqli_query($conn, $sql)) {
                        echo 'sucessfully';
                        header("Location: home.php");
                    }
                } if ( $plan == 4){
                    $acc = sapphire($amount);
                    $sql = "UPDATE collage SET `amount`= '{$acc}' WHERE email = '{$emaili}'";
                    if ($result = mysqli_query($conn, $sql)) {
                        echo 'sucessfully';
                        header("Location: home.php");
                    }
                } if ( $plan== 5){
                    $acc = opal($amount);
                    $sql = "UPDATE collage SET `amount`= '{$acc}' WHERE email = '{$emaili}'";
                    if ($result = mysqli_query($conn, $sql)) {
                        echo 'sucessfully';
                        header("Location: home.php");
                    }
                
                }
                if ( $plan == 6){
                    $acc = diamond($amount);
                    $sql = "UPDATE collage SET `amount`= '{$acc}' WHERE email = '{$emaili}'";
                    if ($result = mysqli_query($conn, $sql)) {
                        echo 'sucessfully';
                        header("Location: home.php");
                    }
                  
                } if ( $plan == 7){
                    $acc = benito($amount);
                    $sql = "UPDATE collage SET `amount`= '{$acc}' WHERE email = '{$emaili}'";
                    if ($result = mysqli_query($conn, $sql)) {
                        echo 'sucessfully';
                        header("Location: home.php");
                    }
                   
                } if ( $plan == 8){
                    $acc = ruby($amount);
                    $sql = "UPDATE collage SET `amount`= '{$acc}' WHERE email = '{$emaili}'";
                    if ($result = mysqli_query($conn, $sql)) {
                        echo 'sucessfully';
                        header("Location: home.php");
                    }
                } if ( $plan == 9){
                    $acc = meg($amount);
                    $sql = "UPDATE collage SET `amount`= '{$acc}' WHERE email = '{$emaili}'";
                    if ($result = mysqli_query($conn, $sql)) {
                        echo 'sucessfully';
                        header("Location: home.php");
                    }
                }
                else{
                    echo "<script>
                    alert('you have not subscribed yet') </script>";
                    echo $_SESSION['plan'];
                }
            }
        }
    }
?>
