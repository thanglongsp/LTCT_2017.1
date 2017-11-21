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
  <style>
    .ul1 {
        background: #808080;
        padding: 20px;
    }

   
    .li1 {
        background: #FFFAF0;
        margin: 5px;
    }
  </style>
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
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $name;?><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="profile_user.php"><span class="glyphicon glyphicon-user"></span>  Profile</a></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>  logout</a></li>
          </ul>
          </li>
        </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="bill.php"><span class="glyphicon glyphicon-usd"></span> Bill</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#"><span class="glyphicon glyphicon-send"></span> FollowBill</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="rating.php"><span class="glyphicon glyphicon-star"></span> Rating</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li ><a href="favorite.php"><span class="glyphicon glyphicon-bookmark"></span> Favorite</a></li>
      </ul>
    
    </div>
  </div>
</nav>
<!--Form xác nhận hóa đơn-->
</center>
<div class="col-sm-12" style="max-height:100%;"> 
  <div class="col-sm-4">
      <center><h2>If you have received the Products, please confirm ! </h2></center>

      <form action="followbill.php" method="POST">
      <center>
      <b>Input Your bill code ? </b>
      <br>
      <br>
      <input type="text" name="bid" id="bid"><br>
      <br>
      <input type="radio" name="status" id="status" value = "1" checked> Confirm<br>
      <br>
      <b>You are ready ?</b>
      <button type="submit" name="submit" class="btn btn-success" onclick="return confirm('Bạn đã chắc chắn')"><span class="glyphicon glyphicon-hand-right"></span> Confirm </button>
      
      </center>
      </form>
      <center>
      <?php 
      include 'model/connection_db.php';
       if(isset($_POST['submit'])){
                      $bid = $_POST['bid'];
                      $status = $_POST['status'];
                      //check null                 
                      if($bid != null && $status != null){
                        $qr1 = "update bill set status = '$status' where bid = '$bid'" ;
                        $result1 = mysqli_query($conn,$qr1);
                        echo "Ok confirmed !";
                        }else echo "Please input fill all fields !";
                    }
      ?>
    </center>
      <image width = "100%;" src="image/welcome/heart.gif"></image>
      <image width = "100%;" src="image/welcome/heart.gif"></image>
      <image width = "100%;" src="image/welcome/heart.gif"></image>
  </div>
  <!--Code php-->
  <center>
<!---->
<center>
  <div class="col-sm-8">

              <?php   
                      include 'model/display_followbill.php';

            ?>
  </div>
</div>
 </center>
  <script>
          $(document).ready(function(){
            $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
            });
          });
      </script> 


<!--Footer-->

</body>
</html>
