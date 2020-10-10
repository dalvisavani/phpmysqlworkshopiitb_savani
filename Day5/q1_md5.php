<?php
   include "connect.php";   

    if ( isset($_POST['name']) && isset($_POST['pass']) ) {
        $nam = $_POST['name'];
        $pa = $_POST['pass'];
            $check = hash('md5',$nam);
        

        $sql = "INSERT INTO names (user_name, password)
        VALUES ('$nam','$check')";
        
        if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
    }
?>

<form action="q1_md5.php" method="POST">
    <label for="name">Enter user_name:</label>
    <input type="text" name="name"><br><br>
    <label for="pass">Enter password:</label>
    <input type="password" name="pass"><br><br>
    <input type="submit" value="Submit">
</form>