<?php
$result = '';
if (isset($_GET['result'])) {
    $result = $_GET['result'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!--<link rel="stylesheet" href="Img\style.css"/>-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Gangzee</title>
    <style>
        .divider:after,
        .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
        }
        .h-custom {
        height: calc(100% - 73px);
        }
        @media (max-width: 450px) {
        .h-custom {
        height: 100%;
        }
        }
        
    </style>
</head>

<body>
    <!----------------Login form start----------------->
    <!-- Section: Design Block -->
    <section class="background-radial-gradient overflow-hidden">
      <style>
        .background-radial-gradient {
          background-color: hsl(218, 41%, 15%);
          background-image: radial-gradient(650px circle at 0% 0%,
              hsl(218, 41%, 35%) 15%,
              hsl(218, 41%, 30%) 35%,
              hsl(218, 41%, 20%) 75%,
              hsl(218, 41%, 19%) 80%,
              transparent 100%),
            radial-gradient(1250px circle at 100% 100%,
              hsl(218, 41%, 45%) 15%,
              hsl(218, 41%, 30%) 35%,
              hsl(218, 41%, 20%) 75%,
              hsl(218, 41%, 19%) 80%,
              transparent 100%);
        }
    
        #radius-shape-1 {
          height: 220px;
          width: 220px;
          top: -60px;
          left: -130px;
          background: radial-gradient(#44006b, #ad1fff);
          overflow: hidden;
        }
    
        #radius-shape-2 {
          border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
          bottom: -60px;
          right: -110px;
          width: 300px;
          height: 300px;
          background: radial-gradient(#44006b, #ad1fff);
          overflow: hidden;
        }
    
        .bg-glass {
          background-color: hsla(0, 0%, 100%, 0.9) !important;
          backdrop-filter: saturate(200%) blur(25px);
        }
      </style>
    
      <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
        <div class="row gx-lg-5 align-items-center mb-5">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="col-md-9 col-lg-10">
                    <img src="Img\login.png" class="img-fluid" alt="Sample image">
                </div>
            </div>
          <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
            <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
            <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
            <?php
            if (isset($_GET['result'])=='success') { ?>
            <div class="alert alert-success alert-dismissible d-flex align-items-center fade show">
                <i class="bi-check-circle-fill"></i>
                <strong class="mx-2">Successfully</strong> Account created, please login.
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <?php } ?>
            <?php
            if (isset($_GET['login'])=='failed') { ?>
            <div class="alert alert-danger alert-dismissible d-flex align-items-center fade show">
                <i class="bi-exclamation-octagon-fill"></i>
                <strong class="mx-2">Error!</strong> Wrong Email and password.
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <?php } ?>
            <div class="card bg-glass">
              <div class="card-body px-4 py-5 px-md-5">
                
                <form  action="check_login_user.php" method="post">
                    <!-- Register buttons -->
                  <div class="text-center">
                    
                    <a href="index.php"><img src="Img\gangzee.png" alt="Gangzee" style="height: 60px;"></a>
                    <br><br>
                    
                    <p>Sign in</p>
                  </div>
                  <!-- Email input -->
                  <div class="form-outline mb-4">
                    <input type="email" id="email" class="form-control" name="email" required/>
                    <label class="form-label" for="form3Example3">Email address</label>
                  </div>
    
                  <!-- Password input -->
                  <div class="form-outline mb-4">
                    <input type="password" id="pwd" class="form-control" name="pas" required/>
                    <div class="d-flex justify-content-between">
                      <label class="form-label" for="form3Example4">Password</label>
                      
                      <p><input type="checkbox" id="showPwd" onclick="showpas()"> Show Password</p>
                      
                    </div>
                  </div>
                  <script>
                    function showpas() {
                      var pwdField = document.getElementById("pwd");
                      if (pwdField.type === "password") {
                        pwdField.type = "text";
                      } else {
                        pwdField.type = "password";
                      }
                    }
                  </script>
                 
                  <!-- Submit button -->
                  <button type="submit" id="btn" class="btn btn-info  btn-block mb-4"> Sign up </button>
                  
                  <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="register.php" class="link">Create Here</a></p>
                </form>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Design Block -->
    <!--------------Login Form End---------------->
</body>
<script>
</script>
</html>