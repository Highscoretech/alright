<?php      
    require('config.php');  
//     if ( !isset($_POST['username'], $_POST['password']) ) {
//         // Could not get the data that should have been sent.
//         exit('Please fill both the username and password fields!');
//     }

//     // Prepare our SQL, preparing the SQL statement will prevent SQL injection.
// if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE email = ?')) {
// 	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
// 	$stmt->bind_param('s', $_POST['email']);
// 	$stmt->execute();
// 	// Store the result so we can check if the account exists in the database.
// 	$stmt->store_result();


// 	$stmt->close();
// }
// $stmt->store_result();

// if ($stmt->num_rows > 0) {
// 	$stmt->bind_result($id, $password);
// 	$stmt->fetch();
// 	// Account exists, now we verify the password.
// 	// Note: remember to use password_hash in your registration file to store the hashed passwords.
// 	if (password_verify($_POST['password'], $password)) {
// 		// Verification success! User has logged-in!
// 		// Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
// 		session_regenerate_id();
// 		$_SESSION['loggedin'] = TRUE;
// 		$_SESSION['name'] = $_POST['email'];
// 		$_SESSION['id'] = $id;
// 		echo 'Welcome ' . $_SESSION['name'] . '!';
// 	} else {
// 		// Incorrect password
// 		echo 'Incorrect username and/or password!';
// 	}
// } else {
// 	// Incorrect username
// 	echo 'Incorrect username and/or password!';
// }

if (isset($_POST['login_user'])) {
    $_SESSION['first_name']
        = $_POST['first_name'];
        $_SESSION['email']
        = $_POST['email'];

    $emailEl = $_POST['email'];  
    $passwordEl= $_POST['password'];  
      
        //to prevent from mysqli injection  
        $emailEl = stripcslashes($emailEl);  
        $passwordEl = stripcslashes($passwordEl);  
        $emailEl = mysqli_real_escape_string($conn, $emailEl);  
        $passwordEl = mysqli_real_escape_string($conn, $passwordEl); 
        
        $select = mysqli_query($conn, "SELECT * FROM collage WHERE email = '". $_POST['email']."'");
        if(mysqli_num_rows($select)) {
            $sql = "SELECT * FROM collage WHERE email = '$emailEl'";  
            if ($result = mysqli_query($conn, $sql)) {
                while ($row = $result->fetch_assoc()) {
                    $email = $row["email"];
                    $password = $row["password"];
                }
                if ($passwordEl == $password){
                     // Storing username in session variable
                     echo "<script>
                alert('Log in successfully') </script>";
                    header("Location: home.php");
                    exit;    
                }elseif ($passwordEl != $password){
                    echo "incorrect password";
                    echo "<script>
                    alert('incorrect password') </script>";
                    exit;
                }
                else{
                    echo "<script>
                    alert('incorrect password') </script>";
                    exit;
                }
            }else{
                echo "<script>
                alert('incorrect email') </script>";
                exit;
            }
            $result->free();
        }
        else{
            echo "<script>
                alert('incorrect email and password') </script>";
            exit;
        }
}

?>  