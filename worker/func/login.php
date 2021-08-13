<?php

    session_start();

    include 'connection.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $email    = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $password = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);
     //   $hashpass = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $coon->prepare("SELECT * FROM worker WHERE mail = ?");
        $stmt->execute(array($email));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $count = $stmt->rowcount();

        if($count > 0){

            if($password == $row['password'])
            {
                $username=$row['firstname'];
                $id=$row['workerID'];
                $_SESSION['login_worker']='YES';
                $_SESSION['worker'] = $username;
                $_SESSION['workerID']=$id;

                header("Location:../index.php");
                exit();

            }
            else
            {

                header("Location:../login.php");
                exit();
            }

        }else{

            header("Location:../login.php");
            exit();
        }

    }else{

        header("Location:../login.php");
        exit();
    }