
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3da4f03368.js" crossorigin="anonymous"></script>
    <link rel ="stylesheet" href="../styles/styles.css">
    <style>
        table,td,tr,th{
            border: 1px solid black;
        }
        table{
            
            margin-left: auto;
            margin-right: auto;
        }
        #para{margin-top: 5%;}
        body{
            text-align: center;
        }
        button{
            margin-left: 0;
            margin-right: 0;
            width :50px;

        }
        a{
          margin:5px;  
        }
        
        
    </style>
    <title>Details</title>
</head>
<body>

<a href="./admin_menu.html"  title="Go to previous page"style="float:left ; text-decoration:none; color : black;font-size:30px;"><i class="fas fa-arrow-circle-left"></i></a>
<p id="clgname"> <bold>DGCS COLLEGE</bold></p>
<p id="para">Table showing the DETAILS of all students in the college
     <form action="" method="GET"  style="float: left ;width:22%; margin:0 3% 1% 75%; border:none ; background-color:bisque" > 
        <input type="text" name="search_value" value="<?php if(isset($_GET['search_value'])) {echo $_GET['search_value'];} ?>" placeholder="Enter value to search" style="margin-right:0;"> 
        <input type="submit"  value="Search" style="margin-left:-2px;background-color:blue; color:white; padding:2px;"></input>
    </form>

</p>
<?php
if(isset($_GET['order'])){
    $order=$_GET['order'];
}else{
    $order='student_id';
}
if(isset($_GET['sort'])){
    $sort=$_GET['sort'];
}else{
    $sort='ASC';
}
if(isset($_GET['search_value']) ){
$search_value=$_GET['search_value'];
$query="SELECT * FROM `student_details` WHERE CONCAT(`student_id`, `password`, `FirstName`, `LastName`, `fatherName`, `motherName`, `schoolName`, `tenthPercentage`, `InterCollege`, `InterMarks`, `DOB`, `gender`, `branch`, `year_join`, `yearOfStudying`, `EamcetRank`, `total_fee`, `fee_paid`, `email_id`, `address`, `picsource`)LIKE '%$search_value%' order by $order $sort";
$result= table($query);
}
else{
    $query="SELECT * FROM `student_details` ORDER BY $order $sort";
    $result= table($query);
}
function table($query){
    $conn=mysqli_connect("localhost","root","","dgcs");
    $result=mysqli_query($conn,$query);
    return $result;
}

?>
<?php 

if(mysqli_num_rows($result)>0)
{
    $sort=='ASC'? $sort='DESC' : $sort='ASC';
    echo "<section>
<table >
        <tr> 
            <th>Student Id<a href='?order=student_id&sort=$sort'><i class='fas fa-caret-down'></i></a></th>
            <th>Photo</th>
            <th>Password</th>
            <th>First Name<a href='?order=FirstName&sort=$sort'><i class='fas fa-caret-down'></i></a></th>
            <th>Last Name<a href='?order=LastName&sort=$sort'><i class='fas fa-caret-down'></i></a></th>
            <th>Father Name</th>
            <th>Mother Name</th>
            <th>School Name<a href='?order=schoolName&sort=$sort'><i class='fas fa-caret-down'></i></a></th>
            <th>10th Percentage<a href='?order=tenthPercentage&sort=$sort'><i class='fas fa-caret-down'></i></a></th>
            <th>Inter/Diploma College<a href='?order=InterCollege&sort=$sort'><i class='fas fa-caret-down'></i></a></th>
            <th>Inter/Diploma Percentage<a href='?order=InterMarks&sort=$sort'><i class='fas fa-caret-down'></i></a></th>
            <th>DateOfBirth<a href='?order=DOB&sort=$sort'><i class='fas fa-caret-down'></i></a></th>
            <th>Gender<a href='?order=gender&sort=$sort'><i class='fas fa-caret-down'></i></a></th>
            <th>Branch<a href='?order=branch&sort=$sort'><i class='fas fa-caret-down'></i></a></th>
            <th>Year Joined<a href='?order=year_join&sort=$sort'><i class='fas fa-caret-down'></i></a></th>
            <th>Year of studying<a href='?order=yearOfStudying&sort=$sort'><i class='fas fa-caret-down'></i></a></th>
            <th>Eamcet Rank<a href='?order=EamcetRank&sort=$sort'><i class='fas fa-caret-down'></i></a></th>
            <th>Total Fee<a href='?order=total_fee&sort=$sort'><i class='fas fa-caret-down'></i></a></th>
            <th>Fee Paid<a href='?order=fee_paid&sort=$sort'><i class='fas fa-caret-down'></i></a></th>
            <th>Email Id</th>
            <th>Address</th>
            <th colspan='2'>operation </th>
        </tr>

";

while ($row = mysqli_fetch_array($result)) {
   


    $student_id=$row['student_id'];
    echo "<tr>
    <td>$student_id</td>
    <td><img src='".$row['picsource']."' height='100px' width='100px'/></td>
    <td>".$row['password']."</td>
    <td>".$row['FirstName']."</td>
    <td>".$row['LastName']."</td>
    <td>".$row['fatherName']."</td>
    <td>".$row['motherName']."</td>
    <td>".$row['schoolName']."</td>
    <td>".$row['tenthPercentage']."</td>
    <td>".$row['InterCollege']."</td>
    <td>".$row['InterMarks']."</td>
    <td>".$row['DOB']."</td>
    <td>".$row['gender']."</td>
    <td>".$row['branch']."</td>
    <td>".$row['year_join']."</td>
    <td>".$row['yearOfStudying']."</td>
    <td>".$row['EamcetRank']."</td>
    <td>".$row['total_fee']."</td>
    <td>".$row['fee_paid']."</td>
    <td>".$row['email_id']."</td>
    <td>".$row['address']."</td>

    <td>
    <a href='./modify/updateDetails.php?student_id=$row[student_id]&image=$row[picsource]&password=$row[password]&first_name=$row[FirstName]&last_name=$row[LastName]&father_name=$row[fatherName]&mother_name=$row[motherName]&school_name=$row[schoolName]
    &tenth=$row[tenthPercentage]&inter=$row[InterCollege]&interMarks=$row[InterMarks]&dob=$row[DOB]&gender=$row[gender]&branch=$row[branch]&year_join=$row[year_join]&eamcet=$row[EamcetRank]&fee_paid=$row[fee_paid]&email=$row[email_id]&address=$row[address]'>
    <input type='submit' value='Edit' style='background-color:green;'></input>  </a>
    </td>

    <td><a href='./modify/deleteDetails.php?student_id=$row[student_id]&first_name=$row[FirstName]' onclick ='return checkdelete() '> 
    <input type='submit' value='Delete' style='background-color:red;'></input></a></td>
   </tr>";
}
echo "</table>";
}

else{
    ?><script>
             window.location.href="showDetails.php";
             alert("No such record ");
             //document.password.value.focus();
            </script><?php
}
?>
</section>
<button style="text-align: center; margin-left:0; margin-right:0 ;width:140px;"><a href="./register.html">Register</a></button>
</body>
</html>