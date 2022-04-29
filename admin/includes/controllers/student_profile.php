<?php

// get student individual data

$statement = $database->pdo->prepare("SELECT * FROM student WHERE id_number = :id_number");
$statement->execute([':id_number' => $username]);
$current_record = $statement->fetch(PDO::FETCH_ASSOC);

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
$course = $database->getAcademic($current_record['course'], 'course_name', 'courses');
$year_level = $database->getAcademic($current_record['year_level'], 'level', 'levels');
$section = $database->getAcademic($current_record['section'], 'section_name', 'sections');
$pwd = $current_record['pwd'];
$photo = $current_record['photo'];
