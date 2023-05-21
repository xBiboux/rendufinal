<?php
require_once('database.php');
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
            $data = [
                'user_prenom' => $_POST['user_prenom'],
                'user_nom' => $_POST['user_nom'],
                'user_pseudo' => $_POST['user_pseudo'],
                'user_email' => $_POST['user_email'],
                'user_password' => password_hash($_POST['user_password'], PASSWORD_DEFAULT),
            ];
            $request = $database->prepare(
                "INSERT INTO user (user_prenom, user_nom, user_pseudo, user_email, user_password) 
            VALUES (:user_prenom, :user_nom, :user_pseudo, :user_email, :user_password)");
            $request->execute($data);
            header("Location: index.php");
        }
    }
}
require_once 'index.template.php';
?>