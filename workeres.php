<?php
  session_start();
  include 'tpl/header.php';
  include 'tpl/navbar.php';
  $id=isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : 0;
  $stmt = $coon->prepare("SELECT * FROM work WHERE workID=?");
  $stmt->execute(array($id));
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
  $ID=$row['workID'];
?>
<!--Page Cover-->
<section class="row member_sec">
    <div class="container">
        <div class="row m0">
            <div class="col-sm-5 member_img">
                <img src="images/we_do/<?php echo $row['pic']; ?>" alt="">
            </div>
            <div class="col-sm-7 section_header member_details">
<br><br><br>
                <h2><?php echo $row['name']; ?></h2>
                <p><?php echo $row['description']; ?></p>
            </div>
        </div>
    </div>
</section>
<hr><hr><br><br>
<section class="row testimonials bg_bottom">
  <!-- stylesheet test.scss -->
  <div class="sectpad">
    <div class="container">
      <div class="row m0 members">
    <?php
      $ll=' AND  location.locationID= ';
      $var=  isset($_SESSION['Loc']) ? $ll .=$_SESSION['Loc'] : ' ' ;
      //echo $ll;
      $query= "SELECT * FROM worker JOIN location ON worker.locationID = location.locationID WHERE worker.status=1 AND worker.workID=$ID";
      $query .= isset($_SESSION['Loc']) ? $ll : ' ' ;
      $stmt = $coon->prepare($query);
      $stmt->execute();
      //echo $query;
      $count = $stmt->rowcount();
      if ($count>0)
      {
        while($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
      //    print_r($row);
      ?>
            <div class="member col-md-4 " style="margin-bottom: 25px;">
              <img src="worker/images/<?php echo $row['picture']; ?>" style="width: 30%;" alt="">
              <h4><?php echo $row['firstname'].' '.$row['lastname']; ?></h4>
              <div class="member_comment">
                <p>Location: <?php echo $row['city']; ?></p>
                <p>Email: <?php echo $row['mail']; ?></p>

                <p>rate: <?php
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
                ?></p>
                <br>
                <div class="row">
                  <div class="col-md-6">
                  <a href="worker/profile.php?id=<?php echo $row['workerID']?>"><h3>View</h3></a>
                  </div>
                  <div class="col-md-6">
                    <a href="worker.php?do=request&worker_id=<?php echo $row['workerID']; ?>"><h3>Request!</h3></a>
                  </div>
                </div>
              </div>
            </div>
      <?php
        }
      }
      else
      {
        echo '<div class="alert alert-danger"> there is no Workers to show! </div>';
      }
    ?>
      </div>
    </div>
  </div>
</section>
<br><hr>
<?php
  include 'tpl/footer.php';
?>
