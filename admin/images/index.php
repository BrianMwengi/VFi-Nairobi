<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/images.php"); 
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora&display=swap" rel="stylesheet">

    <!--Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">

    <!--Custom Styling-->
    <link rel="stylesheet" href="../../assets/admin/style.css">

     <!--Custom Styling-->
     <link rel="stylesheet" href="../../assets/admin/admin.css">

    

    <title>Admin Section - Manage Images</title>
</head>
<body>
    
    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

    <!--Admin Page Wrapper-->
<div class="admin-wrapper">

<?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>


    <!--Admin content -->
    <div class="admin-content">
        <div class="button-group">
            <a href="create.php" class="btn btn-big">Add Image</a>
            <a href="index.php" class="btn btn-big">Manage Images</a>
        </div>

<div class="content">

    <h2 class="page-title">Manage Images</h2>

    <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

    <table>
        <thead>
            <th>SN</th>
            <th>Title</th>
            <th>Author</th>
            <th colspan="3">Action</th>
        </thead>

        <tbody>
            <?php foreach ($images as $key => $image): ?>
            <tr>
               <td><?php echo $key + 1; ?></td>
               <td><?php echo $image['username']; ?></td>
               <td><a href="Edit.php?id=<?php echo $image['id']; ?>" class="edit">edit</a></td>
               <td><a href="Edit.php?delete_id=<?php echo $image['id']; ?>" class="delete">delete</a></td>

               <?php if ($image['published']): ?>
                   <td><a href="Edit.php?published=0&p_id=<?php echo $image['id'] ?>" class="unpublish">unpublish</a></td>
            <?php else: ?>
                <td><a href="Edit.php?published=1&p_id=<?php echo $image['id'] ?>" class="publish">publish</a></td>
              
            <?php endif; ?>
            </tr>
            <?php endforeach; ?>     

        </tbody>
    </table>
</div>
  
 </div>
 <!--//Admin content-->

 <!-- //page wrapper-->   

 

<!--JQuery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!--Ck Editor-->
<script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>

<!--Custom Script-->
<script src="../../assets/js/scripts.js"></script>
</body>
</html>