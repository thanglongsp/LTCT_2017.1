<?php 
  $sql="select * from user where UID = '".$name."'";
  $query=mysqli_query($conn,$sql);
  $rowcount = mysqli_num_rows($query);
  if($rowcount == false)
  {
    $sql = "INSERT INTO user VALUES ('$name','$pass','$fullname','$date','$address','$phone','$email','$gender','$role')";
    $query = mysqli_query($conn,$sql);
      if($query)
                    {
                     header('location: login.php');
                    }
  }
  else
    echo "accout existed, try again!";
?>