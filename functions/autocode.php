<?php
include("../config/dbcon.php");
if(isset($_POST["register_btn"])){
    $naran =mysqli_escape_string($conn, $_POST["naran"]);
    $email =mysqli_escape_string($conn,$_POST["email"]);
    $telf =mysqli_escape_string($conn,$_POST["telf"]);
    $password =mysqli_escape_string($conn,$_POST["password"]);
    $cpassword =mysqli_escape_string($conn,$_POST["cpassword"]);

    //check email
    $check_email_query = "SELECT email FROM users WHERE email='$email'";
    $check_email_query_run = mysqli_query($conn,$check_email_query);

    if(mysqli_num_rows($check_email_query_run) > 0){
        $_SESSION['message'] = "Email ne'e Registu uluk tiha ona";
        header("location: ../register.php");
}else{
if($password == $cpassword){
    //insert user data
    $insert_query = "INSERT INTO users (naran, email, telf, password) VALUES (' $naran','$email','$telf','$password')";
    $insert_query_run=mysqli_query($conn,$insert_query);

    if($insert_query_run){
        $_SESSION['message']= "Registred Successfully";
        header("location: ../login.php");
    }else{
        $_SESSION['message']= "Oppss! Something Went Wrong";
        header("location: ../register.php");
    }
}else{
    $_SESSION['message'] = "Password Labele Arbiru";
    header("location: ../register.php");
    }
}
}
?>