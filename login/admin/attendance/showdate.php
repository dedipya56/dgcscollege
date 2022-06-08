<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="../../styles/styles.css">
    <title>Dates</title>
    <script src="https://kit.fontawesome.com/3da4f03368.js" crossorigin="anonymous"></script>
    <style>
        table,td,tr,th{
            border: 1px solid black;
        }
        table{
            margin-bottom: 5px;
            margin-left: auto;
            margin-right: auto;
        }
        #para{margin-top: 5%;}
        a{
          margin:5px;  
        }
        
        
    </style>
</head>
<body style="text-align: center;">
<a href="../admin_menu.html"  title="Go to previous page"style="float:left ; text-decoration:none; color : black;font-size:30px;"><i class="fas fa-arrow-circle-left"></i></a>
<p id="clgname"> <bold>DGCS COLLEGE</bold></p>

<p id="para">Table showing the Working days in the college

<?php 

$conn=mysqli_connect("localhost","root","","attendance");
$query1="SELECT * FROM date";
$noOfDates=mysqli_query($conn,$query1);


echo "<table >
    <tr>
    <th>Working days</th>
    <th>operation</th>
    
    </tr>";
while($rows=mysqli_fetch_array($noOfDates)){
    $date=$rows['date'];
    
    echo "<tr>
    <td>$date</td>
    <td><a href='../modify/deletedate.php?date=$date' onclick ='return checkdelete() '> 
   <input type='submit' value='Delete' style='background-color:red;'></input></a></td>
  </tr>";
    
}
?>
</body>
</html>