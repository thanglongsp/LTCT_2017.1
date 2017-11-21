<?php   
                      include 'model/connection_db.php';                 
                      $sql = "SELECT product.pid,product.pname,SUM(quantity) quantity,Sum(quantity)*price price FROM product inner join cart on product.pid = cart.pid where cart.uid = '$name' GROUP BY pid";
                      $result = $conn->query($sql);
                      $sum = 0;

                      // if($result) echo "true";
                      // else echo "false";
                      /* fetch associative array */
                      echo "<h2>Information about your cart</h2>";
                      echo '<input id="myInput" type="text" placeholder="Search...">';

                      echo '<table border="2" class="table table-striped">';
                              echo "<tr>";
                              echo"<th>ProductID</th>";
                              echo"<th>Product name</th>";
                              echo"<th>Quantity</th>";
                              echo"<th>Money</th>";
                              echo"<th>Sum</th>";
                              echo "</tr>";

                      echo "<tbody id='myTable'>";
                              while ($row = $result->fetch_assoc()) {
                              $sum = $sum + $row["price"];
                              echo "<tr>";   
                                echo '<td>'.$row["pid"].'</td>'; 
                                echo '<td>'.$row["pname"].'</td>';       
                                echo '<td>'.$row["quantity"].'</td>';  
                                echo '<td>'.$row["price"].' VND</td>';
                                echo '<td >'.$sum.' VND</td>';
                                // $sum = $sum +  $row["price"];
                              }
                          echo "</tbody>";
                      $_SESSION['sume'] = $sum;
            ?>