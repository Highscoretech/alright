
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
$payment = $_REQUEST['payment'];
$referralcode = $_REQUEST['referral_code'];
$password = $_REQUEST['password'];
$confirm = $_REQUEST['confirm'];
$ref = 0;
$paid_into ="";
$refer = strtoupper(bin2hex(random_bytes(4)));
$plan = "";
$amount = 0;

	$sql = "SELECT * FROM payment WHERE paymentid = '{$payment}'";
	if ($result = mysqli_query($conn, $sql)) {
	while ($row = $result->fetch_assoc()) {
		$plan = $row["plan"];
		$paymentid = $row["paymentid"];
			if ($payment != $paymentid){
				echo "invalid payment ID";
				echo "<script>
                alert('Invalid payment ID') </script>";
			}else{
				if ($referralcode == ''){
					$sql = "INSERT INTO collage VALUES ('','$first_name',
					'$last_name','$email','$DOB','$sex','$phone','$country','$city','$facebook', 
					'$instagram', '$twitter','$crypto',' $wallect','$password','$plan', Now(), '$amount', '$ref', '$refer') ";
					mysqli_query($conn, $sql);
				// Page on which the user will be
				// redirected after logging in
						// header('location: home.php');
								echo "ERROR: Hush! Sorry $sql. ";
								// // Close connection
								mysqli_close($conn);
				}else{
					$sql = "INSERT INTO collage VALUES ('','$first_name',
					'$last_name','$email','$DOB','$sex','$phone','$country','$city','$facebook', 
					'$instagram', '$twitter','$crypto',' $wallect','$password','$plan', Now(), '$amount', '$ref', '$refer') ";
					mysqli_query($conn, $sql);
					// Page on which the user will be
					
					echo "ERROR: Hush! Sorry $sql. ";
						
						if ($plan == 1){
							$sql = "SELECT * FROM collage WHERE refer = '{$referralcode}'";
							if ($result = mysqli_query($conn, $sql)) {
								while ($row = $result->fetch_assoc()) {
									$bonus = $row["ref_amount"] + 1;
								}echo $bonus;
								$sql = "UPDATE collage SET `ref_amount`= '{$bonus}' WHERE refer = '{$referralcode}'";
								if ($result = mysqli_query($conn, $sql)) {
									echo 'sucessfully';
								}					 
							}
						}
						if ($plan == 2){
							$sql = "SELECT * FROM collage WHERE refer = '{$referralcode}'";
							if ($result = mysqli_query($conn, $sql)) {
								while ($row = $result->fetch_assoc()) {
									$bonus = $row["ref_amount"] + 2;
								}echo $bonus;
								$sql = "UPDATE collage SET `ref_amount`= '{$bonus}' WHERE refer = '{$referralcode}'";
								if ($result = mysqli_query($conn, $sql)) {
									echo 'sucessfully';
								}					 
							}
						}

						if ($plan == 3){
							$sql = "SELECT * FROM collage WHERE refer = '{$referralcode}'";
							if ($result = mysqli_query($conn, $sql)) {
								while ($row = $result->fetch_assoc()) {
									$bonus = $row["ref_amount"] + 5;
								}echo $bonus;
								$sql = "UPDATE collage SET `ref_amount`= '{$bonus}' WHERE refer = '{$referralcode}'";
								if ($result = mysqli_query($conn, $sql)) {
									echo 'sucessfully';
								}					 
							}
						}
						
						if ($plan == 4){
							$sql = "SELECT * FROM collage WHERE refer = '{$referralcode}'";
							if ($result = mysqli_query($conn, $sql)) {
								while ($row = $result->fetch_assoc()) {
									$bonus = $row["ref_amount"] + 7;
								}echo $bonus;
								$sql = "UPDATE collage SET `ref_amount`= '{$bonus}' WHERE refer = '{$referralcode}'";
								if ($result = mysqli_query($conn, $sql)) {
									echo 'sucessfully';
								}					 
							}
						}

						if ($plan == 5){
							$sql = "SELECT * FROM collage WHERE refer = '{$referralcode}'";
							if ($result = mysqli_query($conn, $sql)) {
								while ($row = $result->fetch_assoc()) {
									$bonus = $row["ref_amount"] + 10;
								}echo $bonus;
								$sql = "UPDATE collage SET `ref_amount`= '{$bonus}' WHERE refer = '{$referralcode}'";
								if ($result = mysqli_query($conn, $sql)) {
									echo 'sucessfully';
								}					 
							}
						}

						if ($plan == 6){
							$sql = "SELECT * FROM collage WHERE refer = '{$referralcode}'";
							if ($result = mysqli_query($conn, $sql)) {
								while ($row = $result->fetch_assoc()) {
									$bonus = $row["ref_amount"] + 20;
								}echo $bonus;
								$sql = "UPDATE collage SET `ref_amount`= '{$bonus}' WHERE refer = '{$referralcode}'";
								if ($result = mysqli_query($conn, $sql)) {
									echo 'sucessfully';
								}					 
							}
						}

						if ($plan == 7){
							$sql = "SELECT * FROM collage WHERE refer = '{$referralcode}'";
							if ($result = mysqli_query($conn, $sql)) {
								while ($row = $result->fetch_assoc()) {
									$bonus = $row["ref_amount"] + 50;
								}echo $bonus;
								$sql = "UPDATE collage SET `ref_amount`= '{$bonus}' WHERE refer = '{$referralcode}'";
								if ($result = mysqli_query($conn, $sql)) {
									echo 'sucessfully';
								}					 
							}
						}
						if ($plan == 8){
							$sql = "SELECT * FROM collage WHERE refer = '{$referralcode}'";
							if ($result = mysqli_query($conn, $sql)) {
								while ($row = $result->fetch_assoc()) {
									$bonus = $row["ref_amount"] + 100;
								}echo $bonus;
								$sql = "UPDATE collage SET `ref_amount`= '{$bonus}' WHERE refer = '{$referralcode}'";
								if ($result = mysqli_query($conn, $sql)) {
									echo 'sucessfully';
								}					 
							}
						}
						if ($plan == 9){
						$sql = "SELECT * FROM collage WHERE refer = '{$referralcode}'";
						if ($result = mysqli_query($conn, $sql)) {
							while ($row = $result->fetch_assoc()) {
								$bonus = $row["ref_amount"] + 200;
							}echo $bonus;
							$sql = "UPDATE collage SET `ref_amount`= '{$bonus}' WHERE refer = '{$referralcode}'";
							if ($result = mysqli_query($conn, $sql)) {
								echo 'sucessfully';
							}					 
						}
						// // Close connection
						// redirected after logging in
						header('location: home.php');
						mysqli_close($conn);
						}else{
							echo "nothing";
					}
				}
			}

		}
	}
}

?>
