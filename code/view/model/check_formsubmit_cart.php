<?php
        // ket noi database
        include 'connection_db.php';

        //Check submit 1
        if(isset($_POST['submit1'])){
          
          $pid = $_POST['pid'];
          //-- check null
          include 'check_submit1_db.php';
        }

        //Check submit 2
        if(isset($_GET['submit2'])){
          
          $pid = $_GET['pid'];
          $quantity = $_GET['quantity'];
          //-- check null
          include 'check_submit2_db.php';
        }

        //Check submit 3
        if(isset($_POST['submit3'])){
          if($_POST["date"] == null || $_POST["date"] == null)
          {
            echo "please try again! existed empty field ... ";
          }else{    
                $datebuild = $_POST['date'];

                $date = getdate();
                $code = $name.$date['mday'].$date['mon'].$date['year'].$date['hours'].$date['minutes'];
                $method = $_POST['method'];

                $sql = "SELECT * from cart where uid = '$name'";
                $result = $conn->query($sql);

                $status = 0;

                while ($row = $result->fetch_assoc()) {
                $sql = "INSERT INTO bill VALUES ('$code','$name','".$row["pid"]."','".$row["quantity"]."','$status')";
                $result1 = mysqli_query($conn,$sql);
                }

                $sql1 = "INSERT INTO historybill VALUES ('$code','$name','$method','$datebuild')";
                $result1 = mysqli_query($conn,$sql1);

                $sql2 = "delete from cart where uid = '$name'";
                $resul2 = mysqli_query($conn,$sql2);
                }
}
      ?>