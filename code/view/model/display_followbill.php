<?php   
                      include 'model/connection_db.php';

                      $sql = "SELECT * FROM historybill inner join bill on bill.bid = historybill.bid  where bill.uid = '$name' and bill.status = '0' GROUP BY bill.bid";
                      $result = $conn->query($sql);
                      if($result){
                      echo "<h2>Detailed product information which you bought</h2>";
                      echo '<center><input id="myInput" type="text" placeholder="Search..."></center>';

                      echo '<table border="2" class="table table-striped">';
                              echo "<tr>";
                              echo"<th>Name Account</th>";
                              echo"<th>Code bill</th>";
                              echo"<th>Date Start</th>";
                              echo"<th>Date End</th>";
                              echo"<th>Status </th>";
                              echo "</tr>";

                      echo "<tbody id='myTable'>";
                              while ($row = $result->fetch_assoc()) {
                                echo "<tr>";   
                                echo '<td>'.$name.'</td>';       
                                echo '<td>'.$row["bid"].'</td>';  
                                echo '<td>'.$row["datebuild"].'</td>';
                                echo '<td>After Three Day </td>';
                                echo '<td >Sending</td>';
                                // $sum = $sum +  $row["price"];
                              }
                          echo "</tbody>";
                    }else echo 'You dont have bill to follow <span class = "glyphicon glyphicon-heart-empty"></span>';
            ?>