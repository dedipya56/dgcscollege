

<?php 
//require "showDetails.php";
error_reporting(0);
$first_name =  $_GET['first_name'];
$last_name = $_GET['last_name'];
$image=$_GET['image'];
$year=$_GET['year_join'];
$gender =  $_GET['gender'];
$address = $_GET['address'];
$email = $_GET['email'];
$password = $_GET['password'];
$student_id = $_GET['student_id'];
$father_name = $_GET['father_name'];
$mother_name= $_GET['mother_name'];
$tenth= $_GET['tenth'];
$inter=  $_GET['inter'];
$interMarks=  $_GET['interMarks'];
$dob= $_GET['dob'];
$branch=$_GET['branch'];
$school_name = $_GET['school_name'];
$eamcet= $_GET['eamcet'];
//$totalfee= $_GET['totalfee'];
$fee_paid= $_GET['fee_paid'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Portal</title>
    <link rel ="stylesheet" href="../../styles/styles.css">
</head>
   <body style="background-image: url('../../images/college1.jpg');background-size: cover; background-repeat: no-repeat;">
     
        <form action="" method="POST" enctype="multipart/form-data" style="width: 500px; text-align: center; left: 0;margin-bottom: 50px;">
        <input type="hidden" name="id" value="<?=$student_id?>">
        
            <h1 style="text-align:centre;">REGISTRATION FORM</h1> <hr/>        
        <p>
             <label for="StudentId">STUDENT ID:</label>
             <input type="text" name="student_id"  value="<?php echo "$student_id"?> ">
        </p>
        <p>
            <label for="image">photo:</label>
            <input type="file" name="image" >
            <?php echo "<img src='../$image' height='50px' width='50px'/>"?>
            <input type="hidden" name="old_image" value="<?=$image?>">
       </p>

        <p>
            <label for="password">PASSWORD :</label>
            <input type="text" name="password" value="<?php echo "$password"?>">
       </p>
            
        <p>
             <label for="firstName">First Name:</label>
             <input type="text" name="first_name"  value="<?php echo "$first_name"?>">
         </p>
      
         <p>
             <label for="lastName">Last Name:</label>
             <input type="text" name="last_name"  value="<?php echo "$last_name"?>">
         </p>
        
         <p>
             <label for="Gender">Gender:</label>
            <input type="radio" name="gender" value="male" <?php if($gender=="male"){echo "checked";} ?> >
            <label for="male">Male</label>
            <input type="radio" name="gender" value="female" <?php if($gender=="female"){echo "checked";} ?>>
            <label for="female">Female</label>
            
         </p>
        
         <p>
            <label for="fatherName">Father Name:</label>
            <input type="text" name="father_name" id="fatherName" value="<?php echo "$father_name"?>">
        </p>

        <p>
            <label for="motherName">Mother Name:</label>
            <input type="text" name="mother_name" id="motherName" value="<?php echo "$mother_name"?>">
        </p>

        <p>
            <label for="dob">Date Of Birth:</label>
            <input type="date" name="dob" id="dob" value="<?php echo "$dob"?>">
        </p>

        <p>
            <label for="schoolName">school Name:</label>
            <input type="text" name="school_name" id="schoolName" value="<?php echo "$school_name"?>">
        </p>
        <p>
            <label for="10th">10th Percentage</label>
            <input type="text" name="tenth" value="<?php echo "$tenth"?>">
        </p>

        <p>
            <label for="inter">Inter / Diploma college</label>
            <input type="text" name="inter" value="<?php echo "$inter"?>">
        </p>

        <p>
            <label for="+2">Inter / Diploma percentage:</label>
            <input type="text" name="interMarks" value="<?php echo "$interMarks"?>">
        </p>


        <p>
            <label for="branch">Branch</label>
           
            <select name="branch" >
                <option value="COMPUTER SCIENCE ENGINEERING" 
                        <?php if($branch=='COMPUTER SCIENCE ENGINEERING'){echo "selected ";} ?>
                >COMPUTER SCIENCE ENGINEERING</option>
                <option value="INFORMATION TECHNOLOGY ENGINEERING"
                        <?php if($branch=='INFORMATION TECHNOLOGY ENGINEERING'){echo "selected ";} ?> 
                >INFORMATION TECHNOLOGY ENGINEERING</option>
                <option value="ELECTROICS AND COMMUNICATION ENGINEERING"
                        <?php if($branch=='ELECTROICS AND COMMUNICATION ENGINEERING'){echo "selected ";} ?>
                >ELECTROICS AND COMMUNICATION ENGINEERING </option>
                <option value="ELECTRICAL AND ELECTRONICS ENGINEERING"
                        <?php if($branch=='ELECTRICAL AND ELECTRONICS ENGINEERING'){echo "selected ";} ?>
                >ELECTRICAL AND ELECTRONICS ENGINEERING</option>
                <option value="MECHANICAL ENGINEERING"
                        <?php if($branch=='MECHANICAL ENGINEERING'){echo "selected ";} ?>
                >MECHANICAL ENGINEERING</option>
                <option value="CIVIL ENGINEERING"
                        <?php if($branch=='CIVIL ENGINEERING'){echo "selected ";} ?>
                >CIVIL ENGINEERING</option>
                <option value="CHEMICAL ENGINEERING"
                        <?php if($branch=='CHEMICAL ENGINEERING'){echo "selected ";} ?>
                >CHEMICAL ENGINEERING</option>
            </select>
            

        </p>

        <p>
            <label for="year">Year of joining:</label>
            <input type="year" name="year"  value="<?php echo "$year"?>">
        </p>

        <p>
            <label for="eamcet">Eamcet Rank:</label>
            <input type="text" name="eamcet" id="eamcet" value="<?php echo "$eamcet"?>">
        </p>

        <p>
             <label for="Address">Address:</label>
             <input type="text" name="address" id="Address" value="<?php echo "$address"?>">
         </p>
      
         <p>
             <label for="emailAddress">Email Address:</label>
             <input type="text" name="email" id="emailAddress" value="<?php echo "$email"?>">
         </p>
         <!--<p>
            <label for="totalfee">Total Fee:</label>
            <input type="text" name="totalfee" id="totalfee" value="
        </p>-->

        <p>
            <label for="feepaid">Fee paid:</label>
            <input type="text" name="fee_paid" id="feepaid" value="<?php echo "$fee_paid"?>">
        </p>

        <button type="submit" value="Submit"  name="submit"> SUBMIT</button>
        
        </form>

        <a href="../showDetails.php"><button style="width: auto; margin: 0 50%;" title="click me to go to login page">Back</button></a> 

    </body>
</html>
<?php
if($_POST['submit']){
$first_name =  $_POST['first_name'];
$last_name = $_POST['last_name'];
$image=$_FILES['image']['name'];
$old_image=$_POST['old_image'];
$gender =  $_POST['gender'];
$address = $_POST['address'];
$email = $_POST['email'];
$year=$_POST['year'];
$password = $_POST['password'];
$student_id = $_POST['student_id'];
$father_name = $_POST['father_name'];
$mother_name= $_POST['mother_name'];
$tenth=$_POST['tenth'];
$inter=  $_POST['inter'];
$interMarks=  $_POST['interMarks'];
$dob= $_POST['dob'];
$branch=$_POST['branch'];
$school_name = $_POST['school_name'];
$eamcet= $_POST['eamcet'];
//$totalfee= $_POST['totalfee'];
$fee_paid= $_POST['fee_paid'];
$year1=date("Y");
$year2=$year1-$year;
$conn = mysqli_connect("localhost", "root", "", "dgcs");
if($conn === false){
    die("ERROR: Could not connect. "  . mysqli_connect_error());
}
$result=mysqli_query($conn,"SELECT * FROM `fee` where branch='$branch' ");
  $row = mysqli_fetch_array($result);
  $totalfee=$row['fees'];
if($image!=''){
    
    $tempname=$_FILES["image"]["tmp_name"];
    $folder="photos/$image";
    $folder1="../$folder";
    if(file_exists('../$old_image')){
        unlink('../$old_image');
    }
    
    move_uploaded_file($tempname,$folder1);
    
    
}else{
   
  $folder=$old_image;
  
}
$query="UPDATE student_details Set student_id='$student_id',password='$password',FirstName='$first_name', LastName='$last_name',fatherName='$father_name',motherName='$mother_name',
        schoolName='$school_name',tenthPercentage='$tenth',InterCollege='$inter',InterMarks='$interMarks',DOB='$dob',gender='$gender',branch='$branch',year_join='$year',yearOfStudying='$year2',EamcetRank='$eamcet',total_fee='$totalfee',fee_paid='$fee_paid',email_id='$email',address='$address', picsource='$folder' WHERE student_id='$student_id'";
//$connection = mysqli_connect("localhost", "root", "", "dgcs");
$result = mysqli_query($conn,$query);
if($result){
    echo " <script>alert('Record Updated')</script>"; 
    ?>
    <meta http-equiv="refresh" content="0 ; URL=http://localhost/semp%20project/login/admin/showDetails.php">
    <?php
 }else{
    echo "Failed to update";
}

}

?>