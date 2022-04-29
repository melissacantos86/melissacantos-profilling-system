<?php


$total_student = $database->rowCounts() ?? 0;

$total_courses = $database->rowCounts('courses') ?? 0;

$total_levels = $database->rowCounts('levels') ?? 0;

$total_sections = $database->rowCounts('sections') ?? 0;
