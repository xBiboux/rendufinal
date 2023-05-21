<?php
require_once('database.php');

$request = $database->prepare("SELECT * FROM article ORDER BY date DESC LIMIT 1"); //pour trier les tweet du plus anciens au plus récent
$request->execute();
$tweets = $request->fetch(PDO::FETCH_ASSOC);
print json_encode($tweets);