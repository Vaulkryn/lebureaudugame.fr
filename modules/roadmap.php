<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Le Bureau du Game</title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../img/icons/controller.svg" type="image/x-icon">
    <link rel="stylesheet" href="../styles/no-content-for-now.css">
</head>

<body>
    <?php
    include("includes/header.php");
    include("includes/login.php");
    include("includes/usermenu.php");
    ?>

    <section class="noContent_wrapper wrappmap">
        <div class="noContent_title">ROADMAP</div>
        <div class="noContent_container map">
            <p>v0.4.5:</p>
            <ul>
                <li>
                    <i class="fa-solid fa-arrow-right-long"></i>
                    Affichage du contenu des utilisateurs, commentaires vidéo, pseudo et avatar redirigeant vers leur profil
                </li>
                <li>
                    <i class="fa-solid fa-arrow-right-long"></i>
                    Système de commentaires sous les vidéos
                </li>
                <li>
                    <i class="fa-solid fa-arrow-right-long"></i>
                    Dropdown pour la section commentaires
                </li>
            </ul>
            
            <p>v0.5:</p>
            <ul>
                <li>
                    <i class="fa-solid fa-arrow-right-long"></i>
                    Système d'envoi de mails pour les formulaires d'inscription, de mot de passe oublié, laisser un avis et contact
                </li>
                <li>
                    <i class="fa-solid fa-arrow-right-long"></i>
                    Affichage du contenu des utilisateurs, commentaires vidéo, pseudo et avatar redirigeant vers leur profil
                </li>
                <li>
                    <i class="fa-solid fa-arrow-right-long"></i>
                    Fonction pour randomize les screenshots
                </li>
            </ul>

            <p>v0.6:</p>
            <ul>
                <li>
                    <i class="fa-solid fa-arrow-right-long"></i>
                    Fonction de recherche
                </li>
                <li>
                    <i class="fa-solid fa-arrow-right-long"></i>
                    Proposition de jeu/catégorie via le SELECT
                </li>
                <li>
                    <i class="fa-solid fa-arrow-right-long"></i>
                    Suggestion d'améliorations du site
                </li>
            </ul>

            <p>v0.7:</p>
            <ul>
                <li>
                    <i class="fa-solid fa-arrow-right-long"></i>
                    À propos
                </li>
                <li>
                    <i class="fa-solid fa-arrow-right-long"></i>
                    CGU
                </li>
                <li>
                    <i class="fa-solid fa-arrow-right-long"></i>
                    Politique de confidentialité
                </li>
                <li>
                    <i class="fa-solid fa-arrow-right-long"></i>
                    Lors de l’inscription, case à cocher pour les CGU, test Captcha
                </li>
            </ul>

            <p>v0.8:</p>
            <ul>
                <li>
                    <i class="fa-solid fa-arrow-right-long"></i>
                    Créer la page "Mes stats" avec Matomo
                </li>
                <li>
                    <i class="fa-solid fa-arrow-right-long"></i>
                    Créer la page "Mon rang" avec un système de ranking selon les uploads
                </li>
            </ul>

            <p>v0.9:</p>
            <ul>
                <li>
                    <i class="fa-solid fa-arrow-right-long"></i>
                    Possibilitée de modifier l'interface dans "mes préférences"
                </li>
                <li>
                    <i class="fa-solid fa-arrow-right-long"></i>
                    Possibilitée de recevoir ou non des notifications par mails
                </li>
            </ul>

            <p>v1.0:</p>
            <ul>
                <li>
                    <i class="fa-solid fa-arrow-right-long"></i>
                    Version mobile (.apk)
                </li>
            </ul>

            <p>v?.??:</p>
            <ul>
                <li>
                    <i class="fa-solid fa-arrow-right-long"></i>
                    Transition SCSS
                </li>
            </ul>
        </div>
        <div class="divider bottom"></div>
    </section>

    <?php include("includes/footer.php"); ?>

    <script type="text/javascript" src="../scripts/jquery.min.js"></script>
    <script type="text/javascript" src="../scripts/user_menu.js"></script>
    <script src="https://kit.fontawesome.com/5122e18abc.js" crossorigin="anonymous"></script>
</body>

</html>