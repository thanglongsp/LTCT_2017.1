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
     #div{
                height:100%;
                width:100%;
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
      <ul class="nav navbar-nav">
        <li><a href="home_page_admin.php"><span class="glyphicon glyphicon-home"></span>  Home</a></li>
      </ul>

      <!--^^-->
       <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $name;?><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="profile_admin.php"><span class="glyphicon glyphicon-user"></span>  Profile</a></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>  logout</a></li>
          </ul>
          </li>
        </ul>


       <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-king"></span> Manager
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="update_product.php"><span class="glyphicon glyphicon-wrench"></span> Update product</a></li>
            <li><a href="delete_product.php"><span class="glyphicon glyphicon-minus-sign"></span>  Delete product</a></li>
            <li><a href="add_product.php"><span class="glyphicon glyphicon-plus-sign"></span>  Add product</a></li>
            <li class="active"><a href="delete_user.php"><span class="glyphicon glyphicon-minus-sign"></span>  Delete User</a></li>
        </ul>
      </li>
    </ul>
    
    </div>
  </div>
</nav>
  
  
<!--content-->
</center>
  <div class="col-sm-3">
      <center><h2>Delete User's name ? </h2></center>
      <form action="delete_user.php" method="POST">

      <div class="form-group">
        <input type="text" class="form-control" id="uid" placeholder="thanglongsp" name="uid">
      </div>

      <button type="submit" name="submit" class="btn btn-success" onclick="return confirm('Bạn đã chắc chắn')">Submit</button>
      </form>
      <image width = "100%;" src="image/welcome/heart.gif"></image>
      <image width = "100%;" src="image/welcome/heart.gif"></image>
      <image width = "100%;" src="image/welcome/heart.gif"></image>
  </div>
  <!--Code php-->
  <center>
    <?php

        // ket noi database
        include 'model/connection_db.php';

        if(isset($_POST['submit'])){
          $uid = $_POST['uid'];
      
    
    //-- check null
    include 'model/check_deleteuser_db.php';

    }
  ?>
</center>


  <div class="col-sm-9">

  <center>
    <?php                    
            $sql = "SELECT  * from user where role = 0" ;
            $result = $conn->query($sql);
            /* fetch associative array */
            
    echo "<h2>Information about User : </h2>";
    echo '<input id="myInput" type="text" placeholder="Search...">';

    echo '<table border="2" class="table table-striped">';
            echo "<tr>";
              echo"<th>Username</th>";
              echo "<th>Fullname</th>";
              echo "<th>Birthday</th>";
              echo "<th>Address</th>";
              echo "<th>Phone</th>";
              echo "<th>Email</th>";
              echo "<th>Gender</th>";
            echo "</tr>";
    echo "<tbody id='myTable'>";
            while ($row = $result->fetch_assoc()) {
            echo "<tr>";         
              echo '<td>'.$row["uid"].'</td>';
              echo '<td>'.$row["fullname"].'</td>';
              echo '<td>'.$row["birthday"].'</td>';
              echo '<td>'.$row["address"].'</td>';
              echo '<td>'.$row["phone"].'</td>';
              echo '<td>'.$row["email"].'</td>';
              echo '<td>'.$row["gender"].'</td>';    
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
