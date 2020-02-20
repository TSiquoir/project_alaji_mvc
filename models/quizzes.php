<?php
//Fonction pour ce connecter à la base de donnée.
function getQuizzes()
{
    // envoie une erreur en cas d'échec, cela évite que le mot de passe soit visible.
    try 
    {
        //ligne por la connexion à la base de donnée
        $bdd = new PDO('mysql:host=localhost;dbname=project_alaji;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }

    $req = $bdd->query('SELECT * FROM quiz');

    return $req;
}
