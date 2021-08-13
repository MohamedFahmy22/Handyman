<?php

    include 'connection.php';

    $id = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) :0;

    $stmt = $coon->prepare("UPDATE `notification` SET `n_status`=1 WHERE notificationID=?");
    $stmt->execute(array($id));
    ?>
    <div class="card-header py-3">
    	<h6 class="m-0 font-weight-bold text-primary">Accepting Request</h6>
	</div>
    <div class="card-body">
        <div class="alert alert-success"> <?php echo 'done' ?></div>
    </div>
    <?php
    echo '<meta http-equiv="refresh" content="0; URL=index.php">';
   // header("Location:../index.php");
    exit();
    ?>