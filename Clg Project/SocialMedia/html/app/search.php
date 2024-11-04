<?php
    include('../../Lib/connect.php');
    $obj=new connect();
    session_start();
?>
<?php
    $search_item=$_GET['str'];
    // echo $search_item;
    $result_array=$obj->get_product($search_item);
    // if (!empty($result_array)) {  
    //     foreach ($result_array as $result) {
    //         // echo $result['id'];
    //     }
    // }
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
      
  </head>
  <body class="  ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
        <div class="iq-top-navbar">
          <div class="iq-navbar-custom">
              <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <div class="iq-navbar-logo d-flex justify-content-between">
                      <a href="../dashboard/index.php">
                          <img src="../assets/images/gangzee.png" class="img-fluid" alt="">
                          <span></span>
                      </a>
                  </div>
                  <div class="iq-search-bar device-search">
                      <form class="searchbox"  role="search" action='search.php' method='GET'>
                          <button class="btn btn-link search-link p-3" type="submit"><i class="ri-search-line"></i></button>
                          <input type="text" name="str" class="text search-input" placeholder="<?php echo $_GET['str']; ?>">
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
      <?php
        if (!empty($result_array)) {  
            foreach ($result_array as $result) {
        ?>    

               <div class="card m-3" id="<?php echo $result['id']; ?>">
                  <div class="card-body">
                        <div class="tab-content">
                              <div class="card-body p-0">
                                 <div class="row">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <div class="">
                                                <a href="#">
                                                <img src="../../<?php echo $result['profile_pic']; ?>" alt="profile-img" class="img-fluid" style="max-width: 15%; height: 15%;">
                                                </a>
                                                <div class="friend-info ms-0">
                                                   <h5><?php echo $result['name']; ?></h5>
                                                   <p class="mb-0"><?php echo $result['email']; ?></p>
                                                </div>
                                             </div>
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle btn btn-primary me-2" id="dropdownMenuButton01" data-bs-toggle="dropdown" aria-expanded="true" role="button">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }
                } else {
                    ?>
                <div class="card m-3">
                  <div class="card-body">
                        <div class="tab-content">
                              <div class="card-body p-0">
                                    <h2 class="text-center">No Data found</h2>
                                </div>
                            </div>
                       </div>
                   </div>
                </div>
                <?php } ?>
            </div>
        </div>
      <!-- <div class="col-sm-12 text-center">
         <img src="../assets/images/page-img/page-load-loader.gif" alt="loader" style="height: 100px;">
      </div> -->
    <!-- Wrapper End-->
    <footer class="iq-footer" style="position: fixed; bottom: 0;">
       <div class="container-fluid">
          <div class="text-center">
                Copyright 2023 <a href="../dashboard/index.php"> Gangzee</a> All Rights Reserved.
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
  </body>
</html>