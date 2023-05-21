<?php
require_once('database.php');

$request = $database->prepare("SELECT * FROM user");
$request->execute();
$user = $request->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (
        isset($_POST['form'])
        && $_POST['form'] === "formulaire_ajout_user"
    ) {
        if (
            !empty($_POST['user_prenom'])
            && !empty($_POST['user_nom'])
            && !empty($_POST['user_pseudo'])
            && !empty($_POST['user_email'])
            && !empty($_POST['user_password'])
        ) {
            $user_prenom = $_POST['user_prenom'];
            $user_nom = $_POST['user_nom'];
            $user_pseudo = $_POST['user_pseudo'];
            $user_email = $_POST['user_email'];
            $user_password = $_POST['user_password'];
        }
    }
}


require_once 'index.template.php';
?>