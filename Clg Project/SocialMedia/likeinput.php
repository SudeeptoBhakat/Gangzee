<?php
    include('Lib\connect.php');
    $obj=new connect();
?>
<?php
    if (isset($_POST['count']) && isset($_POST['postId'])) {
        $count = $_GET['c'];
        $postId = $_GET['id'];
        $obj->updateLikeCount($postId, $count);
        $likeCount = $obj->getLikeCount($postId);
    }
?>