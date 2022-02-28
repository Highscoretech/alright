


<?php
// generating random referral codes

 require("herokudb.php");
 $emaili = $_SESSION['email'];

//  $sql = "SELECT * FROM collage WHERE email = '{$emaili}' " ;
//  $result = mysqli_query($conn, $sql);
//  $result_fetch = mysqli_fetch_assoc($result);

$sql = "SELECT * FROM collage WHERE email = '{$emaili}'";
	if ($result = mysqli_query($conn, $sql)) {
        while ($row = $result->fetch_assoc()) {
            $plan = $row["confirm_plan"];
            $amount = $row["amount"];

            //silver plan
            function silver($amount){
                $amount += 0.5;
                $_SESSION['click'] =+ $amount;
                return $amount;
                if ($amount == 15){
                    echo "<script>
                    alert('You have completed your subscription') </script>";
                    session_destroy();
                    header("Location: home.php");
                }else{

                }
            }

            // pearl plan
            function pearl($amount){
                $amount += 1;
                $_SESSION['click'] =+ $amount;
                return $amount;
                if ($amount == 30){
                    echo "<script>
                    alert('You have completed your subscription') </script>";
                    session_destroy();
                    header("Location: home.php");
                }else{

                }
            }
            //>Red coral plan
            function red($amount){
                $amount += 2.5;
                $_SESSION['click'] =+ $amount;
                return $amount;
                if ($amount == 75){
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
                $amount += 12.5;
                $_SESSION['click'] =+ $amount;
                return $amount;
                if ($amount > 378){
                    echo "<script>
                    alert('You have completed your subscription') </script>";
                    session_destroy();
                    header("Location: home.php");
                }else{

                }
            }

            //Opal plan
            function opal($amount){
                $amount += 25;
                $_SESSION['click'] =+ $amount;
                return $amount;
                if ($amount > 750){
                    echo "<script>
                    alert('You have completed your subscription') </script>";
                    session_destroy();
                    header("Location: home.php");
                }else{

                }
            }

            function diamond($amount){
                $amount += 50 ;
                $_SESSION['click'] =+ $amount;
                return $amount;
                if ($amount > 1502){
                    echo "<script>s
                    alert('You have completed your subscription') </script>";
                    session_destroy();
                    header("Location: home.php");
                }else{

                }
            }

            function benito($amount){
                $amount += 100;
                $_SESSION['click'] =+ $amount;
                return $amount;
                if ($amount > 3000){
                    echo "<script>
                    alert('You have completed your subscription') </script>";
                    session_destroy();
                    header("Location: home.php");
                }else{

                }
            }


            function ruby($amount){
                $amount += 150;
                $_SESSION['click'] =+ $amount;
                return $amount;
                if ($amount > 4501){
                    echo "<script>
                    alert('You have completed your subscription') </script>";
                    session_destroy();
                    header("Location: home.php");
                }else{

                }
            }

            // function meg($amount){
            //     $amount += 200;
            //     $_SESSION['click'] =+ $amount;
            //     return $amount;
            //     if ($amount > 6001){
            //         session_destroy();
            //         header("Location: home.php");
            //     }else{

            //     }
            // }

            if (isset($_POST['click_button'])) {

                                //Get Heroku ClearDB connection information
                $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
                $cleardb_server = $cleardb_url["host"];
                $cleardb_username = $cleardb_url["user"];
                $cleardb_password = $cleardb_url["pass"];
                $cleardb_db = substr($cleardb_url["path"],1);
                $active_group = 'default';
                $query_builder = TRUE;
                // Connect to DB
                $conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
                // $conn = mysqli_connect("localhost", "root", "", "facaulty");
                    
                // // Check connection
                // if($conn === false){
                //     die("ERROR: Could not connect. "
                //         . mysqli_connect_error());
                
                if ( $plan == 1){
                    $acc = silver($amount);
                    $sql = "UPDATE collage SET `amount`= '{$acc}' WHERE email = '{$emaili}'";
                    if ($result = mysqli_query($conn, $sql)) {
                        echo 'sucessfully';
                        header("Location: home.php");
                    }
                }elseif ( $plan == 2){
                    $acc = pearl($amount);
                    $sql = "UPDATE collage SET `amount`= '{$acc}' WHERE email = '{$emaili}'";
                    if ($result = mysqli_query($conn, $sql)) {
                        echo 'sucessfully';
                        header("Location: home.php");
                    }
                    
                } if ( $plan == 3){
                    $acc = red($amount);
                    $sql = "UPDATE collage SET `amount`= '{$acc}' WHERE email = '{$emaili}'";
                    if ($result = mysqli_query($conn, $sql)) {
                        echo 'sucessfully';
                        header("Location: home.php");
                    }
                } if ( $plan == 4){
                    $acc = tani($amount);
                    $sql = "UPDATE collage SET `amount`= '{$acc}' WHERE email = '{$emaili}'";
                    if ($result = mysqli_query($conn, $sql)) {
                        echo 'sucessfully';
                        header("Location: home.php");
                    }
                } if ( $plan== 5){
                    
                    $acc = sapphire($amount);
                    $sql = "UPDATE collage SET `amount`= '{$acc}' WHERE email = '{$emaili}'";
                    if ($result = mysqli_query($conn, $sql)) {
                        echo 'sucessfully';
                        header("Location: home.php");
                    }
                
                }
                if ( $plan == 6){
                    $acc = opal($amount);
                    $sql = "UPDATE collage SET `amount`= '{$acc}' WHERE email = '{$emaili}'";
                    if ($result = mysqli_query($conn, $sql)) {
                        echo 'sucessfully';
                        header("Location: home.php");
                    }
                  
                } if ( $plan == 7){
                    $acc = diamond($amount);
                    $sql = "UPDATE collage SET `amount`= '{$acc}' WHERE email = '{$emaili}'";
                    if ($result = mysqli_query($conn, $sql)) {
                        echo 'sucessfully';
                        header("Location: home.php");
                    }
                   
                } if ( $plan == 8){
                    $acc = benito($amount);
                    $sql = "UPDATE collage SET `amount`= '{$acc}' WHERE email = '{$emaili}'";
                    if ($result = mysqli_query($conn, $sql)) {
                        echo 'sucessfully';
                        header("Location: home.php");
                    }
                } if ( $plan == 9){
                    $acc = ruby($amount);
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
