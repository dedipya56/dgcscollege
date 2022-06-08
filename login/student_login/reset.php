<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="../styles/styles.css">
    <script src="https://kit.fontawesome.com/3da4f03368.js" crossorigin="anonymous"></script>
    <title>Student Login</title>
</head>
<body style="background-image: url('../college1.jpg');background-size: cover; background-repeat: no-repeat;">
<a href="studentLogin.html"  title="Go to previous page"style="float:left ; text-decoration:none; color : black;font-size:30px;"><i class="fas fa-arrow-circle-left"></i></a>    
<p id="clgname"> <bold>DGCS COLLEGE</bold></p><br/><br>
    <form method="post" action="" name="update">
    <section><strong>RESET PASSWORD</strong></section><hr/>
        <input type="hidden" name="action"  value="update"/>
        <div >
            <label><strong>Enter Old Password:</strong></label>
            <input type="password"  name="pass"  required/>
        </div>


        <div >
            <label><strong>Enter New Password:</strong></label>
            <input type="password"  name="pass1"  required/>
        </div>

        <div >
            <label><strong>Re-Enter New Password:</strong></label>
            <input type="password"  name="pass2" required />
        </div>
        
        <div >
            <input type="submit" id="reset" value="Reset Password"  />
        </div>

    </form>
    <a href="../index.html"><button id="back" title="click me to go to login page">Back</button></a> 
    <?php
    if(isset($_POST['pass'])&& isset($_POST['pass1'])&&isset($_POST['pass2'])){
    $con= mysqli_connect("localhost","root","","dgcs") or die("coudld connect to database");
    
    
        $error = "";
        $pass1 = mysqli_real_escape_string($con, $_POST["pass1"]);
        $pass2 = mysqli_real_escape_string($con, $_POST["pass2"]);
        $pass = $_POST["pass"];
       // $pass1 = $_POST["pass1"];
       // $pass2 = $GET["pass2"];
       
        $query= mysqli_query($con,"SELECT * FROM student_details  WHERE password='$pass' ");
	    $numrows=mysqli_num_rows($query);
     if($numrows!=0){
        if ($pass1 != $pass2) {

            ?> <script>
                            alert("Password do not match, both password should be same.")
                           
                        </script>
                        <?php
        } else {

           
            $k=mysqli_query($con, "UPDATE `student_details` SET  `password`='$pass1' WHERE `password` =  '$pass' ");

            //mysqli_query($con, "DELETE FROM `reset_password` WHERE `email_id` = '$email'");
            if($k){
                ?> <script>
                            alert("Congratulations! Your password has been updated successfully.")
                           
                        </script><?php

                
            }else{
                echo ' not updated';
            }

            
        } 

     }else{
         ?>
        <script>
        alert("wrong password.")
       
    </script><?php
         
     }
    }else{
        echo ' ';
    }
    
    ?>

</body>
</html>