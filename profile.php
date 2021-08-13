<?php
  session_start();
  include 'tpl/header.php';
  include 'tpl/navbar.php';
  $id=isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : 0;
  $stmt = $coon->prepare("SELECT * FROM user JOIN location WHERE user.locationID = location.locationID && user.userID=?");
  $stmt->execute(array($id));
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!--Page Cover-->
<section class="row member_sec">
    <div class="container">
        <div class="row m0">
            <div class="col-sm-5 member_img">
                <img src="images/<?php echo $row['picture']; ?>" alt="">
            </div>
            <div class="col-sm-7 section_header member_details">
<br><br><br>
<div class="card-body">
    <div class="table-responsive" >
        <table class="table table-bordered" style=" text-align: center;" width="100%" cellspacing="0">
         <table class="table">
  <thead>
    <tr>
      <th scope="col" class="header">Username:</th>
      <th scope="col" class="header"><?php echo $row['username']; ?></th>
    </tr>
    <tr>
      <th scope="col" class="header">Email:</th>
      <th scope="col" class="header"><?php echo $row['email']; ?></th>
    </tr>
    <tr>
      <th scope="col" class="header">Phone:</th>
      <th scope="col" class="header"><?php echo $row['phone']; ?></th>
    </tr>
    <tr>
      <th scope="col" class="header">Location:</th>
      <th scope="col" class="header"><?php echo $row['city']; ?></th>
    </tr>
  </thead>
</table>
            </div>
        </div>
    </div>
</section>
<div style="text-align: center;">
    <h2>Your Requestes</h2>
</div>
<br><br>
<section class="row testimonials" style=" width: 78%; margin-left: 11%; background-color: #dedce0;">

  <div class="card-body">
      <div class="table-responsive" >
          <table class="table table-bordered" style=" text-align: center !important;" width="100%" cellspacing="0">
           <table class="table">
    <thead>
      <tr style="text-align: center !important;">
        <th style="text-align: center;">#</th>
        <th style="text-align: center;">Work</th>
        <th style="text-align: center;">Worker name</th>
        <th style="text-align: center;">Location</th>
        <th style="text-align: center;">Phone</th>
        <th style="text-align: center;">Worker profile</th>
        <th style="text-align: center;">Status</th>
        <th style="text-align: center;">cancel</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $stmt_n = $coon->prepare("SELECT * FROM notification JOIN worker WHERE notification.workerID = worker.workerID && notification.userID = $id ORDER BY notification.notificationID DESC");
    $stmt_n->execute();
    //echo $query;
    $count = $stmt_n->rowcount();
    if ($count>0)
    {
      while($row_n = $stmt_n->fetch(PDO::FETCH_ASSOC))
      {
        $WoId=$row_n['workID'];
        $stmt_w = $coon->prepare("SELECT * FROM work WHERE workID =  $WoId ");
        $stmt_w->execute();
        $row_w = $stmt_w->fetch(PDO::FETCH_ASSOC);

        $LId=$row_n['locationID'];
        $stmt_l = $coon->prepare("SELECT * FROM location WHERE locationID =  $LId ");
        $stmt_l->execute();
        $row_l = $stmt_l->fetch(PDO::FETCH_ASSOC);
    ?>
          <tr style="text-align: center;">
            <td class="content"><?php echo $row_n['notificationID']; ?></td>
            <td class="content"><?php echo $row_w['name']; ?></td>
            <td class="content"><?php echo $row_n['firstname'].' '.$row_n['lastname']; ?></td>
            <td class="content"><?php echo $row_l['city']; ?></td>
            <td class="content"><?php echo $row_n['phone']; ?></td>
            <td><a href="worker/profile.php?id=<?php echo $row_n['workerID']?>"><i class="fa fa-eye"></i></a></td>
            <td>
            <?php
            switch ($row_n['n_status']) {
              case '1':
                ?>
                <div class="alert alert-success">Accepted</div>
                <?php
                break;
              case '2':
                ?>
                <div class="alert alert-danger">Rejected</div>
                <?php
                break;
              default:
              ?>
                <div class="alert alert-warning">Waiting</div>
              <?php
                break;
            }
            ?>
            </td>
            <td <?php
            if ($row_n['n_status']!=0)
            {
              ?>
              style="display: none;"
              <?php
            }
            ?>>
              <a href="cancel.php?id=<?php echo $row_n['notificationID']?>" class="delete confirm">
                <i class="fa fa-times-circle"></i>
              </a>
            </td>
          </tr>
    <?php
        }
      }
      else
      {
        echo '<div class="alert alert-danger"> there is no Workers to show! </div>';
      }
    ?>
    </tbody>
  </table>
</div>
  </div>
</section>
<br><hr>
<?php
  include 'tpl/footer.php';
?>
