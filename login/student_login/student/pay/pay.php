<?php
require('./instamojo.php');
const API_KEY ="test_c2edd0d31fab652cc84b28bdd6b";
const AUTH_TOKEN = "test_581cdc6148bdb162f0f2fd6898d";

$purpose=$_POST['purpose'];
if($purpose=='Year 1 Fee'){
    $purpose='1';
}elseif($purpose=='Year 2 Fee'){
    $purpose='2';
}elseif($purpose=='Year 3 Fee'){
    $purpose='3';
}else{
    $purpose='4';
}
$name=$_POST['name'];
$email=$_POST['email'];
$amount=$_POST['amount'];
$amount1=$_POST['amount1'];
if(isset($_POST['purpose'])&&isset($_POST['name']) && isset($_POST['email']) && isset($_POST['amount']) && isset($_POST['amount1']))
{
    $api = new Instamojo\Instamojo(API_KEY, AUTH_TOKEN,'https://test.instamojo.com/api/1.1/');
    
    try {
        $response = $api->paymentRequestCreate(array(
            "purpose" => $_POST['purpose'],
            "buyer_name" => $_POST['name'],
            "amount" => $_POST['amount'],
            "send_email" => true,
            "email" => $_POST['email'],
            "redirect_url" => "http://localhost/semp%20project/login/student_login/student/pay/s.php?year=$purpose&name=$name&amount=$amount&amount1=$amount1"
            ));
        header('Location:'. $response['longurl']);
    }
    catch (Exception $e) {
        print('Error: ' . $e->getMessage());
    }
}
?>