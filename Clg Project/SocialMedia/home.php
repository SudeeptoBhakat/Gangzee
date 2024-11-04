<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper-core.min.js" integrity="sha384-kfJmldBymtn+YtHy9L0mzZxrJILokjIz/QWwm+jEwL7CVTKKeaSWfKtnpmY9ZtFV" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE1SzF5KpqR5Pz13YfTxbH" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Gangzee/Home</title>
     <style>
    /* Set the video background to cover the entire screen */
    #video-background {
      position: fixed;
      top: 0;
      bottom: 0;
      width: 100%;
      height: 100vh
      z-index: -1;
    }
    .word {
      color: black;
      font: 200 normal 3em 'tahoma';
      padding: 200px;
    }
  </style>
</head>
<body>
      <video id="video-background" style="z-index: -1;" autoplay muted loop>
    <source src="Img\Untitled design.mp4" type="video/mp4">
    </video>
  <!--Navbar--> 
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
      <nav class="navbar navbar-expand-lg navbar-light">
           <!--Container wrapper-->
        <div class="container">
         <!--Navbar brand--> 
            <a class="navbar-brand me-2" href="Home.php"> <img src="Img\gangzee.png" height="50" alt="Gangzee" loading="lazy" style="margin-top: -1px;"/></a>
              <div class="d-flex align-items-center">
                <a href="login.php" type="button" class="btn btn-info px-3 me-2">Log In</a>
                <a href="register.php" type="button" class="btn btn-info me-3">Sign Up</a>
                <a href="admin.php" type="button" class="btn btn-link me-3">Admin</a> 
              </div>
             <!--Collapsible wrapper-->
          </div>
         <!--Container wrapper--> 
        </nav>
      </div>
       <!--Navbar-->
       <div class="fixed-bottom">
      <div class="word"></div>
      </div>
      <!--<div class="text-right h-50">
        <h3 class="text-light" style="text-align: left; margin: 80px; margin-right: 500px; font-style: italic;">Gangzee is a photo and video sharing social networking service. The Web Version allows users to upload media and give user right to speek on all think and share their openions. Posts can be shared publicly or with preapproved followers. Users can browse other users' content by userID. like photos, and follow other users to add their content to a personal feed.</h3>
        <a href="login.php"><h2 class="text-warning" style="text-align: left; margin: 80px;">Let's Make Your Own Gang</h2></a>
      </div>
 Background image-->
<div class="fixed-bottom p-5" >
 <button id="myBtn" class="btn bg-link" onclick="myFunction()" >Pause</button>
</div>
</body>
<script>
  var words = ['Gangzee is a photo and video sharing social networking service.',' The Web Version allows users to upload media and give user right to speek on all think and share their openions.',' Posts can be shared publicly or with preapproved followers.','Users can browse other users content by userID, like photos, and follow other users to add their content to a personal feed.'],
    part,
    i = 0,
    offset = 0,
    len = words.length,
    forwards = true,
    skip_count = 0,
    skip_delay = 18,
    speed = 50;
var wordflick = function () {
  setInterval(function () {
    if (forwards) {
      if (offset >= words[i].length) {
        ++skip_count;
        if (skip_count == skip_delay) {
          forwards = false;
          skip_count = 0;
        }
      }
    }
    else {
      if (offset == 0) {
        forwards = true;
        i++;
        offset = 0;
        if (i >= len) {
          i = 0;
        }
      }
    }
    part = words[i].substr(0, offset);
    if (skip_count == 0) {
      if (forwards) {
        offset++;
      }
      else {
        offset--;
      }
    }
    $('.word').text(part);
  },speed);
};

$(document).ready(function () {
  wordflick();
});


var video = document.getElementById("video-background");
var btn = document.getElementById("myBtn");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
</script>
</html>