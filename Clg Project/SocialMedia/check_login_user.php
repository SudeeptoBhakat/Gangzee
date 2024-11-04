<?php
    include('Lib\connect.php');
    $obj=new connect();
?>

<?php
    $email=$_POST['email'];
    $pas=$_POST['pas'];
    $res=$obj->check_user($email,$pas);
    $profile_array=$obj->get_username($email,$pas);
    $post_array=$obj->get_postdetails($email);
    $count=mysqli_num_rows($res);
    echo $count;
    if($count==0)
    {
        header('location:login.php?login=failed');  /* It shows failed when any input is not available in database*/
    }
    else{
        session_start();
        $_SESSION['email']=$email;
        $_SESSION['name']=$profile_array[0];
        $_SESSION['profile-pic']=$profile_array[1];
        $_SESSION['coverphoto']=$profile_array[2];
        $_SESSION['fname']=$profile_array[3];
        $_SESSION['lname']=$profile_array[4];
        $_SESSION['phno']=$profile_array[5];
        $_SESSION['city']=$profile_array[6];
        $_SESSION['gen']=$profile_array[7];
        $_SESSION['dob']=$profile_array[8];
        $_SESSION['m_status']=$profile_array[9];
        $_SESSION['dist']=$profile_array[10];
        $_SESSION['bio']=$profile_array[11];
        
        if (!empty($post_array)) {
            $_SESSION['posts'] = $post_array;
            foreach ($post_array as $post) {
                echo "ID: " . $post['id'] . "<br>";
                echo "Post Image: " . $post['post_img'] . "<br>";
                echo "Post Text: " . $post['post_text'] . "<br>";
                echo "Post Time: " . $post['post_time'] . "<br>";
                echo "Post Time: " . $post['post_like'] . "<br>";
                echo "Post Time: " . $post['post_dislike'] . "<br>";
                echo "<br>";
            }
        }
        // echo "Name: ".  . "</br>";
        // echo "Image Name: ". ;
        // echo $profile_array[1];
        // echo $profile_array[2];
        header('Location:html\app\profile.php'); /*It redirect to dashboard page when we get successfully login*/
    }
?>