<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Le bureau du game</title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/icons/controller.svg" type="image/x-icon">
    <link rel="stylesheet" href="styles/index.css">
</head>

<body>

    <?php
    include("modules/includes/header.php");
    include("modules/includes/login.php");
    include("modules/includes/usermenu.php");
    ?>

    <section class="banner">
        <div class="banner_container">
            <div class="news">
                <div class="patchnotes">
                    <h1>Suivi de mise à jour</h1>

                    <!------------------------------->
                    <!----↓↓ v0.0.5 -> v0.0.50 ↓↓---->
                    <h2>v0.0.0 <i class="fa-solid fa-arrow-right"></i> v0.0.80:</h2>
                    _ HTML ? CSS ? Java..script ? Merise ?!
                    </br>_ Recherche du design général
                    </br>_ Utilisation du framework CSS Bootstrap
                    </br>_ Ajout de Slick puis abandon
                    </br>_ Ajout du plugin Animate On Scroll
                    </br>_ Ajout de la barre de recherche (seulement le css)
                    </br>_ Intégration d'un slider vu sur codepen puis abandon
                    </br>_ Ajout du plugin Swup
                    </br>_ Factorisation du code
                    </br>_ Création de la classe "Carousel"

                    <!------------------>
                    <!----↓↓ v0.1 ↓↓---->
                    </br>
                    <h2> v0.1:</h2>
                    <p>Ajouts:</p>
                    <ul>
                        <li>_ Ajout de la librairie jQuery via le fichier jquery.min.js</li>
                        <li>_ Création de l'interface utilisateur ainsi que les fonctions permettant l'inscription, la connexion,la modification de ses infos de profil
                            </br></hr>(Avatar, Pseudo, Mot de passe) et l'upload de contenu image et vidéo
                        </li>
                        <li>_ Création d'un système de mot de passe oublié</li>
                        <li>_ Mise en place de la base de données</li>
                        <li>_ Page du jeu Kurtzpel</li>
                    </ul>
                    <p>Modifications:</p>
                    <ul>
                        <li>_ Réorganisation de l'arborescence du site</li>
                        <li>_ Nettoyage du code, refactorisation</li>
                        <li>_ Refonte de certains design</li>
                    </ul>
                    <p>Suppressions:</p>
                    <ul>
                        <li>_ Bootstrap</li>
                        <li>_ Animate On Scroll</li>
                        <li>_ Swup</li>
                    </ul>

                    <!------------------>
                    <!----↓↓ v0.2 ↓↓---->
                    </br>
                    <h2> v0.2:</h2>
                    <p>Ajouts:</p>
                    <ul>
                        <li>_ Modals pour la visualisation de screenshots</li>
                        <li>_ Alerte d'erreur pour la connexion et l'inscription</li>
                        <li>_ Page de redirection pour du contenu futur</li>
                        <li>_ Page du jeu Furi</li>
                        <li>_ Lien GitHub</li>
                    </ul>
                    <p>Modifications:</p>
                    <ul>
                        <li>_ Retouche du design de la page des jeux</li>
                        <li>_ Correctif sur tout les systèmes mis en place en v0.1</li>
                    </ul>

                    <!------------------>
                    <!----↓↓ v0.3 ↓↓---->
                    </br>
                    <h2> v0.3:</h2>
                    <p>Ajouts:</p>
                    <ul>
                        <li>_ Installation du logiciel SabreDAV via composer</li>
                        <li>_ Uploads en attente</li>
                        <li>_ Roadmap</li>
                    </ul>
                    <p>Modifications:</p>
                    <ul>
                        <li>_ MAJ de la base de données</li>
                        <li>_ MAJ du processus d'upload pour les images: Design, Fonctionnalitées, indexation en bdd</li>
                        </br>
                    </ul>

                    <!------------------>
                    <!----↓↓ v0.4 ↓↓---->
                    </br>
                    <h2> v0.4 [En développement]:</h2>
                    <p>Ajouts:</p>
                    <ul>
                        <li>_ Page Admin</li>
                        <li>_ Page de l'utilisateur
                            <!----Afficher/modifier/supprimer ses uploads,Lien redirecteur vers la chaine Twitch ou Youtube de l'utilisateur---->
                        </li>
                    </ul>
                    <p>Modifications:</p>
                    <ul>
                        <li>_ MAJ du processus d'upload pour les vidéos: Design, Fonctionnalitées, indexation en bdd, stockage sur LEVIIA</li>
                        </br>
                    </ul>
                </div>
            </div>
        </div>
        <div class="divider"></div>
    </section>

    <section class="games_wrapper">
        <section class="games_subwrapper">
            <section class="games_container fadeOutLeft">
                <div class="games_title">FPS</div>
                <div class="games_slider">
                    <div id="carusel1">
                        <div class="item">
                            <a href="http://localhost/lebureaudugame.fr/modules/no-content-for-now.php"><img src="img/games/games_cover/TheCycle.jpg"></a>
                        </div>

                        <div class="item">
                            <a href="http://localhost/lebureaudugame.fr/modules/no-content-for-now.php"><img src="img/games/games_cover/Apex.jpg"></a>
                        </div>

                        <div class="item">
                            <a href="http://localhost/lebureaudugame.fr/modules/no-content-for-now.php"><img src="img/games/games_cover/Tarkov.jpg"></a>
                        </div>

                        <div class="item">
                            <a href="http://localhost/lebureaudugame.fr/modules/no-content-for-now.php"><img src="img/games/games_cover/R6.jpg"></a>
                        </div>
                    </div>
                </div>
                <div class="divider bottom"></div>
            </section>
            <section class="category_container fadeOutRight">
                <div class="divider top"></div>
                <div class="category_info">
                    <p>Dernier contributeur: <a href="#">TheNoName</a></p>
                    <p>Meilleur contributeur: <a href="#">TheNoName</a></p>
                    <p>Dernier ajout: <a href="#">Screen Tarkov</a></p>
                    <p><a href="#">17</a> Vidéos</p>
                    <p><a href="#">46</a> Screenshots</p>
                </div>
                <div class="divider bottom"></div>
            </section>
        </section>

        <section class="games_subwrapper">
            <section class="games_container fadeOutLeft">
                <div class="games_title">RPG / MMORPG</div>
                <div class="games_slider">

                    <div id="carusel2">
                        <div class="item">
                            <a href="http://localhost/lebureaudugame.fr/modules/no-content-for-now.php"><img src="img/games/games_cover/DarkSouls3.jpg"></a>
                        </div>

                        <div class="item">
                            <a href="http://localhost/lebureaudugame.fr/modules/no-content-for-now.php"><img src="img/games/games_cover/EldenRing.jpg"></a>
                        </div>

                        <div class="item">
                            <a href="http://localhost/lebureaudugame.fr/modules/no-content-for-now.php"><img src="img/games/games_cover/GuildWars2.gif"></a>
                        </div>
                    </div>
                </div>
                <div class="divider bottom"></div>
            </section>
            <section class="category_container fadeOutRight">
                <div class="divider top"></div>
                <div class="category_info">
                    <p>Dernier contributeur: <a href="#">TheNoName</a></p>
                    <p>Meilleur contributeur: <a href="#">TheNoName</a></p>
                    <p>Dernier ajout: <a href="#">TopTierGamer.mp4</a></p>
                    <p><a href="#">32</a> Vidéos</p>
                    <p><a href="#">76</a> Screenshots</p>
                </div>
                <div class="divider bottom"></div>
            </section>
        </section>

        <section class="games_subwrapper">
            <section class="games_container fadeOutLeft">
                <div class="games_title">Combat / Beat Them All</div>
                <div class="games_slider">

                    <div id="carusel3">
                        <div class="item">
                            <a href="http://localhost/lebureaudugame.fr/modules/no-content-for-now.php"><img src="img/games/games_cover/SoulCaliburVI.jpg"></a>
                        </div>

                        <div class="item">
                            <a href="modules/games/furi.php"><img src="img/games/games_cover/Furi.jpg"></a>
                        </div>

                        <div class="item">
                            <a href="modules/games/kurtzpel.php"><img src="img/games/games_cover/Kurtzpel.jpg"></a>
                        </div>
                    </div>
                </div>
                <div class="divider bottom"></div>
            </section>
            <section class="category_container fadeOutRight">
                <div class="divider top"></div>
                <div class="category_info">
                    <p>Dernier contributeur: <a href="#">TheNoName</a></p>
                    <p>Meilleur contributeur: <a href="#">TheNoName</a></p>
                    <p>Dernier ajout:</br> <a href="#">New Record Speedrun Furi.mp4</a></p>
                    <p><a href="#">11</a> Vidéos</p>
                    <p><a href="#">25</a> Screenshots</p>
                </div>
                <div class="divider bottom"></div>
            </section>
        </section>
    </section>

    <section class="randomscreenshot_container reveal">
        <div class="randomscreenshot_title">Selection de screenshots</div>
        <div class="randomscreenshot">
            <img src="img/games/screenshots/Aion/Aion01.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion02.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion03.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion04.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion05.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion06.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion07.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion08.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion09.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion10.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion11.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion12.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion13.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion14.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion15.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion16.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion17.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion18.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion19.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion20.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion21.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion22.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion23.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion24.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion25.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion26.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion27.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion28.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion29.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion30.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion31.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion32.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion33.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion34.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion35.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion01.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion02.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion03.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion04.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion05.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion06.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion07.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion08.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion09.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion10.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion11.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion12.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion13.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion14.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion15.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion16.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion17.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion18.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion19.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion20.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion21.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion22.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion23.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion24.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion25.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion26.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion27.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion28.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion29.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion30.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion31.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion32.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion33.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion34.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion35.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion01.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion02.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion03.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion04.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion05.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion06.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion07.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion08.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion09.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion10.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion11.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion12.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion13.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion14.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion15.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion16.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion17.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion18.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion19.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion20.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion21.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion22.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion23.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion24.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion25.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion26.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion27.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion28.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion29.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion30.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion31.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion32.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion33.jpg" class="img revealImgA" alt="">
            <img src="img/games/screenshots/Aion/Aion34.jpg" class="img revealImgB" alt="">
            <img src="img/games/screenshots/Aion/Aion35.jpg" class="img revealImgA" alt="">
        </div>
        <div class="divider bottom"></div>
    </section>

    <section class="modal" id="modalBody">
        <img class="modal_content" id="modalImg" />
        <span class="close"><i class="fa-solid fa-xmark"></i></span>
    </section>

    <?php include("modules/includes/footer.php"); ?>

    <script type="text/javascript" src="scripts/jquery.min.js"></script>
    <script type="text/javascript" src="scripts/index.js"></script>
    <script type="text/javascript" src="scripts/user_menu.js"></script>
    <script src="https://kit.fontawesome.com/5122e18abc.js" crossorigin="anonymous"></script>
</body>

</html>