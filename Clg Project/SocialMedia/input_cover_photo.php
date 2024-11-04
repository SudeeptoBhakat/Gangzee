<?php
    include('Lib\connect.php');
    $obj=new connect();
?>
<?php
    session_start();
    $filename = $_FILES['coverphoto']['name'];
    $ftype = $_FILES['coverphoto']['type'];
    $source = $_FILES['coverphoto']['tmp_name'];
    $target = "Uploads/".time()."-".$filename;
    move_uploaded_file($source, $target);
    $email = $_SESSION['email'];
    $newtarget = $obj->upload_cover_photo($email, $target);
    
    if ($newtarget) {
        // Store the cover photo path in the session
        $_SESSION['coverphoto'] = $newtarget;
        
        // If the user is saved successfully, redirect to the profile page
        header("location:html\app\profile.php?result=true");
    } else {
        // If error come, redirect back to the profile page page with an error message
        header("location:html\app\profile.php?result=false");
    }
    exit;
?>
