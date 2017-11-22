<?php
if(isset($_POST['submit'])){

        $fullname = $_POST['fullname'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $birthday = $_POST['birthday'];

        //-- check null

        if($fullname != null ){
            $qr1 = "update user set Fullname = '$fullname' where UID = '$name'" ;
            $result1 = mysqli_query($conn,$qr1);
            if($result1){
            echo "Updated !";
            }
          }

        if($password != null) {
            $qr2 = "update user set password = '$password' where UID = '$name'" ;
            $result2 = mysqli_query($conn,$qr2);
            if($result2){
            echo "Updated !";
            }
          }

        if($address != null){
            $qr3 = "update user set address = '$address' where UID = '$name'" ;
            $result3 = mysqli_query($conn,$qr3);
            if($result3){
            echo "Updated !";
            }
          }

        if($email != null){
            $qr4 = "update user set email = '$email' where UID = '$name'" ;
            $result4 = mysqli_query($conn,$qr4);
            if($result4){
            echo "Updated !";
            }
          }

        if($phone != null){
            $qr5 = "update user set Phone = '$phone' where UID = '$name'" ;
            $result5 = mysqli_query($conn,$qr5);
            if($result5){
            echo "Updated !";
            }
          }

        if($gender != null){
            $qr6 = "update user set gender = '$gender' where UID = '$name'" ;
            $result6 = mysqli_query($conn,$qr6);
            if($result6){
            echo "Updated !";
            }
          }

            if($birthday != null){
            $qr7 = "update user set birthday = '$birthday' where UID = '$name'" ;
            $result7 = mysqli_query($conn,$qr7);
            if($result7){
            echo "Updated !";
            }
          }
        echo "Updated all !";
      }
?>