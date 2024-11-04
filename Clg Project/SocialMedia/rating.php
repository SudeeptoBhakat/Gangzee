<?php
session_start();

// Simulating database values
$likes = 0;
$dislikes = 0;

// Check if the request contains the necessary data
if (isset($_POST['postId']) && isset($_POST['action'])) {
  $postId = $_POST['postId'];
  $action = $_POST['action'];

  // Perform the action (like or dislike)
  if ($action === 'like') {
    $likes++;
  } elseif ($action === 'dislike') {
    $dislikes++;
  }

  // Return the updated like and dislike counts as JSON
  $response = array('likes' => $likes, 'dislikes' => $dislikes);
  echo json_encode($response);
}
?>