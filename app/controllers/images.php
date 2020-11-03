<?php
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validateImage.php");

$table = 'images';

$images = get_images_with_username();

$errors = array();
$id = "";
//$title = "";
$image = "";
//$body = "";
$published = "";

if (isset($_GET['id'])) {
    $post = selectOne($table, ['id' => $_GET['id']]);
    
    $id = $post['id'];
    //$title = $post['title'];
    $image = $post['image'];
    //$body = $post['body'];
    $published = $post['published'];
}

if (isset($_GET['delete_id'])) {
    adminOnly();
    $count = delete($table, $_GET['delete_id']);
    $_SESSION['message'] = "image deleted successfully";
    $_SESSION['type'] = "success";
    header( "location: " . BASE_URL . "/admin/images /index.php");
    exit();          
}

if (isset($_GET['published']) && isset($_GET['p_id'])) {
    adminOnly();
    $published = $_GET['published'];
    $p_id = $_GET['p_id'];
    $count = update($table, $p_id, ['published' => $published]);
    $_SESSION['message'] = "image published state changed";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/admin/images/index.php");
    exit();
}


  if (isset($_POST['add-image'])) {
      adminOnly();
    $errors = validateImage($_POST);

    if (!empty($_FILES['image']['name'])) {
        $image_name = time() . '_' . $_FILES['image']['name'];
        $destination = ROOT_PATH . "/assets/images/" . $image_name;

        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

        if ($result) {
            $_POST['image'] = $image_name;
        } else { 
            array_push($errors, "Failed to upload image");
        }
    } else {
        array_push($errors, "image required");
    }

    if (count($errors) == 0) {
        unset($_POST['add-image']); 
        $_POST['user_id'] = $_SESSION['id'];
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        //$_POST['body'] = htmlentities($_POST['body']);


       $post_id = create($table, $_POST);
       $_SESSION['message'] = "image created successfully";
       $_SESSION['type'] = "success";
       header( "loaction: " . BASE_URL . "/admin/images/index.php");
       exit();
    } else {
       // $title = $_POST['title'];
        //$body = $_POST['body'];
        $published = isset($_POST['published']) ? 1 : 0;
    }
  }

if (isset($_POST['update-image'])) {
    adminOnly();
    $errors = validateImage($_POST);
    if (!empty($_FILES['image']['name'])) {
        $image_name = time() . '_' . $_FILES['image']['name'];
        $destination = ROOT_PATH . "/assets/images/" . $image_name;

        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

        if ($result) {
            $_POST['image'] = $image_name;
        } else { 
            array_push($errors, "Failed to upload image");
        }
    } else {
        array_push($errors, "image required");
    }   

    if (count($errors) == 0) {
        $id = $_POST['id'];
        unset($_POST['update-image'], $_POST['id']); 
        $_POST['user_id'] = $_SESSION['id'];
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        //$_POST['body'] = htmlentities($_POST['body']);


       $post_id = update($table, $id, $_POST);
       $_SESSION['message'] = "image updated successfully";
       $_SESSION['type'] = "success";
       header( "location: " . BASE_URL . "/admin/images/index.php");
    } else {
        //$title = $_POST['title'];
        //$body = $_POST['body'];
        $published = isset($_POST['published']) ? 1 : 0;
    }
}
    