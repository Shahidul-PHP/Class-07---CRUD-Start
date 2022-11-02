<?php 
require 'db.php';
session_start();

$flag = true;
// for naming validation
$name = $_POST['name'];
if(empty($name)){
    $_SESSION['NameErrorMsg'] = 'Please Enter Your Name First';
    $flag=false;
    header('location:signup.php');
}
else{
    if (!preg_match("/^[a-z A-z]*$/", $name)) {
        $_SESSION['NameErrorMsg'] = 'Only Alphabet and Underscore are Allowed';
        $flag = false;
        header('location:signup.php');
    }  
}

//for email validation 

$email = $_POST['email'];

if(empty($email)){
    $_SESSION['MailErrorMsg'] = 'You Need to Enter Your Email';
    $flag = false;
    header('location:signup.php');
}
else{
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $_SESSION['MailErrorMsg'] = 'Email Format Not Mathced !';
        $flag = false;
        header('location:signup.php');
    }  
}


// for password validation include confirm password

$password = $_POST['password'];
$confirmPass = $_POST['confirmPassword'];

$after_pass_one = password_hash($password,PASSWORD_DEFAULT);
$after_pass_two = password_hash($confirmPass,PASSWORD_DEFAULT);

$upper = preg_match('@[A-Z]@', $password);
$lower = preg_match('@[a-z]@', $password);
$number = preg_match('@[0-9]@', $password);
$spsl = preg_match('@[#,$,%,^.&,*,\,~,!!,!]@', $password);


if(empty($password)){
    $_SESSION['PassErrorMsg'] = 'Please Enter a Password ';
    $flag = false;
    header('location:signup.php');

}else{
    if (!$upper || !$lower || !$number || !$spsl || strlen($password) < 8) {
        $_SESSION['PassErrorMsg'] = 'Password Should be 1 uppercase, 1 lowercase, special character <br> and minumum 8 Character !! ';
        $flag = false;
        header('location:signup.php');
    }  
    if(empty($confirmPass)){
        $_SESSION['PassErrorMsgTwo'] = 'Please Confirm The Password ';
        $flag = false;
        header('location:signup.php'); 
    }else if($confirmPass != $password){
        $_SESSION['PassErrorMsgTwo'] = 'Passowrd Doesnot Mathced !! ';
        $flag = false;
        header('location:signup.php'); 
    }
}

// value store using flag

if ($flag) {
    //databse connection if all info is correct

$insert = "INSERT INTO users(name,email,password,confirmPass)VALUES('$name','$email','$after_pass_one','$after_pass_two')";
mysqli_query($db_connection,$insert);


$_SESSION['successMsg'] = 'New Account Created Successfully';
    header('location:signup.php');
die();



} else {
    $_SESSION['name_value_store'] = $name;
    $_SESSION['email_value_store'] = $email;
    $_SESSION['pass_value_store'] = $password;
    $_SESSION['pass_value'] = $confirmPass;
    header('location:signup.php');
}































?>