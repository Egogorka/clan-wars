<?php

session_start();

require_once '../main/mysqlin.php';
require_once '../main/functions.php';

$UserInfo = GetRowByID($_SESSION['id'], 'user');

if(empty($_SESSION['id'])){
    echo 'Not ok, sign in please';
    exit;
}

if (!empty($UserInfo['clan_id'])) {
    echo 'Not ok, you are already in clan, you should quit one to create a new one';
    exit;
}

$get = json_decode($_POST["param"]);

$sql = "SELECT * FROM clans WHERE name = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$get->name]);
$dbarr = $stmt->fetch(PDO::FETCH_LAZY);

if(!empty($dbarr)){
    echo 'Not ok, a clan with that name already exists';
    exit;
}

// TODO Testing clan id's and other stuff
// Uncomment inserting

$values = array($get->name, $_SESSION['id']);
$sql = "INSERT INTO clans (name,leader_id) VALUES (?,?)";
$stmt = $pdo->prepare($sql);
$result = $stmt->execute($values);

$id = $pdo->lastInsertId();

$values = array($id,$_SESSION['id']);
$sql = "UPDATE users SET clan_id = ? WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute($values);

echo "Everything ok, clan created";