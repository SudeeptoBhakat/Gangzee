<?php
    include('Lib\connect.php');
    $obj=new connect();
?>

<?php
    session_start();
    $email = $_SESSION['email'];
    $filename = $_FILES['post_img']['name'];
    $source = $_FILES['post_img']['tmp_name'];
    $target = "Uploads/".time()."-".$filename;
    move_uploaded_file($source, $target);
    $posttext=$_POST['posttext'];
    $post_upload = $obj->upload_post_img($email, $target, $posttext); 
    if (!empty($post_upload)) {
        $_SESSION['posts'] = $post_upload;
        foreach ($post_upload as $post) {
            echo "ID: " . $post['id'] . "<br>";
            echo "Post Image: " . $post['post_img'] . "<br>";
            echo "Post Text: " . $post['post_text'] . "<br>";
            echo "Post Time: " . $post['post_time'] . "<br>";
            echo "<br>";
        }
        header('location:html\app\profile.php');
    }

    else{
        header('location:html\app\profile.php?result=false');
    }
    // echo $email." ".$filename." ".$posttext;
?>