<?php
    session_start();
    include 'tpl/header.php';
    include 'tpl/navbar.php';
    // include 'tpl/slider.php';
?>
<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100" style="width: 90%;margin-top: -20%;">
      <div class="login100-pic js-tilt" data-tilt>
        <img src="images/img-01.png" alt="IMG">
      </div>
      <form class="login100-form validate-form" style="width: 50%;" action="func/login.php" method="post">
        <div class="row ">
          <div class="text-center col-md-6">
            <a class="txt2" href="index.php">
              <i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
              Back To Home
            </a>
          </div>
          <div class="text-center col-md-6">
            <a class="txt2" href="register.php">
              Create your Account
              <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <br>
        <span class="login100-form-title">
          Log in
        </span>
        <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
          <div class="row">
            <div class="col-md-2" style="margin-top: 3%;">
              <label>Email:</label>
            </div>
            <div class="col-md-10">
              <input class="input100" type="text" name="email" placeholder="Email " required>
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-envelope" aria-hidden="true"></i>
              </span>
            </div>
          </div>
        </div>
        <div class="wrap-input100 validate-input" data-validate="Password is required">
          <div class="row">
            <div class="col-md-2" style="margin-top: 3%;">
              <label> Password:</label>
            </div>
            <div class="col-md-10">
             <input class="input100" type="password" name="pass" placeholder="Password" required>
             <span class="focus-input100"></span>
             <span class="symbol-input100">
               <i class="fa fa-lock" aria-hidden="true"></i>
             </span>
           </div>
        </div>
      </div>
        <div class="wrap-input100">
          <div class="row">
            <div class="col-md-2" style="margin-top: 3%;">
              <label>type:</label>
            </div>
            <div class="col-md-10">
              <select class="input100" name="type" required>
                <option value="">select ur type</option>
                <option value="1">user</option>
                <option value="2">worker</option>
              </select>
             <span class="focus-input100"></span>
             <span class="symbol-input100">
               <i class="fa fa-user" aria-hidden="true"></i>
             </span>
           </div>
        </div>
      </div>
        <div class="container-login100-form-btn">
          <button class="login100-form-btn" name="login" style="width: 30%;">
            Login
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php
    include 'tpl/footer.php';
?>
