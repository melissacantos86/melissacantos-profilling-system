<?php

$student = new Student();

// student records
$records = $student->get_rows()->fetchAll(PDO::FETCH_ASSOC);

// source page. 
$source = $_GET['source'];

// get id
$id = $student->is_set('stdid', 'GET');

if ($id) {

    // .. delete 
    $student->removeStudent($id);

    goLocation("{$script}?source={$source}&status=deleted");
}

// get success full message
$status = $student->is_set('status', 'GET');

// .. update 


// ... search record
