<?php
//On introduit le modèle dans le crontroller
require_once('models/quizzes.php');

function listQuizzes()
{
    $quizzes = getQuizzes();


    require('views/view_quiz.php');

    
}