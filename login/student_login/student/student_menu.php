


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="../../styles/styles.css">
    <script src="https://kit.fontawesome.com/3da4f03368.js" crossorigin="anonymous"></script>	
    <style>
        a{
            color: white;
        }
        button{
            margin-right: 0;
        }
    </style>
    <title>Welcome</title>
</head>
<body >
<br/>
<a href="../studentLogin.html"  title="Go to previous page"style="float:left ; text-decoration:none; color : black;font-size:30px;"><i class="fas fa-arrow-circle-left"></i></a>
<button style="float: right;"> <a href="../studentLogin.html"  >logout</a></button><br/>
<br/>
<?php

require "../st.php";
if (isset($_SESSION['userid'])){
    $uid=$_SESSION['userid'];
    $connect= mysqli_connect("localhost","root","","dgcs") or die("coudld connect to database");
    $query = "SELECT * FROM student_details WHERE student_id ='$uid' ";
    if($view=mysqli_query($connect,$query)){
        while($result= mysqli_fetch_assoc ($view)){
            echo "<img src='../../admin/".$result['picsource']."' height='100px' width='100px' /><br/> ";
            echo " <p style=margin-right:200px> Welcome <strong style=color:blue;>$result[FirstName] "." $result[LastName]</strong>!!</p><br/>";
        }
    }else{
        echo "error";
    }
}
else{
    echo "no username";
}
    ?>
 
<button  style="margin-left:0";><a href="details.php">Details</a></button>
<button ><a href="exam.php?value=1">Results</a></button>
<button style="width:auto"><a href="exam.php?value=2">Attendance</a></button>
<button ><a href="fee.php">Fee Details</a></button>

</body>
</html>

  


