<?php      
    require('herokudb.php');  

if (isset($_POST['login'])) {
        $_SESSION['email'] = $_POST['email'];

    $emailEl = $_SESSION['email'];  
    $passwordEl= $_POST['password'];  
      
        //to prevent from mysqli injection  
        $emailEl = stripcslashes($emailEl);  
        $passwordEl = stripcslashes($passwordEl);  
        $emailEl = mysqli_real_escape_string($conn, $emailEl);  
        $passwordEl = mysqli_real_escape_string($conn, $passwordEl); 
        
        $select = mysqli_query($conn, "SELECT `email` FROM `collage` WHERE `email` = '".$_POST['email']."'") or exit(mysqli_error($connectionID));
            if(mysqli_num_rows($select)) { 
                $sql = "SELECT * FROM collage WHERE email = '{$emailEl}'"; 
                if ($result = mysqli_query($conn, $sql)) {
                    while ($row = $result->fetch_assoc()) {
                        $email = $row["email"];
                        $password = $row["password"];
                        
                        if ($passwordEl == $password){
                            // Storing username in session variable
                            echo "<script>
                            alert('Log in successfully') </script>";
                            header("Location: home.php");
                        }else{
                            echo "incorrect password";
                            echo "<script>
                            alert('incorrect password') </script>";
                            exit;
                        }  
                    } 
                }else{
                    echo "Invalid email";
                        echo "<script>
                        alert('Invalid email and password') </script>";
                        exit;
                }

            $result->free();
            }
 
}

?>  