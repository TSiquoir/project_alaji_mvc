<?php

require_once('models/students.php');

function listStudents()
{
    $students = getStudents();
    require('views/view_students.php');
}
