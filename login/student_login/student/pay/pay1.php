<!DOCTYPE html>
<html>
  <head>
    <title>Instamojo Integration in PHP</title>
    <link rel ="stylesheet" href="login/styles/styles.css">
    <link rel ="stylesheet" href="../../../styles/styles.css">
    <script src="https://kit.fontawesome.com/3da4f03368.js" crossorigin="anonymous"></script>
    
  </head>
  <body style="text-align: center;">
   <?php $amount=$_GET['amount']; 
         $year=$_GET['year']; 
         $id=$_GET['id'];
         $email=$_GET['email'];    ?>
         <a href="../student_menu.php"  title="Go to previous page"style="float:left ; text-decoration:none; color : black;font-size:30px;"><i class="fas fa-arrow-circle-left"></i></a>

      <h1 >Instamojo Payment</h1>
      <form action="pay.php" method="POST">
        
        <div  >
            <label for="name">Student Id:</label>
            <input type="text" required name="name" placeholder="name" value="<?php echo  $id;?>"/>
        </div>
        <div  >
            <label for="purpose">Year:</label>
            <input type="text" required name="purpose" placeholder="purpose" value="<?php echo 'Year '. $year.' Fee';?>"/>
        </div>
        <div  >
            <label for="email">Email:</label>
            <input type="email" required name="email" placeholder="email" value="<?php echo  $email;?>"/>
        </div>
        
        <div>
            <label for="amount">Amount:</label>
            <input type="number" required name="amount" placeholder="amount" value="<?php echo $amount;?>"/>
            <input type="hidden" required name="amount1"  value="<?php echo $amount;?>"/>
  
        </div>
        <div  >
            <button >
                Make Payment 
            </button>
        </div>
      </form>
   
  </body>
  
</html>