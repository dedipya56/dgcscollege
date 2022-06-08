<script src="https://kit.fontawesome.com/3da4f03368.js" crossorigin="anonymous"></script>
<a href="../admin_menu.html"  title="Go to previous page"style="float:left ; text-decoration:none; color : black;font-size:30px;"><i class="fas fa-arrow-circle-left"></i></a>

<?php
session_start();


$conn = mysqli_connect("localhost", "root", "", "dgcs");
if($conn === false){
    die("ERROR: Could not connect. "  . mysqli_connect_error());
}
$student_id = $_REQUEST['StudentId'];
setcookie("id3","$student_id",time()+3600,"./showAttendance.php","",0);
$query= mysqli_query($conn,"SELECT branch FROM student_details  WHERE student_id ='$student_id' ");
$row = mysqli_fetch_array($query);
$branch=$row['branch'];



        
        $date=$_REQUEST['date'];
        $sem=$_REQUEST['sem'];
        setcookie("semister","$sem",time()+3600,"./showAttendance.php","",0);
          $one = $_REQUEST['one'];
          $two = $_REQUEST['two'];
          $three = $_REQUEST['three'];
          $four = $_REQUEST['four'];
          $five = $_REQUEST['five'];
          $six = $_REQUEST['six'];
          $present=$one+$two+$three+$four+$five+$six;
          
  
          if($sem==1){
  
              $tableNo='sem1';
  
          }elseif($sem==2){
              $tableNo='sem2';
          }
          elseif($sem==3){
              $tableNo='sem3';
          }
          elseif($sem==4){
              $tableNo='sem4';
          }
          elseif($sem==5){
              $tableNo='sem5';
          }
          elseif($sem==6){
               $tableNo='sem6';
          }
          elseif($sem==7){
              $tableNo='sem7';
          }
          else{
              $tableNo='sem8';
          }
          $_SESSION['tableNo'] = $tableNo;
          $conn1 = mysqli_connect("localhost", "root", "", "attendance");
          
// Check connection
if($conn1=== false){
    die("ERROR: Could not connect. "  . mysqli_connect_error());
}
          $sql = " INSERT INTO $tableNo VALUES ('$branch','$date','$student_id','$one','$two','$three','$four','$five','$six','$present') ";
        
        if(mysqli_query($conn1, $sql)){
            ?> <script>
                alert("SUCCESSFULLY REGISTERED THE STUDENT ATTENDANCE INTO DGCS COLLEGE.")
                window.location.href="./showAttendance.php";
            </script>
            <?php
      
       } else{
            
            echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
         }
       
        mysqli_close($conn);
   
    ?>