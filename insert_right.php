<?php
    $conn = mysqli_connect("localhost", "root", "", "robot_control");
         
    if($conn === false){
        die("Error: Could not connect. "
         . mysqli_connect_error());
     }
         
    $right = $_POST['right'];
    $sql = "INSERT INTO directions (direction) VALUES ('$right')";
         
    if(mysqli_query($conn, $sql)){
        echo "<h3>data stored in a database successfully."
            . " Please browse your localhost php my admin"
                        . " to view the updated data</h3>";
        header("Location: index.php");
    } else{
        echo "Error: Sorry $sql. "
            . mysqli_error($conn);
    }
         
     mysqli_close($conn);
?>