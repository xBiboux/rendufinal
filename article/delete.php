<?php
require_once('../database.php');

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (
        isset($_POST['form'])
        && $_POST['form'] === "form_supp_article"
    ) {
        if (
            !empty($_POST['id']) 
        ) {
            $data = [
                'id' => $_POST['id'],
            ];

            $request = $database->prepare("DELETE FROM article WHERE id = :id");
            $request->execute($data);
            header("Location: index.php");
        }
    }
}
require_once 'index.template.php';
?>