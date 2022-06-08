
<html>
    <head>
        <title>Reset Password</title>
        <link rel="stylesheet" href="../styles/styles.css">
        <script src="https://kit.fontawesome.com/3da4f03368.js" crossorigin="anonymous"></script>
        <style>
            body{
                text-align: center;
            }
        </style>
    </head>
    <body>

    <a href="studentLogin.html"  title="Go to previous page"style="float:left ; text-decoration:none; color : black;font-size:30px;"><i class="fas fa-arrow-circle-left"></i></a>
                    <?php
                     $con= mysqli_connect("localhost","root","","dgcs") or die("coudld connect to database");
                     $error = "";
                    if (isset($_GET["key"]) && isset($_GET["email"]) && isset($_GET["action"]) && ($_GET["action"] == "reset") && !isset($_POST["action"])) {
                        $key = $_GET["key"];
                        $email = $_GET["email"];
                        $curDate = date("Y-m-d H:i:s");
                        $query = mysqli_query($con, "SELECT * FROM `reset_password` WHERE `password`='" . $key . "' &&  `email_id`='" . $email . "';");
                        $row = mysqli_num_rows($query);
                        if ($row == "") {
                            $error .= '<h2>Invalid Link</h2>';
                        } else {
                            $row = mysqli_fetch_assoc($query);
                            $expDate = $row['expiryDate'];
                            if ($expDate >= $curDate) {
                                ?> 
                                <h2>Reset Password </h2>   
                                <form method="post" action="" name="update">

                                    <input type="hidden" name="action" value="update" />


                                    <div >
                                        <label><strong>Enter New Password:</strong></label>
                                        <input type="password"  name="pass1" value="update" />
                                    </div>

                                    <div >
                                        <label><strong>Re-Enter New Password:</strong></label>
                                        <input type="password"  name="pass2" value="update" />
                                    </div>
                                    <input type="hidden" name="email" value="<?php echo $email; ?>"/>
                                    <div >
                                        <input type="submit" id="reset" value="Reset Password"  />
                                    </div>

                                </form>
                                <?php
                            
                        }else{
                            $error .= "<h2>Link Expired</h2>>";
                        }
                    }
                        if ($error != "") {
                            echo " $error  ";
                        }
                    }


                    if (isset($_POST["email"]) && isset($_POST["action"]) && ($_POST["action"] == "update")) {
                        $error = "";
                        $pass1 = mysqli_real_escape_string($con, $_POST["pass1"]);
                        $pass2 = mysqli_real_escape_string($con, $_POST["pass2"]);
                        $email = $_POST["email"];
                        
                        if ($pass1 != $pass2) {
                            ?> <script>
                            alert("Password do not match, both password should be same.")
                           
                        </script>
                        <?php
                            
                        } else {

                           // $pass1 = md5($pass1);
                            $k=mysqli_query($con, "UPDATE `student_details` SET  `password`='$pass1' WHERE `email_id` =  '$email' ");
                            $k2=mysqli_query($con, "DELETE FROM `reset_password` WHERE `email_id` = '$email'");
                            if ($k && $k2){
                                ?> <script>
                            alert("Congratulations! Your password has been updated successfully.")
                           // window.location.href="./showMarks.php";
                        </script><?php
                                

                            }else{
                                echo 'not updated';
                            }

                            
                        }
                    }
                    ?>

                


    </body>
</html>