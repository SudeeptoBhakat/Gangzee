<!-- For User Register -->
<?php
    include('Lib\connect.php');
    $obj=new connect();
?>
<?php
session_start();
$name = $_POST['name'];
$_SESSION['name'] = $name;
$email = $_POST['email'];
$pass = $_POST['pass'];
$conpas = $_POST['conpas'];
if($conpas == $pass){
    if ($obj->save_user($name, $email, $pass)) {
        // If the user is saved successfully, redirect to the profile page
        header('Location: login.php?result=success');
    } else {
        // If the email already exists, redirect back to the registration page with an error message
        header('Location: register.php?result=failed');
    }
    exit;
}
else {
    header('location: register.php?result=false'); //if the password does't match 
}
?>



<?php
//     session_start();
//     $name=$_POST['name'];
//     $_SESSION["name"] = $name;
//     $email=$_POST['email'];
//     $pass=$_POST['pass'];
//     $n=$obj->save_user($name,$email,$pass);
//     header('location:register.php?result='.$n);
//     header("location: html\app\profile.php"); 
?>