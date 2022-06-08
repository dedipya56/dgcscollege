<?php
session_start();

$uid = $_POST['uname'];
$password =$_POST['psw'];
if($uid&&$password)
{
	$connect= mysqli_connect("localhost","root","","dgcs") or die("coudld connect to database");
	
	
	$query= mysqli_query($connect,"SELECT * FROM admin WHERE admin_id ='$uid' ");
	$numrows=mysqli_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysqli_fetch_assoc($query))
		{
			$dbuid= $row['admin_id'];
			$dbpassword=$row['admin_password'];
		}
		if($uid==$dbuid && $password==$dbpassword)
		{
			?><script>
    window.location.href="admin_menu.html";
                </script><?php
				

			
		}
	 else if($uid==$dbuid && $password!=$dbpassword)
	 {
		 ?><script>
    window.location.href="admin.html";
            alert("You Entered InCorrect Password ");
            document.password.value.focus();
            </script><?php
			
	}
    }
	else 
      {
        ?><script>
    window.location.href="admin.html";
    alert("User Doesnt Exist");
    </script><?php
	
	  }
}
else
{
    ?>
    <script>
        window.location.href="../index.html";
            alert("Please Enter Username and Password");
</script><?php

    
}	
session_write_close();

?>