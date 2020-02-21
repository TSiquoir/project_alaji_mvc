<?php
//Récupère ce qu'il y a dans l'url pour indentifier la page.
$params = explode("/", strtok($_SERVER["REQUEST_URI"],'?'));
array_shift($params);

$route = $params[1];

if ($route === "quizzes") {
    require_once('controllers/quizzes.php');
    listQuizzes();
} elseif ($route === "candidats") {
    require_once('controllers/students.php');
    listStudents();
} else {
    echo "je suis sur la page d'accueil";
}


