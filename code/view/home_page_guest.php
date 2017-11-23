<!DOCTYPE html>
<html lang="en">
<head>
  <title>home page guest</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-max.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css"  href="css/css_form.css">
  <style>   
            #div{
                height:100%;
                width:100%;
                padding:1px;
                border:1px solid white;
                overflow-x:hidden;
            }

            #gender_girl {color: #fff; background-color: #1E88E5;}
            #section2 {color: #fff; background-color: #673ab7;}
            #section3 {color: #fff; background-color: #ff9800;}
            #section41 {color: #fff; background-color: #00bcd4;}
            #section42 {color: #fff; background-color: #009688;}

            #gender_girl_bg_{color: #fff; background-color: #1E88E5;}
            #section2 {padding-top:50px;height:500px;color: #fff; background-color: #673ab7;}
            #section3 {padding-top:50px;height:500px;color: #fff; background-color: #ff9800;}
            #section41 {padding-top:50px;height:500px;color: #fff; background-color: #00bcd4;}
            #section42 {padding-top:50px;height:500px;color: #fff; background-color: #009688;}
  </style>
</head>
<body>

<!--Toolbar-->
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
    <ul class="nav navbar-nav navbar-center">
      <li class = "active"><a href="#"><span class="glyphicon glyphicon-heart"></span>  Welcome to DRAGON SHOP !  <span class="glyphicon glyphicon-heart"></span></a></li>
    </ul>

    <!--dropdown-->
     <ul class="nav navbar-nav navbar-left">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-filter"></span> Product
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="disable"><span class="glyphicon glyphicon-hand-right"></span> Gender      <span class ="glyphicon glyphicon-menu-down"></span></a></li>
            <li><a href="#gender_girl"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for girl</a></li>
            <li><a href="#gender_boy"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for boy</a></li>
          
          <li class="disable"><span class="glyphicon glyphicon-hand-right"></span> Year Old      <span class ="glyphicon glyphicon-menu-down"></span></a></li>
            <li><a href="#year_baby"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for Baby</a></li>
            <li><a href="#year_teen"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for Teen</a></li>
            <li><a href="#year_older"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for Older</a></li>

          <li class="disable"><span class="glyphicon glyphicon-hand-right"></span>  Season     <span class ="glyphicon glyphicon-menu-down"></span></a></li>
            <li><a href="#season_spring"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for Spring</a></li>
            <li><a href="#season_summer"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for Summer</a></li>
            <li><a href="#season_autumn"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for Autumn</a></li>
            <li><a href="#season_winter"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for Winter</a></li>


          <li class="disable"><span class="glyphicon glyphicon-hand-right"></span>  Play     <span class ="glyphicon glyphicon-menu-down"></span></a></li>
            <li><a href="#play_beach"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for Beach</a></li>
            <li><a href="#play_walking"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for Walking</a></li>
            <li><a href="#play_festival"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for Festival</a></li>


          <li class="disable"><span class="glyphicon glyphicon-hand-right"></span> Working      <span class ="glyphicon glyphicon-menu-down"></span></a></li>
            <li><a href="#working_office"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for Office</a></li>
            <li><a href="#working_multillevel"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for Multilevel</a></li>

          <li class="disable"><span class="glyphicon glyphicon-hand-right"></span> Style      <span class ="glyphicon glyphicon-menu-down"></span></a></li>
            <li><a href="#style_dress"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for Dress</a></li>
            <li><a href="#style_shirt"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for Shirt</a></li>
            <li><a href="#style_jean"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for Jean</a></li>

          <li class="disable"><span class="glyphicon glyphicon-hand-right"></span> Country      <span class ="glyphicon glyphicon-menu-down"></span></a></li>
            <li><a href="#country_vietnam"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for Viet Nam</a></li>
            <li><a href="#country_japan"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for JaPan</a></li>
            <li><a href="#country_china"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for China</a></li>
            <li><a href="#country_korea"><span class="glyphicon glyphicon-hand-right"></span>  Fashion for Korea</a></li>

        </ul>
      </li>
    </ul>

    <!--Search-->
    <form class="navbar-form navbar-left">
      <div class="form-group">
          <input id = "myInput"type="text" class="form-control" placeholder="You can search every one If we have it hear ... ">
      </div>
    </form>
    

	  <ul class="nav navbar-nav navbar-right">
      <li><a href="sign_up.php"><span class="glyphicon glyphicon-log-in"></span> Signup</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
     
    </div>
  </div>
</nav>

<!--content-->
<div  class="container-fluid text-center" style="max-height:100%;">    
  <div class="row content">
<!---->

    <center>
      <div class="col-sm-12"> 
        <?php 
          include 'model/header.php';
        ?>
      </div> 
    </center>
    <div id="div" class="col-sm-12"> 
    <div id="myTarget" class="col-sm-12"> 
    <?php 
    include 'model/connection_db.php';
    include 'model/display_product_guest.php';  
    
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
</div>
<!---->
  </div>
</div>

<!--Footer-->
<!-- <center>
  <div class="footer"> 
    <p>Thăng Long sp</p/>
  </div>
</center> -->
</body>
</html>