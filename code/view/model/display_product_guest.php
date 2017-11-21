<?php 
    include 'model/connection_db.php';
    // q1 .....
    $q1 = "SELECT  * from product where style = 'girl'" ;
    $r1 = $conn->query($q1);
    // q2 ...
    $q2 = "SELECT  * from product where style = 'man'" ;
    $r2 = $conn->query($q2);
    // q3 ... 
    $q3 = "SELECT  * from product where style = 'baby'" ;
    $r3 = $conn->query($q3);
    // q4 ... 
    $q4 = "SELECT  * from product where style = 'teen'" ;
    $r4 = $conn->query($q4);
    // q5 ... 
    $q5 = "SELECT  * from product where style = 'older'" ;
    $r5 = $conn->query($q5);
    // q6
    $q6 = "SELECT  * from product where style = 'multilleve'" ;
    $r6 = $conn->query($q6);
    // q7
    $q7 = "SELECT  * from product where style = 'office'" ;
    $r7 = $conn->query($q7);
    // q8
    $q8 = "SELECT  * from product where style = 'beach'" ;
    $r8 = $conn->query($q8);
    // q9
    $q9 = "SELECT  * from product where style = 'festival'" ;
    $r9 = $conn->query($q9);
    // q10
    $q10 = "SELECT  * from product where style = 'walking'" ;
    $r10 = $conn->query($q10);
    // q11
    $q11 = "SELECT  * from product where style = 'jean'" ;
    $r11 = $conn->query($q11);
    // q12
    $q12 = "SELECT  * from product where style = 'shirt'" ;
    $r12 = $conn->query($q12);
    // q13
    $q13 = "SELECT  * from product where style = 'dress'" ;
    $r13 = $conn->query($q13);
    //
    // q14
    $q14 = "SELECT  * from product where style = 'summer'" ;
    $r14 = $conn->query($q14);
    //q15
    $q15 = "SELECT  * from product where style = 'spring'" ;
    $r15 = $conn->query($q15);
    //q16
    $q16 = "SELECT  * from product where style = 'winter'" ;
    $r16 = $conn->query($q16);
    //q17
    $q17 = "SELECT  * from product where style = 'autumn'" ;
    $r17 = $conn->query($q17);


    $q18 = "SELECT  * from product where style = 'china'" ;
    $r18 = $conn->query($q18);
    //q15
    $q19 = "SELECT  * from product where style = 'vietnam'" ;
    $r19 = $conn->query($q19);
    //q16
    $q20 = "SELECT  * from product where style = 'japan'" ;
    $r20 = $conn->query($q20);
    //q17
    $q21 = "SELECT  * from product where style = 'korea'" ;
    $r21 = $conn->query($q21);



    $quantity = 0;
    echo '<div> <h1 id="gender_girl">Fashion for Girl</h1></div>';
            echo "<br>";
    while ($row = $r1->fetch_assoc()) {
           
            echo '<div class="col-sm-3">';
            echo '<img width=80% height=80% src="image/gender/girl/'.$row["pid"].'.jpg"><br>';
            echo 'Name : '.$row["pname"];
              echo'<br>';
            echo 'Style : '.$row["style"];
              echo'<br>';
            echo 'Size : '.$row["size"];
              echo'<br>';
            echo 'Made in : '.$row["source"];
              echo'<br>';
            echo 'Price : '.$row["price"].'VND';
              echo'<br>';
            echo '</div>';
          }

    // display for q2 ... 
            $quantity = 0;
            echo '<div> <h1 id="gender_boy">Fashion for Boy</h1></div>';
                    echo "<br>";
            while ($row = $r2->fetch_assoc()) {
                   
                    echo '<div class="col-sm-3">';
                    echo '<img width=80% height=80% src="image/gender/boy/'.$row["pid"].'.jpg"><br>';
                    echo 'Name : '.$row["pname"];
                      echo'<br>';
                    echo 'Style : '.$row["style"];
                      echo'<br>';
                    echo 'Size : '.$row["size"];
                      echo'<br>';
                    echo 'Made in : '.$row["source"];
                      echo'<br>';
                    echo 'Price : '.$row["price"].'VND';
                      echo'<br>';

                    echo '</div>';
}
      // display q3
            $quantity = 0;
            echo '<div> <h1 id="year_baby">Fashion for Baby</h1></div>';
                    echo "<br>";
            while ($row = $r3->fetch_assoc()) {
                   
                    echo '<div class="col-sm-3">';
                    echo '<img width=80% height=80% src="image/year/baby/'.$row["pid"].'.jpg"><br>';
                    echo 'Name : '.$row["pname"];
                      echo'<br>';
                    echo 'Style : '.$row["style"];
                      echo'<br>';
                    echo 'Size : '.$row["size"];
                      echo'<br>';
                    echo 'Made in : '.$row["source"];
                      echo'<br>';
                    echo 'Price : '.$row["price"].'VND';
                      echo'<br>';

                    echo '</div>';
}
//4
         $quantity = 0;
            echo '<div> <h1 id="year_teen">Fashion for Teen</h1></div>';
                    echo "<br>";
            while ($row = $r4->fetch_assoc()) {
                   
                    echo '<div class="col-sm-3">';
                    echo '<img width=80% height=80% src="image/year/teen/'.$row["pid"].'.jpg"><br>';
                    echo 'Name : '.$row["pname"];
                      echo'<br>';
                    echo 'Style : '.$row["style"];
                      echo'<br>';
                    echo 'Size : '.$row["size"];
                      echo'<br>';
                    echo 'Made in : '.$row["source"];
                      echo'<br>';
                    echo 'Price : '.$row["price"].'VND';
                      echo'<br>';

                    echo '</div>';
}
    // 5
    $quantity = 0;
            echo '<div> <h1 id="year_older">Fashion for Older</h1></div>';
                    echo "<br>";
            while ($row = $r5->fetch_assoc()) {
                   
                    echo '<div class="col-sm-3">';
                    echo '<img width=80% height=80% src="image/year/older/'.$row["pid"].'.jpg"><br>';
                    echo 'Name : '.$row["pname"];
                      echo'<br>';
                    echo 'Style : '.$row["style"];
                      echo'<br>';
                    echo 'Size : '.$row["size"];
                      echo'<br>';
                    echo 'Made in : '.$row["source"];
                      echo'<br>';
                    echo 'Price : '.$row["price"].'VND';
                      echo'<br>';

                    echo '</div>';
}

    // q6
    $quantity = 0;
            echo '<div> <h1 id="working_multillevel">Fashion for multillevel</h1></div>';
                    echo "<br>";
            while ($row = $r6->fetch_assoc()) {
                   
                    echo '<div class="col-sm-3">';
                    echo '<img width=80% height=80% src="image/working/multillevel/'.$row["pid"].'.jpg"><br>';
                    echo 'Name : '.$row["pname"];
                      echo'<br>';
                    echo 'Style : '.$row["style"];
                      echo'<br>';
                    echo 'Size : '.$row["size"];
                      echo'<br>';
                    echo 'Made in : '.$row["source"];
                      echo'<br>';
                    echo 'Price : '.$row["price"].'VND';
                      echo'<br>';

                    echo '</div>';
}
    // q7
    $quantity = 0;
            echo '<div> <h1 id="working_office">Fashion for office</h1></div>';
                    echo "<br>";
            while ($row = $r7->fetch_assoc()) {
                   
                    echo '<div class="col-sm-3">';
                    echo '<img width=80% height=80% src="image/working/office/'.$row["pid"].'.jpg"><br>';
                    echo 'Name : '.$row["pname"];
                      echo'<br>';
                    echo 'Style : '.$row["style"];
                      echo'<br>';
                    echo 'Size : '.$row["size"];
                      echo'<br>';
                    echo 'Made in : '.$row["source"];
                      echo'<br>';
                    echo 'Price : '.$row["price"].'VND';
                      echo'<br>';

                    echo '</div>';
}
    // q8
    $quantity = 0;
            echo '<div> <h1 id="play_beach">Fashion for Beach</h1></div>';
                    echo "<br>";
            while ($row = $r8->fetch_assoc()) {
                   
                    echo '<div class="col-sm-3">';
                    echo '<img width=80% height=80% src="image/play/beach/'.$row["pid"].'.jpg"><br>';
                    echo 'Name : '.$row["pname"];
                      echo'<br>';
                    echo 'Style : '.$row["style"];
                      echo'<br>';
                    echo 'Size : '.$row["size"];
                      echo'<br>';
                    echo 'Made in : '.$row["source"];
                      echo'<br>';
                    echo 'Price : '.$row["price"].'VND';
                      echo'<br>';

                    echo '</div>';
}
// q9
$quantity = 0;
            echo '<div> <h1 id="play_festival">Fashion for festival</h1></div>';
                    echo "<br>";
            while ($row = $r9->fetch_assoc()) {
                   
                    echo '<div class="col-sm-3">';
                    echo '<img width=80% height=80% src="image/play/festival/'.$row["pid"].'.jpg"><br>';
                    echo 'Name : '.$row["pname"];
                      echo'<br>';
                    echo 'Style : '.$row["style"];
                      echo'<br>';
                    echo 'Size : '.$row["size"];
                      echo'<br>';
                    echo 'Made in : '.$row["source"];
                      echo'<br>';
                    echo 'Price : '.$row["price"].'VND';
                      echo'<br>';

                    
                    echo '</div>';
}
// 10
$quantity = 0;
            echo '<div> <h1 id="play_walking">Fashion for walking</h1></div>';
                    echo "<br>";
            while ($row = $r10->fetch_assoc()) {
                   
                    echo '<div class="col-sm-3">';
                    echo '<img width=80% height=80% src="image/play/walking/'.$row["pid"].'.jpg"><br>';
                    echo 'Name : '.$row["pname"];
                      echo'<br>';
                    echo 'Style : '.$row["style"];
                      echo'<br>';
                    echo 'Size : '.$row["size"];
                      echo'<br>';
                    echo 'Made in : '.$row["source"];
                      echo'<br>';
                    echo 'Price : '.$row["price"].'VND';
                      echo'<br>';

                   
                    echo '</div>';
}
//11
$quantity = 0;
            echo '<div> <h1 id="style_jean">Fashion for Jean</h1></div>';
                    echo "<br>";
            while ($row = $r11->fetch_assoc()) {
                   
                    echo '<div class="col-sm-3">';
                    echo '<img width=80% height=80% src="image/style/jean/'.$row["pid"].'.jpg"><br>';
                    echo 'Name : '.$row["pname"];
                      echo'<br>';
                    echo 'Style : '.$row["style"];
                      echo'<br>';
                    echo 'Size : '.$row["size"];
                      echo'<br>';
                    echo 'Made in : '.$row["source"];
                      echo'<br>';
                    echo 'Price : '.$row["price"].'VND';
                      echo'<br>';

                   

                    echo '</div>';
}
//12
$quantity = 0;
            echo '<div> <h1 id="style_shirt">Fashion for shirt</h1></div>';
                    echo "<br>";
            while ($row = $r12->fetch_assoc()) {
                   
                    echo '<div class="col-sm-3">';
                    echo '<img width=80% height=80% src="image/style/shirt/'.$row["pid"].'.jpg"><br>';
                    echo 'Name : '.$row["pname"];
                      echo'<br>';
                    echo 'Style : '.$row["style"];
                      echo'<br>';
                    echo 'Size : '.$row["size"];
                      echo'<br>';
                    echo 'Made in : '.$row["source"];
                      echo'<br>';
                    echo 'Price : '.$row["price"].'VND';
                      echo'<br>';


                    echo '</div>';
}
//13
$quantity = 0;
            echo '<div> <h1 id="style_dress">Fashion for dress</h1></div>';
                    echo "<br>";
            while ($row = $r13->fetch_assoc()) {
                   
                    echo '<div class="col-sm-3">';
                    echo '<img width=80% height=80% src="image/style/dress/'.$row["pid"].'.jpg"><br>';
                    echo 'Name : '.$row["pname"];
                      echo'<br>';
                    echo 'Style : '.$row["style"];
                      echo'<br>';
                    echo 'Size : '.$row["size"];
                      echo'<br>';
                    echo 'Made in : '.$row["source"];
                      echo'<br>';
                    echo 'Price : '.$row["price"].'VND';
                      echo'<br>';

                    echo '</div>';
}

//14
$quantity = 0;
            echo '<div> <h1 id="season_summer">Fashion for summer</h1></div>';
                    echo "<br>";
            while ($row = $r14->fetch_assoc()) {
                   
                    echo '<div class="col-sm-3">';
                    echo '<img width=80% height=80% src="image/season/summer/'.$row["pid"].'.jpg"><br>';
                    echo 'Name : '.$row["pname"];
                      echo'<br>';
                    echo 'Style : '.$row["style"];
                      echo'<br>';
                    echo 'Size : '.$row["size"];
                      echo'<br>';
                    echo 'Made in : '.$row["source"];
                      echo'<br>';
                    echo 'Price : '.$row["price"].'VND';
                      echo'<br>';


                    echo '</div>';
}

//15
$quantity = 0;
            echo '<div> <h1 id="season_spring">Fashion for spring</h1></div>';
                    echo "<br>";
            while ($row = $r15->fetch_assoc()) {
                   
                    echo '<div class="col-sm-3">';
                    echo '<img width=80% height=80% src="image/season/spring/'.$row["pid"].'.jpg"><br>';
                    echo 'Name : '.$row["pname"];
                      echo'<br>';
                    echo 'Style : '.$row["style"];
                      echo'<br>';
                    echo 'Size : '.$row["size"];
                      echo'<br>';
                    echo 'Made in : '.$row["source"];
                      echo'<br>';
                    echo 'Price : '.$row["price"].'VND';
                      echo'<br>';

                    echo '</div>';
}

//16
$quantity = 0;
            echo '<div> <h1 id="season_winter">Fashion for winter</h1></div>';
                    echo "<br>";
            while ($row = $r16->fetch_assoc()) {
                   
                    echo '<div class="col-sm-3">';
                    echo '<img width=80% height=80% src="image/season/winter/'.$row["pid"].'.jpg"><br>';
                    echo 'Name : '.$row["pname"];
                      echo'<br>';
                    echo 'Style : '.$row["style"];
                      echo'<br>';
                    echo 'Size : '.$row["size"];
                      echo'<br>';
                    echo 'Made in : '.$row["source"];
                      echo'<br>';
                    echo 'Price : '.$row["price"].'VND';
                      echo'<br>';

                    echo '</div>';
}

//17
$quantity = 0;
            echo '<div> <h1 id="season_autumn">Fashion for dress</h1></div>';
                    echo "<br>";
            while ($row = $r17->fetch_assoc()) {
                   
                    echo '<div class="col-sm-3">';
                    echo '<img width=80% height=80% src="image/season/autumn/'.$row["pid"].'.jpg"><br>';
                    echo 'Name : '.$row["pname"];
                      echo'<br>';
                    echo 'Style : '.$row["style"];
                      echo'<br>';
                    echo 'Size : '.$row["size"];
                      echo'<br>';
                    echo 'Made in : '.$row["source"];
                      echo'<br>';
                    echo 'Price : '.$row["price"].'VND';
                      echo'<br>';

                    echo '</div>';
}

//18
$quantity = 0;
            echo '<div> <h1 id="country_china">Fashion for china</h1></div>';
                    echo "<br>";
            while ($row = $r18->fetch_assoc()) {
                   
                    echo '<div class="col-sm-3">';
                    echo '<img width=80% height=80% src="image/country/china/'.$row["pid"].'.jpg"><br>';
                    echo 'Name : '.$row["pname"];
                      echo'<br>';
                    echo 'Style : '.$row["style"];
                      echo'<br>';
                    echo 'Size : '.$row["size"];
                      echo'<br>';
                    echo 'Made in : '.$row["source"];
                      echo'<br>';
                    echo 'Price : '.$row["price"].'VND';
                      echo'<br>';

                    echo '</div>';
}

//19
$quantity = 0;
            echo '<div> <h1 id="country_vietnam">Fashion for vietnam</h1></div>';
                    echo "<br>";
            while ($row = $r19->fetch_assoc()) {
                   
                    echo '<div class="col-sm-3">';
                    echo '<img width=80% height=80% src="image/country/vietnam/'.$row["pid"].'.jpg"><br>';
                    echo 'Name : '.$row["pname"];
                      echo'<br>';
                    echo 'Style : '.$row["style"];
                      echo'<br>';
                    echo 'Size : '.$row["size"];
                      echo'<br>';
                    echo 'Made in : '.$row["source"];
                      echo'<br>';
                    echo 'Price : '.$row["price"].'VND';
                      echo'<br>';

                    echo '</div>';
}

//20
$quantity = 0;
            echo '<div> <h1 id="country_japan">Fashion for japan</h1></div>';
                    echo "<br>";
            while ($row = $r20->fetch_assoc()) {
                   
                    echo '<div class="col-sm-3">';
                    echo '<img width=80% height=80% src="image/country/japan/'.$row["pid"].'.jpg"><br>';
                    echo 'Name : '.$row["pname"];
                      echo'<br>';
                    echo 'Style : '.$row["style"];
                      echo'<br>';
                    echo 'Size : '.$row["size"];
                      echo'<br>';
                    echo 'Made in : '.$row["source"];
                      echo'<br>';
                    echo 'Price : '.$row["price"].'VND';
                      echo'<br>';

                    echo '</div>';
}

//21
$quantity = 0;
            echo '<div> <h1 id="country_korea">Fashion for korea</h1></div>';
                    echo "<br>";
            while ($row = $r21->fetch_assoc()) {
                   
                    echo '<div class="col-sm-3">';
                    echo '<img width=80% height=80% src="image/country/korea/'.$row["pid"].'.jpg"><br>';
                    echo 'Name : '.$row["pname"];
                      echo'<br>';
                    echo 'Style : '.$row["style"];
                      echo'<br>';
                    echo 'Size : '.$row["size"];
                      echo'<br>';
                    echo 'Made in : '.$row["source"];
                      echo'<br>';
                    echo 'Price : '.$row["price"].'VND';
                      echo'<br>';

   
                    echo '</div>';
}
    ?>