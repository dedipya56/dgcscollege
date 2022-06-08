
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="../../styles/styles.css">
    <title>Attendance Details</title>
    <script src="https://kit.fontawesome.com/3da4f03368.js" crossorigin="anonymous"></script>
    <style>
        table,td,tr,th{
            border: 1px solid black;
        }
        table{
            margin-bottom: 5px;
            margin-left: auto;
            margin-right: auto;
        }
        #para{margin-top: 5%;}
        a{
          margin:5px;  
        }
        #tab{
           
         margin:0;
        }
        
    </style>
</head>
<body style="text-align: center;">
<a href="../admin_menu.html"  title="Go to previous page"style="float:left ; text-decoration:none; color : black;font-size:30px;"><i class="fas fa-arrow-circle-left"></i></a>
<p id="clgname"> <bold>DGCS COLLEGE</bold></p>

<p id="para">Table showing the ATTENDANCE of all students in the college
     <form action="" method="GET"  style="float: left ;width:22%; margin:0 3% 1% 75%; border:none ; background-color:bisque"  > 
        <input type="text" name="search_value" value="<?php if(isset($_GET['search_value'])) {echo $_GET['search_value'];} ?>" placeholder="Enter value to search" style="margin-right:0;"> 
        <input type="submit"  value="Search" style="margin-left: -2px; background-color:blue; color:white; padding:2px"></input>
    </form>

</p>

<?php
session_start();
 
if(isset($_SESSION['tableNo'])){
   $sem=$_COOKIE["semister"];
   $semNo=$_SESSION['tableNo'];
}elseif(isset($_COOKIE['sem2'])){

   $sem=$_COOKIE["sem2"];
   $semNo=$_COOKIE["semNo2"];

}else{
   echo "no semister number";
}

    
    if(isset($_COOKIE['id3'])){
       $student_id=$_COOKIE['id3'];
       

       $conn=mysqli_connect("localhost","root","","attendance");
       $query1="SELECT COUNT( *) as total_dates FROM date";
       $noOfDates=mysqli_query($conn,$query1);
       $rows=mysqli_fetch_array($noOfDates);
       $dates=$rows['total_dates'];
       
       $query2="SELECT student_id,SUM(total) as percent FROM $semNo GROUP BY student_id";
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
       


       $conn1=mysqli_connect("localhost","root","","dgcs");
        $query="SELECT * FROM student_details WHERE student_id=$student_id";
        $result=mysqli_query($conn1,$query);
        $row = mysqli_fetch_array($result);
        $branch=$row['branch'];

       //$conn1=mysqli_connect("localhost","root","","attendance");
       $query1="SELECT * FROM subjects WHERE branch='$branch'";
       $result1=mysqli_query($conn,$query1);
       while($row = mysqli_fetch_array($result1)){
           
           
           if($semNo=='sem1'){
           $one1=$row['101'];
           $two1=$row['102'];
           $three1=$row['103'];
           $four1=$row['104'];
           $five1=$row['105'];
           $six1=$row['106'];
           $sub1='101';
           $sub2='102';
           $sub3='103';
           $sub4='104';
           $sub5='105';
           $sub6='106';
           
           }
           elseif($semNo=='sem2'){
           $one1=$row['201'];
           $two1=$row['202'];
           $three1=$row['203'];
           $four1=$row['204'];
           $five1=$row['205'];
           $six1=$row['206'];
           $sub1='201';
           $sub2='202';
           $sub3='203';
           $sub4='204';
           $sub5='205';
           $sub6='206';
           }
           elseif($semNo=='sem3'){
           $one1=$row['301'];
           $two1=$row['302'];
           $three1=$row['303'];
           $four1=$row['304'];
           $five1=$row['305'];
           $six1=$row['306'];
           $sub1='301';
           $sub2='302';
           $sub3='303';
           $sub4='304';
           $sub5='305';
           $sub6='306';
           }
           elseif($semNo=='sem4'){
           $one1=$row['401'];
           $two1=$row['402'];
           $three1=$row['403'];
           $four1=$row['404'];
           $five1=$row['405'];
           $six1=$row['406'];
           $sub1='401';
           $sub2='402';
           $sub3='403';
           $sub4='404';
           $sub5='405';
           $sub6='406';
           }
           elseif($semNo=='sem5'){
           $one1=$row['501'];
           $two1=$row['502'];
           $three1=$row['503'];
           $four1=$row['504'];
           $five1=$row['505'];
           $six1=$row['506'];
           $sub1='501';
           $sub2='502';
           $sub3='503';
           $sub4='504';
           $sub5='505';
           $sub6='506';
           }
           elseif($semNo=='sem6'){
           $one1=$row['601'];
           $two1=$row['602'];
           $three1=$row['603'];
           $four1=$row['604'];
           $five1=$row['605'];
           $six1=$row['606'];
           $sub1='601';
           $sub2='602';
           $sub3='603';
           $sub4='604';
           $sub5='605';
           $sub6='606';
           }
           elseif($semNo=='sem7'){
           $one1=$row['701'];
           $two1=$row['702'];
           $three1=$row['703'];
           $four1=$row['704'];
           $five1=$row['705'];
           $six1=$row['706'];
           $sub1='701';
           $sub2='702';
           $sub3='703';
           $sub4='704';
           $sub5='705';
           $sub6='706';
           }
           else{
           $one1=$row['801'];
           $two1=$row['802'];
           $three1=$row['803'];
           $four1=$row['804'];
           $five1=$row['805'];
           $six1=$row['806'];
           $sub1='801';
           $sub2='802';
           $sub3='803';
           $sub4='804';
           $sub5='805';
           $sub6='806';
           }
           
    }

if(isset($_GET['order'])){
   $order=$_GET['order'];
}else{
   $order='student_id';
}
if(isset($_GET['sort'])){
   $sort=$_GET['sort'];
}else{
   $sort='ASC';
}
if(isset($_GET['search_value'])){
   $search_value=$_GET['search_value'];
   $query2="SELECT branch,date,student_id,`$sub1` as $one1,`$sub2` as $two1,`$sub3` as $three1,`$sub4` as $four1,`$sub5` as $five1,`$sub6` as $six1,total FROM `$semNo` 
            WHERE CONCAT( `branch`,`date`,`student_id`, `$sub1`, `$sub2`, `$sub3`, `$sub4`, `$sub5`, `$sub6`, `total`)LIKE '%$search_value%' order by $order $sort";
   $result2=mysqli_query($conn,$query2);
   }
   else{
      $query2="SELECT branch,date,student_id,`$sub1` as $one1,`$sub2` as $two1,`$sub3` as $three1,`$sub4` as $four1,`$sub5` as $five1,`$sub6` as $six1,total FROM `$semNo` ORDER BY $order $sort";
       $result2=mysqli_query($conn,$query2);
   }
   
   ?>
   <?php 
   


if(mysqli_num_rows($result2)>0)
 {
   $sort=='ASC'? $sort='DESC' : $sort='ASC';
   
echo "<section>
 <h1>Semister Number $sem</h1>
<table >
       <tr> 
            <th>Branch<a href='?order=branch&sort=$sort'><i class='fas fa-caret-down'></i></a></th>
            <th>Date<a href='?order=date&sort=$sort'><i class='fas fa-caret-down'></i></a></th>
           <th>Student Id<a href='?order=student_id&sort=$sort'><i class='fas fa-caret-down'></i></a></th>
           <th>$one1<a href='?order=`$one1`&sort=$sort'><i class='fas fa-caret-down'></i></a></th>
           <th>$two1<a href='?order=`$two1`&sort=$sort'><i class='fas fa-caret-down'></i></a></th>
           <th>$three1<a href='?order=`$three1`&sort=$sort'><i class='fas fa-caret-down'></i></a></th>
           <th>$four1<a href='?order=`$four1`&sort=$sort'><i class='fas fa-caret-down'></i></a></th>
           <th>$five1<a href='?order=`$five1`&sort=$sort'><i class='fas fa-caret-down'></i></a></th>
           <th>$six1<a href='?order=`$six1`&sort=$sort'><i class='fas fa-caret-down'></i></a></th>
           <th>Per Day<a href='?order=total&sort=$sort'><i class='fas fa-caret-down'></i></a></th>
           
           <th colspan='2'>operation </th>
       </tr>";

while ($row = mysqli_fetch_array($result2)) {
   $stu=$row['student_id'];
   $branch=$row['branch'];
   $date=$row['date'];
   $one=$row[$one1];
   $two=$row[$two1];
   $three=$row[$three1];
   $four=$row[$four1];
   $five=$row[$five1];
   $six=$row[$six1];
   $total=$row['total'];
   
   echo "<tr>
   
   <td>$branch</td>
   <td>$date</td>
   <td>$stu</td>
   <td>$one</td>
   <td>$two</td>
   <td>$three</td>
   <td>$four</td>
   <td>$five</td>
   <td>$six</td>
   <td>".$total."</td>
   

   <td>
   <a href='../modify/updateAttendance.php?student_id=$row[student_id]&date=$date&semNo=$semNo&sem=$sem&one=$one&two=$two&three=$three&four=$four&five=$five&six=$six'>
   <input type='submit' value='Edit' style='background-color:green;'></input>  </a>
   </td>

   <td><a href='../modify/deleteAttendance.php?student_id=$row[student_id]&date=$date&semNo=$semNo' onclick ='return checkdelete() '> 
   <input type='submit' value='Delete' style='background-color:red;'></input></a></td>
  </tr>";
}
echo "</table>";}
else{
   ?><script>
            window.location.href="./showAttendance.php";
            alert("No such record ");
            
           </script><?php
}
}else{
           if($semNo=='sem1'){
           $one= '101' ;
           $two= '102' ;
           $three= '103' ;
           $four= '104' ;
           $five= '105' ;
           $six= '106' ;
           
           }
           elseif($semNo=='sem2'){
           $one= '201' ;
           $two= '202' ;
           $three= '203' ;
           $four= '204' ;
           $five= '205' ;
           $six= '206' ;
           }
           elseif($semNo=='sem3'){
           $one= '301' ;
           $two= '302' ;
           $three= '303' ;
           $four= '304' ;
           $five= '305' ;
           $six= '306' ;
           }
           elseif($semNo=='sem4'){
           $one= '401' ;
           $two= '402' ;
           $three= '403' ;
           $four= '404' ;
           $five= '405' ;
           $six= '406' ;
           }
           elseif($semNo=='sem5'){
           $one= '501' ;
           $two= '502' ;
           $three= '503' ;
           $four= '504' ;
           $five= '505' ;
           $six= '506' ;
           }
           elseif($semNo=='sem6'){
           $one= '601' ;
           $two= '602' ;
           $three= '603' ;
           $four= '604' ;
           $five= '605' ;
           $six= '606' ;
           }
           elseif($semNo=='sem7'){
           $one= '701' ;
           $two= '702' ;
           $three= '703' ;
           $four= '704' ;
           $five= '705' ;
           $six= '706' ;
           }
           else{
           $one= '801' ;
           $two= '802' ;
           $three= '803' ;
           $four= '804' ;
           $five= '805' ;
           $six= '806' ;
           }
       
   if(isset($_GET['order'])){
   $order=$_GET['order'];
}else{
   $order='student_id';
}
if(isset($_GET['sort'])){
   $sort=$_GET['sort'];
}else{
   $sort='ASC';
}
if(isset($_GET['search_value'])){
$search_value=$_GET['search_value'];
$query2="SELECT * FROM `$semNo` WHERE CONCAT( `branch`,`date`,`student_id`, `$one`, `$two`, `$three`, `$four`, `$five`, `$six`, `total`) LIKE '%$search_value%' order by $order $sort ";
$conn2=mysqli_connect("localhost","root","","attendance");
$result2=mysqli_query($conn2,$query2);

}
else{
   $query2="SELECT * FROM `$semNo` order by $order $sort";
   $conn2=mysqli_connect("localhost","root","","attendance");
   $result2=mysqli_query($conn2,$query2);
   
}

//echo $semNo;
if(mysqli_num_rows($result2)>0)
 {
   $sort=='ASC'? $sort='DESC' : $sort='ASC';
   
echo "<section>
<h1>Semister Number $sem</h1>
<table >
       <tr> 
       
           
           <th>Branch<a href='?order=branch&sort=$sort'><i class='fas fa-caret-down'></i></a></th>
           <th>Date<a href='?order=date&sort=$sort'><i class='fas fa-caret-down'></i></a></th>
           <th>Student Id<a href='?order=student_id&sort=$sort'><i class='fas fa-caret-down'></i></a></th>
           <th>$one<a href='?order=`$one`&sort=$sort'><i class='fas fa-caret-down'></i></a></th>
           <th>$two<a href='?order=`$two`&sort=$sort'><i class='fas fa-caret-down'></i></a></th>
           <th>$three<a href='?order=`$three`&sort=$sort'><i class='fas fa-caret-down'></i></a></th>
           <th>$four<a href='?order=`$four`&sort=$sort'><i class='fas fa-caret-down'></i></a></th>
           <th>$five<a href='?order=`$five`&sort=$sort'><i class='fas fa-caret-down'></i></a></th>
           <th>$six<a href='?order=`$six`&sort=$sort'><i class='fas fa-caret-down'></i></a></th>
           <th>Per Day<a href='?order=total&sort=$sort'><i class='fas fa-caret-down'></i></a></th>
           <th colspan='2'>operation </th>
       </tr>";

while ($row = mysqli_fetch_array($result2)) {
   $stu=$row['student_id'];
   $branch=$row['branch'];
   $date=$row['date'];
   
   
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
   
   echo "<tr>
   
   <td>$branch</td>
   <td>$date</td>
   <td>$stu</td>
   <td>$one</td>
   <td>$two</td>
   <td>$three</td>
   <td>$four</td>
   <td>$five</td>
   <td>$six</td>
   <td>".$total."</td>
   

   <td>
   <a href='../modify/updateAttendance.php?student_id=$row[student_id]&date=$date&semNo=$semNo&sem=$sem&one=$one&two=$two&three=$three&four=$four&five=$five&six=$six'>
   <input type='submit' value='Edit' style='background-color:green;'></input>  </a>
   </td>

   <td><a href='../modify/deleteAttendance.php?student_id=$row[student_id]&date=$date&semNo=$semNo' onclick ='return checkdelete() '> 
   <input type='submit' value='Delete' style='background-color:red;'></input></a></td>
  </tr>";
}
echo "</table>";}

else{
    ?><script>
             window.location.href="sem1.php";
             alert("No such record ");
             
            </script><?php
}

}session_unset();
?>
<button style="color: white; text-align:center"><a href="./attendance.html" >Register</a></button>
</body>
</html>

