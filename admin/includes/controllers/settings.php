<?php

// .. source url
$url = $_SERVER['REQUEST_URI'];


$academic = new Academic();


$page =
    $academic->is_set('page', 'GET');
// delete record base on the page source


// .. get records
$courses = $academic->get_academics('id', 'course_name', 'courses');
// .. num records 
$course_rows = count($courses);

$year_levels = $academic->get_academics('id', 'level', 'levels');
// .. num records 
$level_rows = count($courses);


$sections = $academic->get_academics('id', 'section_name', 'sections');
// .. num records 
$section_rows = count($courses);


//  ..delete record
$id = $academic->is_set('id', 'GET');


if (!is_null($id)) {

    switch ($page) {
        case 'settings_courses':
            $academic->delete($id, 'courses');
            break;

        case 'settings_levels':
            $academic->delete($id, 'levels');
            break;

        case 'settings_sections':
            $academic->delete($id, 'sections');
            break;
    }

    // reload page
    goLocation('./index.php?source=settings&page=' . $page . '&status=deleted');
}




//  ..status of action
$status = $academic->is_set('status', 'GET');
