<?php
   session_start();
   $result = '';
   if (isset($_GET['result'])) {
    $result = $_GET['result'];
   }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>User Profile</title>
      
      <link rel="shortcut icon" href="../assets/images/favicon.ico" />
      <link rel="stylesheet" href="../assets/css/libs.min.css">
      <link rel="stylesheet" href="../assets/css/socialv.css?v=4.0.0">
      <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
      <link rel="stylesheet" href="../assets/vendor/remixicon/fonts/remixicon.css">
      <link rel="stylesheet" href="../assets/vendor/vanillajs-datepicker/dist/css/datepicker.min.css">
      <link rel="stylesheet" href="../assets/vendor/font-awesome-line-awesome/css/all.min.css">
      <link rel="stylesheet" href="../assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </head>
  <body class="  ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
      <div class="iq-sidebar  sidebar-default ">
          <div id="sidebar-scrollbar">
              <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                      <li class="">
                          <a href="../dashboard/index.php" class=" "> 
                              <i class="las la-newspaper"></i><span>Home</span>
                          </a>
                      </li>
                      <li class="active">
                         <a href="../app/profile.php" class=" ">
                             <i class="las la-user"></i><span>Profile</span>
                          </a>
                      </li>
                      <!-- <li class="">
                         <a href="../app/group.html" class=" ">
                             <i class="las la-users"></i><span>Gang</span>
                          </a>
                      </li> -->
                  </ul>
                  </nav>
                  <div class="p-5"></div>
              </div>
          </div>
      
              <div class="iq-top-navbar">
          <div class="iq-navbar-custom">
              <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <div class="iq-navbar-logo d-flex justify-content-between">
                      <a href="../dashboard/index.php">
                          <img src="../assets/images/gangzee.png" class="img-fluid" alt="">
                          <span></span>
                      </a>
                      <div class="iq-menu-bt align-self-center">
                          <div class="wrapper-menu">
                              <div class="main-circle"><i class="ri-menu-line"></i></div>
                          </div>
                      </div>
                  </div>
                  <div class="iq-search-bar device-search">
                      <form class="searchbox"  role="search" action='search.php' method='GET'>
                          <button class="btn btn-link search-link p-3" type="submit"><i class="ri-search-line"></i></button>
                          <input type="text" name="str" class="text search-input" placeholder="Search here...">
                      </form>

                  </div>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                      data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                      aria-label="Toggle navigation">
                      <i class="ri-menu-3-line"></i>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav  ms-auto navbar-list">
                          <li>
                              <a href="../dashboard/index.php" class="  d-flex align-items-center">
                                  <i class="ri-home-line"></i>
                              </a>
                          </li>
                          <li class="nav-item dropdown">
                               <a href="#" class="dropdown-toggle" id="group-drop" data-bs-toggle="dropdown"
                                      aria-haspopup="true" aria-expanded="false"><i class="ri-group-line"></i></a>
                              <div class="sub-drop sub-drop-large dropdown-menu" aria-labelledby="group-drop">
                                  <div class="card shadow-none m-0">
                                       <div class="card-header d-flex justify-content-between bg-primary">
                                      <div class="header-title">
                                      <h5 class="mb-0 text-white">Friend Request</h5>
                                      </div>
                                      <small class="badge  bg-light text-dark ">None</small>
                                  </div>
                                       <div class="card-body p-0">
                                       <!--<div class="iq-friend-request">
                                              <div class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between">
                                                  <div class="d-flex align-items-center">
                                                          <img class="avatar-40 rounded" src="../assets/images/user/01.jpg"
                                                              alt="">
                                                      <div class="ms-3">
                                                          <h6 class="mb-0 ">Jaques Amole</h6>
                                                          <p class="mb-0">40 friends</p>
                                                      </div>
                                                  </div>
                                                  <div class="d-flex align-items-center">
                                                      <a href="javascript:void();"
                                                          class="me-3 btn btn-primary rounded">Confirm</a>
                                                      <a href="javascript:void();"
                                                          class="me-3 btn btn-secondary rounded">Delete Request</a>
                                                  </div>
                                              </div>
                                          </div> -->
                                          <div class="text-center">
                                              <a href="#" class=" btn text-primary">No request found</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </li>
                          <li class="nav-item dropdown">
                                    <a href="#" class="search-toggle   dropdown-toggle" id="notification-drop" data-bs-toggle="dropdown">
                                        <i class="ri-notification-4-line"></i>
                                    </a>
                                    <div class="sub-drop dropdown-menu" aria-labelledby="notification-drop">
                                        <div class="card shadow-none m-0">
                                            <div class="card-header d-flex justify-content-between bg-primary">
                                            <div class="header-title bg-primary">
                                                        <h5 class="mb-0 text-white">All Notifications</h5>
                                                        </div>
                                                    <small class="badge  bg-light text-dark">None</small>
                                            </div>
                                            <div class="card-body p-0">
                                                <!-- <a href="#" class="iq-sub-card">
                                                    <div class="d-flex align-items-center">
                                                         <div class="">
                                                        <img class="avatar-40 rounded" src="../assets/images/user/01.jpg" alt="">
                                                            </div>
                                                        <div class="ms-3 w-100">
                                                            <h6 class="mb-0 ">Emma Watson Bni</h6>
                                                              <div class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0">95 MB</p>
                                                            <small class="float-right font-size-12">Just Now</small>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </a> -->
                                                <div class="text-center">
                                              <a href="#" class=" btn text-primary">0 Notification</a>
                                          </div>
                                            </div>
                                        </div>
                                    </div>
                          </li>

                          <!-- Notification -->
                          <!-- <li class="nav-item dropdown">
                                    <a href="#" class="dropdown-toggle" id="mail-drop" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ri-mail-line"></i>
                                    </a>
                                    <div class="sub-drop dropdown-menu" aria-labelledby="mail-drop">
                                        <div class="card shadow-none m-0">
                                              <div class="card-header d-flex justify-content-between bg-primary">
                                            <div class="header-title bg-primary">
                                                         <h5 class="mb-0 text-white">All Message</h5>
                                                        </div>
                                                    <small class="badge bg-light text-dark">4</small>
                                                    </div>
                                            <div class="card-body p-0 ">
                                                <a href="#" class="iq-sub-card">
                                                    <div class="d-flex  align-items-center">
                                                        <div class="">
                                                            <img class="avatar-40 rounded" src="../assets/images/user/01.jpg" alt="">
                                                        </div>
                                                        <div class=" w-100 ms-3">
                                                            <h6 class="mb-0 ">Bni Emma Watson</h6>
                                                            <small class="float-left font-size-12">13 Jun</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="iq-sub-card">
                                                    <div class="d-flex align-items-center">
                                                        <div class="">
                                                            <img class="avatar-40 rounded" src="../assets/images/user/02.jpg" alt="">
                                                        </div>
                                                        <div class="ms-3">
                                                            <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                                            <small class="float-left font-size-12">20 Apr</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="iq-sub-card">
                                                    <div class="d-flex align-items-center">
                                                        <div class="">
                                                            <img class="avatar-40 rounded" src="../assets/images/user/03.jpg" alt="">
                                                        </div>
                                                        <div class="ms-3">
                                                            <h6 class="mb-0 ">Why do we use it?</h6>
                                                            <small class="float-left font-size-12">30 Jun</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="iq-sub-card">
                                                    <div class="d-flex align-items-center">
                                                        <div class="">
                                                            <img class="avatar-40 rounded" src="../assets/images/user/04.jpg" alt="">
                                                        </div>
                                                        <div class="ms-3">
                                                            <h6 class="mb-0 ">Variations Passages</h6>
                                                            <small class="float-left font-size-12">12 Sep</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="iq-sub-card">
                                                    <div class="d-flex align-items-center">
                                                        <div class="">
                                                            <img class="avatar-40 rounded" src="../assets/images/user/05.jpg" alt="">
                                                        </div>
                                                        <div class="ms-3">
                                                            <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                                            <small class="float-left font-size-12">5 Dec</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li> -->
                           <li class="nav-item dropdown">
                              <a href="#" class="   d-flex align-items-center dropdown-toggle" id="drop-down-arrow" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <?php
                                    if(!empty($_SESSION['profile-pic'])){ 
                                       echo "<img src=../../". $_SESSION['profile-pic'] . " class='img-fluid rounded-circle me-3' alt=''>";
                                       }
                                    else{
                                       echo "<img src='../assets/images/user.png' class='img-fluid rounded-circle me-3'>";
                                       }
                                 ?>
                                  <div class="caption">
                                      <h6 class="mb-0 line-height">
                                       <?php
                                          echo  $_SESSION["name"] ;
                                       ?>
                                      </h6>
                                  </div>
                              </a>
                              <div class="sub-drop dropdown-menu caption-menu" aria-labelledby="drop-down-arrow">
                                  <div class="card shadow-none m-0">
                                       <div class="card-header  bg-primary">
                                          <div class="header-title">
                                              <h5 class="mb-0 text-white">Hello
                                                <?php
                                                   echo  $_SESSION["name"];
                                                ?></h5>
                                              <span class="text-white font-size-12">Available</span>
                                          </div>
                                      </div>
                                      <div class="card-body p-0 ">
                                          <a href="../app/profile.php" class="iq-sub-card iq-bg-primary-hover">
                                              <div class="d-flex align-items-center">
                                                  <div class="rounded card-icon bg-soft-primary">
                                                      <i class="ri-file-user-line"></i>
                                                  </div>
                                                  <div class="ms-3">
                                                      <h6 class="mb-0 ">My Profile</h6>
                                                      <p class="mb-0 font-size-12">View personal profile details.</p>
                                                  </div>
                                              </div>
                                          </a>
                                          <a href="../app/profile-edit.php" class="iq-sub-card iq-bg-warning-hover">
                                              <div class="d-flex align-items-center">
                                                  <div class="rounded card-icon bg-soft-warning">
                                                      <i class="ri-profile-line"></i>
                                                  </div>
                                                  <div class="ms-3">
                                                      <h6 class="mb-0 ">Edit Profile</h6>
                                                      <p class="mb-0 font-size-12">Modify your personal details.</p>
                                                  </div>
                                              </div>
                                          </a>
                                          <div class="d-inline-block w-100 text-center p-3">
                                              <a class="btn btn-primary iq-sign-btn" href="../../signout.php" role="button">Sign
                                                  out<i class="ri-login-box-line ms-2"></i></a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </li>
                      </ul>               
                  </div>
              </nav>
          </div>
      </div>       

        <div id="content-page" class="content-page">
<div class="container">
   <div class="row">
      <div class="col-sm-12">
      <?php 
      if( $result == 'false'){ ?>
         <div class="alert alert-danger alert-dismissible d-flex align-items-center fade show" role="alert">
             <strong class="mx-2">Opps!</strong> Something went wrong, Please login again.
             <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
         </div>
      <?php } ?>

         <div class="card">
            <div class="card-body profile-page p-0">
               <div class="profile-header">
                  <div class="position-relative">
                  <?php
                     if(($result == 'true') or !empty($_SESSION['coverphoto'])){
                     ?>
                        <img src="../../<?php echo $_SESSION['coverphoto']; ?>" alt="profile-bg" class="rounded img-fluid">
                     <?php 
                     }else{ 
                     ?>
                        <img src="../assets/images/covern.png" alt="profile-bg" class="rounded img-fluid">
                     <?php 
                     }  
                     ?> 

                     <div class="user-detail text-center mb-3">
                        <div class="profile-img">
                        <?php
                           if(!empty($_SESSION['profile-pic'])){ 
                              echo "<img src=../../". $_SESSION['profile-pic'] . " alt='profile-img' class='avatar-130 img-fluid'>";
                              }
                           else{
                              echo "<img src='../assets/images/user-removebg.png' alt='profile-img' class='avatar-130 img-fluid'>";
                              }
                        ?>
                     </div>
                     <div class="profile-detail">
                        <h3 class="">
                        <?php
                            echo  $_SESSION["name"] ;
                        ?>
                        </h3>
                     </div>
                  </div>
                  <div class="profile-info p-3 d-flex align-items-center justify-content-between position-relative">
                              
                     <div class="social-info">
                        <ul class="social-data-block d-flex align-items-center justify-content-between list-inline p-0 m-0">
                           <li class="text-center ps-3">
                              <h6>Posts</h6>
                              <p class="mb-0">0</p>
                           </li>
                           <li class="text-center ps-3">
                              <h6>Followers</h6>
                              <p class="mb-0">0</p>
                           </li>
                           <li class="text-center ps-3">
                              <h6>Following</h6>
                              <p class="mb-0">0</p>
                           </li>
                        </ul>
                     </div>
                     <div class="update-links">
                        <ul class="header-nav list-inline d-flex flex-wrap justify-end p-5">
                           <li><a class="btn-primary" onclick="openForm('cover_img_upload_form')"><i class="ri-pencil-line"></i></a></li>
                           <li><a class="btn-primary" href="../app/profile-edit.php"><i class="ri-settings-4-line"></i></a></li>
                        </ul>
                     </div>
                     <div class="modal" tabindex="-1" role="dialog" id="cover_img_upload_form">
                         <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title">Cover Photo Upload</h5>
                                  <button class="btn" onclick="closeForm('cover_img_upload_form', 'select_cover_img', 'cover_img_display', 'msg0', 'msg1', 'msg2')">Close</button>
                              </div>
                              <!-- Cover Photo Upload -->
                              
                              <div class="modal-body">
                              <img src="" alt="" style="display:none;" class="w-100 rounded border" id="cover_img_display">
                              <form action="../../input_cover_photo.php" id="coverphotoform" method="post" enctype="multipart/form-data"><br>
                              <div><h5 class="text-center">Aspect Ratio: 4 : 1 or Dimensions: 1900px x 475px</h5></div>
                                 <div class="d-flex justify-content-center">
                                    <input class="btn btn-light" type="file" accept="image/*" name="coverphoto" id="select_cover_img" onchange="preview('select_cover_img', 'cover_img_display'); displaySize('select_cover_img', 'msg0', 'msg1', 'msg2');"  required>
                                 </div>
                                 <div class="">
                                       <p id="msg0"></p><p id="msg1"></p><p id="msg2"></p>
                                    </div>
                                 <div class="modal-footer">
                                 <button type="submit" class="btn btn-primary">Uploed</button>
                                 </div>
                                 </form>
                              </div>
                            </div>
                          </div>
                        </div>
                     <script>

                      function openForm(modalId) {
                         document.getElementById(modalId).style.display = "block";
                         }
                         function closeForm(modalId, imageId, inputId, msg0Id, msg1Id, msg2Id) {
                            var input = document.querySelector("#" + imageId);
                            var file = input.files[0];
                            var img = document.querySelector("#" + inputId);
                            var msg0 = document.querySelector("#"+msg0Id);
                            var msg1 = document.querySelector("#"+msg1Id);
                            var msg2 = document.querySelector("#"+msg2Id);
                            var confirmDiscard = confirm("<?php echo $_SESSION['name'];?>,are you sure You want to discard your changes?");
                            if (confirmDiscard) {
                                img.removeAttribute("src");
                                msg0.innerHTML = "";
                                msg1.innerHTML = "";
                                msg2.innerHTML = "";
                                document.getElementById(modalId).style.display = "none";
                            }
                        }                  
                     </script>
                     <!-- For preview the selected cover photo -->
                     <script>
                        function preview(inputId, imageId) {
                          var input = document.querySelector("#" + inputId);
                          var fileobject = input.files[0];
                          var filereader = new FileReader();
                                                
                          filereader.readAsDataURL(fileobject);
                                                
                          filereader.onload = function () {
                            var image_src = filereader.result;
                            var image = document.querySelector("#" + imageId);
                            image.setAttribute('src', image_src);
                            image.setAttribute('style', 'display:');
                          }
                        }

                        // for selected image size
                        function displaySize(inputId, msg0Id, msg1Id, msg2Id) {
                            var fileInput = document.querySelector('#' + inputId);
                            var file = fileInput.files[0];

                            if (file) {
                                var img = new Image();
                           
                                img.onload = function() {
                                    var width = img.width;
                                    var height = img.height;4
                                    
                                    var size = file.size;
                              
                                    if ((width >= 1500 && width <= 2000) || (height >= 200 && height <= 400)) {
                                        document.getElementById(msg0Id).innerHTML = "Width: <strong class='text-success'>" + width + "px</strong>  Height: <strong class='text-success'>" + height + "px</strong>";
                                        document.getElementById(msg1Id).innerHTML = "Size: " + size + " bytes";
                                        document.getElementById(msg2Id).innerHTML = "<strong class='text-success'>Cool,</strong> Perfect Cover Photo";
                                    } else {
                                        document.getElementById(msg0Id).innerHTML = "Width: <strong class='text-danger'>" + width + "px</strong> Height: <strong class='text-danger'>" + height + "px</strong>";
                                        document.getElementById(msg1Id).innerHTML = "Image size: " + size + " bytes";
                                        document.getElementById(msg2Id).innerHTML = "This <strong class='text-danger'>Cover Photo</strong> doesn't fit here";
                                    }
                                };
                             
                                img.src = URL.createObjectURL(file);
                            } else {
                                document.getElementById(msg2Id).innerHTML = "Opps! Please select a photo";
                            }
                        }                       
                     </script>

                        <style>
                        .modal-dialog {
                          margin: "auto";
                        }
                        </style>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="card">
            <div class="card-body p-0">
               <div class="user-tabing">
                  <ul class="nav nav-pills d-flex align-items-center justify-content-center profile-feed-items p-0 m-0">
                     <li class="nav-item col-12 col-sm-3 p-0">
                        <a class="nav-link active" href="#pills-timeline-tab" data-bs-toggle="pill" data-bs-target="#timeline" role="button">Timeline</a>
                     </li>
                     <li class="nav-item col-12 col-sm-3 p-0">
                        <a class="nav-link" href="#pills-about-tab" data-bs-toggle="pill" data-bs-target="#about" role="button">About</a>
                     </li>
                     <li class="nav-item col-12 col-sm-3 p-0">
                        <a class="nav-link" href="#pills-friends-tab" data-bs-toggle="pill" data-bs-target="#friends" role="button">Friends</a>
                     </li>
                     <li class="nav-item col-12 col-sm-3 p-0">
                        <a class="nav-link" href="#pills-photos-tab" data-bs-toggle="pill" data-bs-target="#photos" role="button">Photos</a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="col-sm-12">
         <div class="tab-content">
            <div class="tab-pane fade show active" id="timeline" role="tabpanel">
               <div class="card-body p-0">
                  <div class="row">
                     <div class="col-lg-4">

                        <!-- Add photo section  -->
                        <div class="card">
                           <div class="card-header d-flex justify-content-between">
                              <div class="header-title">
                                 <h4 class="card-title">Photos</h4>
                              </div>
                              <div class="card-header-toolbar d-flex align-items-center">
                                 <p class="m-0"><a class="btn btn-link" onclick="openForm('post_modal')">Add Photo </a></p>
                              </div>
                           </div>
                           <div class="card-body">
                              <ul class="profile-img-gallary p-0 m-0 list-unstyled">
                                 
                              <?php
                                 if (!empty($_SESSION['posts'])){
                                    foreach ($_SESSION['posts'] as $post) {
                              ?>
                                    <li class=""><a href="#"><img src="../../<?php echo $post['post_img'];?>" alt="gallary-image" class="img-fluid" /></a></li>
                                 <?php }
                                 } else{ ?>
                                    <li class=""><a href="#"><img src="../assets/images/post.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                                 <?php } ?>
                              </ul>
                           </div>
                        </div>

                        
                        <!-- friend list section  -->
                        <div class="card">
                           <div class="card-header d-flex justify-content-between">
                              <div class="header-title">
                                 <h4 class="card-title">Friends</h4>
                              </div>
                              <div class="card-header-toolbar d-flex align-items-center">
                                 <p class="m-0"><a href="javacsript:void();">Add New </a></p>
                              </div>
                           </div>
                           <!-- <div class="card-body">
                              <ul class="profile-img-gallary p-0 m-0 list-unstyled">
                                 <li class="">
                                    <a href="#">
                                    <img src="../assets/images/user/05.jpg" alt="gallary-image" class="img-fluid" /></a>
                                    <h6 class="mt-2 text-center">Anna Rexia</h6>
                                 </li>
                                 <li class="">
                                    <a href="#"><img src="../assets/images/user/06.jpg" alt="gallary-image" class="img-fluid" /></a>
                                    <h6 class="mt-2 text-center">Tara Zona</h6>
                                 </li>
                                 <li class="">
                                    <a href="#"><img src="../assets/images/user/07.jpg" alt="gallary-image" class="img-fluid" /></a>
                                    <h6 class="mt-2 text-center">Polly Tech</h6>
                                 </li>
                                 <li class="">
                                    <a href="#"><img src="../assets/images/user/08.jpg" alt="gallary-image" class="img-fluid" /></a>
                                    <h6 class="mt-2 text-center">Bill Emia</h6>
                                 </li>
                                 <li class="">
                                    <a href="#"><img src="../assets/images/user/09.jpg" alt="gallary-image" class="img-fluid" /></a>
                                    <h6 class="mt-2 text-center">Moe Fugga</h6>
                                 </li>
                                 <li class="">
                                    <a href="#"><img src="../assets/images/user/10.jpg" alt="gallary-image" class="img-fluid" /></a>
                                    <h6 class="mt-2 text-center">Hal Appeno </h6>
                                 </li>
                                 <li class="">
                                    <a href="#"><img src="../assets/images/user/07.jpg" alt="gallary-image" class="img-fluid" /></a>
                                    <h6 class="mt-2 text-center">Zack Lee</h6>
                                 </li>
                                 <li class="">
                                    <a href="#"><img src="../assets/images/user/06.jpg" alt="gallary-image" class="img-fluid" /></a>
                                    <h6 class="mt-2 text-center">Terry Aki</h6>
                                 </li>
                                 <li class="">
                                    <a href="#"><img src="../assets/images/user/05.jpg" alt="gallary-image" class="img-fluid" /></a>
                                    <h6 class="mt-2 text-center">Greta Life</h6>
                                 </li>
                              </ul>
                           </div> -->
                        </div>
                     </div>

                     <!-- Create Post -->

                     <div class="col-lg-8">
                        <div id="post-modal-data" class="card">
                           <div class="card-header d-flex justify-content-between">
                              <div class="header-title">
                                 <h4 class="card-title">Create Post</h4>
                              </div>
                           </div>
                           <div class="card-body">
                              <div class="d-flex align-items-center">
                                 <div class="user-img">
                                 <?php
                                    if(!empty($_SESSION['profile-pic'])){ 
                                       echo "<img src=../../". $_SESSION['profile-pic'] . " alt='userimg' class='avatar-60 rounded-circle'>";
                                       }
                                    else{
                                       echo "<img src='../assets/images/user.png' alt='userimg' class='avatar-60 rounded-circle'>";
                                       }
                                 ?>
                                    <!-- <img src="../assets/images/user/1.jpg" alt="userimg" class="avatar-60 rounded-circle"> -->
                                 </div>
                                 <form class="post-text ms-3 w-100 "  data-bs-toggle="modal" data-bs-target="#post-modal" action="#">
                                    <input type="text" class="form-control rounded" onclick="openForm('post_modal')" placeholder="Write something here..." style="border:none;">
                                 </form>
                              </div>
                           </div>
                           <div class="modal" tabindex="-1" role="dialog" id="post_modal">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h5 class="modal-title"> Create Post</h5>
                                  <button class="btn" onclick="closemodal()"><i class="ri-close-fill"></i></button>
                              </div>                              
                              <div class="modal-body">
                              <img src="" alt="" style="display:none;" class="w-100 rounded border" id="post_img_display">
                              <div class="d-flex align-items-center">
                              <div class="user-img">
                                 <?php
                                     if(!empty($_SESSION['profile-pic'])){ 
                                        echo "<img src=../../". $_SESSION['profile-pic'] . " alt='userimg' class='avatar-60 rounded-circle img-fluid'>";
                                        }
                                     else{
                                        echo "<img src='../assets/images/user.png' alt='userimg' class='avatar-60 rounded-circle img-fluid'>";
                                        }
                                 ?>
                                 </div>
                                 <form class="post-text ms-3 w-100" action="../../post_input.php" id="" method="post" enctype="multipart/form-data">
                                 <input type="text" class="form-control rounded" name="posttext" placeholder="Write something here..." style="border:none;">
                              </div>
                              <hr>
                              <div class="d-flex justify-content-around">
                                 <div class="bg-soft-primary rounded p-2 w-100">
                                    <img src="../assets/images/small/07.png" class="img-fluid">Add Photo
                                    <input type="file" accept="image/*" name="post_img" id="create_post_img" onchange="preview('create_post_img', 'post_img_display')"; required> 
                                 </div>
                              </div>
                                 <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary  d-block w-50 mt-3">Post your image</button>
                                 </div>
                                 </form>
                              </div>
                            </div>
                          </div>
                        </div>
                        <script>
                           function closemodal() {
                              var input = document.getElementById("create_post_img");
                              var file = input.files[0];
                              var img = document.querySelector("#post_img_display");
                              var confirmDiscard = confirm("<?php echo $_SESSION['name']; ?>, are you sure you want to discard your changes?");

                              if (confirmDiscard) {
                                 img.removeAttribute("src");
                                 document.getElementById("post_modal").style.display = "none";
                                 // event.preventDefault();
                              } else {
                                 // event.preventDefault(); // Prevent form submission
                              }
                           }
                        </script>
                        </div> 


                        <!-- Post Style/Html -->
                        
                        <div class="card">
                           <div class="card-body">
                              <div class="post-item">
                                 <?php
                                    if (!empty($_SESSION['posts'])){ 
                                       foreach ($_SESSION['posts'] as $post) { ?>
                                 <div class="post-item" id="<?php echo $post['id']; ?>">
                                 <div class="user-post-data pb-3">
                                    <div class="d-flex justify-content-between">
                                       <div class="me-3">
                                          <img class="rounded-circle  avatar-60" src="../../<?php echo $_SESSION['profile-pic']; ?>" alt="">
                                       </div>
                                       <div class="w-100">
                                          <div class="d-flex justify-content-between flex-wrap">
                                             <div class="">
                                                <h5 class="mb-0 d-inline-block"><a href="profile.php" class=""><?php echo $_SESSION['fname']." ".$_SESSION['lname'] ?></a></h5>
                                                <p class="ms-1 mb-0 d-inline-block"><?php echo $post['post_time']; ?></p>                                                                                        
                                                <p class="mb-0"><?php echo $post['post_text']; ?></p>                                                
                                             </div>
                                             <div class="card-post-toolbar">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                                   <i class="ri-more-fill"></i>
                                                   </span>
                                                   <div class="dropdown-menu m-0 p-0">
                                                      <a class="dropdown-item p-3" href="#">
                                                         <div class="d-flex align-items-top">
                                                           <i class="ri-pencil-line h4"></i>
                                                            <div class="data ms-2">
                                                               <h6>Edit Post</h6>
                                                               <p class="mb-0">Update your post and saved items</p>
                                                            </div>
                                                         </div>
                                                      </a>
                                                      <a class="dropdown-item p-3" href="#">
                                                         <div class="d-flex align-items-top">
                                                            <i class="ri-close-circle-line h4"></i>
                                                            <div class="data ms-2">
                                                               <h6>Hide From Timeline</h6>
                                                               <p class="mb-0">See fewer posts like this.</p>
                                                            </div>
                                                         </div>
                                                      </a>
                                                      <a class="dropdown-item p-3" href="#">
                                                         <div class="d-flex align-items-top">
                                                           <i class="ri-delete-bin-7-line h4"></i>
                                                            <div class="data ms-2">
                                                               <h6>Delete</h6>
                                                               <p class="mb-0">Remove thids Post on Timeline</p>
                                                            </div>
                                                         </div>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="user-post">
                                    <img src="../../<?php echo $post['post_img']; ?>" alt="post-image" class="img-fluid w-100" />
                                 </div>
                                 <div class="comment-area mt-3">
                                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                                       <div class="like-block position-relative d-flex align-items-center">
                                       
                                                   <div class="like-data">
                                                     <button class="like_btn btn" data-post-id='<?php echo $post['id']; ?>' title="Like">Like</button>
                                                     <button class="unlike_btn btn" data-post-id='<?php echo $post['id']; ?>' title="Dislike">Dislike</button>
                                                     <span class="likecount" id="likecount<?php echo $post['id']; ?>">0</span>
                                                   </div>

                                           </div>
                                                 <!-- Include jQuery library -->
                                                   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                                   <script>
                                                      //for like the post



                                                      $(".like_btn").click(function () {
                                                          var post_id_v = $(this).data('postId');
                                                          var button = this;
                                                          $(button).attr('disabled', true);
                                                          $.ajax({
                                                              url: 'ajax.php?like',
                                                              method: 'post',
                                                              dataType: 'json',
                                                              data: { post_id: post_id_v},
                                                              success: function (response) {
                                                                  console.log(response);
                                                                  if (response.status) {
                                                                  
                                                                      $(button).attr('disabled', false);
                                                                      $(button).hide()
                                                                      $(button).siblings('.unlike_btn').show();
                                                                      $('#likecount' + post_id_v).text($('#likecount' + post_id_v).text() - (-1));
                                                                      location.reload();
                                                                  
                                                                  } else {
                                                                      $(button).attr('disabled', false);
                                                                  
                                                                      alert('something is wrong,try again after some time');
                                                                  
                                                                  }
                                                               
                                                               
                                                              }
                                                          });
                                                      });



                                                      $(".unlike_btn").click(function () {
                                                          var post_id_v = $(this).data('postId');
                                                          var button = this;
                                                          $(button).attr('disabled', true);
                                                          $.ajax({
                                                              url: 'ajax.php?unlike',
                                                              method: 'post',
                                                              dataType: 'json',
                                                              data: { post_id: post_id_v },
                                                              success: function (response) {
                                                            
                                                                  if (response.status) {
                                                                  
                                                                      $(button).attr('disabled', false);
                                                                      $(button).hide()
                                                                      $(button).siblings('.like_btn').show();
                                                                      // location.reload();
                                                                      $('#likecount' + post_id_v).text($('#likecount' + post_id_v).text() - 1);
                                                                  
                                                                  } else {
                                                                      $(button).attr('disabled', false);
                                                                  
                                                                      alert('something is wrong,try again after some time');
                                                                  
                                                                  
                                                                  }
                                                               }
                                                          });
                                                      });

                                                   </script>

                                             <div class="total-comment-block ">
                                                   <span role="button">20 Comment</span>
                                             </div>
                                       </div>
                                    </div>
                                    <hr>
                                    <ul class="post-comments p-0 m-0">
                                       <li class="mb-2">
                                          <div class="d-flex flex-wrap">
                                             <div class="user-img">
                                                <img src="../assets/images/user/02.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                                             </div>
                                             <div class="comment-data-block ms-3">
                                                <h6>Monty Carlo</h6>
                                                <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                <div class="d-flex flex-wrap align-items-center comment-activity">
                                                   <a href="#">like</a>
                                                   <a href="#">reply</a>
                                                   <a href="#">translate</a>
                                                   <span> 5 min </span>
                                                </div>
                                             </div>
                                          </div>
                                       </li>
                                    </ul>
                                    <form class="comment-text d-flex align-items-center mt-3" action="../../comment.php" method="post">
                                       <input type="text" name="comment" class="form-control rounded" placeholder="Enter Your Comment">
                                       <div class="comment-attagement d-flex">
                                          <button type="submit" class="btn">Post</button>
                                       </div>
                                    </form>
                                 </div>
                                 <br><br>
                              <?php }
                              } ?>
                           </div>
                              <!-- Post end -->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade" id="about" role="tabpanel" >
               <div class="card">
                  <div class="card-body">
                     <div class="row">
                        <div class="col-md-3">
                           <ul class="nav nav-pills basic-info-items list-inline d-block p-0 m-0">
                              <li>
                                 <a class="nav-link active" href="#v-pills-details-tab" data-bs-toggle="pill" data-bs-target="#v-pills-details-tab" role="button">About <?php echo $_SESSION['name']; ?></a>
                              </li>
                              <li>
                                 <a class="nav-link " href="#v-pills-basicinfo-tab" data-bs-toggle="pill" data-bs-target="#v-pills-basicinfo-tab" role="button">Contact details</a>
                              </li>
                              
                           </ul>
                        </div>
                        <div class="col-md-9 ps-4">
                           <div class="tab-content" >
                              <div class="tab-pane fade active show" id="v-pills-details-tab" role="tabpanel" aria-labelledby="v-pills-details-tab">
                                 <h4 class="mt-3 mb-3">Full Name</h4>
                                 <p><?php echo $_SESSION['fname'] ." ". $_SESSION['lname']; ?></p>
                                 <h4 class="mb-3">About You</h4>
                                 <p><?php echo $_SESSION['bio']; ?></p>
                                 <h4 class="mt-3 mb-3">Gender</h4>
                                 <p><?php echo $_SESSION['gen']; ?></p>
                                 <h4 class="mt-3 mb-3">Date Of Birth</h4>
                                 <p><?php echo $_SESSION['dob']; ?></p>
                                 <h4 class="mt-3 mb-3">Marital Status</h4>
                                 <p><?php echo $_SESSION['m_status']; ?></p>
                              </div>

                              <div class="tab-pane fade" id="v-pills-basicinfo-tab" role="tabpanel"  aria-labelledby="v-pills-basicinfo-tab">
                                 <h4>Contact Information</h4>
                                 <hr>
                                 <div class="row">
                                    <div class="col-3">
                                       <h6>Email</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0"><?php echo $_SESSION['email']; ?></p>
                                    </div>
                                    <div class="col-3">
                                       <h6>Mobile</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0"><?php echo $_SESSION['phno']; ?></p>
                                    </div>
                                    <div class="col-3">
                                       <h6>District</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0"><?php echo $_SESSION['dist']; ?></p>
                                    </div>
                                    <div class="col-3">
                                       <h6>Address</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0"><?php echo $_SESSION['city']; ?></p>
                                    </div>
                                 </div>
                              </div>
                              
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade" id="friends" role="tabpanel">
               <div class="card">
                  <div class="card-body">
                     <h2>Friends</h2>
                     <div class="friend-list-tab mt-2">
                        <ul class="nav nav-pills d-flex align-items-center justify-content-left friend-list-items p-0 mb-2">
                           <li>
                              <a class="nav-link active" data-bs-toggle="pill" href="#pill-all-friends" data-bs-target="#all-feinds">All Friends</a>
                           </li>
                           <li>
                              <a class="nav-link" data-bs-toggle="pill" href="#pill-recently-add" data-bs-target="#recently-add">Recently Added</a>
                           </li>
                           <li>
                              <a class="nav-link" data-bs-toggle="pill" href="#pill-closefriends" data-bs-target="#closefriends"> Close friends</a>
                           </li>
                           <li>
                              <a class="nav-link" data-bs-toggle="pill" href="#pill-home" data-bs-target="#home-town"> Home/Town</a>
                           </li>
                           <li>
                              <a class="nav-link" data-bs-toggle="pill" href="#pill-following" data-bs-target="#following">Following</a>
                           </li>
                        </ul>
                        <div class="tab-content">
                           <div class="tab-pane fade active show" id="all-friends" role="tabpanel">
                              <div class="card-body p-0">
                                 <div class="row">
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/05.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Petey Cruiser</h5>
                                                   <p class="mb-0">15  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton01" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton01">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/06.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Anna Sthesia</h5>
                                                   <p class="mb-0">50  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton02" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton02">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/07.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Paul Molive</h5>
                                                   <p class="mb-0">10  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton03" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton03">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/08.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Gail Forcewind</h5>
                                                   <p class="mb-0">20  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton04" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton04">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/09.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Paige Turner</h5>
                                                   <p class="mb-0">12  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton05" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton05">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/10.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>b Frapples</h5>
                                                   <p class="mb-0">6  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton06" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton06">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/13.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Walter Melon</h5>
                                                   <p class="mb-0">30  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton07" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton07">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/14.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Barb Ackue</h5>
                                                   <p class="mb-0">14  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton08" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton08">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/15.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Buck Kinnear</h5>
                                                   <p class="mb-0">16  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton09" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton09">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/16.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Ira Membrit</h5>
                                                   <p class="mb-0">22  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton10" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton10">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/17.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Shonda Leer</h5>
                                                   <p class="mb-0">10  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton11" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton11">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/18.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>ock Lee</h5>
                                                   <p class="mb-0">18  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton12" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton12">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/19.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Maya Didas</h5>
                                                   <p class="mb-0">40  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton13" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton13">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/05.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Rick O'Shea</h5>
                                                   <p class="mb-0">50  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton14" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton14">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/06.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Pete Sariya</h5>
                                                   <p class="mb-0">5  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton15" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton15">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/07.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Monty Carlo</h5>
                                                   <p class="mb-0">2  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton16" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton16">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/08.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Sal Monella</h5>
                                                   <p class="mb-0">0  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton17" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton17">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/09.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Sue Vaneer</h5>
                                                   <p class="mb-0">25  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton18" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton18">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/10.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Cliff Hanger</h5>
                                                   <p class="mb-0">18  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton19" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton19">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/05.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Barb Dwyer</h5>
                                                   <p class="mb-0">23  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton20" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton20">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/06.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Terry Aki</h5>
                                                   <p class="mb-0">8  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton21" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton21">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/13.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Cory Ander</h5>
                                                   <p class="mb-0">7  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton22" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton22">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/14.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Robin Banks</h5>
                                                   <p class="mb-0">14  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton23" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton23">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/15.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Jimmy Changa</h5>
                                                   <p class="mb-0">10  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton24" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton24">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/16.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Barry Wine</h5>
                                                   <p class="mb-0">18  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton25" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton25">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/17.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Poppa Cherry</h5>
                                                   <p class="mb-0">16  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton26" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton26">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/18.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Zack Lee</h5>
                                                   <p class="mb-0">33  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton27" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton27">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/19.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Don Stairs</h5>
                                                   <p class="mb-0">15  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton28" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton28">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/05.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Peter Pants</h5>
                                                   <p class="mb-0">12  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton29" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton29">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/06.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Hal Appeno </h5>
                                                   <p class="mb-0">13  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton30" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton30">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="recently-add" role="tabpanel">
                              <div class="card-body p-0">
                                 <div class="row">
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/07.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Otto Matic</h5>
                                                   <p class="mb-0">4  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton31" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton31">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/08.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Moe Fugga</h5>
                                                   <p class="mb-0">16  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton32" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton32">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/09.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Tom Foolery</h5>
                                                   <p class="mb-0">14  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton33" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton33">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/10.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Bud Wiser</h5>
                                                   <p class="mb-0">16  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton34" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton34">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/15.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Polly Tech</h5>
                                                   <p class="mb-0">10  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton35" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton35">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/16.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Holly Graham</h5>
                                                   <p class="mb-0">8  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton36" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton36">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/17.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Tara Zona</h5>
                                                   <p class="mb-0">5  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton37" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton37">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/18.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Barry Cade</h5>
                                                   <p class="mb-0">20  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton38" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton38">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="closefriends" role="tabpanel">
                              <div class="card-body p-0">
                                 <div class="row">
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/19.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Bud Wiser</h5>
                                                   <p class="mb-0">32  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton39" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton39">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/05.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Otto Matic</h5>
                                                   <p class="mb-0">9  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton40" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton40">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/06.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Peter Pants</h5>
                                                   <p class="mb-0">2  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton41" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton41">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/07.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Zack Lee</h5>
                                                   <p class="mb-0">15  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton42" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton42">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/08.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Barry Wine</h5>
                                                   <p class="mb-0">36  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton43" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton43">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/09.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Robin Banks</h5>
                                                   <p class="mb-0">22  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton44" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton44">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/10.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Cory Ander</h5>
                                                   <p class="mb-0">18  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton45" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton45">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/15.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Moe Fugga</h5>
                                                   <p class="mb-0">12  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton46" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton46">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/16.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Polly Tech</h5>
                                                   <p class="mb-0">30  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton47" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton47">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/17.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Hal Appeno</h5>
                                                   <p class="mb-0">25  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton48" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton48">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="home-town" role="tabpanel">
                              <div class="card-body p-0">
                                 <div class="row">
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/18.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Paul Molive</h5>
                                                   <p class="mb-0">14  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton49" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton49">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/19.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Paige Turner</h5>
                                                   <p class="mb-0">8  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton50" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton50">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/05.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Barb Ackue</h5>
                                                   <p class="mb-0">23  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton51" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton51">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/06.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Ira Membrit</h5>
                                                   <p class="mb-0">16  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton52" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton52">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/07.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Maya Didas</h5>
                                                   <p class="mb-0">12  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton53" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton53">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="following" role="tabpanel">
                              <div class="card-body p-0">
                                 <div class="row">
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/05.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Maya Didas</h5>
                                                   <p class="mb-0">20  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton54" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton54">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/06.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Monty Carlo</h5>
                                                   <p class="mb-0">3  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton55" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton55">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/07.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Cliff Hanger</h5>
                                                   <p class="mb-0">20  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton56" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton56">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/08.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>b Ackue</h5>
                                                   <p class="mb-0">12  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton57" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton57">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/09.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Bob Frapples</h5>
                                                   <p class="mb-0">12  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton58" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton58">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/10.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Anna Mull</h5>
                                                   <p class="mb-0">6  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton59" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton59">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/15.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>ry Wine</h5>
                                                   <p class="mb-0">15  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton60" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton60">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/16.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Don Stairs</h5>
                                                   <p class="mb-0">12  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton61" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton61">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/17.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Peter Pants</h5>
                                                   <p class="mb-0">8  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton62" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton62">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/18.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Polly Tech</h5>
                                                   <p class="mb-0">18  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton63" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton63">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/19.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Tara Zona</h5>
                                                   <p class="mb-0">30  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton64" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton64">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/05.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Arty Ficial</h5>
                                                   <p class="mb-0">15  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton65" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton65">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/06.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Bill Emia</h5>
                                                   <p class="mb-0">25  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton66" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton66">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/07.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Bill Yerds</h5>
                                                   <p class="mb-0">9  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton67" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton67">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 mb-3">
                                       <div class="iq-friendlist-block">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="d-flex align-items-center">
                                                <a href="#">
                                                <img src="../assets/images/user/08.jpg" alt="profile-img" class="img-fluid">
                                                </a>
                                                <div class="friend-info ms-3">
                                                   <h5>Matt Innae</h5>
                                                   <p class="mb-0">19  friends</p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton68" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                   <i class="ri-check-line me-1 text-white"></i> Friend
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton68">
                                                      <a class="dropdown-item" href="#">Get Notification</a>
                                                      <a class="dropdown-item" href="#">Close Friend</a>
                                                      <a class="dropdown-item" href="#">Unfollow</a>
                                                      <a class="dropdown-item" href="#">Unfriend</a>
                                                      <a class="dropdown-item" href="#">Block</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade" id="photos" role="tabpanel">
               <div class="card">
                  <div class="card-body">
                     <h2>Photos</h2>
                     <div class="friend-list-tab mt-2">
                        <ul class="nav nav-pills d-flex align-items-center justify-content-left friend-list-items p-0 mb-2">
                           <li>
                              <a class="nav-link active" data-bs-toggle="pill" href="#pill-photosofyou" data-bs-target="#photosofyou">Photos of You</a>
                           </li>
                           <li>
                              <a class="nav-link" data-bs-toggle="pill" href="#pill-your-photos" data-bs-target="#your-photos">Your Photos</a>
                           </li>
                        </ul>
                        <div class="tab-content">
                           <div class="tab-pane fade active show" id="photosofyou" role="tabpanel">
                              <div class="card-body p-0">
                                 <div class="d-grid gap-2 d-grid-template-1fr-13">
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/../assets/images/page-img/51.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/52.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/53.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/54.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/55.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/56.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/57.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/58.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/59.jpg" class="img-fluid rounded" alt="image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/60.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/61.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/62.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/63.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/64.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/65.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/51.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/52.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/53.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/54.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/55.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/56.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/57.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/58.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/59.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="your-photos" role="tabpanel">
                              <div class="card-body p-0">
                                 <div class="d-grid gap-2 d-grid-template-1fr-13 ">
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/51.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/52.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/53.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/54.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/55.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/56.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/57.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/58.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/59.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="../assets/images/page-img/60.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-sm-12 text-center">
         <img src="../assets/images/page-img/page-load-loader.gif" alt="loader" style="height: 100px;">
      </div>
   </div>
</div>
      </div>
    </div>
    <!-- Wrapper End-->
    <footer class="iq-footer bg-white">
       <div class="container-fluid">
          <div class="row">
             <div class="col-lg-6">
                <ul class="list-inline mb-0">
                   <li class="list-inline-item"><a href="../dashboard/privacy-policy.html">Privacy Policy</a></li>
                   <li class="list-inline-item"><a href="../dashboard/terms-of-service.html">Terms of Use</a></li>
                </ul>
             </div>
             <div class="col-lg-6 d-flex justify-content-end">
                Copyright 2020 <a href="#">SocialV</a> All Rights Reserved.
             </div>
          </div>
       </div>
    </footer>    <!-- Backend Bundle JavaScript -->
    <script src="../assets/js/libs.min.js"></script>
    <!-- slider JavaScript -->
    <script src="../assets/js/slider.js"></script>
    <!-- masonry JavaScript --> 
    <script src="../assets/js/masonry.pkgd.min.js"></script>
    <!-- SweetAlert JavaScript -->
    <script src="../assets/js/enchanter.js"></script>
    <!-- SweetAlert JavaScript -->
    <script src="../assets/js/sweetalert.js"></script>
    <!-- app JavaScript -->
    <script src="../assets/js/charts/weather-chart.js"></script>
    <script src="../assets/js/app.js"></script>
    <script src="../vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>
    <script src="../assets/js/lottie.js"></script>
    

    <!-- offcanvas start -->
 
    <div class="offcanvas offcanvas-bottom share-offcanvas" tabindex="-1" id="share-btn" aria-labelledby="shareBottomLabel">
       <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="shareBottomLabel">Share</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
       </div>
       <div class="offcanvas-body small">
          <div class="d-flex flex-wrap align-items-center">
             <div class="text-center me-3 mb-3">
                <img src="../assets/images/icon/08.png" class="img-fluid rounded mb-2" alt="">
                <h6>Facebook</h6>
             </div>
             <div class="text-center me-3 mb-3">
                <img src="../assets/images/icon/09.png" class="img-fluid rounded mb-2" alt="">
                <h6>Twitter</h6>
             </div>
             <div class="text-center me-3 mb-3">
                <img src="../assets/images/icon/10.png" class="img-fluid rounded mb-2" alt="">
                <h6>Instagram</h6>
             </div>
             <div class="text-center me-3 mb-3">
                <img src="../assets/images/icon/11.png" class="img-fluid rounded mb-2" alt="">
                <h6>Google Plus</h6>
             </div>
             <div class="text-center me-3 mb-3">
                <img src="../assets/images/icon/13.png" class="img-fluid rounded mb-2" alt="">
                <h6>In</h6>
             </div>
             <div class="text-center me-3 mb-3">
                <img src="../assets/images/icon/12.png" class="img-fluid rounded mb-2" alt="">
                <h6>YouTube</h6>
             </div>
          </div>
       </div>
    </div>
  </body>
</html>