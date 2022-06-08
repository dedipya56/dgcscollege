<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dates</title>
</head>
<body>
<?php
session_start();


$conn = mysqli_connect("localhost", "root", "", "attendance");
if($conn === false){
    die("ERROR: Could not connect. "  . mysqli_connect_error());
}
$date = $_REQUEST['date'];
$sql = " INSERT INTO date VALUES ('$date') ";
        
        if(mysqli_query($conn, $sql)){
            ?> <script>
                alert("SUCCESSFULLY REGISTERED THE WORKING DAY INTO DGCS COLLEGE.")
                window.location.href="./showdate.php";
            </script>
            <?php
      
       } else{
            
            echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
         }
         ?>
</body>
</html>

