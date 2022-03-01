
<?php
require("herokudb.php");
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

$select = mysqli_query($conn, "SELECT `email` FROM `collage` WHERE `email` = '".$_POST['email']."'") or exit(mysqli_error($connectionID));
if(mysqli_num_rows($select)) { 
	echo 'email already exit';
}
if ($password != $confirm){
	echo "password did not match";
}else{
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
					'$last_name','$email','$DOB','$sex','$phone','$country',
					'$city','$crypto',' $wallect','$password','$plan', Now(), '$amount', '$ref', '$refer') ";
					mysqli_query($conn, $sql);
					// Page on which the user will be
					$sql = "DELETE FROM  payment WHERE paymentid = '{$payment}'";
					mysqli_query($conn, $sql);
					// redirected after logging in
							header('location: home.php');
								echo "ERROR: Hush! Sorry $sql. ";
								// // Close connection
								mysqli_close($conn);
				}else{
					$sql = "INSERT INTO collage VALUES ('','$first_name',
					'$last_name','$email','$DOB','$sex','$phone','$country','$city',
					'$crypto',' $wallect','$password','$plan', Now(), '$amount', '$ref', '$refer') ";
					mysqli_query($conn, $sql);
					// Page on which the user will be
					$sql = "DELETE FROM  payment WHERE paymentid = '{$payment}'";
					mysqli_query($conn, $sql);
					echo "ERROR: Hush! Sorry $sql. ";
						
						if ($plan == 1){
							if ($referralcode[0] == '?'){
								$sql = "SELECT * FROM market WHERE ID = '{$referralcode}'";
								if ($result = mysqli_query($conn, $sql)) {
									while ($row = $result->fetch_assoc()) {
										$nums = $row["amount"] + 1;
									}
									$sql = "UPDATE market SET `amount`= '{$nums}' WHERE ID  = '{$referralcode}'";
									if ($result = mysqli_query($conn, $sql)) {
										echo 'sucessfully';
										header('location: home.php');
									}					 
								}
							}else{
								$sql = "SELECT * FROM collage WHERE refer = '{$referralcode}'";
								if ($result = mysqli_query($conn, $sql)) {
									while ($row = $result->fetch_assoc()) {
										$bonus = $row["ref_amount"] + 0.5;
									}echo $bonus;
									$sql = "UPDATE collage SET `ref_amount`= '{$bonus}' WHERE refer = '{$referralcode}'";
									if ($result = mysqli_query($conn, $sql)) {
										echo 'sucessfully';
										header('location: home.php');
									}					 
								}
							}
						}
							
						
						if ($plan == 2){
								if ($referralcode[0] == '?'){
									$sql = "SELECT * FROM market WHERE ID = '{$referralcode}'";
									if ($result = mysqli_query($conn, $sql)) {
										while ($row = $result->fetch_assoc()) {
											$nums = $row["amount"] + 2;
										}
										$sql = "UPDATE market SET `amount`= '{$nums}' WHERE ID  = '{$referralcode}'";
										if ($result = mysqli_query($conn, $sql)) {
											echo 'sucessfully';
											header('location: home.php');
										}					 
									}
								}else{
									$sql = "SELECT * FROM collage WHERE refer = '{$referralcode}'";
									if ($result = mysqli_query($conn, $sql)) {
										while ($row = $result->fetch_assoc()) {
											$bonus = $row["ref_amount"] + 1;
										}echo $bonus;
										$sql = "UPDATE collage SET `ref_amount`= '{$bonus}' WHERE refer = '{$referralcode}'";
										if ($result = mysqli_query($conn, $sql)) {
											echo 'sucessfully';
											header('location: home.php');
										}					 
									}
								}
						}

						if ($plan == 3){
							if ($referralcode[0] == '?'){
								$sql = "SELECT * FROM market WHERE ID = '{$referralcode}'";
								if ($result = mysqli_query($conn, $sql)) {
									while ($row = $result->fetch_assoc()) {
										$nums = $row["amount"] + 5;
									}
									$sql = "UPDATE market SET `amount`= '{$nums}' WHERE ID  = '{$referralcode}'";
									if ($result = mysqli_query($conn, $sql)) {
										echo 'sucessfully';
										header('location: home.php');
									}					 
								}
							}else{
								$sql = "SELECT * FROM collage WHERE refer = '{$referralcode}'";
								if ($result = mysqli_query($conn, $sql)) {
									while ($row = $result->fetch_assoc()) {
										$bonus = $row["ref_amount"] + 2.5;
									}echo $bonus;
									$sql = "UPDATE collage SET `ref_amount`= '{$bonus}' WHERE refer = '{$referralcode}'";
									if ($result = mysqli_query($conn, $sql)) {
										echo 'sucessfully';
										header('location: home.php');
									}					 
								}
							}
							
						}
						
						if ($plan == 4){
							if ($referralcode[0] == '?'){
								$sql = "SELECT * FROM market WHERE ID = '{$referralcode}'";
								if ($result = mysqli_query($conn, $sql)) {
									while ($row = $result->fetch_assoc()) {
										$nums = $row["amount"] + 10;
									}
									$sql = "UPDATE market SET `amount`= '{$nums}' WHERE ID  = '{$referralcode}'";
									if ($result = mysqli_query($conn, $sql)) {
										echo 'sucessfully';
										header('location: home.php');
									}					 
								}
							}else{
								$sql = "SELECT * FROM collage WHERE refer = '{$referralcode}'";
								if ($result = mysqli_query($conn, $sql)) {
									while ($row = $result->fetch_assoc()) {
										$bonus = $row["ref_amount"] + 5;
									}echo $bonus;
									$sql = "UPDATE collage SET `ref_amount`= '{$bonus}' WHERE refer = '{$referralcode}'";
									if ($result = mysqli_query($conn, $sql)) {
										echo 'sucessfully';
										header('location: home.php');
									}					 
								}
							}
						}

						if ($plan == 5){
							if ($referralcode[0] == '?'){
								$sql = "SELECT * FROM market WHERE ID = '{$referralcode}'";
								if ($result = mysqli_query($conn, $sql)) {
									while ($row = $result->fetch_assoc()) {
										$nums = $row["amount"] + 25;
									}
									$sql = "UPDATE market SET `amount`= '{$nums}' WHERE ID  = '{$referralcode}'";
									if ($result = mysqli_query($conn, $sql)) {
										echo 'sucessfully';
										header('location: home.php');
									}					 
								}
							}
							$sql = "SELECT * FROM collage WHERE refer = '{$referralcode}'";
							if ($result = mysqli_query($conn, $sql)) {
								while ($row = $result->fetch_assoc()) {
									$bonus = $row["ref_amount"] + 12.5;
								}echo $bonus;
								$sql = "UPDATE collage SET `ref_amount`= '{$bonus}' WHERE refer = '{$referralcode}'";
								if ($result = mysqli_query($conn, $sql)) {
									echo 'sucessfully';
									header('location: home.php');
								}					 
							}
						}

						if ($plan == 6){
							if ($referralcode[0] == '?'){
								$sql = "SELECT * FROM market WHERE ID = '{$referralcode}'";
								if ($result = mysqli_query($conn, $sql)) {
									while ($row = $result->fetch_assoc()) {
										$nums = $row["amount"] + 50;
									}
									$sql = "UPDATE market SET `amount`= '{$nums}' WHERE ID  = '{$referralcode}'";
									if ($result = mysqli_query($conn, $sql)) {
										echo 'sucessfully';
										header('location: home.php');
									}					 
								}
							}else{
								$sql = "SELECT * FROM collage WHERE refer = '{$referralcode}'";
								if ($result = mysqli_query($conn, $sql)) {
									while ($row = $result->fetch_assoc()) {
										$bonus = $row["ref_amount"] + 25;
									}echo $bonus;
									$sql = "UPDATE collage SET `ref_amount`= '{$bonus}' WHERE refer = '{$referralcode}'";
									if ($result = mysqli_query($conn, $sql)) {
										echo 'sucessfully';
										header('location: home.php');
									}					 
								}
							}
							
						}

						if ($plan == 7){
							if ($referralcode[0] == '?'){
								$sql = "SELECT * FROM market WHERE ID = '{$referralcode}'";
								if ($result = mysqli_query($conn, $sql)) {
									while ($row = $result->fetch_assoc()) {
										$nums = $row["amount"] + 100;
									}
									$sql = "UPDATE market SET `amount`= '{$nums}' WHERE ID  = '{$referralcode}'";
									if ($result = mysqli_query($conn, $sql)) {
										echo 'sucessfully';
										header('location: home.php');
									}					 
								}
							}else{
								$sql = "SELECT * FROM collage WHERE refer = '{$referralcode}'";
								if ($result = mysqli_query($conn, $sql)) {
									while ($row = $result->fetch_assoc()) {
										$bonus = $row["ref_amount"] + 50;
									}echo $bonus;
									$sql = "UPDATE collage SET `ref_amount`= '{$bonus}' WHERE refer = '{$referralcode}'";
									if ($result = mysqli_query($conn, $sql)) {
										echo 'sucessfully';
										header('location: home.php');
									}					 
								}
							}
							}
						if ($plan == 8){
							if ($referralcode[0] == '?'){
								$sql = "SELECT * FROM market WHERE ID = '{$referralcode}'";
								if ($result = mysqli_query($conn, $sql)) {
									while ($row = $result->fetch_assoc()) {
										$nums = $row["amount"] + 200;
									}
									$sql = "UPDATE market SET `amount`= '{$nums}' WHERE ID  = '{$referralcode}'";
									if ($result = mysqli_query($conn, $sql)) {
										echo 'sucessfully';
										header('location: home.php');
									}					 
								}
							}else{
								$sql = "SELECT * FROM collage WHERE refer = '{$referralcode}'";
								if ($result = mysqli_query($conn, $sql)) {
									while ($row = $result->fetch_assoc()) {
										$bonus = $row["ref_amount"] + 100;
									}echo $bonus;
									$sql = "UPDATE collage SET `ref_amount`= '{$bonus}' WHERE refer = '{$referralcode}'";
									if ($result = mysqli_query($conn, $sql)) {
										echo 'sucessfully';
										header('location: home.php');
									}					 
								}
							}
						}
						if ($plan == 9){
							if ($referralcode[0] == '?'){
								$sql = "SELECT * FROM market WHERE ID = '{$referralcode}'";
								if ($result = mysqli_query($conn, $sql)) {
									while ($row = $result->fetch_assoc()) {
										$nums = $row["amount"] + 300;
									}
									$sql = "UPDATE market SET `amount`= '{$nums}' WHERE ID  = '{$referralcode}'";
									if ($result = mysqli_query($conn, $sql)) {
										echo 'sucessfully';
										header('location: home.php');
									}					 
								}
							}else
						$sql = "SELECT * FROM collage WHERE refer = '{$referralcode}'";
						if ($result = mysqli_query($conn, $sql)) {
							while ($row = $result->fetch_assoc()) {
								$bonus = $row["ref_amount"] + 150;
							}echo $bonus;
							$sql = "UPDATE collage SET `ref_amount`= '{$bonus}' WHERE refer = '{$referralcode}'";
							if ($result = mysqli_query($conn, $sql)) {
								echo 'sucessfully';
								header('location: home.php');
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

}
?>
