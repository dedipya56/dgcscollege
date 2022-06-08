
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="../../styles/styles.css">
    <title>Document</title>
</head>
<body style="background-image: url('../../images/college1.jpg');background-size: cover; background-repeat: no-repeat; text-align:center;">
<?php

$value=$_GET['value'];
if($value=='1'){
?>
<form action="marks.php" method="POST">
    <p>
            <label for="sem">Semester</label>
           
            <select name="sem" >
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
        <button type="submit" value="Submit" > SUBMIT</button>
    </form>
    <?php
}elseif($value=2){
    ?>
    <form action="attendance.php" method="POST">
        <p>
                <label for="sem">Semester</label>
               
                <select name="sem" >
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
            <button type="submit" value="Submit" > SUBMIT</button>
        </form>
        <?php
}else{
    echo "no value";
}
?>


</body>
</html>


