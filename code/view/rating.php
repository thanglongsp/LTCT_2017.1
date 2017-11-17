<?php
session_start();
if (!isset($_SESSION['name'])) {
     header('Location: login.php');
}else{
  $name = $_SESSION['name'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>home page user</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css"  href="css/css_form.css">
</head>

<body >

<!--toolbar-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="home_page_user.php"><span class="glyphicon glyphicon-home"></span>  Home</a></li>
      </ul>

      <!--^^-->
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> logout</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li ><a href="profile_user.php"><span class="glyphicon glyphicon-user"></span> <?php echo $name;?></a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-send"></span> FollowBill</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li class = "active"><a href="#"><span class="glyphicon glyphicon-star"></span> Rating</a></li>
      </ul>
	    
      <ul class="nav navbar-nav navbar-right">
        <li><a href="favorite.php"><span class="glyphicon glyphicon-bookmark"></span> Favorite</a></li>
      </ul>

    </div>
  </div>
</nav>
  
<!--content-->

<div class="container-fluid text-left" style="min-height:750px;"> 
  <center>
<div class="col-sm-6">  
     <h1>Please! Rating and Comment this page ... </h1>
    <form action = "rating.php" method = "POST">

      <div class="form-group row">

          <div class="col-xs-12">
            <label for="date"> <span class="glyphicon glyphicon-calendar"></span> Date : </label>
            <input class="form-control" id="date" type="date" name="date">
          <br>
            <label for="star"><span class="glyphicon glyphicon-star"> Star : </label>
            <input class="form-control" id="star" type="number" name="star" placeholder = "1 - 5 stars"> </span>
          <br>
            <label for="comment"><span class="glyphicon glyphicon-comment"> Comment : </label>
            <textarea class="form-control" id="comment" name = "comment" rows = "5"></textarea>
          <br>
          <button type="submit" name="submit" class="btn btn-success" onclick="return confirm('Bạn đã chắc chắn')">Submit</button>

      </div>

    </form>
</div>
</center>

<center>
<div class = "col-sm-6">
  <?php echo "<img width=50% height=50% src=\"image/thank/thank.jpg\">" ?>
</div>
</center>
</div>
<!--Footer-->
<center>

<!--PHP-->
<?php 
include 'model/connection_db.php';
if(isset($_POST['submit'])){

        $comment = $_POST['comment'];
        $star = $_POST['star'];
        $date = $_POST['date'];

        if($star != null && $comment != null && $date != null){
            $qr1 = "INSERT INTO rating VALUES ('$name','$star','$comment','$date')";
            $result1 = mysqli_query($conn,$qr1);
            if($result1){
            echo "Thanks you !";      
            }
          }else
        echo "Please! puting every fields.";
      }
?>

<div class="footer">
  <p>this is a footer</p>
</div>
</center>

</body>
</html>
