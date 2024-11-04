

<div class="login">
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
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
        Step into <br>
        <img src="assets\images\gangzee.png" alt="" style="width: 350px; ">
          <!-- <span style="color: hsl(218, 81%, 75%)">GangZee</span> -->
        </h1>
        <h5 class="my-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)"> Connecting Communities, Empowering Voices</h5>
        <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%); font-family: cursive; ">
        GangZee is a social media website that aims to revolutionize the way communities connect, interact, and collaborate in a digital world. It provides a platform for individuals, interest groups, and organizations to come together, share their experiences, and amplify their voices.
        </p>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <div class="card" style="background-color: rgba(0, 0, 0, 0.6);">          
        <!-- <img class="mb-4" src="assets/images/sign 1 (2).png" alt=""> -->
          <div class="card-body px-4 py-5 px-md-5">
          <h3 class="text-center text-info">Login</h3>
          <form method="post" action="assets/php/actions.php?login">
              <!-- Email input -->
              <div class="mb-4">
                <input type="text" name="username_email" autofocus style="background-color: rgba(162, 169, 255, 0.1);" value="<?=showFormData('username_email')?>" class="form-control rounded text-light" placeholder="Username/Email">
                <label class="form-label text-light" for="floatingInput">Email address</label>
              </div>
              <?=showError('username_email')?>
              <!-- Password input -->
              <div class="mb-4">
                <input type="password" name="password" class="form-control rounded text-light" style="background-color: rgba(162, 169, 255, 0.1);" id="floatingPassword" placeholder="Password">
                <label class="form-label text-light" for="floatingPassword">password</label>
                <div class="d-flex justify-content-end">
                <input type="checkbox" id="showPwd" onclick="showpas()">
                <a href="" onclick="document.getElementById('showPwd').click()" class="text-decoration-none text-light"> Show Password</a>
                </div>
              </div>
              <?=showError('password')?>
              <?=showError('checkuser')?>

              <div class="d-flex justify-content-between">
              <!-- Submit button -->
                <p><a href="?signup" class="text-decoration-none">Create New Account</a></p>
                <div id="content"></div>

              <!-- Register buttons -->
                <button class="btn btn-info" type="submit">
                  Login
                </button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div><br><br>
</section>
</div>
<!-- Section: Design Block -->


<script>
  function showpas() {
    var pwdField = document.getElementById("floatingPassword");
    if (pwdField.type === "password") {
      pwdField.type = "text";
    } else {
      pwdField.type = "password";
    }
  }
</script>