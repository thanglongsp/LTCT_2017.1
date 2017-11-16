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
        <li class="active" ><a href="home_page_admin.php"><span class="glyphicon glyphicon-home"></span>  Home</a></li>
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
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>  logout</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="profile_admin.php"><span class="glyphicon glyphicon-user"></span> <?php echo $name;?></a></li>
      </ul>
       
	    <ul class="nav navbar-nav navbar-right">
        <li><a href="update_product.php"><span class="glyphicon glyphicon-wrench"></span> Update product</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="delete_product.php"><span class="glyphicon glyphicon-minus-sign"></span>  Delete product</a></li>
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
<div class="container-fluid text-center" style="min-height:750px;">    
  <div class="row content">
    <div id="condition1" class="col-sm-12 product1">
     <h1>Content</h1>
    </div>
    <div id="condition2" class="col-sm-12 product2"> 
      <h1>Content</h1>
    </div>
    <div id="condition3" class="col-sm-12 product3">
      <h1>Content</h1>
    </div>
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
