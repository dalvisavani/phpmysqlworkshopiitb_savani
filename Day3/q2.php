<!DOCTYPE html>
<html>
    <body>
        <form action = 'q5.php' method='POST' >
            <label for="stud">Name of student</label><br>
            <input type="text" name="stud"><br><br>
            <label for="id">id</label><br>
            <input type="text" name="id"><br><br>
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
     include('connect.php');
    if(isset($_POST['stud']) && isset($_POST['s1']) && isset($_POST['s2']) && isset($_POST['s3']) && isset($_POST['s4']) && isset($_POST['s5']) && isset($_POST['id'])){
    $stud = $_POST['stud'];
    $s1 = $_POST['s1'];
    $s2 = $_POST['s2'];
    $s3 = $_POST['s3'];
    $s4 = $_POST['s4'];
    $s5 = $_POST['s5'];
    $id = $_POST['id'];
    $total = $s1 + $s2 + $s3 + $s4 + $s5;
    $perc = ($total/500)*100;
    $query="INSERT INTO class1 (`id`, `name`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `total_obtained_marks`, `total_marks`, `percentage`) VALUES ('$id', '$stud', '$s1', '$s2', '$s3',' $s4', '$s5',' $total', '500', '$perc')";
        
if (mysqli_query($mysqli,$query)) {
    echo "New record created successfully";
    echo "<br>";
  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
  }
  
  $sql = "SELECT id, name, sub1, sub2, sub3, sub4, sub5, total_obtained_marks, total_marks, percentage FROM class1";
  $result = mysqli_query($mysqli, $sql);
  
  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo "id: " . $row["id"]. "<br>";
      echo " Name: " . $row["name"]. "<br>";
      echo "sub1:" .$row["sub1"]. "<br>";
      echo "sub2:" .$row["sub2"]. "<br>";
      echo "sub3:" .$row["sub3"]. "<br>";
      echo "sub4:" .$row["sub4"]. "<br>";
      echo "sub5:" .$row["sub5"]. "<br>";
      echo "total marks". $row["total_obtained_marks"]. "<br>";
      echo "percentage". $row["percentage"]. "<br>";
      $s5upd= $row["sub5"];
      
    }
    
  } else {
    echo "0 results";
  }
  echo "***********************************";
  echo "<br>";
  
  $sql1 = "UPDATE class1 SET sub5=99 WHERE id=1";

  if (mysqli_query($mysqli, $sql1)) {
  echo "Record for subject 5 updated successfully";
  echo "<br>"; 
    
  } else {
        echo "Error updating record: " . mysqli_error($mysqli);
        echo "<br>";
        }
      echo "*******************************";
      echo "<br>";


$total1 = $s1 + $s2 + $s3 + $s4 + 99;
    $perc2 = ($total1/500)*100;
    $sql2 = "UPDATE class1 SET total_obtained_marks=$total1,percentage= $perc2 WHERE id=1";

if (mysqli_query($mysqli, $sql2)) {
  echo "Updated marks and percentage recorded successfully";
  
} else {
  echo "Error updating record: " . mysqli_error($mysqli);
}

mysqli_close($mysqli);
   

    }







?>
  