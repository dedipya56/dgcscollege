<?php
//require "../showMarks.php";
//error_reporting(0);
    $student_id=$_GET['student_id'];
    $semNo='sem2';//$_GET['semNo'];
    $sem=$_GET['sem'];
    $one = $_GET['one'];
    $two = $_GET['two'];
    $three = $_GET['three'];
    $four = $_GET['four'];
    $five = $_GET['five'];
    $six = $_GET['six'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=fourge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="../../styles/styles.css">
    <title>Register Marks</title>
</head>
<body style="background-image: url('../../college1.jpg');background-size: cover; background-repeat: no-repeat;">
    <form  action="" method="GET" style="width: auto; text-align: center; left: 0; margin-bottom: 50px;">
        <h1 style="text-align:centre;">UPDATION FORM</h1> <hr/>        
        <p>
             <label for="StudentId">STUDENT ID:</label>
             <input type="text" name="student_id" value="<?php echo "$student_id"?>">
        </p>
        <p>
            <label for="sem">sem</label>
           
            <select name="sem" >
                <option value="1" 
                        <?php if($sem=='1'){echo "selected ";} ?>
                >1</option>
                <option value="2"
                        <?php if($sem=='2'){echo "selected ";} ?> 
                >2</option>
                <option value="3"
                        <?php if($sem=='3'){echo "selected ";} ?>
                >3 </option>
                <option value="4"
                        <?php if($sem=='4'){echo "selected ";} ?>
                >4</option>
                <option value="5"
                        <?php if($sem=='5'){echo "selected ";} ?>
                >5</option>
                <option value="6"
                        <?php if($sem=='6'){echo "selected ";} ?>
                >6</option>
                <option value="7"
                        <?php if($sem=='7'){echo "selected ";} ?>
                >7</option>
                <option value="8"
                        <?php if($sem=='8'){echo "selected ";} ?>
                >8</option>
            </select>
            

        </p>

        <p>
            <label for="one"> sub1:</label>
            <input type="number" name="one" value="<?php echo $one ?>" >
       </p>
            
        <p>
             <label >sub2:</label>
             <input type="number" name="two" value="<?php echo "$two" ?>">
         </p>
      
         <p>
             <label >sub3:</label>
             <input type="number" name="three" value="<?php echo "$three" ?>">
         </p>
        
         <p>
             <label>sub4:</label>
             <input type="number" name="four" value="<?php echo "$four" ?>">
            
         </p>
        
         <p>
            <label >sub5:</label>
            <input type="number" name="five" value="<?php echo "$five" ?>">
        </p>

        <p>
            <label>sub6:</label>
            <input type="number" name="six" value="<?php echo "$six" ?>">
        </p>
        <button type="submit" value="Submit"  name="submit"> UPDATE</button>
         
        
    </form>
    
        
        <a href="../marks/showMarks.php"><button style="width: auto; margin: 0 46%;" title="click me to go to login page">Back</button></a> 

</body>
</html>
<?php
if($_GET['submit']){
    $student_id=$_GET['student_id'];
    $sem=$_GET['sem'];
    $one=$_GET['one'];
    $two=$_GET['two'];
    $three=$_GET['three'];
    $four=$_GET['four'];
    $five=$_GET['five'];
    $six=$_GET['six'];
    if($sem==1){

        $semNo='sem1';
        $sub1= '101' ;
        $sub2= '102' ;
        $sub3= '103' ;
        $sub4= '104' ;
        $sub5= '105' ;
        $sub6= '106' ;

    }elseif($sem==2){
        $semNo='sem2';
        $sub1= '201' ;
        $sub2= '202' ;
        $sub3= '203' ;
        $sub4= '204' ;
        $sub5= '205' ;
        $sub6= '206' ;
    }
    elseif($sem==3){
        $semNo='sem3';
        $sub1= '301' ;
        $sub2= '302' ;
        $sub3= '303' ;
        $sub4= '304' ;
        $sub5= '305' ;
        $sub6= '306' ;       
    }
    elseif($sem==4){
        $semNo='sem4';
        $sub1= '401' ;
        $sub2= '402' ;
        $sub3= '403' ;
        $sub4= '404' ;
        $sub5= '405' ;
        $sub6= '406' ;       
    }
    elseif($sem==5){
        $semNo='sem5';
        $sub1= '501' ;
        $sub2= '502' ;
        $sub3= '503' ;
        $sub4= '504' ;
        $sub5= '505' ;
        $sub6= '506' ;       
    }
    elseif($sem==6){
         $semNo='sem6';
         $sub1= '601' ;
         $sub2= '602' ;
         $sub3= '603' ;
         $sub4= '604' ;
         $sub5= '605' ;
         $sub6= '606' ;         
    }
    elseif($sem==7){
        $semNo='sem7';
        $sub1= '701' ;
        $sub2= '702' ;
        $sub3= '703' ;
        $sub4= '704' ;
        $sub5= '705' ;
        $sub6= '706' ;       
    }
    else{
        $semNo='sem8';
        $sub1= '801' ;
        $sub2= '802' ;
        $sub3= '803' ;
        $sub4= '804' ;
        $sub5= '805' ;
        $sub6= '806' ;       
    }
    $total=$one+$two+$three+$four+$five+$six ;
    
$conn1 = mysqli_connect("localhost", "root", "", "dgcs");
if($conn1 === false){
    die("ERROR: Could not connect. "  . mysqli_connect_error());
}
$query1= mysqli_query($conn1,"SELECT branch FROM student_details  WHERE student_id ='$student_id' ");
$row = mysqli_fetch_array($query1);
$branch=$row['branch'];
$query="UPDATE `$semNo` Set student_id='$student_id',branch='$branch', `$sub1`='$one',`$sub2`='$two',`$sub3`='$three',`$sub4`='$four',`$sub5`='$five',`$sub6`='$six',total='$total' WHERE student_id='$student_id'";
$conn=mysqli_connect("localhost","root","","marks");
$result = mysqli_query($conn,$query);
if($result){
    echo " <script>alert('Record Updated')</script>"; 
    ?>
    <meta http-equiv="refresh" content="0 ; URL=http://localhost/semp%20project/login/admin/marks/showMarks.php">
    <?php
}else{
    echo "Failed to update";
}
}

?>