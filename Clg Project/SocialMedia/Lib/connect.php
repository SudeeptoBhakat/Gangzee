<?php
    class connect{
        private $host='localhost';
        private $user='root';
        private $pwd='';
        private $db_name="test";
        private $con= '';
        public function __construct()
        {
        $this->con=mysqli_connect($this->host,$this->user,$this->pwd);
            mysqli_select_db($this->con,$this->db_name);
        }
        
        /*To registration user to the web site */
        public function save_user($name, $email, $pass) {
            $sql = "SELECT * FROM tbl_register_user WHERE email='$email'";
            $result = mysqli_query($this->con, $sql) or die(mysqli_error($this->con));
            if (mysqli_num_rows($result) > 0) {
                // If the email already exists, display an error message
                return false;
            } else {
                $sql = "INSERT INTO tbl_register_user(name, email, Pas) VALUES('$name', '$email', '$pass')";
                $n = mysqli_query($this->con, $sql) or die(mysqli_error($this->con));
                return true;
            }
        }


        /*To check the entered email and password is availabe on the database in login.php page*/
        public function check_user($email,$pas) 
        {
        $sql="select * from tbl_register_user where email='$email' and Pas='$pas'";
            $res=mysqli_query($this->con,$sql) or die(mysqli_error($this->con));
            return $res;
        }


        //to get the user name when login by giving right email and pass
        public function get_username($email,$pas)
        {
        // session_start();
        $sql = "select name, profile_pic,cover_photo, fname,lname, phno, city, gen, dob, M_status, dist, bio from tbl_register_user where email='$email' and pas='$pas'";
        $result = mysqli_query($this->con,$sql);
        if ($result->num_rows == 1) {
            // get the user's name
            $row = $result->fetch_assoc();
            $name = $row['name'];
            $profile = $row['profile_pic'];
            $cover_photo = $row['cover_photo'];
            $fname = $row['fname'];
            $lname = $row['lname'];
            $phno = $row['phno'];
            $city = $row['city'];
            $gen = $row['gen'];
            $dob = $row['dob'];
            $M_status = $row['M_status'];
            $dist = $row['dist'];
            $bio = $row['bio'];

            
            return array($name, $profile, $cover_photo, $fname,$lname, $phno, $city, $gen, $dob, $M_status, $dist, $bio);
            }
        }

        //to uppload the user profile informathon in the server
        public function upload_data($target_file,$fname,$lname,$phno,$email,$city,$gen,$dob,$mstatus,$dist,$bio) {
            $sql = "update tbl_register_user set profile_pic = '$target_file', fname = '$fname',lname='$lname', phno='$phno',city='$city',gen='$gen',dob='$dob',M_status='$mstatus',dist='$dist',bio='$bio'  WHERE email='$email'";
            $n = mysqli_query($this->con, $sql) or die(mysqli_error($this->con));
            return $n;
        }
        

        //check the current password and entered passdord is matched or not in edit-profilr.php page
        public function check_user_password($email,$pas) 
        {
            $sql="select * from tbl_register_user where email='$email' and Pas='$pas'";
            $res=mysqli_query($this->con,$sql) or die(mysqli_error($this->con));
            return $res;
        }
        public function change_user_password($newpas,$email){
            $sql="update tbl_register_user set Pas = '$newpas' where email = '$email'";
            $n=mysqli_query($this->con,$sql) or die(mysqli_error($this->con));  /*Die is used to check error in code*/
            return $n;
        }

        //to upload cover photo in the input_cover_photo.php
        public function upload_cover_photo($email, $target){
            $sql = "UPDATE tbl_register_user SET cover_photo = '$target' WHERE email = '$email'";
            $result = mysqli_query($this->con, $sql) or die(mysqli_error($this->con));  /*Die is used to check error in code*/
            
            if ($result) {
                // Return the cover photo path from the server
                return $target;
            } else {
                return false;
            }
        }

        // to upload post image and text in post_input.php
        public function upload_post_img($email, $target, $posttext){
            $sql = "INSERT INTO posts (email, post_img, post_text) VALUES('$email', '$target','$posttext')";
            $n = mysqli_query($this->con, $sql) or die(mysqli_error($this->con));
            if($n){
                $sql = "SELECT * FROM posts WHERE email='$email' ORDER BY id DESC";
                $result = mysqli_query($this->con, $sql);
                
                $postDetails = array(); // Initialize an empty array
                
                while ($row = $result->fetch_assoc()) {
                    $post = array(
                        'id' => $row['id'],
                        'post_img' => $row['post_img'],
                        'post_text' => $row['post_text'],
                        'post_time' => $row['created_at']
                    );
                    
                    $postDetails[] = $post; // Add each post to the array
                }
                
                return $postDetails;
            }
            else{
                return false;
            }
        }

        // to get post details for login page 
        public function get_postdetails($email)
        {
            $sql = "SELECT * FROM posts WHERE email='$email' ORDER BY id DESC";
            $result = mysqli_query($this->con, $sql);
            
            $postDetails = array(); // Initialize an empty array
            
            while ($row = $result->fetch_assoc()) {
                $post = array(
                    'id' => $row['id'],
                    'post_img' => $row['post_img'],
                    'post_text' => $row['post_text'],
                    'post_time' => $row['created_at'],
                    'post_like' => $row['likes'],
                    'post_dislike' => $row['dislikes']
                );
                
                $postDetails[] = $post; // Add each post to the array
            }
            
            return $postDetails;
        }     
        
        // for search item
        function get_product($search_str)
        {
            $sql = "SELECT * FROM tbl_register_user";
            if ($search_str != '') {
                $sql .= " WHERE tbl_register_user.name LIKE '%$search_str%' OR tbl_register_user.email LIKE '%$search_str%' OR tbl_register_user.fname LIKE '%$search_str%' OR tbl_register_user.lname LIKE '%$search_str%'";
            }
            else {
                $sql .= ' ORDER BY tbl_register_user.id DESC';
            }
            $res = mysqli_query($this->con, $sql);
            $data = array();
            while ($row = mysqli_fetch_assoc($res)) {
                $data[] = $row;
            }
            return $data;
        }

        // for like and dislike 
        // public function updateLikeCount($postId, $count)
        // {
        //     $query = "UPDATE posts SET likes = likes + $count WHERE id = $postId";
        //     mysqli_query($this->con, $query);
        // }
        
        // public function updateDislikeCount($postId, $count)
        // {
        //     $query = "UPDATE posts SET dislikes = dislikes + $count WHERE id = $postId";
        //     mysqli_query($this->con, $query);
        // }

        // public function getLikeCount($postId)
        // {
        //     $query = "SELECT likes FROM posts WHERE id = $postId";
        //     $result = mysqli_query($this->con, $query);
        //     $row = mysqli_fetch_assoc($result);
        //     return $row['likes'];
        // }

        // public function getDislikeCount($postId)
        // {
        //     $query = "SELECT dislikes FROM posts WHERE id = $postId";
        //     $result = mysqli_query($this->con, $query);
        //     $row = mysqli_fetch_assoc($result);
        //     return $row['dislikes'];
        // }

        // function updateLikeCount($postId, $count)
        // {
        //     $query = "UPDATE posts SET likes = likes + $count WHERE id = $postId";
        //     mysqli_query($this->con, $query);
        // }
        // function getLikeCount($postId)
        // {
        //     $query = "SELECT likes FROM posts WHERE id = $postId";
        //     $result = mysqli_query($this->con, $query);
        //     $row = mysqli_fetch_assoc($result);
        //     return $row['likes'];
        // }        

        // for comments
        // for like 
        function like($post_id,$current_user){
            $query="INSERT INTO likes(post_id,email) VALUES($post_id,$current_user)";
           $poster_id = getPosterId($post_id);
           if($poster_id!=$current_user){
            createNotification($current_user,$poster_id,"liked your post !",$post_id);
           }
           
        
            return mysqli_query($db,$query);
            
        }
        //function checkLikeStatus
        function checkLikeStatus($post_id){
            global $db;
            $current_user = $_SESSION['userdata']['id'];
            $query="SELECT count(*) as row FROM likes WHERE user_id=$current_user && post_id=$post_id";
            $run = mysqli_query($db,$query);
            return mysqli_fetch_assoc($run)['row'];
        }
        function getLikes($post_id){
            global $db;
            $query="SELECT * FROM likes WHERE post_id=$post_id";
            $run = mysqli_query($db,$query);
            return mysqli_fetch_all($run,true);
        }
        
        //function for unlike the post
        function unlike($post_id){
            global $db;
            $current_user=$_SESSION['userdata']['id'];
            $query="DELETE FROM likes WHERE user_id=$current_user && post_id=$post_id";
            
            $poster_id = getPosterId($post_id);
            if($poster_id!=$current_user){
                createNotification($current_user,$poster_id,"unliked your post !",$post_id);
            }
          
            return mysqli_query($db,$query);
        }

}
?>
