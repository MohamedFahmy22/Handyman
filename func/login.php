<?php
    session_start();

    include 'connection.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
      switch ($_POST['type']) {
        case '1':
          $email    = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
          $password = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);
       //   $hashpass = password_hash($password, PASSWORD_DEFAULT);

          $stmt = $coon->prepare("SELECT * FROM user WHERE email = ?");
          $stmt->execute(array($email));
          $row = $stmt->fetch(PDO::FETCH_ASSOC);
          $count = $stmt->rowcount();

          if($count > 0){

              if($password == $row['password'])
              {
                  $username=$row['username'];
                  $id=$row['userID'];
                  $loc=$row['locationID'];
                  $_SESSION['login_user']='YES';
                  $_SESSION['user'] = $username;
                  $_SESSION['userID']=$id;
                  $_SESSION['Loc']=$loc;

                  header("Location:../index.php");
                  exit();

              }
              else
              {
                //echo "string";
                  header("Location:../login.php");
                  exit();
              }

          }else{
            //echo "dddddd";
              header("Location:../login.php");
              exit();
          }
          break;
          case '2':
            $email    = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $password = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);
         //   $hashpass = password_hash($password, PASSWORD_DEFAULT);

            $stmt = $coon->prepare("SELECT * FROM worker WHERE mail = ?");
            $stmt->execute(array($email));
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $count = $stmt->rowcount();

            if($count > 0)
            {
              if($password == $row['password'])
              {
                  $username=$row['firstname'];
                  $id=$row['workerID'];
                  $_SESSION['login_worker']='YES';
                  $_SESSION['worker'] = $username;
                  $_SESSION['workerID']=$id;

                  header("Location:../worker");
                  exit();
              }
              else
              {
                header("Location:../login.php");
                exit();
              }
            }
            else
            {
              header("Location:../login.php");
              exit();
            }
            break;

        default:
          echo "there is something wrong";
          break;
      }
    }
    else
    {
        header("Location:../login.php");
        exit();
    }
