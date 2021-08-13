<?php
$id=$_GET['worker_id'];
$ID=$_SESSION['userID'];
//echo $id;
$n='Can you accept my request to help me do some of your own work for a fee that we agree to together? <br> thank you very much,,,';
$s=0;

$stmt = $coon->prepare("INSERT INTO `notification`(`userID`, `workerID`, `notice`, `n_status`)
                                VALUES (:uid,:wid,:note,:status)");
$stmt->execute(array(
    'uid'    => $ID,
    'wid'    => $id,
    'note'   => $n,
    'status' => $s
  ));
//print_r($stmt);
if ($stmt)
{
  echo '<br><div class="alert alert-success"><h1>YOUR REQUEST SENT!</h1> </div><br>';
}
else
{
  echo '<br><div class="alert alert-danger"> there is no somethig error! </div><br>';
}
?>
