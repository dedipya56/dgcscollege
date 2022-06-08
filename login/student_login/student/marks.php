<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="../../styles/styles.css">
    <script src="https://kit.fontawesome.com/3da4f03368.js" crossorigin="anonymous"></script>	
    <title>Document</title>
</head>
<body>

<a href="./student_menu.php"  title="Go to previous page"style="float:left ; text-decoration:none; color : black;font-size:30px;"><i class="fas fa-arrow-circle-left"></i></a>

<?php

require "../st.php";
if (isset($_SESSION['userid'])){
        $uid=$_SESSION['userid'];
        $sem=$_POST['sem'];
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
        $conn=mysqli_connect("localhost","root","","dgcs");
        $query="SELECT branch FROM student_details WHERE student_id=$uid";
        $result=mysqli_query($conn,$query);
        $row = mysqli_fetch_array($result);
        $branch=$row['branch'];

        $conn1=mysqli_connect("localhost","root","","marks");
        $query1="SELECT * FROM subjects WHERE branch='$branch'";
        $result1=mysqli_query($conn1,$query1);
        while($row = mysqli_fetch_array($result1)){
            
            
            if($semNo=='sem1'){
            $one1=$row['101'];
            $two1=$row['102'];
            $three1=$row['103'];
            $four1=$row['104'];
            $five1=$row['105'];
            $six1=$row['106'];
            }
            elseif($semNo=='sem2'){
            $one1=$row['201'];
            $two1=$row['202'];
            $three1=$row['203'];
            $four1=$row['204'];
            $five1=$row['205'];
            $six1=$row['206'];
            }
            elseif($semNo=='sem3'){
            $one1=$row['301'];
            $two1=$row['302'];
            $three1=$row['303'];
            $four1=$row['304'];
            $five1=$row['305'];
            $six1=$row['306'];
            }
            elseif($semNo=='sem4'){
            $one1=$row['401'];
            $two1=$row['402'];
            $three1=$row['403'];
            $four1=$row['404'];
            $five1=$row['405'];
            $six1=$row['406'];
            }
            elseif($semNo=='sem5'){
            $one1=$row['501'];
            $two1=$row['502'];
            $three1=$row['503'];
            $four1=$row['504'];
            $five1=$row['505'];
            $six1=$row['506'];
            }
            elseif($semNo=='sem6'){
            $one1=$row['601'];
            $two1=$row['602'];
            $three1=$row['603'];
            $four1=$row['604'];
            $five1=$row['605'];
            $six1=$row['606'];
            }
            elseif($semNo=='sem7'){
            $one1=$row['701'];
            $two1=$row['702'];
            $three1=$row['703'];
            $four1=$row['704'];
            $five1=$row['705'];
            $six1=$row['706'];
            }
            else{
            $one1=$row['801'];
            $two1=$row['802'];
            $three1=$row['803'];
            $four1=$row['804'];
            $five1=$row['805'];
            $six1=$row['806'];
            }
            
     }
        
     
        $query3="SELECT * FROM `$semNo` where student_id='$uid'";
        $result=mysqli_query($conn1,$query3);
        if(mysqli_num_rows($result)>0){
            while ($row = mysqli_fetch_array($result)) {
            
            
            
                if($semNo=='sem1'){
        
                $one=$row['101'];
                $two=$row['102'];
                $three=$row['103'];
                $four=$row['104'];
                $five=$row['105'];
                $six=$row['106'];

                }
                elseif($semNo=='sem2'){
                $one=$row['201'];
                $two=$row['202'];
                $three=$row['203'];
                $four=$row['204'];
                $five=$row['205'];
                $six=$row['206'];
                }
                elseif($semNo=='sem3'){
                $one=$row['301'];
                $two=$row['302'];
                $three=$row['303'];
                $four=$row['304'];
                $five=$row['305'];
                $six=$row['306'];
                }
                elseif($semNo=='sem4'){
                $one=$row['401'];
                $two=$row['402'];
                $three=$row['403'];
                $four=$row['404'];
                $five=$row['405'];
                $six=$row['406'];
                }
                elseif($semNo=='sem5'){
                $one=$row['501'];
                $two=$row['502'];
                $three=$row['503'];
                $four=$row['504'];
                $five=$row['505'];
                $six=$row['506'];
                }
                elseif($semNo=='sem6'){
                $one=$row['601'];
                $two=$row['602'];
                $three=$row['603'];
                $four=$row['604'];
                $five=$row['605'];
                $six=$row['606'];
                }
                elseif($semNo=='sem7'){
                $one=$row['701'];
                $two=$row['702'];
                $three=$row['703'];
                $four=$row['704'];
                $five=$row['705'];
                $six=$row['706'];
                }
                else{
                $one=$row['801'];
                $two=$row['802'];
                $three=$row['803'];
                $four=$row['804'];
                $five=$row['805'];
                $six=$row['806'];
                }
                $total=$row['total'];
            }    
      echo "<strong style=color:black; >RESULTS </strong><br/><br/><br/>";
      echo "Semister Number : $sem<br><br/>";
      echo  "$one1 : $one <br/>";
      echo  " $two1 : $two<br/>" ;
      echo  " $three1 : $three<br/>" ;
      echo  " $four1 : $four<br/> " ;
      echo  " $five1 : $five <br/>" ;
      echo  " $six1 : $six <br/>" ;
      echo "Total : ".$total."/300 <br/>";
      $avg=$total/6;
      echo "Average: ".$avg."/50<br/><br/>";
      if($one>=10 && $two>=10 && $three>=10 && $four>=10 && $five>=10 && $six >=10){

          switch($total){
              
              case $total<100 :
                 echo "<strong style=color:green ; >Grade : E <br/> <br/>PASSED !!  </strong>";
                 break;
              case $total<150:
                 echo "<strong style=color:green ; >Grade : D <br/> PASSED !!  </strong>";
                 break;
              case $total<200:
                 echo "<strong style=color:green ; >Grade : C <br/> PASSED !!  </strong>";
                 break;
              case $total<250:
                 echo "<strong style=color:green ; >Grade : B <br/> PASSED !!  </strong>";
                 break;
              case $total<300:
                 echo "<strong style=color:green ; >Grade : A <br/> PASSED !!  </strong>";
          }

        }elseif($one>0 && $two>0 && $three>0 && $four>0 && $five>0 && $six >0) {
          echo "<strong style=color:red; >Grade : F <br/> <br/>FAILED !! TRY TO PASS ALL SUBJECTS. </strong> ";
        }
        else{
          echo "<strong style=color:red; >Grade : F <br/><br/> FAILED !! TRY TO ATTEMPT ALL SUBJECTS. </strong> ";
        }
     }

        else{
            ?><script>
                alert("Please check the semister number which exams you have written.");
            </script>
            <?php
        }
        
        
    }else{
     echo "No User Id. ERROR!!";
 }


?>
</body>
</html>