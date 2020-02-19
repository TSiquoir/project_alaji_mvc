<?php

function getQuizzes()
{
   
    try 
    {

        $bdd = new PDO('mysql:host=localhost;dbname=project_alaji;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }

    $req = $bdd->query('SELECT * FROM quiz');

    return $req;
}
?>