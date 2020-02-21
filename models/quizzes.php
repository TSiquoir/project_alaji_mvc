<?php
//Fonction pour ce connecter à la base de donnée.
function getQuizzes()
{
    $bdd = new PDO('mysql:host=localhost;dbname=project_alaji;charset=utf8', 'root', '');

    $req = $bdd->query('SELECT * FROM quiz');

    return $req->fetchAll();
}

