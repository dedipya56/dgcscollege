
<?php
  $conn = mysqli_connect("localhost", "root", "", "dgcs");
          
  // Check connection
  if($conn === false){
      die("ERROR: Could not connect. "  . mysqli_connect_error());
  }
    
  // Taking all  values from the form data(input)
  $first_name =  $_REQUEST['first_name'];
  $last_name = $_REQUEST['last_name'];
  //$image=addslashes(file_get_contents($_FILES["image"]["temp_name"]));
  $filename=$_FILES["image"]["name"];
  $tempname=$_FILES["image"]["tmp_name"];
  $folder="photos/".$filename;
  move_uploaded_file($tempname,$folder);
  $gender =  $_REQUEST['gender'];
  $address = $_REQUEST['address'];
  $email = $_REQUEST['email'];
  $password = $_REQUEST['password'];
  $student_id = $_REQUEST['StudentId'];
  $father_name = $_REQUEST['father_name'];
  $mother_name= $_REQUEST['mother_name'];
  $dob= $_REQUEST['dob'];
  $branch=$_REQUEST['branch'];
  $tenth= $_REQUEST['tenth'];
  $inter= $_REQUEST['inter'];
  $year= $_REQUEST['year'];
  $interMarks= $_REQUEST['interMarks'];
  //$dob= $_REQUEST['dob'];
  $school_name = $_REQUEST['school_name'];
  $eamcet= $_REQUEST['eamcet'];
  //$totalfee= $_REQUEST['totalfee'];
  $fee_paid= $_REQUEST['fee_paid'];

  $result=mysqli_query($conn,"SELECT * FROM fee where branch=$branch ");
  $row = mysqli_fetch_array($result);
  $totalfee=$row['fees'];
  
    $year1=date("Y");
  $year2=$year1-$year;
  $sql = "INSERT INTO student_details VALUES ('$student_id','$password','$first_name','$last_name','$father_name','$mother_name',
  '$school_name','$tenth','$inter','$interMarks','$dob','$gender','$branch','$year','$year2','$eamcet','$totalfee','$fee_paid','$email','$address','$folder')";
    
  if(mysqli_query($conn, $sql)){
      ?><script>
          alert("SUCCESSFULLY REGISTERED THE STUDENT INTO DGCS COLLEGE.")
          window.location.href="./showDetails.php";
      </script>
      <?php

 } else{
      
      echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
   }

    
  // Close connection
  mysqli_close($conn);


?>