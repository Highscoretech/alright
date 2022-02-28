


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="main-body">


  <form name="f1" action="authentication.php" onsubmit = "return validation()"  method="POST">
    <section id="form">
        <div class="imgcontainer">
             <img src="image/companylogo.jpeg" width="25%" alt="rosnac logo" class="logo">
            <div class="imgcontainer">
            <h1>Log in</h1>
            <span>I don't have an account <a href="reg.php">Sign-up</a>
            </span>
        </div>

      <p id="error-password"></p>
      <p id="no-account"></p>


    </div>
    <div class="container">
      <label for="email"><b>Email</b></label>
      <i class="fas fa-user"></i>
      <input type="email" id="email-el" placeholder="Enter email" name="email" required>

      <p id="errorEmail"></p>
      <div class="pwd">  
        <div class="overlay"></div> 
        <div>
            <i class="fas fa-lock"></i>            
           <label for="psw"><b>Password</b></label>
           <input type="password" id="password-el" name="password" placeholder="Enter Password" required>
           <i class="fas fa-eye-slash"></i>
        </div> 
      </div>
         <p id="loginError"></p>
        <button class="submit-btn" type="submit" name="login_user" value="login">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
    <div class="container" style="background-color:#f1f1f1" >Ⓒ Your personal details is secured with us
      </div>


  </section>
</form>

<script src="script.js"></script> 
   
</body>

</html>