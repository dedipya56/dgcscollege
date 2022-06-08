<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body style="background-color:bisque;text-align:center; color:black; font-size:larger">
	
<?php
session_start();
error_reporting(E_ALL ^ E_WARNING);
$uid = $_POST['uname'];
$password =$_POST['psw'];

if($uid && $password)
   { $connect= mysqli_connect("localhost","root","","dgcs") or die("coudld connect to database");
	$query= mysqli_query($connect,"SELECT * FROM student_details  WHERE student_id ='$uid' ");
	$numrows=mysqli_num_rows($query);
    if($numrows!=0)
	{
	while($row=mysqli_fetch_assoc($query))
		{
			$dbuid= $row['student_id'];
			$dbpassword=$row['password'];
		}
	if($uid==$dbuid && $password==$dbpassword)
		{
			?><script>
              window.location.href="./student/student_menu.php";
            </script>
			
			<?php
				$_SESSION['userid']=$uid;
			
		}
	else if($uid==$dbuid && $password!=$dbpassword)
	 {
		 ?><script>
             window.location.href="studentLogin.html";
             alert("You Entered InCorrect Password ");
             document.password.value.focus();
            </script><?php
	 }
    }else 
      {
        ?><script>
           window.location.href="studentLogin.html";
           alert("User Doesn't Exist");
          </script><?php
	
	  }
	}else{
	echo "";
}

?>

</body>
</html>
