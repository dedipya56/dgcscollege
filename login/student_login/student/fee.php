<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3da4f03368.js" crossorigin="anonymous"></script>
    <title>Fee Details</title>
</head>
<body>
<a href="./student_menu.php"  title="Go to previous page"style="float:left ; text-decoration:none; color : black;font-size:30px;"><i class="fas fa-arrow-circle-left"></i></a>

    <?php
    require "../st.php";
    if (isset($_SESSION['userid'])){
        $uid=$_SESSION['userid'];}
        else{
            $uid=$_GET['uid'];
        }
        echo "<strong>Fee details of $uid</strong><br/><br/>";
        $connect= mysqli_connect("localhost","root","","dgcs") or die("coudld connect to database");
        $query = "SELECT * FROM student_details WHERE student_id ='$uid' ";
        $query1 = "SELECT * FROM year WHERE student_id ='$uid' ";
        $result=mysqli_query($connect,$query1);
        $row=mysqli_fetch_assoc($result);
        $year2=$row['year'];
        //echo $year2;
        //$due=$row['due'];
        if ($is_query_run = mysqli_query($connect,$query))
        {
            
            while ($query_executed = mysqli_fetch_assoc ($is_query_run))

            { $fee=$query_executed['total_fee'];
                $paid=$query_executed['fee_paid'];
                
                $due=  $fee-$paid;
                //echo $due;
                $one='1';
                $year='1';
                $year1=$year2+$one;
                echo " Total Fee : $fee<br/><br/>";
                while($year<$year2){
                    
                        echo "Year:$year  <br/>";
                        $year= $year + $one;
                        echo "Fee Paid<br/><br/>";

                    
                }
                        echo "Year:$year<br/>";
                        echo "Due : $due <br/>";
                        echo "<a href='./pay/pay1.php?id=$uid&amount=$due&year=$year&email=$query_executed[email_id]'><input type='submit' value='Pay' style='background-color:green; '></a> ";
              
                    
                    
                

                 
            }

        }
    
    ?>
</body>
</html>