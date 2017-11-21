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
        <li class = "active"><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="bill.php"><span class="  glyphicon glyphicon-usd"></span> Bill</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="followbill.php"><span class="glyphicon glyphicon-send"></span> FollowBill</a></li>
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
  
<!--content-->

</center>

  <div class="col-sm-6">
      <center><p><b>You don't want product ? </b></p></center>

      <!--Form delete product in order-->
      <form action="cart.php" method="POST">

      <div class="form-group">
        <input type="text" class="form-control" id="pid" placeholder="G001" name="pid">
      </div>

      <button type="submit" name="submit1" class="btn btn-success" onclick="return confirm('Bạn đã chắc chắn')">Submit delete</button>
     
      </form>

      <!--Form fix order-->
      <center><p><b>You don't fix product'quantity ? </b></p></center>
      <form action="cart.php" method="GET">

      <div class="form-group">
        PID:
        <br>
        <input type="text" class="form-control" id="pid" placeholder="G001" name="pid">
      </div>

      <div class="form-group">
        Quantity:
        <br>
        <input type="text" class="form-control" id="quantity" placeholder="3,4, ... " name="quantity">
      </div>

      <button type="submit" name="submit2" class="btn btn-success" onclick="return confirm('Bạn đã chắc chắn')">Submit fix</button>  
      </form>
      <br>

      <!--Form submit-->
      <form action="cart.php" method="POST">
      <center>
      <b>You want to select pay method ?</b>
      <br>
      <lable for="method"><image src="image/methodpay/card.jpg"></image></lable>
      <input type="radio" name="method" id="method" value = "card" checked > Card<br>
      <lable for="method"><image src="image/methodpay/transpot.jpg"></image></lable>
      <input type="radio" name="method" id="method" value = "transpot"> Transpot<br>
      <br>
      <b>You are ready to buy?</b>
      </center>

      <br>
      <div class="form-group">
        Today is ... 
        <input type="date" class="form-control" id="date" name="date">    
      </div>
      <button type="submit" name="submit3" class="btn btn-success" onclick="return confirm('Bạn đã chắc chắn')"><span class="glyphicon glyphicon-hand-right"></span> Buy </button>
      </form>

      
       <!--Check submit-->
      <center>
      <?php
      include 'model/check_formsubmit_cart.php' ;
      ?>
    </center>

  </div>

  <div class="col-sm-6">
            <center>
              <?php   
                include 'model/display_cart.php';                       
            ?>
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
  
</div>
<!--Footer-->

</body>
</html>
