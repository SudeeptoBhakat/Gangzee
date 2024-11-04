<?php
    session_start();
    include('Lib\connect.php');
    $obj=new connect();
?>
<?php
    $target_dir = "Uploads/";
    $target_file = $target_dir.time(). basename($_FILES["profile-pic"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if (move_uploaded_file($_FILES["profile-pic"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["profile-pic"]["name"])). " has been uploaded.";
    } 
    else {
        echo "Sorry, there was an error to uploading your file.";
    }
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $phno=$_POST['phno'];
    $city=$_POST['city'];
    $gen=$_POST['gen'];
    $dob=$_POST['dob'];
    $mstatus=$_POST['m-status'];
    $dist=$_POST['dist'];
    $bio=$_POST['bio'];
    $email=$_SESSION['email'];
    $n=$obj->upload_data($target_file,$fname,$lname,$phno,$email,$city,$gen,$dob,$mstatus,$dist,$bio);
    $profilepicinoutaspost=$obj->upload_post_img($email, $target_file, $posttext=' ');
    $_SESSION['profile-pic']=$target_file;
    $_SESSION['fname']=$fname;
    $_SESSION['lname']=$lname;
    $_SESSION['phno']=$phno;
    $_SESSION['city']=$city;
    $_SESSION['gen']=$gen;
    $_SESSION['dob']=$dob;
    $_SESSION['m_status']=$mstatus;
    $_SESSION['dist']=$dist;
    $_SESSION['bio']=$bio;
    if($count)
    {
        header('location:html\app\profile-edit.php?login=failed');  /* It shows failed when any input is not available in database*/
    }
    else{ 
        if (!empty($profilepicinoutaspost)) {
            $_SESSION['posts'] = $profilepicinoutaspost;
            foreach ($profilepicinoutaspost as $post) {
                echo "ID: " . $post['id'] . "<br>";
                echo "Post Image: " . $post['post_img'] . "<br>";
                echo "Post Text: " . $post['post_text'] . "<br>";
                echo "Post Time: " . $post['post_time'] . "<br>";
                echo "<br>";
            }
        }
        header('location:html\app\profile.php');
    }
?>