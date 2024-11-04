<?php
    include('Lib\connect.php');
    $obj=new connect();
?>

<?php
    $email=$_POST['email'];
    $pas=$_POST['current-password'];
    $newpas=$_POST['new-password'];
    $res=$obj->check_user_password($email,$pas);
    $count=mysqli_num_rows($res);
    echo $count;
    if($count==0)
    {
        header('location:html\app\profile-edit.php?login=failed');  /* It shows failed when any input is not available in database*/
    }
    else{
        $n=$obj->change_user_password($newpas,$email);
        header('location:html\app\profile-edit.php?login=success');
    }
?>