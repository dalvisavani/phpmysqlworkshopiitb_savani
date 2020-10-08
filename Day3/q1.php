<!DOCTYPE html>
<html>
    <body>
        <form action = 'q1.php' method='POST' >
            <label for="stud">Name of student</label><br>
            <input type="text" name="stud"><br><br>
            <p>marks in each subject</p>
            <label for="s1">Subject 1:</label><br>
            <input type="text" name="s1"><br><br>
            <label for="s2">Subject 2:</label><br>
            <input type="text" name="s2"><br><br>
            <label for="s3">Subject 3:</label><br>
            <input type="text" name="s3"><br><br>
            <label for="s4">Subject 4:</label><br>
            <input type="text" name="s4"><br><br>
            <label for="s5">Subject 5:</label><br>
            <input type="text" name="s5"><br><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
<?php

    if(isset($_POST['stud']) && isset($_POST['s1']) && isset($_POST['s2']) && isset($_POST['s3']) && isset($_POST['s4']) && isset($_POST['s5'])){
    $stud = $_POST['stud'];
    $s1 = $_POST['s1'];
    $s2 = $_POST['s2'];
    $s3 = $_POST['s3'];
    $s4 = $_POST['s4'];
    $s5 = $_POST['s5'];

    $total = $s1 + $s2 + $s3 + $s4 + $s5;
    echo "Total marks obtained : $total";
    echo "<br>";
    echo "Total marks : 500";
    echo "<br>";
    $perc = ($total/500)*100;
    echo "Percentage: $perc";
    }
?>
  