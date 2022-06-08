<?php
use PHPMailer\PHPMailer\PHPMailer;

?>
<html>
    <head>
        <title>Password Recovery using PHP and MySQL</title>
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

                    <h2 style="text-align: center;">Forgot Password<br/><br/></h2>   

                    <?php
                    $con= mysqli_connect("localhost","root","","dgcs") or die("coudld connect to database");
                    $error = "";
                    
                    if (isset($_POST["email"]) && (!empty($_POST["email"]))) {
                        $email = $_POST["email"];
                        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
                        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
                        if (!$email) {
                            $error .="Invalid email address";
                        } else {
                            $sel_query = "SELECT * FROM `student_details` WHERE email_id='" . $email . "'";
                            $results = mysqli_query($con, $sel_query);
                            $row = mysqli_num_rows($results);
                            if ($row == "") {
                                $error .= "User Not Found";
                            }
                        }
                        if ($error != "") {
                            echo $error;
                        } else {

                            $output = '';

                            $expFormat = mktime(date("H"), date("i"), date("s"), date("m"), date("d") + 1, date("Y"));
                            $expDate = date("Y-m-d H:i:s", $expFormat);
                            $key = md5(time());
                            $addKey = substr(md5(uniqid(rand(), 1)), 3, 10);
                            $key = $key . $addKey;
                            // Insert Temp Table
                            mysqli_query($con, "INSERT INTO `reset_password`  VALUES ('" . $email . "', '" . $key . "', '" . $expDate . "');");


                            $output='<p>Please click on the following link to reset your password.</p>';
                            //replace the site url
                            $output='<p><a href="http://localhost/semp%20project/login/student_login/forgot.php?key='.$key.'&email='.$email . '&action=reset" target="_blank">http://localhost/semp%20project/login/student_Login/forgot.php?key=' . $key . '&email=' . $email . '&action=reset</a></p>';
                            $body = $output;
                            $subject = "Password Recovery";

                            $email_to = $email;


                            //autoload the PHPMailer
                            require("../../vendor/autoload.php");
                            $mail = new PHPMailer();
                            $mail->IsSMTP();
                            $mail->Host = "smtp.gmail.com"; // Enter your host here
                            $mail->SMTPAuth = true;
                            $mail->Username = "dgcscollege@gmail.com"; // Enter your email here
                            $mail->Password = "dgcs$4dgcs"; //Enter your passwrod here
                            $mail->SMTPSecure='tls';
                            $mail->Port = 587;
                            $mail->IsHTML(true);
                            $mail->From = "dgcscollege@gmail.com";
                            $mail->FromName = "DGCS COLLEGE";

                            $mail->Subject = $subject;
                            $mail->Body = $body;
                            $mail->AddAddress($email_to);
                            if (!$mail->Send()) {
                                echo "Mailer Error: " . $mail->ErrorInfo;
                            } else {
                                echo "An email has been sent";
                            }
                        }
                    }
                    ?>
                    <form method="post" action="" name="reset">
                        

                        <div >
                           <label><strong>Enter Your Email Address:</strong></label>
                            <input type="email" name="email" placeholder="username@email.com"  required/>
                        </div>

                        <div >
                            <input type="submit" id="reset" value="Reset Password"  />
                        </div>
                    </form>

               
    </body>
</html>