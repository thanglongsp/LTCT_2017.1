<?php                    
            $sql = "SELECT product.pid,product.pname FROM product inner join favorite on product.pid = favorite.pid where favorite.uid = '$name' group by product.pid";
            $result = $conn->query($sql);
            // if($result) echo "true";
            // else echo "false";
            //$row = $result->fetch_assoc();
            /* fetch associative array */
            
            echo "<h2>Your favorite Product</h2>";
            echo '<input id="myInput" type="text" placeholder="Search...">';

            echo '<table border="2" class="table table-striped">';
                    echo "<tr>";
                      echo"<th>Favorite ProductID</th>";
                      echo"<th>Favorite Product</th>";
                    echo "</tr>";
            echo "<tbody id='myTable'>";
                    while ($row = $result->fetch_assoc()) {
                      echo "<tr>";    
                      echo '<td>'.$row["pid"].'</td>';     
                      echo '<td>'.$row["pname"].'</td>';  
                      echo "</tr>";
                    }
                echo "</tbody>";
  ?>