<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>deposit page</title>
    <link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body id="body-pi">
<div class="App">
        <div class="vertical-center">
            <div class="inner-block">
                <form action="empty.php" method="post">
                <div class="form-group">
                    
                <label for="firstname"><b>Email</b></label>
                <input type="email" id="email" placeholder="Enter your email  " name="email" required>
                <p>Your payment_ID will be sent to the above email</p>
                </div>


                    <div class="form-group">
                        
                        <select class="form-select" aria-label="Default select example>" name="paid_into" required>
                        <option value="1">Select the coin you want to copy </option>
                        <option value="bitcoin">Bitcoin </option>
                        <option value="litcoin">Litcoin</option>
                        <option value="tron">Trons</option>
                        </select>
                        <p>please make sure you copy the same address below</p>
                    </div> 
                    <br>
                    <div class="form-group">
                    <select class="form-select" aria-label="Default select example>" name="plan" required>
                        <option value="0">Select your favourite plan </option>
                        <option value="1">Pearl plan => $20 </option>
                        <option value="2">Red corol plan => $50</option>
                        <option value="3">Tanzanite => $150</option>
                        <option value="4">Sapphire => $250</option>
                        <option value="5">Opal plan => $500</option>
                        <option value="6">Black_diamond => $1000</option>
                        <option value="7">Benitoite plan => $2000</option>
                        <option value="8">Rubby plan => $3000</option>
                        <option value="9">Musgravite => $5000</option>
                    </select>
                    </div>
                        
                    <!-- <button type="submit" name="login" id="sign_in"
                        class="btn btn-outline-primary btn-lg btn-block">Sign
                        in</button> -->
                        <p id="message"></p>
                        <button name="paid" class="btn btn-outline-primary btn-lg btn-block" id="i-have-paid">I have paid<?php
                        ?></button>
                </form>
            </div>
        </div>
    </div>

<script>
        // changing the "i have paid" button to a text value in the deposit page

const paidEl = document.getElementById("message")
const paidbtn = document.getElementById("i-have-paid")



paidbtn.addEventListener("click", function(){

    alert( "Thanks for trusting us, an email will be sent to you immediately after your payment is confirmed");
})
 
</script>
    
     <p style="color:wheat;font-size:55px;text-align:center;">Select prefered address and copy</p>
    
    <div class="payment-address">
    <h2>Bitcoin address</h2>
    <button id="copy-button" onclick="copyToClipboard('#p1')">Copy</button>
    <p id="p1">bc1qyzmk7ftzq0fg3cjyzvfh6pdvretz6m6nsvddvsrsvmgpd9v79mpqee4h56</p>  

    </div>

    <div class="payment-address">
        <h2>Litcoin address</h2>
        <button id="copy-button" onclick="copyToClipboard('#p2')">Copy</button>
        <p id="p2">LSPhmX2UrNndgDvPgPo5Cb84TTziA1B9J5 </p>
    </div>

    <div class="payment-address">
        
    <h2>Trons address</h2>
    <button id="copy-button" onclick="copyToClipboard('#p3')">Copy</button>
    <p id="p3">0x5b1218459C2E61EF7eC4c78507bAf708ACccf7ae 
    </p>
    </div>


    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    
</body>
</html>