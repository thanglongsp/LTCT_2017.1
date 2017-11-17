<?php 
  $sql="select * from cart where pid = '".$pid."'";
  $query=mysqli_query($conn,$sql);
  $rowcount = mysqli_num_rows($query);
  if($rowcount == true)
  {
    $sql = "DELETE FROM cart WHERE pid = '$pid'" ;
    $query = mysqli_query($conn,$sql);
      if($query)
                    {
                     echo "successed!";
                    }
  }
  else
    echo "P_id NOT existed, try again!";
?>