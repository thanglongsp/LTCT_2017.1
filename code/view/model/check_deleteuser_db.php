<?php 
  $sql="select * from user where uid = '".$uid."'";
  $query=mysqli_query($conn,$sql);
  $rowcount = mysqli_num_rows($query);
  if($rowcount == true)
  {
    $sql = "DELETE FROM user WHERE uid = '$uid'" ;
    $query = mysqli_query($conn,$sql);
      if($query)
                    {
                     echo "successed!";
                    }
  }
  else
    echo "U_id NOT existed, try again!";
?>