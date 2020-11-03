<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validateUser.php");

$table = 'users';

$admin_users = selectAll($table);

$errors = array();
$id ='';
$username = '';
$admin = '';
$email = '';
$password = '';
$re_password = '';


function loginUser($user)
{
    $_SESSION['id'] = $user['id'];
    $_SESSION['name'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['message'] = 'You are now logged in';
    $_SESSION['type'] = 'success';

    if ($_SESSION['admin']) {
        header('location:' . BASE_URL .'/admin/dashboard.php');
        } else {
         header('location:' . BASE_URL .'/index.php');
        }
        exit();
}

if (isset($_POST['submit']) || isset($_POST['create-admin'])) {
    $errors = validateUser($_POST);

    if (count($errors) === 0) {
       unset($_POST['submit'], $_POST['re_password'], $_POST['create-admin']);
       $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
       
       if(isset($_POST['admin'])) {
          $_POST['admin'] = 1;
          $user_id = create($table, $_POST);
          $_SESSION['message'] = "Admin user created successfully";
          $_SESSION['type']= "success";
          header('location: ' . BASE_URL . '/admin/users/index.php');
          exit();
       } else {
        $_POST['admin'] = 0;
        $user_id = create($table, $_POST);
        $user =  selectOne($table, ['id' => $user_id]);
        loginUser($user);
       }

    } else {
        $username = $_POST['username'];
        $admin = isset($_POST['admin']) ? 1: 0;
        $email = $_POST['email'];
        $password = $_POST['password'];
        $re_password = $_POST['re_password'];
    }    
}

if (isset($_POST['update-user'])) {
    //adminOnly();
    $errors = validateUser($_POST);

    if (count($errors) === 0) {
        $id = $_POST['id'];
       unset($_POST['re_password'], $_POST['update-user'], $_POST['id']);
       $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
       
      
          $_POST['admin'] = isset($_POST['admin']) ? 1 : 0;
          $count = update($table, $id, $_POST);
          $_SESSION['message'] = "Admin user created successfully";
          $_SESSION['type']= "success";
          header('location: ' . BASE_URL . '/admin/users/index.php');
          exit();

    } else {
        $name = $_POST['name'];
        $admin = isset($_POST['admin']) ? 1: 0;
        $email = $_POST['email'];
        $password = $_POST['password'];
        $re_password = $_POST['re_password'];
    }    
}

if (isset($_GET['id'])) {
    $user = selectOne($table, ['id' => $_GET['id']]);

    $id = $user['id'];
    $name = $user['username'];
    $admin = $user['admin']; 
    $email = $user['email'];
}

 if (isset($_POST['login100-form-btn'])) {
     $errors = validateLogin($_POST);

     if (count($errors)=== 0) {
         $user = selectOne($table, ['username'=> $_POST['username']]);

        if ($user && password_verify($_POST['password'], $user['password'])) {
            loginUser($user);
        } else {
            array_push($errors, 'Wrong credentials');
        }
     }

     $username = $_POST['username'];
     $username = $_POST['password'];
 }

 if (isset($_GET['delete_id'])) {
     //adminOnly();
     $count = delete($table, $_GET['delete_id']);
     $_SESSION['message'] = "Admin user deleted";
     $_SESSION['type']= "success";
     header('location: ' . BASE_URL . '/admin/users/index.php');
     exit();
 }