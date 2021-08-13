<?php

  include 'connection.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $image = $_FILES['chooseFile'];
        $image_name = $image['name'];
        $image_type = $image['type'];
        $image_size = $image['size'];
        $image_temp = $image['tmp_name'];
        $image_error = $image['error'];

        $allowed_extension = array('jpg', 'png');

        if($image_error == 4)
        {
            echo "error";
        }
        else
        {
            $image_extension = explode('.', $image_name);
            $end_name = end($image_extension);

            $new_name = rand(1, 236574892) . time() . '.' . $end_name;

            if( !in_array($end_name, $allowed_extension))
            {
                echo 'image not valid';
            }

            if($image_size > 150000){

                echo 'image cant more than ';
            }
        }

        move_uploaded_file($image_temp, '../images/' . $new_name);

        $f_name         = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $Email          = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $password       = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);
        $Phone          = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
        $location       = intval($_POST['loc']);

        $stmt = $coon->prepare("INSERT INTO user(`username`, `email`, `password`, `locationID`, `phone`, `picture`)
                                      VALUES(:fnam,:emaill,:passw,:locat,:pho,:img)");
        $stmt->execute(array(

            'img'       => $new_name,
            'fnam'      => $f_name,
            'emaill'    => $Email,
            'passw'     => $password,
            'pho'       => $Phone,
            'locat'     => $location
        ));
        if (isset($stmt))
        {
            session_start();
            $stmt_r = $coon->prepare("SELECT * FROM user WHERE email = ?");
            $stmt_r->execute(array($Email));
            $row_r = $stmt_r->fetch(PDO::FETCH_ASSOC);

            $username=$row_r['username'];
            $id=$row_r['userID'];
            $loc=$row_r['locationID'];
            $_SESSION['login_user']='YES';
            $_SESSION['user'] = $username;
            $_SESSION['userID']=$id;
            $_SESSION['Loc']=$loc;
            header("Location:../index.php");
            exit();
        }
        else
        {
            header("Location:../register.php");
            exit();
        }
    }
