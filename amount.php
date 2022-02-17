


<?php
// generating random referral codes

 require("config.php");
 $emaili = $_SESSION['email'];

 $sql = "SELECT * FROM collage WHERE email = '{$emaili}' " ;
 $result = mysqli_query($conn, $sql);
 $result_fetch = mysqli_fetch_assoc($result);
//  echo $result_fetch["amount"];
//  echo $result_fetch["confirm_plan"];

//     }elseif ($plan == 'Musgravite'){
//         if (isset($_POST['click_button'])) {
//             $_SESSION['clicks'] += 100 ;
//             if($_SESSION['clicks'] > 50){
//                 echo "your subscription has expired"; 
//                 session_destroy();
//             }else{
//                 header("Location: plan.php");        
//             }
//         }
//     }
// }
$amount = $result_fetch["amount"];

// pearl plan
function pearl($amount){
    $amount += 0.93;
    $_SESSION['click'] =+ $amount;
    return $amount;
    if ($amount > 40){
        echo "<script>s
        alert('You have completed your subscription') </script>";
        session_destroy();
        header("Location: home.php");
    }else{

    }
}
//>Red coral plan
function red($amount){
    $amount += 0.93;
    $_SESSION['click'] =+ $amount;
    return $amount;
    if ($amount > 40){
        echo "<script>s
        alert('You have completed your subscription') </script>";
        session_destroy();
        header("Location: home.php");
    }else{

    }
}
//Tanzanite plan
function tan($amount){
    $amount += 0.93;
    $_SESSION['click'] =+ $amount;
    return $amount;
    if ($amount > 40){
        echo "<script>s
        alert('You have completed your subscription') </script>";
        session_destroy();
        header("Location: home.php");
    }else{

    }
}

//Sapphire plan
function sapphire($amount){
    $amount += 0.93;
    $_SESSION['click'] =+ $amount;
    return $amount;
    if ($amount > 40){
        echo "<script>s
        alert('You have completed your subscription') </script>";
        session_destroy();
        header("Location: home.php");
    }else{

    }
}

//Opal plan
function opal($amount){
    $amount += 0.93;
    $_SESSION['click'] =+ $amount;
    return $amount;
    if ($amount > 40){
        echo "<script>s
        alert('You have completed your subscription') </script>";
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
    if ( $result_fetch["confirm_plan"] == 1){
        echo "<script>
        alert('head to the provided link to complete your task') </script>";
        echo pearl($amount);
        $acc = pearl($amount);
        $sql = "UPDATE collage SET `amount`= '{$acc}' WHERE email = '{$emaili}'";
        if ($result = mysqli_query($conn, $sql)) {
            echo 'sucessfully';
        }
        echo "<a href='https://www.google.com/search?client=opera&q=mercy+chinwo+songs&sourceid=opera&ie=UTF-8&oe=UTF-8'>today's task</a>";
    }elseif ( $result_fetch["confirm_plan"] == 2){
        echo "<script>
        alert('head to the provided link to complete your task') </script>";
        echo red($amount);
        $acc = red($amount);
        $sql = "UPDATE collage SET `amount`= '{$acc}' WHERE email = '{$emaili}'";
        if ($result = mysqli_query($conn, $sql)) {
            echo 'sucessfully';
        }
        echo "<a href='https://www.google.com/search?client=opera&q=mercy+chinwo+songs&sourceid=opera&ie=UTF-8&oe=UTF-8'>today's task</a>";
    } if ( $result_fetch["confirm_plan"] == 3){
        echo "<script>
        alert('head to the provided link to complete your task') </script>";
        echo tan($amount);
        $acc = tan($amount);
        $sql = "UPDATE collage SET `amount`= '{$acc}' WHERE email = '{$emaili}'";
        if ($result = mysqli_query($conn, $sql)) {
            echo 'sucessfully';
        }
        echo "<a href='https://www.google.com/search?client=opera&q=mercy+chinwo+songs&sourceid=opera&ie=UTF-8&oe=UTF-8'>today's task</a>";
    } if ( $result_fetch["confirm_plan"] == 4){
        echo "<script>
        alert('head to the provided link to complete your task') </script>";
        echo sapphire($amount);
        $acc = sapphire($amount);
        $sql = "UPDATE collage SET `amount`= '{$acc}' WHERE email = '{$emaili}'";
        if ($result = mysqli_query($conn, $sql)) {
            echo 'sucessfully';
        }
        echo "<a href='https://www.google.com/search?client=opera&q=mercy+chinwo+songs&sourceid=opera&ie=UTF-8&oe=UTF-8'>today's task</a>";
    } if ( $result_fetch["confirm_plan"] == 5){
        echo "<script>
        alert('head to the provided link to complete your task') </script>";
        echo su($amount);
        $acc = sum($amount);
        $sql = "UPDATE collage SET `amount`= '{$acc}' WHERE email = '{$emaili}'";
        if ($result = mysqli_query($conn, $sql)) {
            echo 'sucessfully';
        }
        echo "<a href='https://www.google.com/search?client=opera&q=mercy+chinwo+songs&sourceid=opera&ie=UTF-8&oe=UTF-8'>today's task</a>";
    }
    if ( $result_fetch["confirm_plan"] == 6){
        echo "<script>
        alert('head to the provided link to complete your task') </script>";
        echo sum($amount);
        $acc = sum($amount);
        $sql = "UPDATE collage SET `amount`= '{$acc}' WHERE email = '{$emaili}'";
        if ($result = mysqli_query($conn, $sql)) {
            echo 'sucessfully';
        }
        echo "<a href='https://www.google.com/search?client=opera&q=mercy+chinwo+songs&sourceid=opera&ie=UTF-8&oe=UTF-8'>today's task</a>";
    } if ( $result_fetch["confirm_plan"] == 7){
        echo "<script>
        alert('head to the provided link to complete your task') </script>";
        echo sum($amount);
        $acc = sum($amount);
        $sql = "UPDATE collage SET `amount`= '{$acc}' WHERE email = '{$emaili}'";
        if ($result = mysqli_query($conn, $sql)) {
            echo 'sucessfully';
        }
        echo "<a href='https://www.google.com/search?client=opera&q=mercy+chinwo+songs&sourceid=opera&ie=UTF-8&oe=UTF-8'>today's task</a>";
    } if ( $result_fetch["confirm_plan"] == 8){
        echo "<script>
        alert('head to the provided link to complete your task') </script>";
        echo sum($amount);
        $acc = sum($amount);
        $sql = "UPDATE collage SET `amount`= '{$acc}' WHERE email = '{$emaili}'";
        if ($result = mysqli_query($conn, $sql)) {
            echo 'sucessfully';
        }
        echo "<a href='https://www.google.com/search?client=opera&q=mercy+chinwo+songs&sourceid=opera&ie=UTF-8&oe=UTF-8'>today's task</a>";
    } if ( $result_fetch["confirm_plan"] == 9){
        echo "<script>
        alert('head to the provided link to complete your task') </script>";
        echo sum($amount);
        $acc = sum($amount);
        $sql = "UPDATE collage SET `amount`= '{$acc}' WHERE email = '{$emaili}'";
        if ($result = mysqli_query($conn, $sql)) {
            echo 'sucessfully';
        }
        echo "<a href='https://www.google.com/search?client=opera&q=mercy+chinwo+songs&sourceid=opera&ie=UTF-8&oe=UTF-8'>today's task</a>";
    }
    else{
        echo "<script>
        alert('you have not subscribed yet') </script>";
        echo $_SESSION['plan'];
    }
}




//  $plan = 'diamond';

//  if ('pearl' == $result_fetch["plan"]){
//     if (isset($_POST['click_button'])) {
//         $_SESSION['clicks'] += 0.93 ;
//         echo ($_SESSION['clicks']);
//         if($_SESSION['clicks'] > 27.9){
//             echo "
//             <script>
//             alert('you have completed your 30days activitivities, it is time to cash out');
//             </script>
//             "; 
//             session_destroy();
//         }
//     }
//  }else{
//      header('Location : index.php');
//      echo "not seen";
//  }
//         }else{
// // header("Location: plan.php");        
// }

//     } 
//     else {
//         $_SESSION['clicks'] = 0;
//     }
    
//         echo($_SESSION['clicks']);

// }elseif($plan = 'diamond'){
//     session_start();
//     if (isset($_POST['click_button'])) {
//         $_SESSION['clicks'] += 0.93 ;
//     } 
//     else {
//         $_SESSION['clicks'] = 0;
//     }
    
//         echo($_SESSION['clicks']);

// }



// $hours="00";
// $minutes="34";
// $seconds="13";

// $hours1="00"; 
// $minutes1="35";
// $seconds1="11";

// $time=($hours*3600)+($minutes*60)+$seconds; // 2053 seconds
// $time1=($hours1*3600)+($minutes1*60)+$seconds1; // 2111 seconds

// $format=gmdate('H:i:s', $time); // 00:34:13
// $format1=gmdate('H:i:s', $time1); // 00:35:11
// $formatsum=gmdate('H:i:s', $sum); // 01:09:24


// ?>
