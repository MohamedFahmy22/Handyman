<?php
session_start();
include 'tpl/header1.php';
?>
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-3 col-md-3">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
              <div class="col-lg-8" style="margin-left: 10%;">
                <div class="p-6" style="width: 120%;">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4"><h1 style="margin-bottom: 4%;"><b>Worker Login</b></h1></h1>
                  <hr>
                  </div>
                    <form class="form-signin" method="post" action="func/login.php">
                    <div class="form-group">
                      <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email..." required="">
                    </div>
                    <div class="form-group">
                      <input name="pass" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required="">
                    </div>
                    <input class="btn btn-lg btn-primary btn-user btn-block" type="submit" name="submit" value="Login">
                  </form>
                  <hr>
                </div>
              </div>
          </div>
        </div>

      </div>

    </div>
<?php 
  include 'tpl/footer1.php';
 ?>