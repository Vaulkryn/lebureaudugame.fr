<?php
$error = null;
$showmodal = false;
if (!empty($_POST['email']) && !empty($_POST['password'])) {
    include("bdd_init.php");
    $useremail = htmlspecialchars($_POST['email']);
    $userpassword = htmlspecialchars($_POST['password']);
    $useremail = strtolower($useremail);
    $query = $bdd->prepare('SELECT ID, email, pseudo, passwd, avatar_path, user_token FROM users WHERE email = ?');
    $query->execute(array($useremail));
    $data = $query->fetch();
    $row = $query->rowCount();
    if ($row > 0) {
        if (filter_var($useremail, FILTER_VALIDATE_EMAIL)) {
            if (password_verify($userpassword, $data['passwd'])) {
                $userID = $data['ID'];
                $queryLogs = $bdd->prepare('SELECT total_uploads FROM users_logs WHERE ID = ?');
                $queryLogs->execute(array($userID));
                $dataLogs = $queryLogs->fetch();
                $rowLogs = $queryLogs->rowCount();
                if ($rowLogs > 0) {
                    $_SESSION['ID'] = $data['ID'];
                    $_SESSION['user'] = $data['pseudo'];
                    $_SESSION['avatar'] = $data['avatar_path'];
                    $_SESSION['token'] = $data['user_token'];
                    $_SESSION['total_uploads'] = $dataLogs['total_uploads'];
                    header('Location:http://localhost/lebureaudugame.fr');
                }
            } else {
                $error = "Mot de passe incorrect";
                $showmodal = true;
            }
        } else {
            $error = "Email incorrect";
            $showmodal = true;
        }
    } else {
        $error = "Ce compte n'existe pas";
        $showmodal = true;
    }
}
?>

<?php if ($showmodal) : ?>
    <div class="alert_modal" id="alertModal">
        <div class="alertModal_content">
            <p><?= $error ?></p>
        </div>
        <span id="close" class="close_alert" onclick="this.parentNode.remove(); return false;"></span>
    </div>
<?php endif ?>

<div id="menuOverlay"></div>
<nav id="loginMenu" class="login_menu">
    <div class="loginMenu_container">
        <form action="" method="post">
            <label><i class="fa-solid fa-at"></i> Email</label>
            <input type="email" name="email" autocomplete="email" required>
            <label><i class="fa-solid fa-lock"></i> Mot de passe</label>
            <input type="password" name="password" autocomplete="off" required>
            <button type="submit">Connexion</button>
        </form>
        <a href="http://localhost/lebureaudugame.fr/modules/user_settings/forgotpassword.php">Mot de passe oublié ?</a>
    </div>
</nav>