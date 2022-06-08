<?php
$student_id=$_GET['student_id'];
$conn= mysqli_connect("localhost", "root", "", "dgcs");
$query="DELETE FROM student_details where student_id='$student_id' ";
$data=mysqli_query($conn,$query);
if ($data){
    ?><script>
          alert("SUCCESSFULLY DELETED THE RECORD.")
      </script>
      <meta http-equiv="refresh" content="0 ; URL=http://localhost/semp%20project/login/admin/showMarks.php">
      <?php
}else{
    ?><script>
    alert("FAILED to delete the record.")
</script>
<meta http-equiv="refresh" content="0 ; URL=http://localhost/semp%20project/login/admin/showMarks.php">
<?php
}
?>