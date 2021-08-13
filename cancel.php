<?php
include 'tpl/header.php';
include 'tpl/navbar.php';
//include 'connection.php';
$id=$_GET['id'];

$stmt = $coon->prepare("DELETE FROM notification WHERE notificationID = $id");
$stmt->execute();
if ($stmt)
{

  echo '<br><div class="alert alert-success"><h1>your Request hes been canceled!</h1> </div><br>';


}
else
{
  echo '<br><div class="alert alert-danger"> there is no somethig error! </div><br>';
}
include 'tpl/footer.php';
?>
