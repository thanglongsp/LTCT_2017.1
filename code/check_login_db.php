<?php 
  $conn=mysqli_connect("localhost","root","","ltct_20171") or die("can't connect this database");
  $sql="select * from user where UID = '$name' and password='$pass'";
  $query=mysqli_query($conn,$sql);
  $rowcount=mysqli_num_rows($query);
      if($rowcount == 0)
          {
            echo "Username or password is not correct, please try again";
          }
      else{
        if($role == 0)
          {
            session_start();
            $_SESSION['name'] = $name;
            $_SESSION['role'] = $role;
            header("Location: home_page_user.php");
          }
        else {
            session_start();
            $_SESSION['name'] = $name;
            $_SESSION['role'] = $role;
            header("Location: home_manager.php");
        }
      }
?>