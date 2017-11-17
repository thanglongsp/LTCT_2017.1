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
        <li><a href="rating.php"><span class="glyphicon glyphicon-star"></span> Rating</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li class = "active"><a href="favorite.php"><span class="glyphicon glyphicon-bookmark"></span> Favorite</a></li>
      </ul>
    
    </div>
  </div>
</nav>
  
<!--content-->
</center>
  <div class="col-sm-6">
      <center><h2>Delete favorite Product ? </h2></center>
      <form action="favorite.php" method="POST">

      <div class="form-group">
        <input type="text" class="form-control" id="pid" placeholder="G001" name="pid">
      </div>

      <button type="submit" name="submit" class="btn btn-success" onclick="return confirm('Bạn đã chắc chắn')">Submit</button>
      </form>
  </div>
  <!--Code php-->
  <center>
    <?php

        // ket noi database
        include 'model/connection_db.php';

        if(isset($_POST['submit'])){
          $pid = $_POST['pid'];
      
    
    //-- check null
    include 'model/check_deletefavorite_db.php';

    }
  ?>
</center>


  <div class="col-sm-6">

  <center>
    <?php                    
            $sql = "SELECT product.pid,product.pname FROM product inner join favorite on product.pid = favorite.pid where favorite.uid = '$name'";
            $result = $conn->query($sql);
            // if($result) echo "true";
            // else echo "false";
            //$row = $result->fetch_assoc();
            /* fetch associative array */
            
            echo "<h2>Information about User : </h2>";
            echo '<input id="myInput" type="text" placeholder="Search...">';

            echo '<table border="2" class="table table-striped">';
                    echo "<tr>";
                      echo"<th>Favorite ProductID</th>";
                      echo"<th>Favorite Product</th>";
                    echo "</tr>";
            echo "<tbody id='myTable'>";
                    while ($row = $result->fetch_assoc()) {
                      echo "<tr>";    
                      echo '<td>'.$row["pid"].'</td>';     
                      echo '<td>'.$row["pname"].'</td>';  
                      echo "</tr>";
                    }
                echo "</tbody>";
  ?>

  </center>  
  </div>
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
