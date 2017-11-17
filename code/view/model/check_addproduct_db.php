<?php 
  $sql="select * from product where pid = '".$pid."'";
  $query=mysqli_query($conn,$sql);
  $rowcount = mysqli_num_rows($query);
  if($rowcount == false)
  {
    $sql = "INSERT INTO product VALUES ('$pid','$pname','$style','$size','$source','$price','$number','$dateinput')";
    $query = mysqli_query($conn,$sql);
      if($query)
                    {
                     echo "successed!";
                    }
  }
  else
    echo "P_id existed, try again!";
?>