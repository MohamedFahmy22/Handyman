<?php

  include 'connection.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $image = $_FILES['pic'];
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
        $image = $_FILES['cv'];
        $image_name = $image['name'];
        $image_type = $image['type'];
        $image_size = $image['size'];
        $image_temp = $image['tmp_name'];
        $image_error = $image['error'];

        $allowed_extension = array('pdf', 'PDF');

        if($image_error == 4){

            echo "File Is Not Uploaded";
        }else{

            $image_extension = explode('.', $image_name);
            $end_name = end($image_extension);

            $pdf_name = rand(1, 236574892) . time() . '.' . $end_name;

            if( !in_array($end_name, $allowed_extension)){

                echo 'File Is Not Valid';
            }

            if($image_size > 150000){

                echo 'File Cant Be More Than 10240 KB';
            }
        }

        move_uploaded_file($image_temp, '../pdf/' . $pdf_name);

        $f_name         = filter_var($_POST['fname'], FILTER_SANITIZE_STRING);
        $l_name         = filter_var($_POST['lname'], FILTER_SANITIZE_STRING);
        $Email          = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $password       = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);
        $Phone          = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
        $Work           = intval($_POST['workk']);
        $location       = intval($_POST['loc']);
        $birthdate      = filter_var($_POST['date']);

        $stmt = $coon->prepare("INSERT INTO worker(`firstname`, `lastname`, `mail`, `password`, `phone`, `locationID`, `workID`, `picture`, `birthdate`, `CV`, `status`)
                                      VALUES(:fnam,:lnam,:emaill,:passw,:pho,:locat,:woo,:img,:bd,:cv,0)");
        $stmt->execute(array(

            'img'       => $new_name,
            'cv'        => $pdf_name,
            'fnam'      => $f_name,
            'lnam'      => $l_name,
            'emaill'    => $Email,
            'passw'     => $password,
            'pho'       => $Phone,
            'woo'       => $Work,
            'locat'     => $location,
            'bd'        => $birthdate
        ));
        if (isset($stmt))
        {
            session_start();
            $_SESSION['login_worker']='YES';
            $_SESSION['worker'] = $f_name;
            $_SESSION['mail']=$Email;

            header("Location:../index.php");
            exit();
        }
        else
        {
            header("Location:../register.php");
            exit();
        }
    }
