<?php

$student = new Student();

// process inputs
if ($http_method === 'post') {

    // .. post id for update 
    $post_id = $student->is_set('id');

    // process inputs
    $student->run($_POST, 'photo', $post_id);
}

$steid = $student->is_set('steid', 'GET');

// .. update records

if (!is_null($steid)) {

    // ..get individual records
    $current_record = $student->get_row_byId($steid);

    $unique_id = $current_record['id'];
    $id_number = $current_record['id_number'];
    $first_name = $current_record['first_name'];
    $middle_name = $current_record['middle_name'];
    $last_name = $current_record['last_name'];
    $age = $current_record['age'];
    $date_of_birth = $current_record['date_of_birth'];
    $gender = $current_record['gender'];
    $address = $current_record['address'];
    $contact_number = $current_record['contact_number'];
    $email_address = $current_record['email_address'];
    $religion = $current_record['religion'];
    $nationality = $current_record['nationality'];
    $course = $current_record['course'];
    $year_level = $current_record['year_level'];
    $section = $current_record['section'];
    $pwd = $current_record['pwd'];
    $photo = $current_record['photo'];


    $student->set_input('id_number', $id_number);
    $student->set_input('first_name', $first_name);
    $student->set_input('middle_name', $middle_name);
    $student->set_input('last_name', $last_name);
    $student->set_input('age', $age);
    $student->set_input('date_of_birth', $date_of_birth);
    $student->set_input('gender', $gender);
    $student->set_input('address', $address);
    $student->set_input('contact_number', $contact_number);
    $student->set_input('email_address', $email_address);
    $student->set_input('religion', $religion);
    $student->set_input('nationality', $nationality);
    $student->set_input('year_level', $year_level);
    $student->set_input('section', $section);
    $student->set_input('pwd', $pwd);
    // $student->set_input('photo', $photo);
}

// get success full message
$status = $student->is_set('status', 'GET');



// .... construc select statement dynamically

// courses pair colunm
$courses = $student->get_pairs('id', 'course_name', 'courses');

// sections pair colunm
$sections = $student->get_pairs('id', 'section_name', 'sections');

// levels pair colunm
$levels = $student->get_pairs('id', 'level', 'levels');
