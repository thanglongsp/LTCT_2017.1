<?php
if($pid != null )
{
        if($quantity != null ){
            $qr1 = "update cart set quantity = '$quantity' where pid = '$pid'" ;
            $result1 = mysqli_query($conn,$qr1);
            if($result1){
            echo "Updated !";
            }
          }
      }
else {
        echo "Please input P_ID of product which you want to update! ";
      }
?>