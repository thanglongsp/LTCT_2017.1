<?php
session_start();
if (!isset($_SESSION['name'])) {
     header('Location: reference.php');
     $name = null;
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
     #div{
                height: 600px;
                padding:1px;
                border:1px solid white;
                overflow-x:hidden;
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
    
    <?php 
    if ($name == null ) {

      echo '<ul class="nav navbar-nav">';
      echo '<li><a href="home_page_quest.php"><span class="glyphicon glyphicon-home"></span>  Home</a></li>';
      echo '</ul>';
      
      echo '<ul class="nav navbar-nav navbar-right">';
      echo '<li class = "active"><a href="reference.php"><span class="glyphicon glyphicon-home"></span>  Reference</a></li>';
      echo '</ul>';

      }else if ($name != null) {

      echo '<ul class="nav navbar-nav">';
      echo '<li><a href="home_page_quest.php"><span class="glyphicon glyphicon-home"></span>  Home</a></li>';
      echo '</ul>';
      
      echo '<ul class="nav navbar-nav navbar-right">';
      echo '<li class = "active"><a href="reference.php"><span class="glyphicon glyphicon-home"></span>  Reference</a></li>';
      echo '</ul>';

      echo '<ul class="nav navbar-nav navbar-right">';
        echo'<li class="dropdown">';
          echo'<a class="dropdown-toggle" data-toggle="dropdown" class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $name;?><span class="caret"></span></a>';
          echo '<ul class="dropdown-menu">';
            echo'<li><a href="profile_user.php"><span class="glyphicon glyphicon-user"></span>  Profile</a></li>';
            echo'<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>  logout</a></li>';
          echo'</ul>';
          echo'</li>';
        echo'</ul>';
    
      echo'<ul class="nav navbar-nav navbar-right">';
        echo'<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>';
      echo'</ul>';

      echo'<ul class="nav navbar-nav navbar-right">';
        echo'<li><a href="bill.php"><span class="glyphicon glyphicon-usd"></span> Bill</a></li>';
      echo'</ul>';

      echo'<ul class="nav navbar-nav navbar-right">';
        echo'<li><a href="followbill.php"><span class="glyphicon glyphicon-send"></span> FollowBill</a></li>';
      echo'</ul>';

      echo'<ul class="nav navbar-nav navbar-right">';
        echo'<li><a href="rating.php"><span class="glyphicon glyphicon-star"></span> Rating</a></li>';
      echo'</ul>';
      
      echo'<ul class="nav navbar-nav navbar-right">';
        echo'<li><a href="favorite.php"><span class="glyphicon glyphicon-bookmark"></span> Favorite</a></li>';
      echo'</ul>';
     ?>

   </div>
  </div>
</nav>
  
  
<!--content-->
<div class ="col-sm-12" style="max-height:100%;">
</center>
  <div class="col-sm-6">
       <?php echo "<img width=50% height=50% src=\"image/thank/thank.jpg\">" ?>
  </div>
  <!--Code php-->
  <center>
    <?php

        // ket noi database
        include 'model/connection_db.php';

        if(isset($_POST['submit'])){
          $pid = $_POST['pid'];
          $pname = $_POST['pname'];
          $style = $_POST['style'];
          $size = $_POST['size'];
          $source = $_POST['source'];
          $number = $_POST['number'];
          $price = $_POST['price'];
          $dateinput = $_POST['dateinput'];
      
    
    //-- check null
    include 'model/check_addproduct_db.php';

    }
  ?>
</center>


  <div class="col-sm-6" > 

  <center>
    <?php                    
            $sql = "SELECT  * from product" ;
            $result = $conn->query($sql);
            /* fetch associative array */
          
    echo "<h2>Information about Product</h2>";
    echo '<input id="myInput" type="text" placeholder="Search...">';
    echo '<div class = "col-sm-12" id="div">'; 
    echo '<table border="2" class="table table-striped">';
            echo "<tr>";
              echo"<th>P_id</th>";
              echo "<th>P_name</th>";
              echo "<th>Style</th>";
              echo "<th>Size</th>";
              echo "<th>Source</th>";
              echo "<th>Price</th>";
              echo "<th>Number</th>";
              echo "<th>DateInput</th>";
            echo "</tr>";
    echo "<tbody id='myTable'>";
            while ($row = $result->fetch_assoc()) {
            echo "<tr>";         
              echo '<td>'.$row["pid"].'</td>';
              echo '<td>'.$row["pname"].'</td>';
              echo '<td>'.$row["style"].'</td>';
              echo '<td>'.$row["size"].'</td>';
              echo '<td>'.$row["source"].'</td>';
              echo '<td>'.$row["price"].'</td>';
              echo '<td>'.$row["number"].'</td>';
              echo '<td>'.$row["dateinput"].'</td>';   
              echo "</tr>";
            }
        echo "</tbody>";
      echo '</div>';
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
</div>

</body>
</html>
