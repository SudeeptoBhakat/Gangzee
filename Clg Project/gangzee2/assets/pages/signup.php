<div class="login">
  
<!-- Background image -->
<div class="bg-image"  style="background-image: url('https://source.unsplash.com/1920x1080/?travel,technology'); background-repeat: no-repeat; ">
  <!-- <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);"> -->
    <div class="d-flex justify-content-center align-items-center h-100">
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
        <div class="card bg-light">
          <div class="card-body px-4 py-5 px-md-5">
          <form method="post" action="assets/php/actions.php?signup">
            <h3 class="text-center text-info">Sign Up</h3><br>
          <!-- <img class="mb-4" src="assets/images/gangzee.png" alt="" height="45"> -->
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-floating">
                    <input type="text" name="first_name" value="<?=showFormData('first_name')?>" class="form-control rounded" placeholder="username/email"/>
                    <label for="floatingInput">First name</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-floating">
                    <input type="text" name="last_name" value="<?=showFormData('last_name')?>" class="form-control rounded" placeholder="username/email"/>
                    <label for="floatingInput">Last name</label>
                  </div>
                </div>
                
                <?=showError('first_name')?>
                <?=showError('last_name')?>
              </div>

                <div class="d-flex gap-3 my-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios1"
                            value="1" <?=isset($_SESSION['formdata'])?'':'checked'?><?=showFormData('gender')==1?'checked':''?>>
                        <label class="form-check-label" for="exampleRadios1">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios3"
                            value="2" <?=showFormData('gender')==2?'checked':''?>>
                        <label class="form-check-label" for="exampleRadios3">
                            Female
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios2"
                            value="0" <?=showFormData('gender')==0?'checked':''?>>
                        <label class="form-check-label" for="exampleRadios2">
                            Other
                        </label>
                    </div>
                </div>
                <div class="form-outline mb-4">
                <div class="form-floating mt-1">
                    <input type="email" name="email" value="<?=showFormData('email')?>" class="form-control rounded" placeholder="username/email">
                    <label for="floatingInput">Email ID</label>
                </div>
                <?=showError('email')?>
                </div>

                <div class="form-outline mb-4">
                <div class="form-floating mt-1">
                    <input type="text" name="username" value="<?=showFormData('username')?>" class="form-control rounded" placeholder="username/email">
                    <label for="floatingInput">Username</label>
                </div>
                <?=showError('username')?>
                </div>

                <div class="form-outline mb-4">
                <div class="form-floating mt-1">
                    <input type="password" name="password" class="form-control rounded" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="form-floating mt-1">
                <div class="d-flex justify-content-end">
                <input type="checkbox" id="showPwd" onclick="showpas()">
                <a href="#showPwd" onclick="document.getElementById('showPwd').click()" class="text-decoration-none text-dark"> Show Password</a>
                </div>
                </div>
                <?=showError('password')?>
                </div>

              <!-- Submit button -->
              
              <div class="d-flex justify-content-between">
              <a href="?login" class="text-decoration-none">Already have an account ?</a>
              <button class="btn btn-info" type="submit" style="width: 300px;">Create</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
  <!-- </div> -->
</div>
<!-- Background image -->
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