<!DOCTYPE html>
<html>
    <head>
        <title>Currency Converter in Javascript</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
    <body>
        <?php 
        $year=$_GET['year'];
        
        $name=$_GET['name'];
        $amount=$_GET['amount'];
        $amount1=$_GET['amount1'];
        $due=$amount1-$amount;
        $payment_id=$_GET['payment_id'];
        if ($due=='0'){
            $connect= mysqli_connect("localhost","root","","dgcs") ;
            $one='1';
            $year=$year+$one;
            $query = "SELECT * FROM student_details WHERE student_id ='$name' ";
            $result=mysqli_query($connect,$query);
        $row=mysqli_fetch_assoc($result);
        $due=$row['total_fee'];
        $result1=mysqli_query($connect,"UPDATE student_details SET fee_paid='0' where student_id='$name' ");

        }
        $query="UPDATE year Set year='$year',due='$due',payment_id='$payment_id'  where student_id='$name'";
        $connection = mysqli_connect("localhost", "root", "", "dgcs");
$result = mysqli_query($connection,$query);

            $query = "SELECT * FROM student_details WHERE student_id ='$name' ";
            $result1=mysqli_query($connection,$query);
        $row1=mysqli_fetch_assoc($result1);
        $fee=$row1['total_fee'];
        $paid=$fee-$due;
$result1=mysqli_query($connection,"UPDATE student_details SET fee_paid='$paid' where student_id='$name' ");
if($result && $result1 ){
    echo " <script>alert('Successfully Paid')</script>"; 
    ?>
    <meta http-equiv="refresh" content="0 ; URL=http://localhost/semp%20project/login/student_login/student/fee.php ">
    <?php
}else{
    echo "Failed to update";
}
        ?>
    </body>
</html>