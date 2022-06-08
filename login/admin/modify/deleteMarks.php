<?php
$student_id=$_GET['student_id'];
$semNo=$_GET['semNo'];
$conn= mysqli_connect("localhost", "root", "", "marks");
$query="DELETE FROM $semNo where student_id='$student_id' ";
$data=mysqli_query($conn,$query);
if ($data){
    ?><script>
          alert("SUCCESSFULLY DELETED THE RECORD.")
      </script>
      <meta http-equiv="refresh" content="0 ; URL=http://localhost/semp%20project/login/admin/">
      <?php
}else{
    ?><script>
    alert("FAILED to delete the record.")
</script>
<meta http-equiv="refresh" content="0 ; URL=http://localhost/semp%20project/login/admin/showMarks.php">
<?php
}
?>