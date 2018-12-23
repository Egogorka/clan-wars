<?php

function

// Format
/*
 * get = [
 *  table : str;
 *  require : str;
 *  limit : [lower,upper];
 * ]
 */

$out = [
    'err_t' => 'All ok', // Ok
    'err_c' => 0,
    'response' => null,
];

$sql = "SELECT * FROM ".$get->table." WHERE ".$get->require." = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$get->login]);
$dbarr = $stmt->fetch(PDO::FETCH_LAZY);