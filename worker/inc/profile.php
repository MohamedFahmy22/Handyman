  <?php
  if (isset($_SESSION['workerID']))
  {
    $id=$_SESSION['workerID'];
    $stmt = $coon->prepare("SELECT * FROM worker JOIN location ON worker.locationID = location.locationID WHERE worker.workerID=$id");
    $stmt->execute();
    //print_r($stmt);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $w_id=$row['workID'];

    $stmt_w = $coon->prepare("SELECT * FROM work WHERE workID=$w_id");
    $stmt_w->execute();
    //print_r($stmt);
    $row_w = $stmt_w->fetch(PDO::FETCH_ASSOC);

  ?>
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <div class="row">
      <div class="col-md-4" style="text-align: center;">
        <img  src="images/<?php echo $row['picture']; ?>" style="width: 50%;" alt="user-img">
        <br><br>
        <h3><?php echo $row['firstname'].' '.$row['lastname']; ?></h3>
        <span><b><?php echo $row_w['name']; ?></b></span>
      </div>
      <div class="col-md-4" style=" margin-left: 30%; margin-top: 3%;">
        <h4><b>Location:</b> <?php echo $row['city']; ?></h4>
        <h4><b>Phone:</b> <?php echo $row['phone']; ?></h4>
        <h4><b>Birth Date:</b> <?php echo $row['birthdate']; ?></h4>
        <h4><b>rate:</b>
          <?php
          if ($row['rate']==NULL)
          {
            echo 'sooon!';
          }
          else
          {
            for ($i=0; $i <$row['rate'] ; $i++)
            {
              ?>
              <span class="fa fa-star checked"></span>
              <?php
            }
          }
          ?>
        </div>
      </div>
    </div>
  </div>
  <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">REVIEWS</h6>
    </div>
    <div class="card-body">
      <div class="tab-content">
        <div class="card-block">
          <ul>
        <?php
          $stmt_r = $coon->prepare("SELECT * FROM feeedback WHERE workerID=$id");
          $stmt_r->execute();
          //print_r($stmt_r);
          if ($stmt_r->rowCount()!=0)
          {
            while($row_r = $stmt_r->fetch(PDO::FETCH_ASSOC))
            {
              ?>
              <li>
                <p class="m-b-0"><?php echo $row_r['feedback']; ?></p>
              </li>
              <hr>
              <?php
            }
          }
          else
          {
            echo '<li>There is no reviews yet !</li>';
          }
        ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
<?php
  }
  elseif (isset($_GET['id']))
  {
    $id=$_GET['id'];
    $stmt = $coon->prepare("SELECT * FROM worker JOIN location ON worker.locationID = location.locationID WHERE worker.workerID=$id");
    $stmt->execute();
    //print_r($stmt);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $w_id=$row['workID'];

    $stmt_w = $coon->prepare("SELECT * FROM work WHERE workID=$w_id");
    $stmt_w->execute();
    //print_r($stmt);
    $row_w = $stmt_w->fetch(PDO::FETCH_ASSOC);

  ?>
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <div class="row">
      <div class="col-md-4" style="text-align: center;">
        <img  src="images/<?php echo $row['picture']; ?>" style="width: 50%;" alt="user-img">
        <br><br>
        <h3><?php echo $row['firstname'].' '.$row['lastname']; ?></h3>
        <span><b><?php echo $row_w['name']; ?></b></span>
      </div>
      <div class="col-md-4" style=" margin-left: 30%; margin-top: 3%;">
        <h4><b>Location:</b> <?php echo $row['city']; ?></h4>
        <h4><b>Phone:</b> <?php echo $row['phone']; ?></h4>
        <h4><b>Birth Date:</b> <?php echo $row['birthdate']; ?></h4>
        <h4><b>rate:</b>
          <?php
          if ($row['rate']==NULL)
          {
            echo 'sooon!';
          }
          else
          {
            for ($i=0; $i <$row['rate'] ; $i++)
            {
              ?>
              <span class="fa fa-star checked"></span>
              <?php
            }
          }
          ?>
        </div>
      </div>
    </div>
  </div>
  <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">REVIEWS</h6>
    </div>
    <div class="card-body">
      <div class="tab-content">
        <div class="card-block">
          <ul>
        <?php
          $stmt_r = $coon->prepare("SELECT * FROM feeedback WHERE workerID=$id");
          $stmt_r->execute();
          //print_r($stmt_r);
          if ($stmt_r->rowCount()!=0)
          {
            while($row_r = $stmt_r->fetch(PDO::FETCH_ASSOC))
            {
              ?>
              <li>
                <p class="m-b-0"><?php echo $row_r['feedback']; ?></p>
              </li>
              <hr>
              <?php
            }
          }
          else
          {
            echo '<li>There is no reviews yet !</li>';
          }
        ?>
          </ul>

          <div class="row touch_middle">
              <div class="col-md-8 input_form" style="margin: 4%;">
                <?php
                if($_SERVER['REQUEST_METHOD'] == 'POST')
                {
                    $feedback = filter_var($_POST['feedback'], FILTER_SANITIZE_STRING);
                    $wid=$_GET['id'];
                    $uid=$_SESSION['userID'];
                    $stmt_f = $coon->prepare("INSERT INTO feeedback(`workerID`, `feedback`, `userID`)
                                                  VALUES(:worker, :review, :user)");
                    $stmt_f->execute(array(
                        'user'      => $uid,
                        'worker'    => $wid,
                        'review'    => $feedback
                    ));
                    if ($stmt_f)
                    {
                      ?>
                      <div class="alert alert-success">your feedback sent!</div>
                      <?php
                    }
                    else
                    {
                      ?>
                      <div class="alert alert-danger">there is Something wrong!</div>
                      <?php
                    }
                }
                else
                {
                ?>
                  <form action="" method="post">
                    <label>YOUR REVIEW</label>
                      <textarea class="form-control" rows="6" id="message" name="feedback" placeholder="Write here your feedback please..."></textarea>
                      <button type="submit" class="btn btn-default">Submit Now<i class="fa fa-angle-double-right"></i></button>
                  </form>
                <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
  }
