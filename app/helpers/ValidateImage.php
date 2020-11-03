<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

function validateImage($image)
{
    $errors = array();


        if (isset($post['add-image'])) {
            array_push($errors, 'image already exists');
        }
        
    return $errors;
}