<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile </title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="body-pi">



<?php
require("herokudb.php");

$emaili = $_SESSION['email'];

$sql = "SELECT * FROM collage WHERE email = '{$emaili}' " ;

if ($result = mysqli_query($conn, $sql)) {
    while ($row = $result->fetch_assoc()) {
        $firstname = $row["first_name"];
        $lastname = $row["last_name"];
        $email = $row["email"];
        $DOB = $row["DOB"];
        $sex = $row["sex"];
        $phone = $row["phone"];
        $country = $row["country"];
        $city = $row["city"];
        $facebook= $row["facebook"];
        $instagram = $row["instagram"];
        $twitter = $row["twitter"];
        $crypto = $row["crypto"];
        $wallect = $row["wallect"];
        $refer = $row["refer"];
        $plan = $row["confirm_plan"];
        $amount = $row["amount"];
        $ref_amount = $row["ref_amount"];

        if ($row["confirm_plan"] == 1){
            $plan = "silver plan";
        }

        if ($row["confirm_plan"] == 2){
            $plan = "pearl plan";
        }
        if ($row["confirm_plan"] == 3){
            $plan = "Red corol plan";
        }
        if ($row["confirm_plan"] == 4){
            $plan = "Tanzanite plan";
        }
        if ($row["confirm_plan"] == 5){
            $plan = "Sapphire";
        }
        if ($row["confirm_plan"] == 6){
            $plan = "Opal plan";
        }
        if ($row["confirm_plan"] == 7){
            $plan = "Black Diamond plan";
        }
        if ($row["confirm_plan"] == 8){
            $plan = "Benitoite plan";
        }
        if ($row["confirm_plan"] == 9){
            $plan = "Ruby plan";
        }
        // if ($row["confirm_plan"] == 9){
        //     $plan = "Musgravite";
        // }

        // echo '<b>'.$field1name.$field2name.'</b><br />';
        // echo $field3name.'<br />';
        // echo $field4name.'<br />';
        // echo $field5name;
    }

/*freeresultset*/
$result->free();

}
?>
    <div class="myPro">

        <h1>MY PROFILE</h1>
    </div>
    <div class="wallect">
         <h2 id="account-el">Account balance : $ <?php echo "$amount" ?>  <br/></h2>
         <h2 id="affiliate-el">Affiliate balance : $ <?php echo "$ref_amount" ?> </h2>
    </div>

   <section class="proContainer">
       <div class="proArrangement">
           <h2 style="color: rgb(9, 138, 58);">Your personal details</h2>
           <h3 id="displayfirstName">Firstname :    <?php echo "$firstname" ?> </h3>
           <h3 id="displaysurname">Lastname :   <?php echo "$lastname" ?>  </h3>
           <h3 id="dispalyEmail">Email :    <?php echo "$email" ?> </h3>
           <h3 id="displaySex">Sex :    <?php echo "$sex" ?> </h3></h3>
           <h3 id="displayPhone">Phone :    <?php echo "$phone" ?></h3>
           <h3 id="displayCountry"> Country : <?php echo "$country" ?> </h3>
           <h3 id="displaycity"> City : <?php echo "$city" ?></h3><br>
           <br>
           <h3 id="displayerefer"> Referal_code : <?php echo "$refer" ?></h3><br>

           <h2 style="color: rgb(9, 138, 58);">Your wallect address for withdrawals</h2>
           <h3 id="displaycrypto"> Crypto currency : <?php echo "$crypto" ?></h3>
           <h3 id="displaywallect"> Wallect address : <?php echo "$wallect" ?></h3>
           <h3 id="displayplan"> plan : <?php echo "$plan" ?></h3>
           <h3 id="displaycountdown"> </h3>
       </div>
   </section>
   <div class="Editpro">
       <button id="proEdit">Edit profile</button>
   </div>

   <script src="script.js"></script>
</body>
</html>