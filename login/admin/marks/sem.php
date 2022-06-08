<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="../../styles/styles.css">
    <title>semester</title>
</head>
<body style="background-image: url('../../images/college1.jpg');background-size: cover; background-repeat: no-repeat; text-align:center;">
<a href="./marks.html"  title="Go to previous page"style="float:left ; text-decoration:none; color : black;font-size:30px;"><i class="fas fa-arrow-circle-left"></i></a>    

    <h1>Select Semester</h1>
    
    
    <form action="semister.php" method="POST">
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
    
    <a href="../admin_menu.html"><button style="width: auto; margin: 10px 250px 0 50px;" title="click me to go to login page">Back</button></a>
</body>
</html>