
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="../styles/styles.css">
    <title>view</title>
</head>
<body style="background-image: url('../images/college1.jpg');background-size: cover; background-repeat: no-repeat;">
    <p id="clgname"> <bold>DGCS COLLEGE</bold></p>
    
    <form action="view.php" method="post" style="width: 500px; left: 0;margin-left: 30%; margin-top: 50px;">
        <section><strong>View</strong></section><hr/>
        <?php 
        $value=$_GET['value'];
        
        if($value=='1'){

            ?>
        <p>
            <label for="studentId">Student Id:</label>
            <input type="text" name="studentId" required>

        </p><?php
            }
            elseif($value=='2'){
                ?>
        <p>
            <label for="branch">Branch</label>
           
            <select name="branch" required>
                <option>none</option>
                <option>COMPUTER SCIENCE ENGINEERING</option>
                <option >INFORMATION TECHNOLOGY ENGINEERING</option>
                <option >ELECTROICS AND COMMUNICATION ENGINEERING </option>
                <option>ELECTRICAL AND ELECTRONICS ENGINEERING</option>
                <option>MECHANICAL ENGINEERING</option>
                <option>CIVIL ENGINEERING</option>
                <option>CHEMICAL ENGINEERING</option>
            </select>
        </p>
        <p>
            <label for="sem">Semester</label>
           
            <select name="sem" required>
                <option value='1'>Semister 1</option>
                <option value='2'>Semister 2</option>
                <option value='3'>Semister 3 </option>
                <option value='4'>Semister 4</option>
                <option value='5'>Semister 5</option>
                <option value='6'>Semister 6</option>
                <option value='7'>Semister 7</option>
                <option value='8'>Semister 8</option>
            </select>
            

        </p>
        <p>
            <label for="sub">Subject</label>
         <select name="sub" required>
            <option>none</option>
            <option value='1'>Sub1</option>
            <option value='2'>Sub2</option>
            <option value='3'>Sub3</option>
            <option value='4'>Sub4</option>
            <option value='5'>Sub5</option>
            <option value='6'>Sub6</option>
            
         </select>
        </p>
        <p>
            <label for="date">Date:</label>
            <input type="date" name="date" required>

        </p><?php
            }
            elseif($value=='3'){
                ?>
        <p>
            <label for="branch">Branch</label>
           
            <select name="branch" required>
                <option>none</option>
                <option>COMPUTER SCIENCE ENGINEERING</option>
                <option >INFORMATION TECHNOLOGY ENGINEERING</option>
                <option >ELECTROICS AND COMMUNICATION ENGINEERING </option>
                <option>ELECTRICAL AND ELECTRONICS ENGINEERING</option>
                <option>MECHANICAL ENGINEERING</option>
                <option>CIVIL ENGINEERING</option>
                <option>CHEMICAL ENGINEERING</option>
            </select>
        </p>
        <p>
            <label for="sem">Semester</label>
           
            <select name="sem" required >
                <option value='1'>Semister 1</option>
                <option value='2'>Semister 2</option>
                <option value='3'>Semister 3 </option>
                <option value='4'>Semister 4</option>
                <option value='5'>Semister 5</option>
                <option value='6'>Semister 6</option>
                <option value='7'>Semister 7</option>
                <option value='8'>Semister 8</option>
            </select>
            

        </p>
        <p>
            <label for="sub">Subject</label>
         <select name="sub" required>
            <option>none</option>
            <option value='1'>Sub1</option>
            <option value='2'>Sub2</option>
            <option value='3'>Sub3</option>
            <option value='4'>Sub4</option>
            <option value='5'>Sub5</option>
            <option value='6'>Sub6</option>
            
         </select>
        </p>
        <?php
            }
            ?>

            
        
            

        
        <button type="submit" title="click me to login" style="margin-left: 150px;">Submit</button>
    </form>
    <a href="admin_menu.html"><button id="back" title="click me to go to login page">Back</button></a> 
</body>
</html>