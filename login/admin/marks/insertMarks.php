<script src="https://kit.fontawesome.com/3da4f03368.js" crossorigin="anonymous"></script>
<a href="../admin_menu.html"  title="Go to previous page"style="float:left ; text-decoration:none; color : black;font-size:30px;"><i class="fas fa-arrow-circle-left"></i></a>

<?php
session_start();

$conn1 = mysqli_connect("localhost", "root", "", "dgcs");
if($conn1 === false){
    die("ERROR: Could not connect. "  . mysqli_connect_error());
}
$student_id = $_REQUEST['StudentId'];
setcookie("id","$student_id",time()+3600,"./showMarks.php","",0);

$query= mysqli_query($conn1,"SELECT branch FROM student_details  WHERE student_id ='$student_id' ");
$row = mysqli_fetch_array($query);
$branch=$row['branch'];

$conn = mysqli_connect("localhost", "root", "", "marks");
if($conn === false){
    die("ERROR: Could not connect. "  . mysqli_connect_error());
}
    
      $sem=$_REQUEST['sem'];
      setcookie("sem","$sem",time()+3600,"./showMarks.php","",0);
        $one = $_REQUEST['one'];
        $two = $_REQUEST['two'];
        $three = $_REQUEST['three'];
        $four = $_REQUEST['four'];
        $five = $_REQUEST['five'];
        $six = $_REQUEST['six'];
        $total=$one+$two+$three+$four+$five+$six;
        

        if($sem==1){

            $semNo='sem1';

        }elseif($sem==2){
            $semNo='sem2';
        }
        elseif($sem==3){
            $semNo='sem3';
        }
        elseif($sem==4){
            $semNo='sem4';
        }
        elseif($sem==5){
            $semNo='sem5';
        }
        elseif($sem==6){
             $semNo='sem6';
        }
        elseif($sem==7){
            $semNo='sem7';
        }
        else{
            $semNo='sem8';
        }
        $_SESSION['semNo'] = $semNo;
        
        $sql = " INSERT INTO $semNo VALUES ('$student_id','$branch','$one','$two','$three','$four','$five','$six','$total') ";
        if(mysqli_query($conn, $sql)){
            ?> <script>
                alert("SUCCESSFULLY REGISTERED THE STUDENT INTO DGCS COLLEGE.")
                window.location.href='./showMarks.php';
            </script>
            <?php

      
       } else{
            
            echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
         }
    ?>
    

