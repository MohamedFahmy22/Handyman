<?php
  session_start();
  if(isset($_SESSION['login_user']))
  {
    include 'tpl/header.php';
    include 'tpl/navbar.php';
    if(!$_GET['do'] && !$_GET['worker_id'] && !is_numeric(!$_GET['worker_id']) && !is_numeric(!$_GET['do']))
    {
      header("Location: login.php");
    }
    elseif($_GET['do'] == 'view')
    {
      include 'inc/view.php';
    }
    elseif($_GET['do'] == 'request')
    {
      include 'func/request.php';
    }
    include 'tpl/footer.php';
  }
  else
  {
    header("Location: login.php");
  }
?>
