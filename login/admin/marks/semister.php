<?php 
session_start();
$sem=$_REQUEST['sem'];
setcookie("sem1","$sem",time()+3600,"./showMarks.php","",0);
if($sem=='1'){

     $semNo='sem1';

 }elseif($sem=='2'){
     $semNo='sem2';
 }
 elseif($sem=='3'){
     $semNo='sem3';
 }
 elseif($sem=='4'){
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
//$semNo = $_GET['semNo'];
setcookie("semNo1","$semNo",time()+3600,"./showMarks.php","",0);


?>
<script>      
     window.location.href='./showMarks.php';
</script>
