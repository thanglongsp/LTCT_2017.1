<?php 
  $conn=mysqli_connect("localhost","root","","ltct_20171") or die("can't connect this database");
  $sql="select * from user where uid = '$name' and pass='$pass'";
  $query=mysqli_query($conn,$sql);
  $rowcount=mysqli_num_rows($query);
      if($rowcount == 0)
          {
            echo "Username or password is not correct, please try again";
          }
      else{
        session_start();
        while ($row = $query->fetch_assoc()) {
                $_SESSION['name'] = $row["uid"];
                $_SESSION['role'] = $row["role"];
            }
        if($_SESSION['role'] == 0)
          {    
            header("Location: home_page_user.php");
          }
        else {
            header("Location: home_page_admin.php");
        }
      }
?>