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
        <li class="active" ><a href="home_page_user.php"><span class="glyphicon glyphicon-home"></span>  Home</a></li>
      </ul>

      <!--dropdown-->
  	  <ul class="nav navbar-nav navbar-left">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-filter"></span> Product
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#condition1">Condition 1</a></li>
            <li><a href="#condition2">Condition 2</a></li>
            <li><a href="#condition3">condition 3 </a></li>
          </ul>
        </li>
      </ul>

      <!--Search-->
      <form class="navbar-form navbar-left">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>   
      <!--^^-->
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> logout</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li ><a href="profile_user.php"><span class="glyphicon glyphicon-user"></span> <?php echo $name;?></a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-send"></span> FollowBill</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="rating.php"><span class="glyphicon glyphicon-star"></span> Rating</a></li>
      </ul>
	    
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-bookmark"></span> Favorite</a></li>
      </ul>

    </div>
  </div>
</nav>
  
<!--content-->
<div class="container-fluid text-center" style="min-height:750px;">    
  <div class="row content">
<!---->

    <center>
      <div id="condition1" class="col-sm-12 product1"> 
        <?php echo "<img width=40% height=40% src=\"image/Welcome3.gif\">" ?>
      </div> 
    </center>
<div id="condition2" class="col-sm-12 product1"> 
    <?php 
    include 'connection_db.php';
    $sql = "SELECT  * from product" ;
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
           
            echo '<div id="image1.1" class="col-sm-3 product2">';
            echo '<img width=40% height=40% src="image/'.$row["pid"].'.jpg"><br>';
            echo 'Name : '.$row["pname"];
              echo'<br>';
            echo 'Style : '.$row["style"];
              echo'<br>';
            echo 'Size : '.$row["size"];
              echo'<br>';
            echo 'Made in : '.$row["source"];
              echo'<br>';
            echo 'price : '.$row["price"];
              echo'<br>';

            echo '<form active="home_page_user.php" method = "POST">';
            echo '<button type="submit" name="submit'.$row["pid"].'"class="btn btn-success" ><span class="glyphicon glyphicon-shopping-cart"></span></button>';
            echo '</form>';

                if(isset($_POST['submit'.$row["pid"]])){
                    $pid = $row["pid"];
                    $qr1 = "INSERT INTO cart VALUES ('$name','$pid','1')";
                    $result1 = mysqli_query($conn,$qr1);
                    if($result1){
                    echo "successed !";      
                    }
                  }
            echo '</div>';
}
    ?>
</div>
<!---->
  </div>
</div>

<!--Footer-->
<center>
  <div class="footer"> 
    <p>this is a footer</p>
  </div>
</center>
</body>
</html>