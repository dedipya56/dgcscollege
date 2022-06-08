<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3da4f03368.js" crossorigin="anonymous"></script>	
    <link rel ="stylesheet" href="../../styles/styles.css">
    <style>
         table,td,tr,th{
            border: 1px solid black;
        }
        table{

            margin-top: 60px;
        }
    </style>
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

        $conn1=mysqli_connect("localhost","root","","attendance");
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
     
     

     $query2="SELECT * FROM `$semNo` where student_id='$uid'";
     $result2=mysqli_query($conn1,$query2);
        if(mysqli_num_rows($result2)>0){

            $conn=mysqli_connect("localhost","root","","attendance");
     $query1="SELECT COUNT( *) as total_dates FROM date";
     $noOfDates=mysqli_query($conn,$query1);
     $rows=mysqli_fetch_array($noOfDates);
     $dates=$rows['total_dates'];
     
     $query2="SELECT student_id,SUM(total) as percent FROM $semNo  WHERE student_id='$uid' ";
     $total_present=mysqli_query($conn,$query2);
     echo "<table id='tab'>
         <tr>
         <th>Student Id</th>
         <th>Attendance Percentage</th>
         </tr>";
     while($row1=mysqli_fetch_array($total_present)){
         $percent=$row1['percent'];
         $percent1=$percent/($dates*6) *100;
         $student_id=$row1['student_id'];
         echo "
     
         <tr>
         <td>$student_id</td>
         <td>$percent1</td></tr>
         ";
     }
            
            echo "<section>
            <h1>Semister Number $sem</h1>
           <table >
                  <tr> 
                      <th>Date</th>
                      <th>$one1</th>
                      <th>$two1</th>
                      <th>$three1</th>
                      <th>$four1</th>
                      <th>$five1</th>
                      <th>$six1</th>
                      <th>Per Day</th>
                  </tr>";
                  while ($row = mysqli_fetch_array($result2)) {
            
            
            
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
                    $date=$row['date'];
                    echo "<tr>
   
                    
                    <td>$date</td>
                    
                    <td>$one</td>
                    <td>$two</td>
                    <td>$three</td>
                    <td>$four</td>
                    <td>$five</td>
                    <td>$six</td>
                    <td>".$total."</td>
                 </tr>";
}
        echo "</table>";}
                    

      else{
            echo "<br/><br/><br/> Please check the semister number which exams you have written.";
        }
        
        
}else{
     echo "No User Id. ERROR!!";
 }


?>
</body>
</html>