<?php

require_once('models/quizzes.php');

function listQuizzes()
{
    $quizzes = getQuizzes();

    require('views/view_quiz.php');

    
}