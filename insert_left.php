<?php
    $conn = mysqli_connect("localhost", "root", "", "robot_control");
         
    if($conn === false){
        die("Error: Could not connect. "
         . mysqli_connect_error());
     }
         
    $left = $_POST['left'];
    $sql = "INSERT INTO directions (direction) VALUES ('$left')";
         
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