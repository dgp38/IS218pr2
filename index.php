<?php
require('model/data_db.php');
require('model/accountsdb.php');
require('model/questionsdb.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'show_login';
    }
}

switch ($action) {
    case 'show_login':
    {
        include('views/login_form.php');
        break;
    }
    case 'validatelogin':
    {
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        //$email_id = strpos($email, '@');
        //$passid = strlen($password);
        if ($email == NULL || $password == NULL) {
            $error = 'Email and Password not include';
            include('error_page/errorcheck.php');
        } else {
            $userId = validatelogin($email, $password);
            if ($userId == false){
                $error = 'Invalid Login';
                include('error_page/errorcheck.php');
                //header('Location: .?action=display_registration');
            } else {
                echo 'valid login';
                //header("Location: .?action=display_questions&userId=$userId");
            }
        }
        break;
    }

    default: {
        $error = 'Unknown Action';
        include('error_page/errorcheck.php');
        }

}
