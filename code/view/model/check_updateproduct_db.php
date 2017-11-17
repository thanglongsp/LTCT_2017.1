<?php
if($pid != null )
{
        if($pname != null ){
            $qr1 = "update product set pname = '$pname ' where pid = '$pid'" ;
            $result1 = mysqli_query($conn,$qr1);
            if($result1){
            echo "Updated !";
            }
          }

        if($style != null) {
            $qr2 = "update product set style = '$style' where pid = '$pid'" ;
            $result2 = mysqli_query($conn,$qr2);
            if($result2){
            echo "Updated !";
            }
          }

        if($size != null){
            $qr3 = "update product set size = '$size' where pid = '$pid'" ;
            $result3 = mysqli_query($conn,$qr3);
            if($result3){
            echo "Updated !";
            }
          }

        if($source != null){
            $qr4 = "update product set source = '$source' where pid = '$pid'" ;
            $result4 = mysqli_query($conn,$qr4);
            if($result4){
            echo "Updated !";
            }
          }

        if($price != null){
            $qr5 = "update product set price = '$price' where pid = '$pid'" ;
            $result5 = mysqli_query($conn,$qr5);
            if($result5){
            echo "Updated !";
            }
          }

        if($number != null){
            $qr6 = "update product set number = '$number' where pid = '$pid'" ;
            $result6 = mysqli_query($conn,$qr6);
            if($result6){
            echo "Updated !";
            }
        }

        if($dateinput != null){
            $qr6 = "update product set dateinput = '$dateinput' where pid = '$pid'";
            $result6 = mysqli_query($conn,$qr6);
            if($result6){
            echo "Updated !";
            }
          }
        echo "Updated all !";
      }
else {
        echo "Please input P_ID of product which you want to update! ";
      }
?>