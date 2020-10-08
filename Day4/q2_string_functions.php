<?php
    if(isset($_GET["string"])){
        $str = $_GET["string"];
        $len = strlen($str);
        echo "length of string '" . $str . "' is :" .$len ;
        echo "<br><br>";
        echo "*********************************";
        echo "<br><br>";
        echo "Breaking down ".$str. "into array: ";
        print_r (explode(" ",$str));
        echo "<br><br>";
        echo "*********************************";
        echo "<br><br>";
        $rev = strrev($str);
        echo "Reverse of string '" . $str . "' is :" .$rev ;
        echo "<br><br>";
        echo "*********************************";
        echo "<br><br>";
        $low = strtolower($str);
        echo "Lowercasing the string '" . $str . "' :" .$low ;
        echo "<br><br>";
        echo "*********************************";
        echo "<br><br>";
        $up = strtoupper($str);
        echo "Uppercasing the string '" . $str . "' :" .$up ;
        echo "<br><br>";
        echo "*********************************";
        echo "<br><br>";
        $from = "qw";
        $to = "as";
        $sub = strtr($str, $from, $to);
        echo "Replacing a substring : ";
        print_r($sub);
        echo "<br><br>";
        echo "*********************************";
        echo "<br><br>";
    }

?>
<form action="q2_string_functions.php" method="GET">
    <label for="string">Enter a String:</label>
    <input type="text" name="string"><br><br>
    <input type="submit" value="Find">
</form>