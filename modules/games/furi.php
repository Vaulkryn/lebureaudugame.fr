<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Le Bureau du Game</title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../img/icons/controller.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../styles/games.css">
</head>

<body>
    <?php include("../includes/header.php"); ?>
    <?php include("../includes/login.php"); ?>
    <?php include("../includes/usermenu.php"); ?>

    <section class="banner">
        <div class="banner_container_furi">
            <a href="">
                <img src="../../img/games/games_cover/Furi_banner.jpg">
            </a>
        </div>
        <div class="divider"></div>
    </section>

    <section class="main_wrapper">
        <section class="video_container">

            <div class="divider top"></div>
            <div class="video_content" id="displayVideo">
                <video controls poster="../../img/games/preview_video/furi/lachaine.PNG" width="100%" preload="none" src="https://cloud.leviia.com/remote.php/dav/files/vaulkryn/Stl_ver1.0.mp4"></video>
                <div class="video_infos">
                    <h4>La Chaîne</h4>
                    <p>02/10/2022</p>
                </div>
                <div class="video_owner">
                    <img src="">
                    <a href="">Vaulkryn</a>
                </div>
                <div class="video_ownerShortText">
                    <p>A little description A little description A little description A little description A little description
                        A little description A little description A little description A little description A little description
                    </p>
                </div>
                <div class="game_redirect">
                    <a href="https://www.youtube.com/channel/UCww56sHAUc84aMJQPFvjwOw" target="_blank">
                        <img src="../../img/games/games_cover/Furi.jpg" alt="">
                        <div class="game_redirectInfos">
                            <h4>Furi</h4>
                            <p>2016</p>
                            <p>Contenus associés à ce jeu <i class="fa-solid fa-angle-right"></i></p>
                        </div>
                    </a>
                </div>
                <div class="comments">
                    <h4>Commentaires <i class="fa-solid fa-caret-down"></i></h4>
                </div>
            </div>
            <div class="divider bottom"></div>

            <div class="video_contentHidden" id="video1">
                <video controls poster="../../img/games/preview_video/furi/lachaine.PNG" width="100%" preload="none" src="" allowfullscreen></video>
                <div class="video_infos">
                    <h4>La Chaîne</h4>
                    <p>02/10/2022</p>
                </div>
                <div class="video_owner">
                    <img src="">
                    <a href="">Vaulkryn</a>
                </div>
                <div class="video_ownerShortText">
                    <p>A little description A little description A little description A little description A little description
                        A little description A little description A little description A little description A little description
                    </p>
                </div>
                <div class="game_redirect">
                    <a href="https://www.youtube.com/channel/UCww56sHAUc84aMJQPFvjwOw" target="_blank">
                        <img src="../../img/games/games_cover/Furi.jpg" alt="">
                        <div class="game_redirectInfos">
                            <h4>Furi</h4>
                            <p>2016</p>
                            <p>Contenus associés à ce jeu <i class="fa-solid fa-angle-right"></i></p>
                        </div>
                    </a>
                </div>
                <div class="comments">
                    <h4>Commentaires <i class="fa-solid fa-caret-down"></i></h4>
                </div>
            </div>

            <div class="video_contentHidden" id="video2">
                <video controls poster="../../img/games/games_cover/Furi_banner.jpg" width="100%" preload="none" src="" allowfullscreen></video>
                <div class="video_infos">
                    <h4>La Sangle</h4>
                    <p>02/10/2022</p>
                </div>
                <div class="video_owner">
                    <img src="">
                    <a href="">Vaulkryn</a>
                </div>
                <div class="video_ownerShortText">
                    <p>A little description A little description A little description A little description A little description
                        A little description A little description A little description A little description A little description
                    </p>
                </div>
                <div class="game_redirect">
                    <a href="https://www.youtube.com/channel/UCww56sHAUc84aMJQPFvjwOw" target="_blank">
                        <img src="../../img/games/games_cover/Furi.jpg" alt="">
                        <div class="game_redirectInfos">
                            <h4>Furi</h4>
                            <p>2016</p>
                            <p>Contenus associés à ce jeu <i class="fa-solid fa-angle-right"></i></p>
                        </div>
                    </a>
                </div>
                <div class="comments">
                    <h4>Commentaires <i class="fa-solid fa-caret-down"></i></h4>
                </div>
            </div>

            <div class="video_contentHidden" id="video3">
                <video controls poster="../../img/games/preview_video/furi/laligne.PNG" width="100%" preload="none" src="" allowfullscreen></video>
                <div class="video_infos">
                    <h4>La Ligne</h4>
                    <p>02/10/2022</p>
                </div>
                <div class="video_owner">
                    <img src="">
                    <a href="">Vaulkryn</a>
                </div>
                <div class="video_ownerShortText">
                    <p>A little description A little description A little description A little description A little description
                        A little description A little description A little description A little description A little description
                    </p>
                </div>
                <div class="game_redirect">
                    <a href="https://www.youtube.com/channel/UCww56sHAUc84aMJQPFvjwOw" target="_blank">
                        <img src="../../img/games/games_cover/Furi.jpg" alt="">
                        <div class="game_redirectInfos">
                            <h4>Furi</h4>
                            <p>2016</p>
                            <p>Contenus associés à ce jeu <i class="fa-solid fa-angle-right"></i></p>
                        </div>
                    </a>
                </div>
                <div class="comments">
                    <h4>Commentaires <i class="fa-solid fa-caret-down"></i></h4>
                </div>
            </div>

            <div class="video_contentHidden" id="video4">
                <video controls poster="../../img/games/preview_video/furi/l'écaille.PNG" width="100%" preload="none" src="../../uploads/video/04-L'Écaille.mp4" allowfullscreen></video>
                <div class="video_infos">
                    <h4>L'Écaille</h4>
                    <p>02/10/2022</p>
                </div>
                <div class="video_owner">
                    <img src="">
                    <a href="">Vaulkryn</a>
                </div>
                <div class="video_ownerShortText">
                    <p>A little description A little description A little description A little description A little description
                        A little description A little description A little description A little description A little description
                    </p>
                </div>
                <div class="game_redirect">
                    <a href="https://www.youtube.com/channel/UCww56sHAUc84aMJQPFvjwOw" target="_blank">
                        <img src="../../img/games/games_cover/Furi.jpg" alt="">
                        <div class="game_redirectInfos">
                            <h4>Furi</h4>
                            <p>2016</p>
                            <p>Contenus associés à ce jeu <i class="fa-solid fa-angle-right"></i></p>
                        </div>
                    </a>
                </div>
                <div class="comments">
                    <h4>Commentaires <i class="fa-solid fa-caret-down"></i></h4>
                </div>
            </div>

            <div class="video_contentHidden" id="video5">
                <video controls poster="../../img/games/preview_video/furi/lamain.PNG" width="100%" preload="none" src="../../uploads/video/05-LaMain.mp4" allowfullscreen></video>
                <div class="video_infos">
                    <h4>La Main</h4>
                    <p>02/10/2022</p>
                </div>
                <div class="video_owner">
                    <img src="">
                    <a href="">Vaulkryn</a>
                </div>
                <div class="video_ownerShortText">
                    <p>A little description A little description A little description A little description A little description
                        A little description A little description A little description A little description A little description
                    </p>
                </div>
                <div class="game_redirect">
                    <a href="https://www.youtube.com/channel/UCww56sHAUc84aMJQPFvjwOw" target="_blank">
                        <img src="../../img/games/games_cover/Furi.jpg" alt="">
                        <div class="game_redirectInfos">
                            <h4>Furi</h4>
                            <p>2016</p>
                            <p>Contenus associés à ce jeu <i class="fa-solid fa-angle-right"></i></p>
                        </div>
                    </a>
                </div>
                <div class="comments">
                    <h4>Commentaires <i class="fa-solid fa-caret-down"></i></h4>
                </div>
            </div>

        </section>

        <section class="videoList_wrapper">
            <div class="divider top"></div>
            <!--<div class="videoList_nav">
                <ul>
                    <li><a href="#"><i class="fa-solid fa-arrow-right"></i> All Boss</a></li>
                </ul>
            </div>-->

            <div class="videoList_container">
                <h4>Training mode</h4>
                <div class="videoList_category">

                    <div class="videoList_item">
                        <img src="../../img/games/preview_video/furi/lachaine.png" onclick="show('video1')">
                        <p>La Chaîne</p>
                    </div>

                    <div class="videoList_item">
                        <img src="../../img/games/games_cover/Furi_banner.jpg" onclick="show('video2')">
                        <p>La Sangle</p>
                    </div>

                    <div class="videoList_item">
                        <img src="../../img/games/preview_video/furi/laligne.png" onclick="show('video3')">
                        <p>La Ligne</p>
                    </div>

                    <div class="videoList_item">
                        <img src="../../img/games/preview_video/furi/l'écaille.png" onclick="show('video4')">
                        <p>l'Écaille</p>
                    </div>

                    <div class="videoList_item">
                        <img src="../../img/games/preview_video/furi/lamain.png" onclick="show('video5')">
                        <p>La Main</p>
                    </div>

                    <div class="videoList_item">
                        <img src="../../img/games/games_cover/Furi_banner.jpg">
                        <p>Le Chant</p>
                    </div>

                    <div class="videoList_item">
                        <img src="../../img/games/games_cover/Furi_banner.jpg">
                        <p>l'Éclat</p>
                    </div>

                    <div class="videoList_item">
                        <img src="../../img/games/games_cover/Furi_banner.jpg">
                        <p>La Pointe</p>
                    </div>

                    <div class="videoList_item">
                        <img src="../../img/games/games_cover/Furi_banner.jpg">
                        <p>Le Battement</p>
                    </div>

                    <div class="videoList_item">
                        <img src="../../img/games/games_cover/Furi_banner.jpg">
                        <p>l'Étoile</p>
                    </div>

                </div>

                <h4>DLC Boss</h4>
                <div class="videoList_category">

                    <div class="videoList_item">
                        <img src="../../img/games/games_cover/Furi_banner.jpg">
                        <p>La Flamme</p>
                    </div>

                    <div class="videoList_item">
                        <img src="../../img/games/games_cover/Furi_banner.jpg">
                        <p>Bernard</p>
                    </div>

                </div>

                <h4>Speedrun</h4>
                <div class="videoList_category">

                    <div class="videoList_item">
                        <img src="../../img/games/games_cover/Furi_banner.jpg">
                        <p>Part1</p>
                    </div>

                    <div class="videoList_item">
                        <img src="../../img/games/games_cover/Furi_banner.jpg">
                        <p>Part2</p>
                    </div>

                </div>
            </div>
            <div class="divider bottom"></div>

        </section>
    </section>

    <section class="screenshot_wrapper">

    </section>

    <?php include("../includes/footer.php"); ?>

    <script type="text/javascript" src="../../scripts/jquery.min.js"></script>
    <script type="text/javascript" src="../../scripts/user_menu.js"></script>
    <script src="https://kit.fontawesome.com/5122e18abc.js" crossorigin="anonymous"></script>
</body>

</html>