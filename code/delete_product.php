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
        <li><a href="home_page_admin.php"><span class="glyphicon glyphicon-home"></span>  Home</a></li>
      </ul>

      <!--^^-->
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>  logout</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="profile_admin.php"><span class="glyphicon glyphicon-user"></span> <?php echo $name;?></a></li>
      </ul>
       
      <ul class="nav navbar-nav navbar-right">
        <li><a href="update_product.php"><span class="glyphicon glyphicon-wrench"></span> Update product</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="delete_product.php"><span class="glyphicon glyphicon-minus-sign"></span>  Delete product</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="add_product.php"><span class="glyphicon glyphicon-plus-sign"></span>  Add product</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="delete_user.php"><span class="glyphicon glyphicon-minus-sign"></span>  Delete User</a></li>
      </ul>
    
    </div>
  </div>
</nav>
  
<!--content-->
</center>
  <div class="col-sm-6">
      <center><h2>You want to delete product's ID ? </h2></center>
      <form action="delete_product.php" method="POST">

      <div class="form-group">
        <input type="text" class="form-control" id="pid" placeholder="SP0001" name="pid">
      </div>

      <button type="submit" name="submit" class="btn btn-success" onclick="return confirm('Bạn đã chắc chắn')">Submit</button>
      </form>
  </div>
  <!--Code php-->
  <center>
    <?php

        // ket noi database
        include 'connection_db.php';

        if(isset($_POST['submit'])){
          $pid = $_POST['pid'];
      
    
    //-- check null
    include 'check_delete_product.php';

    }
  ?>
</center>


  <div class="col-sm-6">

  <center>
    <?php                    
            $sql = "SELECT  * from product" ;
            $result = $conn->query($sql);
            /* fetch associative array */
            
    echo "<h2>Information about Product : </h2>";
    echo '<input id="myInput" type="text" placeholder="Search...">';

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
