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
            <li class="disable"><span class="glyphicon glyphicon-hand-right"></span> Gender      <span class ="glyphicon glyphicon-menu-down"></span></a></li>
            <li><a href="#gender_girl"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for girl</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for boy</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for BD</a></li>
          
          <li class="disable"><span class="glyphicon glyphicon-hand-right"></span> Year Old      <span class ="glyphicon glyphicon-menu-down"></span></a></li>
            <li><a href="#"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for Baby</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for Teen</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for Older</a></li>

          <li class="disable"><span class="glyphicon glyphicon-hand-right"></span>  Season     <span class ="glyphicon glyphicon-menu-down"></span></a></li>
            <li><a href="#"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for Spring</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for Summer</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for Autumn</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for Winter</a></li>


          <li class="disable"><span class="glyphicon glyphicon-hand-right"></span>  Play     <span class ="glyphicon glyphicon-menu-down"></span></a></li>
            <li><a href="#"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for Beach</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for Walking</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for Festival</a></li>


          <li class="disable"><span class="glyphicon glyphicon-hand-right"></span> Working      <span class ="glyphicon glyphicon-menu-down"></span></a></li>
            <li><a href="#"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for Office</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for School</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for Multilevel</a></li>

          <li class="disable"><span class="glyphicon glyphicon-hand-right"></span> Style      <span class ="glyphicon glyphicon-menu-down"></span></a></li>
            <li><a href="#"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for Dress</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for Shirt</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for Jean</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for Sexy</a></li>

          <li class="disable"><span class="glyphicon glyphicon-hand-right"></span> Country      <span class ="glyphicon glyphicon-menu-down"></span></a></li>
            <li><a href="#"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for Viet Nam</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for JaPan</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for China</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for India</a></li>

        </ul>
      </li>
    </ul>

      <!--Search-->
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input id = "myInput"type="text" class="form-control" placeholder="You can search every one If we have it hear ... ">
        </div>
      </form>   
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
        <li><a href="favorite.php"><span class="glyphicon glyphicon-bookmark"></span> Favorite</a></li>
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
        <?php 
        echo "<img width=30% height=40% src=\"image/welcome/heart.gif\">";
        echo "<img width=40% height=40% src=\"image/welcome/Welcome3.gif\">" ;
        echo "<img width=30% height=40% src=\"image/welcome/heart.gif\">";
        ?>
      </div> 
    </center>
    <div id="myTarget" class="col-sm-12"> 
    <?php 
    include 'model/connection_db.php';
    $sql = "SELECT  * from product where style = 'girl'" ;
    $result = $conn->query($sql);
    echo '<div> <h1 id="gender_girl">Fashion for Girl</h1></div>';
            echo "<br>";
    while ($row = $result->fetch_assoc()) {
           
            echo '<div id = "gender_girl_bg" class="col-sm-3">';
            echo '<img width=90% height=90% src="image/gender/girl/'.$row["pid"].'.jpg"><br>';
            echo 'Name : '.$row["pname"];
              echo'<br>';
            echo 'Style : '.$row["style"];
              echo'<br>';
            echo 'Size : '.$row["size"];
              echo'<br>';
            echo 'Made in : '.$row["source"];
              echo'<br>';
            echo 'Price : '.$row["price"].'VND';
              echo'<br>';

            echo '<form active="home_page_user.php" method = "POST">';
            echo '<button type="submit" name="submit1'.$row["pid"].'"class="btn btn-red" ><span class="glyphicon glyphicon-heart"></span></button>';
            echo '<button type="submit" name="submit2'.$row["pid"].'"class="btn btn-success" ><span class="glyphicon glyphicon-shopping-cart"></span></button>';
            echo "<br>";
            echo "<br>";
            echo '</form>';
                
                if(isset($_POST['submit1'.$row["pid"]])){
                    $pid = $row["pid"];
                    $qr1 = "INSERT INTO favorite VALUES ('$name','$pid')";
                    $result1 = mysqli_query($conn,$qr1);
                  }

                if(isset($_POST['submit2'.$row["pid"]])){
                    $pid = $row["pid"];
                    $qr1 = "INSERT INTO cart VALUES ('$name','$pid','1')";
                    $result1 = mysqli_query($conn,$qr1);    
                  }

            echo '</div>';
}
    ?>
<script>
          $(document).ready(function(){
            $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTarget div").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
            });
          });
    </script>
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