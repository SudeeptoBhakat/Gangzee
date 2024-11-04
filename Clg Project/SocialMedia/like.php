<?php 
include('Lib\connect.php');
$obj=new connect();
?>
<?php
	// Assuming you have a database connection established

// Check if the request contains the necessary data
if (isset($_POST['postId']) && isset($_POST['action'])) {
	$postId = $_POST['postId'];
	$action = $_POST['action'];
  
	// Update the like/dislike count in the database
	if ($action == 'like') {
	  // Increase the like count by 1
	  mysqli_query($con, "UPDATE posts SET likes = likes + 1 WHERE id = '$postId'");
	} elseif ($action == 'dislike') {
	  // Increase the dislike count by 1
	  mysqli_query($con, "UPDATE posts SET dislikes = dislikes + 1 WHERE id = '$postId'");
	}
  
	// Retrieve the updated like/dislike counts from the database
	$result = mysqli_query($con, "SELECT likes, dislikes FROM posts WHERE id = '$postId'");
	$row = mysqli_fetch_assoc($result);
	$likes = $row['likes'];
	$dislikes = $row['dislikes'];
  
	// Return the updated counts as JSON response
	$response = array('likes' => $likes, 'dislikes' => $dislikes);
	echo json_encode($response);
  }

?>