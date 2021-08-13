<!-- Course information -->
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Request Details</h6>
    </div> 
<?php
    $id = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) :0;
    $stmt = $coon->prepare("SELECT * FROM user JOIN notification ON user.userID = notification.userID WHERE notification.notificationID=$id AND n_status=1");
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    //print_r($row);
    $loc=$row['locationID'];
      $stmt_l = $coon->prepare("SELECT city FROM location WHERE locationID =$loc");
      $stmt_l->execute();
    //  print_r($stmt_l);
      $row_l = $stmt_l->fetch(PDO::FETCH_ASSOC);
      
?>
    <div class="card-body">
        <div class="tab-content">
            <div class="tab-pane active"  role="tabpanel">
                <div class="is-container">
                    <div class="row" style="margin-left: 10%;">
                        <div class="col-md-6">
                            <h5>Request number:   <?php echo $row['notificationID']; ?></h5>
                        </div>
                        <div class="col-md-6">
                            <h5>Customer name:   <?php echo $row['username']; ?></h5>
                        </div>
                        <div class="col-md-6">
                            <h5>Location:   <?php echo $row_l['city']; ?></h5>
                        </div>
                        <div class="col-md-6">
                            <h5>Customer phone:   <?php echo $row['phone']; ?></h5>
                        </div>
                    </div>
                    <div class="row" style="margin-left: 10%;">
                        <div class="col-md-11">
                           <h5>Description:</h5> <h6><?php echo $row['notice']; ?></h6>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>            
        </div>
    </div>