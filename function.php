
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Logical operators <br>";

        echo "===ex1=== <br>";
        $year = 2013;
        if($year % 4 == 0){
          echo "This year is a leap year <br>";
            } else {
                echo "This year is not a leap year <br>";
            } 
            echo "===ex2=== <br>";
        $temp = 27;
        if($temp > 20) {
            echo "It is summertime! <br>";
        } else {
            echo "It is wintertime! <br>";
        }
        echo "===ex3=== <br>";
        $num1 = 2;
        $num2 = 3;
        if($num1 == $num2){
            echo ($num1 + $num2) * 3;
            echo "<br>";
        } else {
            echo $num1 + $num2;
            echo "<br>";
        }
        echo "===ex4=== <br>";
        function sum30($int1, $int2){
            if($int1 + $int2 == 30){
                echo 30;
                echo "<br>";
            } else {
                echo "false <br>";
            }
        }
        sum30(10, 20);
        sum30(10, 10);

        echo "===ex5=== <br>";
        function multiple3($num){
            if($num % 3 == 0) {
                echo "true <br>";
            }else {
                echo "false <br>";
            }
        }
        multiple3(10);
        multiple3(9);
        echo "===ex6=== <br>";
        function rangeCheck($num){
            if($num >= 20 and $num <= 50) {
                echo "true <br>";
            }else {
                echo "false <br>";
            }
        }
        rangeCheck(50);
        rangeCheck(1);
        rangeCheck(25);

        echo "===ex7=== <br>";
        function largestInt($num1, $num2, $num3){
            if($num1 > $num2 and $num1 > $num3) {
                echo $num1;
                echo "<br>";
            }elseif($num2 > $num1 and $num2 > $num3) {
                echo $num2;
                echo "<br>";
            } else {
                echo $num3;
                echo "<br>";
            }
        }
        largestInt(1,2,3);
        largestInt(5,2,3);
        largestInt(5,8,3);

        echo "===ex7=== <br>";
        function largestIntArr($array){
            $largest = 0;
            for ($i=0; $i < count($array) ; $i++) { 
                if ($i != 0 and $array[$i] > $array[$i-1]){
                    $largest = $array[$i];
                }
            }
            echo $largest;
            echo "<br>";
        }
        largestIntArr([1,2,3]);
        largestIntArr([1,12,3]);
        largestIntArr([1,12,3,15,20]);

        echo "===ex8=== <br>";
        function electricity($units){
            if ($units <= 50){
                $bill = 2.5 * $units;
            } elseif($units <= 150) {
                $bill = (2.5 * 50) + (5 * ($units - 50));
            } elseif($units <= 250) {
                $bill = (2.5 * 50) + (5 * 100) + (6.2 * ($units - 150));
            } else {
                $bill = (2.5 * 50) + (5 * 100) + (6.2 * 100) + (7.5 * ($units - 250)) ;
            }

            echo "$bill JD <br>";
        }

        electricity(50);
        electricity(70);
        electricity(230);
        electricity(270);


           echo "===ex9=== <br>";
        function calculator($num1, $oper, $num2){
            if ($oper == "+") {
                $answer = $num1 + $num2;
            } elseif ($oper == "-") {
                $answer = $num1 - $num2;
            } elseif ($oper == "/") {
                $answer = $num1 / $num2;
            } elseif ($oper == "*") {
                $answer = $num1 * $num2;
            }

            echo "$answer <br>";
        }

        calculator(1, "+", 2);
        calculator(5, "*", 10);
        calculator(10, "/", 2);
        calculator(12, "-", 2);

        echo "===ex10=== <br>";
        function isEligible($age){
            if($age >= 18){
                echo "is eligible to vote <br>";
            } else {
                echo "is not eligible to vote <br>";
            }
        }

        isEligible(16);
        isEligible(18);
        isEligible(20);

        echo "===ex11=== <br>";
        function posNegZero($num){
            if($num < 0) {
                $answer = "Negative";
            } elseif($num >0) {
                $answer = "Positive";
            } else {
                $answer = "Zero";
            }

            echo "This number is $answer <br>";
        }

        posNegZero(-10);
        posNegZero(0);
        posNegZero(50);

        echo "===ex12=== <br>";
        function grade($array){
            $sum = 0;
            for ($i=0; $i < count($array) ; $i++) { 
              $sum += $array[$i];
            }
            $ave = $sum / count($array);
        
            if($ave < 60){
                echo "F <br>";
            }elseif($ave < 70) {
                echo "D <br>";
            }elseif($ave < 80) {
                echo "C <br>";
            }elseif($ave < 90) {
                echo "B <br>";
            }elseif($ave <100) {
                echo "A <br>";
            }
        }

        grade([60,86,95,63,55,74,79,62,50]);
        grade([60,86,80,60,55,54,39,52,50]);
        grade([60,96,90,90,95,94,99,92,50]);
        grade([90,96,90,90,95,94,99,92,90]);


        echo "------------ Arrays---------- <br>";



      
        echo "===ex1=== <br>";

        
        function paragraph($colors){
            echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $colors[0] carpet, the $colors[1] lawn, the $colors[2] house, the leaden sky. The new president and his first lady. - Richard M. Nixon <br>";
        }
        paragraph(["red", "green", "white"]);

            echo "===ex2=== <br>";
        function unorderedList($colors){
            echo "<ul>";
            foreach($colors as $color){
                echo "<li> $color </li>";
            }
            echo "</ul><br>";
        }
        unorderedList(['white', 'green', 'red']);


        echo "===ex3=== <br>";
        function capitals($cities){
            foreach($cities as $country => $capital){
                echo "The capital of $country is $capital <br>";
            }
        }
        capitals(["Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid"]);

        echo "===ex4=== <br>";
        function firstElement($colors){
            // echo $colors[array_key_first($colors)]."<br>";
            echo reset($colors)."<br>";
        }
        firstElement([4 => 'white', 6 => 'green', 11=> 'red']);

        echo "===ex5=== <br>";
        //  function insert($array, $location, $newItem){
        //     foreach($array as $i => $item){
        //         if ($location == $i){
        //             $array[$i+1] = $array[$i];
        //             $array[$i] = $newItem;
        //         } elseif($i > $location) {
        //             $array[$i+1] = $array[$i];
        //         } else {
        //             $array[$i] = $array[$i];
        //         }
        //     }
        //     print_r($array);
        //  }

        //  insert([1,2,3,4,5],2,"$")
        $array2 = [1,2,3,4,5];
        $location = 3;
        $newItem = "$";
        array_splice($array2, $location-1, 0 , $newItem);
        print_r ($array2);
        echo "<br>";
    
        echo "===ex6=== <br>";
        $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
        asort($fruits);
        foreach($fruits as $i => $fruit){
            echo "$i : $fruit <br>";
        }


        echo "------------Q7---------- <br>";
        function aveLowestHighest($array){
            $total = 0;
            foreach($array as $temp){
                $total += $temp;
            }
            $ave = $total / count($array);
            echo "Average Temperature is: $ave <br>";
            
            $arrayUnique = array_unique($array);
            sort($arrayUnique);
            echo "Lowest 5 temperatures: $arrayUnique[0] $arrayUnique[1] $arrayUnique[2] $arrayUnique[3] $arrayUnique[4] <br>";
            rsort($arrayUnique);
            echo "Highest 5 temperatures: $arrayUnique[0] $arrayUnique[1] $arrayUnique[2] $arrayUnique[3] $arrayUnique[4] <br>";
        }

        aveLowestHighest([78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73]);

        echo "------------Q8---------- <br>";
        $array1 = array("color" => "red", 2, 4);
        $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
        print_r(array_merge($array1, $array2));
        echo "<br>";
        
        echo "------------Q9---------- <br>";
        function upperCase($array){
            $flippedArray = array_flip($array);
            $upperFlipped = array_change_key_case($flippedArray,CASE_UPPER);
            $upperArray = array_flip($upperFlipped);
            print_r($upperArray);
            echo "<br>";
        }

        upperCase(["red","blue", "white","yellow"]);

        echo "------------Q10---------- <br>";
        function lowerCase($array){
            $flippedArray = array_flip($array);
            $lowerFlipped = array_change_key_case($flippedArray,CASE_LOWER);
            $lowerArray = array_flip($lowerFlipped);
            print_r($lowerArray);
            echo "<br>";
        }

        lowerCase(["RED","BLUE", "WHITE","YELLOW"]);

        echo "------------Q11---------- <br>";
        $divisible4 =[];
        for($i = 200; $i <= 250; $i++){
            if($i % 4 == 0){
                array_push($divisible4, $i); //you could've just echo $i lol
            }
        }
        foreach($divisible4 as $num){
            echo "$num , ";
        }

        echo "<br>";

        echo "------------Q12---------- <br>";
        function stringLen($words){
            $lengths =[];
            foreach($words as $word){
                array_push($lengths, strlen($word));
            }
            sort($lengths);
            echo "The shortest array length is " . $lengths[0] .". The longest array length is " . $lengths[count($lengths)-1].". <br>";
        }
        stringLen(["abcd","abc","de","hjjj","g","wer"]);

        echo "------------Q13---------- <br>";
        function randomBtw($num1, $num2){
            $numArray = [];
            for($i = $num1; $i <= $num2; $i++){
                array_push($numArray, $i);

            }
            $random10 = array_rand($numArray, 10);
            foreach($random10 as $num){
                echo $num . ",";
            }

            echo "<br>";
        }

        randomBtw(5, 40);

        echo "------------Q14---------- <br>";
        function lowestInt($array){
            sort($array);
            if ($array[0] == 0){
              echo next($array);
            } else {
                echo $array[0];
            }
        }

    lowestInt([ 2, 0, 10, 12, 6]) . "<br>";

    echo "-------======================---Part 3 Loops---+++++===============================----- <br>";

    echo "------------Q1---------- <br>";
    $x = 1;
    do {
    echo  $x ."-";
$x++;
    }
    while ($x != 10);
    echo "<br>";
    echo "------------Q2---------- <br>";
    $total = 0;
    for ($i = 0; $i <= 30; $i++) {
        $total += $i;
    }
    echo $total . "<br>";

    echo "------------Q3---------- <br>";
        // used courier font to make letter size the same
        $letters = ["A", "B", "C", "D", "E"];
        for ($i = 0; $i < 5; $i++) {
            for ($y = 4; $y > $i; $y--) {
                echo $letters[0] . "  ";
            }
            for ($x = 0; $x <= $i; $x++) {
                echo $letters[$i] . "   ";
            }
            echo " <br> ";
        }

    echo "------------Q4---------- <br>";
    $numbers = [1, 2, 3, 4, 5];
    for ($i = 0; $i < 5; $i++) {
        for ($y = 4; $y > $i; $y--) {
            echo $numbers[0] . "  ";
        }
        for ($x = 0; $x <= $i; $x++) {
            echo $numbers[$i] . "  ";
        }
        echo "<br>";
    }

    echo "------------Q5---------- <br>";
    // $numPattern = [1,2,3,4,5];
    for ($i = 1; $i <= 5; $i++) {

        for ($y = 1; $y < $i; $y++) {
            echo "0 ";
        }
        echo $i . " ";
        for ($x = 5; $x > $i; $x--) {
            echo "0 ";
        }
        echo "<br>";
    }

    echo "------------Q6---------- <br>";
    function factorial($num)
    {
        $answer = 1;
        for ($i = $num; $i >= 1; $i--) {
            $answer *= $i;
        }
        echo $answer . "<br>";
    }

    factorial(5);
    factorial(8);

    echo "------------Q7---------- <br>";
    function fibo($num)
    {
        $prev = 0;
        $acc = 1;
        echo $prev . ", " . $acc . ", ";
        for ($i = 0; $i < $num - 2; $i++) {
            $total = $prev + $acc;
            echo $total . ", ";
            $prev = $acc;
            $acc = $total;
        }
        echo "<br>";
    }
    fibo(8);

    echo "------------Q8---------- <br>";
    function countC($str)
    {
        $counter = 0;
        for ($i = 0; $i < strlen($str); $i++) {
            if ($str[$i] == "c" || $str[$i] == "C") {
                $counter++;
            }
        }
        echo $counter . " <br>";
    }

    countC("Orange Coding Academy");

    echo "------------Q9---------- <br>";
    ?>
    <table style="border: 1px solid black; border-spacing: 0px; ">

        <?php
        for ($i = 1; $i <= 6; $i++) {
            echo "<tr>";
            for ($x = 1; $x <= 5; $x++) {
                echo "<td style='border: 1px solid black; padding: 3px;'> $i * $x = " . $i * $x . "</td>";
            }
            echo "</tr>";
        }

        ?>
    </table>

    <?php
    echo "------------Q10---------- <br>";
    for ($i = 1; $i <= 50; $i++) {
        if ($i % 3 == 0 and $i % 5 == 0) {
            echo "FizzBuzz ";
        } elseif ($i % 3 == 0) {
            echo "Fizz ";
        } elseif ($i % 5 == 0) {
            echo "Buzz ";
        } else {
            echo "$i ";
        }
    }
    echo "<br>";

    echo "------------Q11---------- <br>";
    function floyd($lines)
    {
        $n = 1;
        for ($i = 1; $i <= $lines; $i++) {
            for ($x = 1; $x <= $i; $x++) {
                echo "$n ";
                $n++;
            }
            echo "<br>";
        }
    }
    floyd(5);

    echo "------------Q12---------- <br>";
    $letterArray = ["A", "B", "C", "D", "E"];

    // // inverted for some reason
    // for ($i = 0; $i <= 9; $i++) {
    //     for ($y = 0; $y < $i - 4; $y++) {
    //         echo $letterArray[$y] . " ";
    //     }
    //     for ($x = 4; $x > $i; $x--) {
    //         echo $letterArray[count($letterArray) - ($x + 1)] . " ";
    //     }
    //     echo "<br>";
    // }


    for ($i = 0; $i <= 5; $i++) {
        for ($x = 5; $x > $i; $x--) {
            echo "&nbsp";
        }
        for ($y = 0; $y < $i; $y++) {
            echo $letterArray[$y] . " ";
        }
        echo "<br>";
    }
    for ($i = 0; $i < 4; $i++) {
        for ($y = 0; $y <= $i; $y++) {
            echo "&nbsp";
        }
        for ($x = 4; $x > $i; $x--) {
            echo $letterArray[count($letterArray) - ($x + 1)] . " ";
        }
        echo "<br>";
    }
    echo "-------------------Part 4 Functions----------- <br>";
    echo "------------Q1---------- <br>";
    function isPrime($num)
    {
        if ($num <= 1) {
            echo "$num is not a prime number <br>";
        } elseif ($num == 2) {
            echo "$num is a prime number <br>";
        } else {
            $prime = 0;
            for ($i = 2; $i < $num; $i++) {
                if ($num % $i == 0) {
                    $prime++;
                }
            }
            if ($prime == 0) {
                echo "$num is a prime number <br>";
            } else {
                echo "$num is not a prime number <br>";
            }
        }
    }

    isPrime(3);
    isPrime(5);
    isPrime(2);
    isPrime(7);
    isPrime(9);
    isPrime(12);
    isPrime(13);
    isPrime(199);
    isPrime(200);
    isPrime(97);
    isPrime(55);

    echo "------------Q2---------- <br>";
    function reverseStr($str)
    {
        $strArr = [];
        for ($i = 1; $i <= strlen($str); $i++) {
            array_push($strArr, $str[strlen($str) - $i]);
        }
        echo implode("", $strArr) . "<br>";
    }

    reverseStr("hello");
    reverseStr("remove");

    echo "------------Q3---------- <br>";
    function isLower($str)
    {
        $lowerStr = strtolower($str);
        if ($str == $lowerStr) {
            echo "The string is all lowercase";
        } else {
            echo "The string is not all lowercase";
        }
    }
    isLower("hello");
    echo "<br>";
    isLower("Hello");
    echo "<br>";

    function isLowerRgex($str)
    {

        if (!preg_match('/[A-Z]/', $str)) {
            echo "The string is all lowercase";
        } else {
            echo "The string is not all lowercase";
        }
    }
    isLowerRgex("hello");
    echo "<br>";
    isLowerRgex("Hello");
    echo "<br>";
    function isLowerAscii($str)
    {
        $count = 0;
        for ($i = 0; $i < strlen($str); $i++) {
            if (!(ord($str[$i]) >= 97 and ord($str[$i]) <= 122)) {
                $count++;
            }
        }

        if ($count > 0) {
            echo "The string is not all lowercase <br>";
        } else {
            echo "The string is all lowercase";
        }
    }

    isLowerAscii("hello");
    echo "<br>";
    isLowerAscii("Hello");
    echo "<br>";

    echo "------------Q4---------- <br>";
    function swap($x, $y)
    {
        $intermediate = $x;
        $x = $y;
        $y = $intermediate;

        echo "y= $y , x= $x <br>";
    }
    swap(5, 10);

    function swap2($x, $y)
    {

        echo "y= $x , x= $y <br>";
    }

    swap2(5, 10);
    echo "------------Q5---------- <br>";
    echo "repeated question <br>";
    echo "------------Q6---------- <br>";
    function isArmstrong($num)
    {
        $numStr = strval($num);
        $sum = 0;
        for ($i = 0; $i < strlen($numStr); $i++) {
            $sum += (intval($numStr[$i]) ** 3);
        }
        if ($sum == $num) {
            echo "$num is an Armstrong Number <br>";
        } else {
            echo "$num is not an Armstrong Number <br>";
        }
    }
    isArmstrong(407);
    isArmstrong(406);
    isArmstrong(153);
    echo "------------Q7---------- <br>";
    function isPalindrome($str)
    {
        $strR = [];
        for ($i = 1; $i <= strlen($str); $i++) {
            if ($str[strlen($str) - $i] == " ") {
                array_push($strR, "");
            } else {
                array_push($strR, $str[strlen($str) - $i]);
            }
        }
        $nospacesStr = str_replace(" ", "", $str);
        if (strtolower($nospacesStr) == strtolower(implode("", $strR))) {
            echo "Yes it is a palindrome <br>";
        } else {
            echo "No it is not a palindrome <br>";
        }
    }
    isPalindrome("Hello");
    isPalindrome("racecar");
    isPalindrome("Eva, can I see bees in a cave?");
    isPalindrome("Eva can I see bees in a cave");

    echo "------------Q8---------- <br>";
    function removeDuplicates($array)
    {
        $newArr = ["test"];
        // array_push($newArr, $array[0]);
        foreach ($array as $num) {
            if (array_search($num, $newArr) == false) {
                array_push($newArr, $num);
            }
        }
        array_shift($newArr);
        echo "(";
        foreach ($newArr as $num) {
            echo $num . " ";
        }
        echo ") <br>";
    }
    removeDuplicates([2, 4, 7, 4, 2, 8, 4]);
    ?>
</body>

</html>
    ?>
</body>
</html>