<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $course = $academic->is_set('course');


    if (!is_null($course)) {
        $academic->check_input('course');
        if ($academic->add_record('course_name', [$academic->get_input('course')], 'courses')) {
            goLocation('./index.php?source=settings&page=' . $page . '&status=added');
        }
    } else {
        $academic->set_error('course', 'This field is required');
    }
}
