<?php
$result = '';
if (isset($_GET['result'])) {
    $result = $_GET['result'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"> -->
    <!--<link rel="stylesheet" href="Img\style.css"/>-->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Gangzee</title>
    <!-- Section: Design Block -->
    <section class="background-radial-gradient overflow-hidden">
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
        <div class="row gx-lg-10 align-items-center mb-10">
          <div class="col-lg-12 mb-5 mb-lg-0 position-relative">
            <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
            <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
            <div class="card bg-glass">
              <div class="card-body px-10 py-8 px-md-10">
                
              <!--Form Start--> 
                      <div class="card-body p-md-5">
                      
                        <div class="row justify-content-center">
                          <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                            <form class="mx-1 mx-md-4" method="post" action="save.php">

                              <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0">
                                  <input type="text" id="form3Example1c" class="form-control" name="name" required >
                                  <label class="form-label" for="form3Example1c">User Name</label>
                                </div>
                              </div>
                              <?php if ($result === 'failed'){ ?>
                              <div class="d-flex flex-row align-items-center mb-4">
                                <i class="text-danger fas fa-envelope fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0">
                                  <input type="email" id="form3Example3c" class="form-control border-danger" name="email" required>
                                  <label class="text-danger form-label" for="form3Example3c">Email already exists. Please choose another one.</label>
                              <?php } else 
                                {
                                  ?>
                                  <div class="d-flex flex-row align-items-center mb-4">
                                  <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                  <div class="form-outline flex-fill mb-0">
                                    <input type="email" id="form3Example3c" class="form-control" name="email" required>
                                    <label class="form-label" for="form3Example3c">Your Email</label>
                              <?php    
                              }
                               ?>
                                </div>
                              </div>

                

                              <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0">
                                  <input type="password" id="pas1" class="form-control" name="pass" required>
                                  <div class="d-flex justify-content-between">
                                  <label class="form-label" for="form3Example4c">Password</label> 
                                  <p><input type="checkbox" id="showPwd" onclick="showpas()"> Show Password</p>
                                  </div>
                                </div>
                              </div>
                              <script>
                                function showpas() {
                                  var pwdField = document.getElementById("pas1");
                                  if (pwdField.type === "password") {
                                    pwdField.type = "text";
                                  } else {
                                    pwdField.type = "password";
                                  }
                                }
                              </script>

                              <?php if ($result === 'false'){ ?>
                              <div class="d-flex flex-row align-items-center mb-4">
                                <i class="text-danger fas fa-key fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0">
                                <input type="password" id="pas2" class="form-control border-danger" name="conpas" required />
                                  <label class="text-danger form-label" for="form3Example4cd">Password does't matched</label>
                                </div>
                              </div>
                              <?php }else { ?>
                                <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0">
                                  <input type="password" id="pas1" class="form-control" name="conpas" required >
                                  <label class="form-label" for="form3Example4c">Conform Password</label>
                                </div>
                              </div>  
                              <?php } ?>

                              
                              

                              <div class="form-check d-flex justify-content-center mb-5">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" required >
                                <label class="form-check-label" for="form2Example3">
                                  I agree all statements in <a class="btn btn-link p-0" data-toggle="modal" onclick="openForm()">Terms of service</a>
                                </label>
                              </div>

                              <div class="modal" tabindex="-1" role="dialog" id="tc">
                               <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">TERMS AND CONDITIONS</h5>
                                        <button class="btn" onclick="closeForm()"><i class="fa-solid fa-xmark"></i></button>
                                    </div>
                                    <div class="modal-body">
                                      <embed type="text/html" src="terms.html" class="embed-responsive-item" style="width: 100%; height: 500px;" >
                                    </div>
                                  </div>
                                </div>
                              </div>
                    
                                
                              <script>
                               function openForm() {
                                  document.getElementById("tc").style.display = "block";
                                }
                              
                                function closeForm() {
                                  document.getElementById("tc").style.display = "none";
                                }
                  
                              </script>

                              <style>
                              .modal-dialog {
                                margin: auto;
                              }
                              </style>

                              <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                <button type="submit" class="btn btn-primary btn-lg" id="btn">Create</button>
                              </div>

                              <div class="form-check d-flex justify-content-center mb-5">
                                <p>If you already have an account, just <strong><a href="login.php">login</a></strong></p>
                              </div>
                            </form>

                          </div>
                          <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                            <img src="Img\Picsart_23-04-19_14-02-27-828.png"
                              class="img-fluid" alt="Sample image">

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
    </div>
  </div>
  <!-- <?php
    // $pas1=$_POST["pas1"];
    // $pas2=$_POST["pas2"];
    ?>
  <script>
  function check_pas() {
    var pas1 = document.getElementById("pas1").value;
    var pas2 = document.getElementById("pas2").value;
    var btn = document.getElementById("btn");
    if (<?php //$pas1 ==  $pas2 ?>) {
        btn.classList.remove("disabled");
      } else {
        btn.classList.add("disabled");
        alert("Password doesn't match");
      }
    }
</script> -->
  <!-- <script>
    function check_pas(){
      var pas1 = document.getElementById("pas1").value;
      var pas2 = document.getElementById("pas2").value;
      var btn = document.getElementById("btn");
      if(pas1.length==pas2.length)
      {
          if(pas1===pas2)
          {
              btn.classList.remov
          }
          else{
              btn.classList.add("disabled")
              alert("Password Do't Matched")
          }
      }
      else{
          btn.classList.add("disabled")
  
    }
  }
  </script> -->
</body>
</html>