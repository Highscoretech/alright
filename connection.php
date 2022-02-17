
<?php
require("config.php");
if (isset($_POST['reg_user'])) {
	$_SESSION['first_name']
	= $_POST['first_name'];
	$_SESSION['email']
	= $_POST['email'];

// Taking all 5 values from the form data(input)
$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$email = $_REQUEST['email'];
$DOB = $_REQUEST['DOB'];
$sex = $_REQUEST['sex'];
$phone = $_REQUEST['phone'];
$country = $_REQUEST['country'];
$city = $_REQUEST['city'];
$facebook = $_REQUEST['facebook'];
$instagram = $_REQUEST['instagram'];
$twitter = $_REQUEST['twitter'];
$crypto = $_REQUEST['crypto'];
$wallect = $_REQUEST['wallect'];
$_SESSION['referral_code'] = $_REQUEST['referral_code'];
$password = $_REQUEST['password'];
$confirm = $_REQUEST['confirm'];
$ref = 0;
$paid_into ="";
$refer = strtoupper(bin2hex(random_bytes(4)));
$plan = "";
$amount = 0;


	// Performing insert query execution
	// here our table name is college
	$select = mysqli_query($conn, "SELECT * FROM collage WHERE email = '". $_REQUEST['email']."'");
	if(mysqli_num_rows($select)) {
		echo "<script>
        alert('This email address already existed') </script>";
		exit('This email address is already used!');

	}else{
		include ('referral.php');
		$sql = "INSERT INTO collage VALUES ('','$first_name',
		'$last_name','$email','$DOB','$sex','$phone','$country','$city','$facebook', 
		'$instagram', '$twitter','$crypto',' $wallect','$password','$plan', Now(), '$amount', '$ref', '$paid_into', '$refer') ";
		mysqli_query($conn, $sql);
	// Page on which the user will be
	// redirected after logging in
	header('location: home.php');
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
	}

	}
	
// Close connection
mysqli_close($conn);
?>
