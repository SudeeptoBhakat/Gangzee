<?php
    session_start();
?>
<?php
  $result=-1;
  if(isset($_GET['result'])){
    $result=$_GET['result'];
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Edit Profile</title>
      
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
    <!-- Wrapper Start -->
    <div class="wrapper">
      <div class="iq-sidebar  sidebar-default ">
          <div id="sidebar-scrollbar">
              <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                      <li class="">
                          <a href="../dashboard/index.php" class=" "> 
                              <i class="las la-newspaper"></i><span>Newsfeed</span>
                          </a>
                      </li>
                      <li class="">
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
                      <a href="../dashboard/index.html">
                          <img src="../assets/images/gangzee.png" class="img-fluid" alt="">
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
                                      <small class="badge  bg-light text-dark ">1</small>
                                  </div>
                                      <div class="card-body p-0">
                                          <div class="iq-friend-request">
                                              <div
                                                  class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between">
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
                                          </div>
                                          <div class="text-center">
                                              <a href="#" class=" btn text-primary">View More Request</a>
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
                                                    <small class="badge  bg-light text-dark">1</small>
                                            </div>
                                            <div class="card-body p-0">
                                                <a href="#" class="iq-sub-card">
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
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                           <li class="nav-item dropdown">
                              <a href="#" class="d-flex align-items-center dropdown-toggle" id="drop-down-arrow" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <?php
                                      if(!empty($_SESSION['profile-pic'])){ 
                                      echo "<img src=../../". $_SESSION['profile-pic'] . " alt='userimg' class='img-fluid rounded-circle me-3'>";
                                      }
                                    else{
                                      echo "<img src='../assets/images/user.png' alt='userimg' class='img-fluid rounded-circle me-3'>";
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
                                                ?>
                                              </h5>
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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="iq-edit-list">
                            <ul class="iq-edit-profile row nav nav-pills d-flex justify-content-around">
                                <li class="col-md-3 p-0">
                                    <a class="nav-link active" data-bs-toggle="pill" href="#personal-information">
                                        Personal Information
                                    </a>
                                </li>
                                <li class="col-md-3 p-0">
                                    <a class="nav-link" data-bs-toggle="pill" href="#chang-pwd">
                                        Change Password
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="iq-edit-list-data">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Personal Information</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                <?php
                                if (isset($_GET['login'])=='failed')
                                   {    
                                ?>
                                <div class="alert alert-danger alert-dismissible fade show">
                                  <strong>Error!</strong> Something Went Wrong, Please login again.
                                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                  </div>
                                <?php
                                   }
                                ?>
                                    <form action="../../save-user-personal-data.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group row align-items-center">
                                            <div class="col-md-12">
                                                <div class="profile-img-edit">
                                                <img class="profile-pic" src="../assets/images/user.png" alt="profile-pic">
                                                <!-- <div class="p-image">
                                                    <i class="ri-pencil-line upload-button text-white"></i>
                                                    <input class="file-upload" type="file" accept="image/*" name="profile-pic"/>
                                                </div> -->
                                                <div class="p-image">
                                                  <label for="profile-pic-input">
                                                    <i class="ri-pencil-line button text-white"></i>
                                                  </label>
                                                  <input class="file-upload" type="file" accept="image/*" name="profile-pic" id="profile-pic-input"/>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" row align-items-center">
                                            <div class="form-group col-sm-6">
                                                <label for="fname"  class="form-label">First Name:</label>
                                                <input type="text" class="form-control" id="fname" placeholder="First Name" name="fname">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="lname" class="form-label">Last Name: </label>
                                                <input type="text" class="form-control" id="lname" placeholder="Last Name" name="lname">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="uname" class="form-label">Phone Number:</label>
                                                <input type="number" class="form-control" id="uname" placeholder="1234567890" name="phno" >
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="cname" class="form-label">local Address: </label>
                                                <input type="text" class="form-control" id="cname" placeholder="City Center, School para" name="city" >
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label class="form-label d-block">Gender:</label>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gen" id="inlineRadio10" value="Male" >
                                                    <label class="form-check-label" for="inlineRadio10"> Male</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gen" id="inlineRadio11" value="Female" >
                                                    <label class="form-check-label" for="inlineRadio11">Female</label>
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="dob" class="form-label">Date Of Birth:</label>
                                                <input type="date" class="form-control" id="dob" placeholder="DD/MM/YYYY" name="dob" >
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label class="form-label">Marital Status:</label>
                                            <select class="form-select" aria-label="Default select example" name="m-status">
                                                    <option selected="" value="Single">Single</option>
                                                    <option value="Married">Married</option>
                                                    <option value="Widowed">Widowed</option>
                                                    <option value="Divorced">Divorced</option>
                                                    <option value="Separated">Separated</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label class="form-label">District: </label>
                                                <select class="form-select" aria-label="Default select example 3" name="dist">
                                                <option value="Alipurduar">Alipurduar</option>
                                                <option value="Bankura">Bankura</option>
                                                <option value="Birbhum">Birbhum</option>
                                                <option value="Cooch Behar">Cooch Behar</option>
                                                <option value="Dakshin Dinajpur (South Dinajpur)">Dakshin Dinajpur (South Dinajpur)</option>
                                                <option value="Darjeeling">Darjeeling</option>
                                                <option value="Howrah">Howrah</option>
                                                <option value="Jalpaiguri">Jalpaiguri</option>
                                                <option value="Jhargram">Jhargram</option>
                                                <option value="Kalimpong">Kalimpong</option>
                                                <option value="Kolkata">Kolkata</option>
                                                <option value="Malda">Malda</option>
                                                <option value="Murshidabad">Murshidabad</option>
                                                <option value="Nadia">Nadia</option>
                                                <option value=" Paschim Medinipur (West Medinipur)"> Paschim Medinipur (West Medinipur)</option>
                                                <option value="Paschim Burdwan (WestBardhaman)" selected>Paschim Burdwan (WestBardhaman)</option>
                                                <option value="Purba Burdwan (Bardhaman)">Purba Burdwan (Bardhaman)</option>
                                                <option value="Purba Medinipur (East Medinipur)">Purba Medinipur (East Medinipur)</option>
                                                <option value="Purulia">Purulia</option>
                                                <option value="South 24 Parganas">South 24 Parganas</option>
                                                <option value="Uttar Dinajpur (North Dinajpur)">Uttar Dinajpur (North Dinajpur)</option>
                                                <option value="Sunderban">Sunderban</option>
                                                <option value="Ichhemati">Ichhemati</option>
                                                <option value="Ranaghat">Ranaghat</option>
                                                <option value="Bishnupur">Bishnupur</option>
                                                <option value="Jangipur">Jangipur</option>
                                                <option value="Behrampur">Behrampur</option>
                                                <option value="Basirhat">Basirhat</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-12">
                                                <label class="form-label" >Add Bio: </label>
                                                <textarea class="form-control" name="bio" rows="4" style="line-height: 22px;">
                                                
                                                </textarea>
                                            </div>
                                        </div>
                                        <button name="submit" type="submit" class="btn btn-primary me-2">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Change Password</h4>
                                </div>
                                </div>
                                <div class="card-body">
                                <form action="../../change-password.php" method="post" id="password-form">
                                    <div class="form-group">
                                        <label for="email" class="form-label">Email ID:</label>
                                        <input type="email" id="email" class="form-control" value="" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="cpass" class="form-label">Current Password:</label>
                                        <p class="float-end"><input type="checkbox" id="showPwd" onclick="showpas()"> Show Password</p>
                                        <input type="Password" class="form-control" id="current-password" value="" name="current-password" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="npass" class="form-label">New Password:</label>
                                        <p class="float-end"><input type="checkbox" id="showPwd" onclick="showpas2()"> Show Password</p>
                                        <input type="Password" id="new-password" class="form-control" value="" name="new-password" required>
                                    </div>
                                    <script>
                                      function showpas() {
                                        var pwdField = document.getElementById("current-password");
                                        if (pwdField.type === "password") {
                                          pwdField.type = "text";
                                        } else {
                                          pwdField.type = "password";
                                        }
                                        
                                      }
                                      function showpas2() {
                                        var newpassword = document.getElementById("new-password");
                                        if(newpassword.type === "password"){
                                            newpassword.type = "text";
                                        }else{
                                            newpassword.type = "password";
                                        }
                                      }
                                    </script>
                                    
                                    <?php
                                    if (isset($_GET['login']) && $_GET['login'] == 'failed')  /* when there is no entry found in database error! alert occurs*/
                                       {
                                        echo '<script>alert("Passwords do not match!");</script>';
                                       }
                                       else if (isset($_GET['login']) && $_GET['login'] == 'success'){
                                        echo '<script>alert("Password updated sucessfully");</script>';
                                       }
                                    ?>
                                    <button name="submit" type="submit" class="btn btn-primary me-2" >Submit</button>
                                    <button type="reset" class="btn bg-soft-danger">Clear</button>
                                </form>
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
    <!-- Wrapper End-->
    <footer class="iq-footer bg-white">
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