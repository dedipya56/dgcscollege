<script src="https://kit.fontawesome.com/3da4f03368.js" crossorigin="anonymous"></script>	
<a href="./student_menu.php"  title="Go to previous page"style="float:left ; text-decoration:none; color : black;font-size:30px;"><i class="fas fa-arrow-circle-left"></i></a>

<?php
require "../st.php";
if (isset($_SESSION['userid'])){
    $uid=$_SESSION['userid'];
    $connect= mysqli_connect("localhost","root","","dgcs") or die("coudld connect to database");
    $query = "SELECT * FROM student_details WHERE student_id ='$uid' ";
   
    if ($is_query_run = mysqli_query($connect,$query))
    {
        
        while ($query_executed = mysqli_fetch_assoc ($is_query_run))
        {
            echo "<img src='../../admin/".$query_executed['picsource']."' height='100px' width='100px'/>";
            echo  " <br/><strong style=color:black;>Id : $query_executed[student_id] <br/></strong> " ;
            echo " Name : $query_executed[FirstName]  $query_executed[LastName]<br/>";
            echo " Father Name : $query_executed[fatherName]<br/>";
            echo " Mother Name : $query_executed[motherName]<br/>";
            echo " Date-Of-Birth : $query_executed[DOB]<br/>";
            echo " Gender : $query_executed[gender]<br/>";
            echo " Email Id : $query_executed[email_id]<br/>";
            echo " School Name : $query_executed[schoolName]<br/>";
            echo " 10th Percentage : $query_executed[tenthPrcentage]<br/>";
            echo " Inter/Diploma College Name : $query_executed[InterCollege]<br/>";
            echo " Inter/Diploma Percentage : $query_executed[InterMarks]<br/>";
            echo " Branch : $query_executed[branch]<br/>";
            echo " Year Joined : $query_executed[year_join]<br/>";
            echo " Eamcet Rank : $query_executed[EamcetRank]<br/>";
            echo " Address : $query_executed[address]<br/><br/><br/><br/><br/><br/>";
            echo "<p style='color:red;'>contact the  DGCS college office members incase of  queries</p>";

        }
    }
}
?>