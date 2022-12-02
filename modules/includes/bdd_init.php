<?php
include('login_id.php');
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];
try {
    $bdd = new PDO('mysql:host=' . $host . ';dbname=' . $databaseName . ';charset=utf8', $loginName, $password, $options);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
