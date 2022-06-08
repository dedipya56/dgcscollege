<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3da4f03368.js" crossorigin="anonymous"></script>	
    <link rel ="stylesheet" href="../styles/styles.css">
    <title>Document</title>
    <style>
       
        table{
            margin-left:auto;
            margin-right: auto;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        
        a{
            float:left ; 
            text-decoration:none;
            color : black;
            font-size:30px;
        }
        table,td,tr,th{
            border: 1px solid black;
            
        }
        
    </style>
</head>

<body>

<p id="clgname"> <strong>DGCS COLLEGE</strong></p>
<section>
<?php
session_start();
error_reporting(0);
$option=$_POST['option'];
$student= $_POST['studentId'];
$sub=$_POST['sub'];
$sem=$_POST['sem'];
$branch=$_POST['branch'];
$date=$_POST['date'];
if($sem==1){

    $semNo='sem1';

}elseif($sem=='2'){
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

if( $student){

    ?><a href="view1.php?value=1"  title="Go to previous page"><i class="fas fa-arrow-circle-left"></i></a><?php 
    echo "<strong id='clgname'>$student</strong>";
    $connect= mysqli_connect("localhost","root","","dgcs") or die("coudld connect to database");
    $query=mysqli_query($connect,"  SELECT DISTINCT * 
                                    FROM student_details
                                    WHERE student_id='$student'");
                                   //$row = mysqli_fetch_array($query);
    $numrows=mysqli_num_rows($query);
    if($numrows=0)
        {
            ?><script>
              window.location.href="studentLogin.html";
               alert("User Doesn't Exist");
              </script><?php
        }
    else
          {
              echo "<p>The table displays all the details of student having student id : <strong>".$student ." </strong></p>" ;
             // echo "<img src='".$row['picsource']."' height='100px' width='100px'/>";
            $all_property = array();  //declare an array for saving property

            //showing property
            echo '<table >
                    <tr class="data-heading">';  //initialize table tag
            while ($property = mysqli_fetch_field($query)) {
                echo '<th >' . $property->name .'   '. '</th>';  
                array_push($all_property, $property->name);  
            }
            echo '</tr>'; //end tr tag
            
            //showing all data
            while ($row = mysqli_fetch_array($query)) {
                echo "<tr>";
                foreach ($all_property as $item) {
                    echo '<td> ' . $row[$item] . '</td>'; //get items using property value
                }
                echo '</tr>';
            }
            echo "</table>";
          }
         // echo "<img src='".$row['picsource']."' height='100px' width='100px'/>";
    for($sem=1;$sem<=8;$sem++){
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
echo "<strong id='clgname'>Semister number : $sem</strong><br/>";
    $connect= mysqli_connect("localhost","root","","marks") or die("coudld connect to database");
    $query=mysqli_query($connect,"  SELECT DISTINCT * 
                                    FROM $semNo
                                    WHERE student_id='$student'");
    $numrows=mysqli_num_rows($query);
    
    if($numrows>0)
          {
              echo "<p>The table displays marks of the student  </strong></p>" ;
            $all_property = array();  //declare an array for saving property

            //showing property
            echo '<table >
                    <tr class="data-heading">';  //initialize table tag
            while ($property = mysqli_fetch_field($query)) {
                echo '<th >' . $property->name .'   '. '</th>';  
                array_push($all_property, $property->name);  
            }
            echo '</tr>'; //end tr tag
            
            //showing all data
            while ($row = mysqli_fetch_array($query)) {
                echo "<tr>";
                foreach ($all_property as $item) {
                    echo '<td> ' . $row[$item] . '</td>'; //get items using property value
                }
                echo '</tr>';
            }
            echo "</table>";
          }
          else
        {
            echo "Did not attempt<br/><br/>";
        }
          $connect= mysqli_connect("localhost","root","","attendance") or die("coudld connect to database");
    $query=mysqli_query($connect,"  SELECT DISTINCT * 
                                    FROM $semNo
                                    WHERE student_id='$student'");
    $numrows=mysqli_num_rows($query);
    
        if($numrows>0)
          {
              echo "<p>The table displays  the attendance  </strong></p>" ;
              $conn=mysqli_connect("localhost","root","","attendance");
              $query1="SELECT COUNT( *) as total_dates FROM date";
              $noOfDates=mysqli_query($conn,$query1);
              $rows=mysqli_fetch_array($noOfDates);
              $dates=$rows['total_dates'];
              
              $query2="SELECT student_id,SUM(total) as percent FROM $semNo  WHERE student_id='$student' ";
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
              


            $all_property = array();  //declare an array for saving property

            //showing property
            echo '<table >
                    <tr class="data-heading">';  //initialize table tag
            while ($property = mysqli_fetch_field($query)) {
                echo '<th >' . $property->name .'   '. '</th>';  
                array_push($all_property, $property->name);  
            }
            echo '</tr>'; //end tr tag
            
            //showing all data
            while ($row = mysqli_fetch_array($query)) {
                echo "<tr>";
                foreach ($all_property as $item) {
                    echo '<td> ' . $row[$item] . '</td>'; //get items using property value
                }
                echo '</tr>';
            }
            echo "</table>";
          }
          else
        {
            echo " ";
        }
        }

    }


elseif($sub && $sem && $branch && $semNo) {
       
    if($date){
        ?><a href="view1.php?value=2"  title="Go to previous page"><i class="fas fa-arrow-circle-left"></i></a><?php 
  
        $connect= mysqli_connect("localhost","root","","attendance") or die("coudld connect to database");
        $query=mysqli_query ($connect,"  SELECT *
                                    FROM date
                                    WHERE `date`='$date' ");
                $numrows=mysqli_num_rows($query);
                if($numrows>0){
                    $date2=$date;
                }else{
                        ?><script>
               window.location.href="view1.php";
               alert("Enter a Working day date");
              </script><?php
                    }
            
            
            } 
        
    else{
        ?><a href="view1.php?value=3"  title="Go to previous page"><i class="fas fa-arrow-circle-left"></i></a><?php 
  
        $connect= mysqli_connect("localhost","root","","marks") or die("coudld connect to database");
    
    }
    
   // $connect1= mysqli_connect("localhost","root","","dgcs") or die("coudld connect to database");
    $query1="SELECT * FROM subjects WHERE branch='$branch'";
        $result1=mysqli_query($connect,$query1);
        while($row = mysqli_fetch_array($result1)){
            
            
            if($semNo=='sem1'){
            $one=$row['101'];
            $two=$row['102'];
            $three=$row['103'];
            $four=$row['104'];
            $five=$row['105'];
            $six=$row['106'];
            $sub1='101';
           $sub2='102';
           $sub3='103';
           $sub4='104';
           $sub5='105';
           $sub6='106';
            }
            elseif($semNo=='sem2'){
            $one=$row['201'];
            $two=$row['202'];
            $three=$row['203'];
            $four=$row['204'];
            $five=$row['205'];
            $six=$row['206'];
            $sub1='201';
           $sub2='202';
           $sub3='203';
           $sub4='204';
           $sub5='205';
           $sub6='206';
            }
            elseif($semNo=='sem3'){
            $one=$row['301'];
            $two=$row['302'];
            $three=$row['303'];
            $four=$row['304'];
            $five=$row['305'];
            $six=$row['306'];
            $sub1='301';
           $sub2='302';
           $sub3='303';
           $sub4='304';
           $sub5='305';
           $sub6='306';          
            }
            elseif($semNo=='sem4'){
            $one=$row['401'];
            $two=$row['402'];
            $three=$row['403'];
            $four=$row['404'];
            $five=$row['405'];
            $six=$row['406'];
            $sub1='401';
           $sub2='402';
           $sub3='403';
           $sub4='404';
           $sub5='405';
           $sub6='406';
            }
            elseif($semNo=='sem5'){
            $one=$row['501'];
            $two=$row['502'];
            $three=$row['503'];
            $four=$row['504'];
            $five=$row['505'];
            $six=$row['506'];
            $sub1='501';
           $sub2='502';
           $sub3='503';
           $sub4='504';
           $sub5='505';
           $sub6='506';
            }
            elseif($semNo=='sem6'){
            $one=$row['601'];
            $two=$row['602'];
            $three=$row['603'];
            $four=$row['604'];
            $five=$row['605'];
            $six=$row['606'];
            $sub1='601';
           $sub2='602';
           $sub3='603';
           $sub4='604';
           $sub5='605';
           $sub6='606';
            }
            elseif($semNo=='sem7'){
            $one=$row['701'];
            $two=$row['702'];
            $three=$row['703'];
            $four=$row['704'];
            $five=$row['705'];
            $six=$row['706'];
            $sub1='701';
           $sub2='702';
           $sub3='703';
           $sub4='704';
           $sub5='705';
           $sub6='706';
            }
            else{
            $one=$row['801'];
            $two=$row['802'];
            $three=$row['803'];
            $four=$row['804'];
            $five=$row['805'];
            $six=$row['806'];
            $sub1='801';
           $sub2='802';
           $sub3='803';
           $sub4='804';
           $sub5='805';
           $sub6='806';
            }
        }
            if($sub==1){
                $sub=$sub1;
                $val=$one;
            }
            elseif($sub==2){
                $sub=$sub2;
                $val=$two;
            }
            elseif($sub==3){
                $sub=$sub3;
                $val=$three;
            }
            elseif($sub==4){
                $sub=$sub4;
                $val=$four;
            }
            elseif($sub==5){
                $sub=$sub5;
                $val=$five;
            }
            else{
                $sub=$sub6;
                $val=$six;
            }

 if($date){
                $query=mysqli_query ($connect,"  SELECT student_id
                                    FROM $semNo
                                    WHERE `$sub`='1'&&`date`='$date' ");
                $numrows=mysqli_num_rows($query);
                if($numrows>0){
                    echo "<p>The table displays  ids of the students who is PRESENT for the subject -  <strong>".$val ." </strong></p>" ;
                    
                        echo '<table >
                                <tr >';  //initialize table tag
                        
                            echo '<th >Student Id</th>'; 
                            //echo '<th >'.$val.'</th>';  
                            
                        echo '</tr>'; //end tr tag
                        
                        //showing all data
                        while ($row = mysqli_fetch_array($query)) {
                            echo "<tr>";
                                echo '<td> ' . $row['student_id'] . '</td>';
                                //echo '<td> ' . $row[$sub] . '</td>'; //get items using property value
                            
                            echo '</tr>';
                        
                        }
                        echo "</table>";
                    
                    }
                else{
                    echo "NO ONE IS PRESENT for $val";
            
                }
            }
else{
    $query=mysqli_query ($connect,"  SELECT student_id,`$sub`
                                    FROM $semNo
                                    WHERE `$sub`>=10 ");
    $numrows=mysqli_num_rows($query);
    if($numrows>0){
        echo "<p>The table displays  ids of the students who  PASSED the subject -  <strong>".$val ." </strong></p>" ;
        
            echo '<table >
                    <tr >';  //initialize table tag
            
                echo '<th >Student Id</th>'; 
                echo '<th >'.$val.'</th>';  
                
            echo '</tr>'; //end tr tag
            
            //showing all data
            while ($row = mysqli_fetch_array($query)) {
                echo "<tr>";
                    echo '<td> ' . $row['student_id'] . '</td>';
                    echo '<td> ' . $row[$sub] . '</td>'; //get items using property value
                
                echo '</tr>';
            }
            echo "</table>";
        
        }
    else{
        echo "NO ONE PASSED ";

    }
   }
}


else{
    ?><script>
               window.location.href="view.html";
               alert("Enter Correct details");
              </script><?php

}

?>

</section>

</body>
</html>
