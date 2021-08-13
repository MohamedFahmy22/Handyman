<?php
    session_start();
    include 'tpl/header.php';
    include 'tpl/navbar.php';
    // include 'tpl/slider.php';
?>
<div class="limiter" style="margin: 8%;">
  <div class="container-login100">
    <div class="wrap-login100" style="width: 90%;margin-top: -20%;">
      <div class="login100-pic js-tilt" data-tilt style="margin-top: 10%;margin-left: -8%;">
        <img src="images/img-01.png" alt="IMG">
      </div>
      <form class="login100-form validate-form" style="width: 50%;" action="func/register.php" method="post" enctype="multipart/form-data">
        <div class="row ">
          <div class="text-center col-md-6">
            <a class="txt2" href="index.php">
              <i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
              Back To Home
            </a>
          </div>
          <div class="text-center col-md-6">
          </div>
        </div>
        <br>
        <span class="login100-form-title">
          User Sign Up
        </span>


        <div class="wrap-input100 validate-input">
          <div class="row">
            <div class="col-md-2">
              <label>Name</label>
            </div>
            <div class="col-md-10">
              <input class="input100" type="text" name="name" placeholder="name" required>
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-user" aria-hidden="true"></i>
              </span>
            </div>
          </div>
        </div>

        <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
          <div class="row">
            <div class="col-md-2">
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
            <div class="col-md-2">
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

        <div class="wrap-input100 validate-input" data-validate="Password is required">
          <div class="row">
            <div class="col-md-2">
              <label>confirm Password:</label>
            </div>
            <div class="col-md-10">
             <input class="input100" type="password" name="cpass" placeholder="confirm Password" required>
             <span class="focus-input100"></span>
             <span class="symbol-input100">
               <i class="fa fa-lock" aria-hidden="true"></i>
             </span>
           </div>
        </div>
      </div>

        <div class="wrap-input100 validate-input" data-validate="phone is required">
          <div class="row">
            <div class="col-md-2">
              <label>Phone</label>
            </div>
            <div class="col-md-10">
              <input class="input100" type="phone" name="phone" placeholder="phone" required>
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-phone" aria-hidden="true"></i>
              </span>
            </div>
          </div>
        </div>

        <div class="wrap-input100 validate-input" data-validate="Addresse is required">
          <div class="row">
            <div class="col-md-2">
              <label>Location</label>
            </div>
            <div class="col-md-10">
              <select class="input100" name="loc" required>
                <option value="">Choose your location</option>
            <?php
            $stmt = $coon->prepare("SELECT * FROM location");
            $stmt->execute();
            while($row = $stmt->fetch(PDO::FETCH_ASSOC))
            {
              ?>
              <option value="<?php echo $row['locationID']; ?>"><?php echo $row['city']; ?></option>
              <?php
            }
            ?>
              </select>
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
              </span>
            </div>
          </div>
        </div>

          <div class="row">
            <div class="col-md-2">
              <label>Upload Image</label>
            </div>
            <div class="col-md-10">
              <div class="file-upload">
                <div class="file-select">
                  <div class="file-select-button" id="fileName">Choose File</div>
                  <div class="file-select-name" id="noFile">No file chosen...</div>
                  <input type="file" name="chooseFile" id="chooseFile" required>
                </div>
              </div>
            </div>
          </div>
          <div class="container-login100-form-btn">
            <button class="login100-form-btn">
            Sign up
            </button>
          </div>
      </form>
    </div>
  </div>
</div>
<?php
    include 'tpl/footer.php';
?>
