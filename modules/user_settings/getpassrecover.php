<?php
include("../includes/bdd_init.php");
if (!empty($_GET['u']) && !empty($_GET['token'])) {
    $u = htmlspecialchars(base64_decode($_GET['u']));
    $token = htmlspecialchars(base64_decode($_GET['token']));
    $check = $bdd->prepare('SELECT * FROM passwordrecover WHERE tokenUser = ? AND tokenRecov = ?');
    $check->execute(array($u, $token));
    $row = $check->rowCount();
    $data = $check->fetch();
    if ($row) {
        $get = $bdd->prepare('SELECT token FROM users WHERE token = ?');
        $get->execute(array($u));
        $data_u = $get->fetch();
        if (hash_equals($data_u['token'], $u)) {
            header('Location: passwordrecover.php?u=' . base64_encode($u));
            die();
        } else {
            echo "Erreur : compte non valide";
        }
    } else {
        echo "Lien non valide";
    }
}
