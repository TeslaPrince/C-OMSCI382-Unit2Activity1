<?php
   echo "<h1>Unit 2 - Activity 1</h1>";
      echo"<h2>Part 1</h2>";
         $num1 = 11;
         $num2 = 16;
         $sum = $num1 + $num2;
         $dif = $num1 - $num2;
         $prod = $num1 * $num2;
         echo "Number 1: $num1<br>
            Number 2: $num2<br>
            Sum: $sum<br>
            Difference: $dif<br>
            Product: $prod";
      echo"<h2>Part 2</h2>";
         $numbers = array(-18, 8, 1, -41, 49, -44, 23, 45, -35, 13);
         for ($x = 0; $x <= 9; $x++){
            echo "Number: $numbers[$x], Square: " . pow($numbers[$x],2) . "<br>";
         }
      echo"<h2>Part 3</h2>";
         $numbers2 = array(50, 29, -24, 30, -21, 26, 29, 30, 26, 30);
         echo "Original Array:<br>";
         echo print_r($numbers2);
         echo "<br>Sorted array in ascending order:<br>";
         sort($numbers2); 
         print_r($numbers2);
         echo "<br>Sorted array in descending order:<br>";
         rsort($numbers2);
         print_r($numbers2);
         echo "<br>Unique values:<br>";
         echo print_r(array_unique($numbers2));
      echo"<h2>Part 4</h2>";
         $sum;
         for($x = 0; $x <= 9; $x++){
            if($numbers2[$x] > 0){
               $sum = $sum + $numbers2[$x];
            }
         }
         echo "Sum of the positive values: $sum";
?>