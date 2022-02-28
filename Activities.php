<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.min.css">
</head>

<script>
  function success(){
    alert ("You have completed today's task, PLEASE DON'T CLICK AGAIN TO AVOID UNWANTED ACTIONS, YOUR WALLET WILL BE CREDITED")
}
</script>

<body id="body-pi">
  <h1>TODAY's TASK IS OUT</h1>
  <br>
  <br>
  <br>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="image/out1.jpeg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="image/out2.jpeg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="image/out3.jpeg" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
  
    <div class="task-container">
        <!-- <form action="empty" onsubmit="return false" method="post"> -->
        <!-- <input type="submit" name="click_button" value="t">
        </form> -->
        

        <p>Click to complete your task.</p>

        <form action="amount.php" method="post">
        <input onclick="success()" type="submit" name="click_button" class="btn btn-primary" value="click me">
        </form>
        <br>
   


    <script src="script.js"></script>
    <script src="bootstrap/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>