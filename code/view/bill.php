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
        <li><a href="bill.php"><span class="glyphicon glyphicon-send"></span> Bill</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-send"></span> FollowBill</a></li>
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
<center>
  <div class="col-sm-6"></div>
  <div class="col-sm-6">
              <?php    
                      include 'model/connection_db.php' ;             
                      $sql = "SELECT product.pid,product.pname,SUM(quantity) quantity,Sum(quantity)*price price FROM product inner join bill on product.pid = bill.pid where bill.uid = '$name' and  bill.status = '0' GROUP BY pid";
                      $result = $conn->query($sql);
                      $sum = 0;

                      echo "<h2>Detailed product information which you bought</h2>";
                      echo '<center><input id="myInput" type="text" placeholder="Search..."></center>';

                      echo '<table border="2" class="table table-striped">';
                              echo "<tr>";
                              echo"<th>Product Name</th>";
                              echo"<th>Quantity</th>";
                              echo"<th>Money</th>";
                              echo"<th>Sum</th>";
                              echo "</tr>";

                      echo "<tbody id='myTable'>";
                              while ($row = $result->fetch_assoc()) {
                              $sum = $sum + $row["price"];
                                echo "<tr>";   
                                echo '<td>'.$row["pname"].'</td>';       
                                echo '<td>'.$row["quantity"].'</td>';  
                                echo '<td>'.$row["price"].' VND</td>';
                                echo '<td >'.$sum.' VND</td>';
                                // $sum = $sum +  $row["price"];
                              }
                          echo "</tbody>";

            ?>

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

<!--content-->
 <div class="col-sm-6">
    
              <?php   
                    
                      $sql = "SELECT * FROM user inner join bill on user.uid = bill.uid and bill.status = '0' and bill.uid = '$name'";
                      $result = $conn->query($sql);
                      // if($result) echo "true";
                      // else echo "false";
                      
                      echo '<table border="2" class="table table-striped">';
                              echo "<tr>";
                              echo"<th>Your Information</th>";
                              echo"<th>Delivery Address</th>";
                              echo "</tr>";
                      echo "<tbody>";
                              while($row = $result->fetch_assoc()) {
                                echo "<tr>";   
                                echo '<td>'.$row["fullname"].'<br>'.$row["email"].'<br>'.$row["phone"].'</td>';       
                                echo '<td>'.$row["address"].'</td>';
                              }
                      echo "</tbody>";

            ?>
   
  </div>
 </center>
  


<!--Footer-->

</body>
</html>
