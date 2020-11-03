<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

function validateEvent($event)
{
    $errors = array();

    if(empty($event['title'])) {
        array_push($errors, 'Title is required');
    }

    if(empty($event['body'])) {
        array_push($errors, 'Body is required');
    }

    //if(empty($post['topic_id'])) {
        //array_push($errors, 'Please select a topic');
    //}

    $existingEvent = selectOne('events', ['title' => $event['title']]);
    if ($existingEvent) {
         if(isset($event['update-event']) && $existingEvent['id'] !=$event['id']) {
             array_push($errors, 'Event with that title already exists');
         }

        if (isset($event['add-event'])) {
            array_push($errors, 'Event with that title already exists');
        }
    }

    return $errors;
}