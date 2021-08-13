<?php
     session_start();
     if(isset($_SESSION['login_worker']))
     {
         include 'tpl/header.php';
        include 'tpl/sidebar.php';
        include 'tpl/navbar.php';
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- DataTales Example -->
                <div class="card shadow mb-4">
                <?php
                    if(!$_GET['do'])
                    {
                        ?>
                        <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Pending Requestes</h6>
</div>
<div class="card-body">
    <div class="table-responsive" >
        <table class="table table-bordered" style=" text-align: center;" width="100%" cellspacing="0">
         <table class="table">
  <thead>
    <tr>
      <th scope="col" class="header">#</th>
      <th scope="col" class="header">User Name</th>
      <th scope="col" class="header">Request Details</th>
      <th scope="col" class="header">Address</th>
      <th scope="col" class="header">Phone</th>
      <th scope="col" class="header">View</th>
    </tr>
  </thead>
  <tbody>
  <?php
    $id=isset($_SESSION['workerID'])? $_SESSION['workerID'] : 0;
    $stmt = $coon->prepare("SELECT * FROM user JOIN notification ON user.userID = notification.userID WHERE notification.workerID=$id AND n_status=1");
    $stmt->execute();
    //print_r($stmt);
    while($row = $stmt->fetch(PDO::FETCH_ASSOC))
    {
      //print_r($row);
      $desc=substr($row['notice'], 0,20).'...';
      $loc=$row['locationID'];
      $stmt_l = $coon->prepare("SELECT city FROM location WHERE locationID =$loc");
      $stmt_l->execute();
    //  print_r($stmt_l);
      $row_l = $stmt_l->fetch(PDO::FETCH_ASSOC)
      // $pree=substr($row['pre_request'], 0,20).'...';
      // $outs=substr($row['outlines'], 0,20).'...';
  ?>
    <tr>
      <td class="content"><?php echo $row['notificationID']; ?></td>
      <td class="content"><?php echo $row['username']; ?></td>
      <td class="content"><?php echo $desc; ?></td>
      <td class="content"><?php echo $row_l['city']; ?></td>
      <td class="content"><?php echo $row['phone']; ?></td>
      <td><a href="?do=view&id=<?php echo $row['notificationID']?>"><i class="far fa-eye"></i></a></td>
  <?php } ?>
  </tbody>
</table>
    </div>
</div>
                        <?php
                    }
                    elseif($_GET['do'] == 'view')
                    {
                        include 'inc/preview.php';
                    }
                ?>
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

<?php
        include 'tpl/footer.php';
    }
    else
    {
        header("Location: ../login.php");
    }
?>
