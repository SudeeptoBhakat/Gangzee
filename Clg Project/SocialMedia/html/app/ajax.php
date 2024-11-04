<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<?php
    include('Lib\connect.php');
    $obj=new connect();
?>

<?php
    session_start();
    $current_user = $_SESSION['email'];
    $response = array();
    if(isset($_GET['like'])){
        $post_id = $_POST['post_id'];
        if(!checkLikeStatus($post_id)){
            if(like($post_id,$current_user)){
                $response['status']=true;
            }else{
                $response['status']=false;
            }
        
            echo json_encode($response);
        }
    
      
    }
    
    
    if(isset($_GET['unlike'])){
        $post_id = $_POST['post_id'];
    
        if(checkLikeStatus($post_id)){
            if(unlike($post_id,$current_user)){
                $response['status']=true;
            }else{
                $response['status']=false;
            }
        
            echo json_encode($response);
        }
    
      
    }
?>    