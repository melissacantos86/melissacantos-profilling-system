<?php

$student = new Student();


// .. search terms
$term = $student->is_set('term', 'GET');

if (!is_null($term)) {
    // student records

    $search_term =  $term . '%';

    $records = $student->search($search_term);
}
