<?php
session_start();
if(isset($_SESSION['login_worker'])==NULL)
{
  include 'func/connection.php';
  include 'tpl/header1.php';
    error_reporting(0);

?>
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-3 col-md-3">

        <div class="card o-hidden border-0 shadow-lg my-2">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
              <div class="col-lg-8" style="margin-left: 10%;">
                <div class="p-6" style="width: 120%;">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4"><h1 style="margin-bottom: 4%;"><b>Worker Registeration</b></h1></h1>
                  <hr>
                  </div>
                  <form class="form-signin" method="post" enctype="multipart/form-data" action="func/register.php">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-3"> 
                          <label><b>Name:</b></label>
                        </div>
                        <div class="col-md-9">
                          <div class="row">
                            <div class="col-md-6">
                              <input name="fname" type="text" class="form-control form-control-user" placeholder="first name..." required="">
                            </div>
                            <div class="col-md-6">
                              <input name="lname" type="text" class="form-control form-control-user" placeholder="last name..." required="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md">
                          <label><b>Photo:</b></label>
                        </div>
                        <div class="col-md-9">
                          <input type="file" name="pic" class="form-control form-control-user" placeholder="Choose your profile picture!" required="">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md">
                          <label><b>Email:</b></label>
                        </div>
                        <div class="col-md-9">
                          <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email..." required="">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md">
                          <label><b>Password:</b></label>
                        </div>
                        <div class="col-md-9">
                          <input name="pass" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required="">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-3">
                          <label><b>Phone:</b></label>
                        </div>
                        <div class="col-md-9">
                          <input name="phone" type="text" class="form-control form-control-user"  placeholder="Phone(01....)" required="">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-3">
                          <label><b>Birth Date:</b></label>
                        </div>
                        <div class="col-md-9">
                          <input name="date" type="date" class="form-control form-control-user"  required="">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-3">
                          <label><b>Work:</b></label>
                        </div>
                        <div class="col-md-9">
                          <select name="workk" class="form-control form-control-user" required="">
                            <?php
                            $stmt = $coon->prepare("SELECT * FROM work ");
                            $stmt->execute();
                            //print_r($stmt);
                            while($row = $stmt->fetch(PDO::FETCH_ASSOC))
                            {
                            ?>
                              <option value="<?php echo $row['workID'] ; ?>"><?php echo $row['name'] ; ?></option>
                            <?php
                            }
                            ?>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-3">
                          <label><b>Location:</b></label>
                        </div>
                        <div class="col-md-9">
                          <select name="loc" class="form-control form-control-user" required="">
                            <?php
                            $stmt = $coon->prepare("SELECT * FROM location ");
                            $stmt->execute();
                            //print_r($stmt);
                            while($row = $stmt->fetch(PDO::FETCH_ASSOC))
                            {
                            ?>
                              <option value="<?php echo $row['locationID'] ; ?>"><?php echo $row['city'] ; ?></option>
                            <?php
                            }
                            ?>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md">
                          <label><b>CV:</b></label>
                        </div>
                        <div class="col-md-9">
                          <input type="file" name="cv" class="form-control form-control-user" placeholder="Choose your profile picture!" required="">
                        </div>
                      </div>
                    </div>
                    <input class="btn btn-lg btn-primary btn-user btn-block" type="submit" name="submit" value="Sign Up">
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
}
else
{
  header("Location:index.php");
  exit();
} 
?>