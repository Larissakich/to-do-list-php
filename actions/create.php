<?php 

require_once('../database/conn.php');

$description = filter_input(INPUT_POST,  'description');

if ($description) {
    $sql = $pdo->prepare("INSERT INTO task (description) VALUES (:description)");
    $sql->bindValue(':description', $description);
    $sql->execute();

    header('Location: ../index.php');
    exit;
} else {
    header('Location: ../index.php');
    exit;
}