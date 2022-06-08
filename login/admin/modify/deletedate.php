<?php
$date=$_GET['date'];

$conn= mysqli_connect("localhost", "root", "", "attendance");
$query="DELETE FROM `date` where `date`='$date' ";
$data=mysqli_query($conn,$query);
if ($data){
    ?><script>
          alert("SUCCESSFULLY DELETED THE RECORD.")
      </script>
      <meta http-equiv="refresh" content="0 ; URL=http://localhost/semp%20project/login/admin/attendance/showdate.php">
      <?php
}else{
    ?><script>
    alert("FAILED to delete the record.")
</script>
<meta http-equiv="refresh" content="0 ; URL=http://localhost/semp%20project/login/admin/attendance/showdate.php">
<?php
}
?>