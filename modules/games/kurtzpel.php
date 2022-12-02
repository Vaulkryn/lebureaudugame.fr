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
        <div class="banner_container">
            <a href="">
                <img src="../../img/games/games_cover/Kurtzpel_banner.jpg" alt="">
            </a>
        </div>
        <div class="divider"></div>
    </section>

    <section class="main_wrapper">
        <section class="video_container">

            <div class="divider top"></div>
            <div class="video_content" id="displayVideo">
                <video controls poster="../../img/games/preview_video/kurtzpel/2v2-1.jpg" width="100%" preload="none" src=""></video>
                <div class="video_infos">
                    <h4>Munyn - Skullblaka VS Fendline - Baest</h4>
                    <p>01/08/2022</p>
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
                    <a href="https://www.youtube.com/channel/UCMfzK6B7KRUBCdEEitakwpg" target="_blank">
                        <img src="../../img/games/games_cover/Kurtzpel.jpg" alt="">
                        <div class="game_redirectInfos">
                            <h4>KurtzPel</h4>
                            <p>2019</p>
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
                <video controls poster="../../img/games/preview_video/kurtzpel/2v2-1.jpg" width="100%" preload="none" src="" allowfullscreen></video>
                <div class="video_infos">
                    <h4>Munyn - Skullblaka VS Fendline - Baest</h4>
                    <p>01/08/2022</p>
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
                    <a href="https://www.youtube.com/channel/UCMfzK6B7KRUBCdEEitakwpg" target="_blank">
                        <img src="../../img/games/games_cover/Kurtzpel.jpg" alt="">
                        <div class="game_redirectInfos">
                            <h4>KurtzPel</h4>
                            <p>2019</p>
                            <p>Contenus associés à ce jeu <i class="fa-solid fa-angle-right"></i></p>
                        </div>
                    </a>
                </div>
                <div class="comments">
                    <h4>Commentaires <i class="fa-solid fa-caret-down"></i></h4>
                </div>
            </div>

            <div class="video_contentHidden" id="video2">
                <video controls poster="../../img/games/preview_video/kurtzpel/2v2-2.jpg" width="100%" preload="none" src="" allowfullscreen></video>
                <div class="video_infos">
                    <h4>Fendline - Baest VS Munyn - Skullblaka</h4>
                    <p>02/08/2022</p>
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
                    <a href="https://www.youtube.com/channel/UCMfzK6B7KRUBCdEEitakwpg" target="_blank">
                        <img src="../../img/games/games_cover/Kurtzpel.jpg" alt="">
                        <div class="game_redirectInfos">
                            <h4>KurtzPel</h4>
                            <p>2019</p>
                            <p>Contenus associés à ce jeu <i class="fa-solid fa-angle-right"></i></p>
                        </div>
                    </a>
                </div>
                <div class="comments">
                    <h4>Commentaires <i class="fa-solid fa-caret-down"></i></h4>
                </div>
            </div>

            <div class="video_contentHidden" id="video3">
                <video controls poster="../../img/games/preview_video/kurtzpel/2v2-3.jpg" width="100%" preload="none" src="" allowfullscreen></video>
                <div class="video_infos">
                    <h4>codgui - Munyn VS Oskar3 - Zecond</h4>
                    <p>03/08/2022</p>
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
                    <a href="https://www.youtube.com/channel/UCMfzK6B7KRUBCdEEitakwpg" target="_blank">
                        <img src="../../img/games/games_cover/Kurtzpel.jpg" alt="">
                        <div class="game_redirectInfos">
                            <h4>KurtzPel</h4>
                            <p>2019</p>
                            <p>Contenus associés à ce jeu <i class="fa-solid fa-angle-right"></i></p>
                        </div>
                    </a>
                </div>
                <div class="comments">
                    <h4>Commentaires <i class="fa-solid fa-caret-down"></i></h4>
                </div>
            </div>

            <div class="video_contentHidden" id="video4">
                <video controls poster="../../img/games/preview_video/kurtzpel/2v2-4.jpg" width="100%" preload="none" src="" allowfullscreen></video>
                <div class="video_infos">
                    <h4>Munyn - MayKarnateHime VS franfroi - Louphok</h4>
                    <p>04/08/2022</p>
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
                    <a href="https://www.youtube.com/channel/UCMfzK6B7KRUBCdEEitakwpg" target="_blank">
                        <img src="../../img/games/games_cover/Kurtzpel.jpg" alt="">
                        <div class="game_redirectInfos">
                            <h4>KurtzPel</h4>
                            <p>2019</p>
                            <p>Contenus associés à ce jeu <i class="fa-solid fa-angle-right"></i></p>
                        </div>
                    </a>
                </div>
                <div class="comments">
                    <h4>Commentaires <i class="fa-solid fa-caret-down"></i></h4>
                </div>
            </div>

            <div class="video_contentHidden" id="video5">
                <video controls poster="../../img/games/preview_video/kurtzpel/2v2-5.jpg" width="100%" preload="none" src="" allowfullscreen></video>
                <div class="video_infos">
                    <h4>Baest - Munyn VS Skullblaka - Fendline</h4>
                    <p>05/08/2022</p>
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
                    <a href="https://www.youtube.com/channel/UCMfzK6B7KRUBCdEEitakwpg" target="_blank">
                        <img src="../../img/games/games_cover/Kurtzpel.jpg" alt="">
                        <div class="game_redirectInfos">
                            <h4>KurtzPel</h4>
                            <p>2019</p>
                            <p>Contenus associés à ce jeu <i class="fa-solid fa-angle-right"></i></p>
                        </div>
                    </a>
                </div>
                <div class="comments">
                    <h4>Commentaires <i class="fa-solid fa-caret-down"></i></h4>
                </div>
            </div>

            <div class="video_contentHidden" id="video6">
                <video controls poster="../../img/games/preview_video/kurtzpel/3v3-1.jpg" width="100%" preload="none" src="" allowfullscreen></video>
                <div class="video_infos">
                    <h4>Adroa - Munyn - FlameFoxy VS SeiHattari - DURKNESS - Gerdi</h4>
                    <p>06/08/2022</p>
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
                    <a href="https://www.youtube.com/channel/UCMfzK6B7KRUBCdEEitakwpg" target="_blank">
                        <img src="../../img/games/games_cover/Kurtzpel.jpg" alt="">
                        <div class="game_redirectInfos">
                            <h4>KurtzPel</h4>
                            <p>2019</p>
                            <p>Contenus associés à ce jeu <i class="fa-solid fa-angle-right"></i></p>
                        </div>
                    </a>
                </div>
                <div class="comments">
                    <h4>Commentaires <i class="fa-solid fa-caret-down"></i></h4>
                </div>
            </div>

            <div class="video_contentHidden" id="video7">
                <video controls poster="../../img/games/preview_video/kurtzpel/3v3-2.jpg" width="100%" preload="none" src="" allowfullscreen></video>
                <div class="video_infos">
                    <h4>Munyn - DURKNESS - Skullblaka VS Zineira - xXStormWindXx - Uthorin</h4>
                    <p>07/08/2022</p>
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
                    <a href="https://www.youtube.com/channel/UCMfzK6B7KRUBCdEEitakwpg" target="_blank">
                        <img src="../../img/games/games_cover/Kurtzpel.jpg" alt="">
                        <div class="game_redirectInfos">
                            <h4>KurtzPel</h4>
                            <p>2019</p>
                            <p>Contenus associés à ce jeu <i class="fa-solid fa-angle-right"></i></p>
                        </div>
                    </a>
                </div>
                <div class="comments">
                    <h4>Commentaires <i class="fa-solid fa-caret-down"></i></h4>
                </div>
            </div>

            <div class="video_contentHidden" id="video8">
                <video controls poster="../../img/games/preview_video/kurtzpel/3v3-3.jpg" width="100%" preload="none" src="" allowfullscreen></video>
                <div class="video_infos">
                    <h4>Chantelouve - Munyn - BAEST VS Kammu - Stndil - pabgamer</h4>
                    <p>08/08/2022</p>
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
                    <a href="https://www.youtube.com/channel/UCMfzK6B7KRUBCdEEitakwpg" target="_blank">
                        <img src="../../img/games/games_cover/Kurtzpel.jpg" alt="">
                        <div class="game_redirectInfos">
                            <h4>KurtzPel</h4>
                            <p>2019</p>
                            <p>Contenus associés à ce jeu <i class="fa-solid fa-angle-right"></i></p>
                        </div>
                    </a>
                </div>
                <div class="comments">
                    <h4>Commentaires <i class="fa-solid fa-caret-down"></i></h4>
                </div>
            </div>

            <div class="video_contentHidden" id="video9">
                <video controls poster="../../img/games/preview_video/kurtzpel/2v2-guild1.jpg" width="100%" preload="none" src="" allowfullscreen></video>
                <div class="video_infos">
                    <h4>Lyfahnni - BAEST VS Louphok - Munyn</h4>
                    <p>09/08/2022</p>
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
                    <a href="https://www.youtube.com/channel/UCMfzK6B7KRUBCdEEitakwpg" target="_blank">
                        <img src="../../img/games/games_cover/Kurtzpel.jpg" alt="">
                        <div class="game_redirectInfos">
                            <h4>KurtzPel</h4>
                            <p>2019</p>
                            <p>Contenus associés à ce jeu <i class="fa-solid fa-angle-right"></i></p>
                        </div>
                    </a>
                </div>
                <div class="comments">
                    <h4>Commentaires <i class="fa-solid fa-caret-down"></i></h4>
                </div>
            </div>

            <div class="video_contentHidden" id="video10">
                <video controls poster="../../img/games/preview_video/kurtzpel/2v2-guild2.jpg" width="100%" preload="none" src="" allowfullscreen></video>
                <div class="video_infos">
                    <h4>Louphok - Munyn VS Fendline - Aleiya</h4>
                    <p>10/08/2022</p>
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
                    <a href="https://www.youtube.com/channel/UCMfzK6B7KRUBCdEEitakwpg" target="_blank">
                        <img src="../../img/games/games_cover/Kurtzpel.jpg" alt="">
                        <div class="game_redirectInfos">
                            <h4>KurtzPel</h4>
                            <p>2019</p>
                            <p>Contenus associés à ce jeu <i class="fa-solid fa-angle-right"></i></p>
                        </div>
                    </a>
                </div>
                <div class="comments">
                    <h4>Commentaires <i class="fa-solid fa-caret-down"></i></h4>
                </div>
            </div>

            <div class="video_contentHidden" id="video11">
                <video controls poster="../../img/games/preview_video/kurtzpel/2v2-guild3.jpg" width="100%" preload="none" src="" allowfullscreen></video>
                <div class="video_infos">
                    <h4>codgui - Skullblaka VS Louphok - Munyn</h4>
                    <p>11/08/2022</p>
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
                    <a href="https://www.youtube.com/channel/UCMfzK6B7KRUBCdEEitakwpg" target="_blank">
                        <img src="../../img/games/games_cover/Kurtzpel.jpg" alt="">
                        <div class="game_redirectInfos">
                            <h4>KurtzPel</h4>
                            <p>2019</p>
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
                    <li><a href="#"><i class="fa-solid fa-arrow-right"></i> Match 2v2</a></li>
                    <li><a href="#"><i class="fa-solid fa-arrow-right"></i> Match 3v3</a></li>
                    <li><a href="#"><i class="fa-solid fa-arrow-right"></i> Tournoi de guilde</a></li>
                </ul>
            </div>-->

            <div class="videoList_container">
                <h4>Match 2v2</h4>
                <div class="videoList_category">

                    <div class="videoList_item">
                        <img src="../../img/games/preview_video/kurtzpel/2v2-1.jpg" onclick="show('video1')">
                        <p>Munyn - Skullblaka VS Fendline - Baest</p>
                    </div>

                    <div class="videoList_item">
                        <img src="../../img/games/preview_video/kurtzpel/2v2-2.jpg" onclick="show('video2')">
                        <p>Fendline - Baest VS Munyn - Skullblaka</p>
                    </div>

                    <div class="videoList_item">
                        <img src="../../img/games/preview_video/kurtzpel/2v2-3.jpg" onclick="show('video3')">
                        <p>codgui - Munyn VS Oskar3 - Zecond</p>
                    </div>

                    <div class="videoList_item">
                        <img src="../../img/games/preview_video/kurtzpel/2v2-4.jpg" onclick="show('video4')">
                        <p>Munyn - MayKarnateHime VS franfroi - Louphok</p>
                    </div>

                    <div class="videoList_item">
                        <img src="../../img/games/preview_video/kurtzpel/2v2-5.jpg" onclick="show('video5')">
                        <p>Baest - Munyn VS Skullblaka - Fendline</p>
                    </div>

                </div>

                <h4>Match 3v3</h4>
                <div class="videoList_category">

                    <div class="videoList_item">
                        <img src="../../img/games/preview_video/kurtzpel/3v3-1.jpg" onclick="show('video6')">
                        <p>Adroa - Munyn - FlameFoxy VS SeiHattari - DURKNESS - Gerdi</p>
                    </div>

                    <div class="videoList_item">
                        <img src="../../img/games/preview_video/kurtzpel/3v3-2.jpg" onclick="show('video7')">
                        <p>Munyn - DURKNESS - Skullblaka VS Zineira - xXStormWindXx - Uthorin</p>
                    </div>

                    <div class="videoList_item">
                        <img src="../../img/games/preview_video/kurtzpel/3v3-3.jpg" onclick="show('video8')">
                        <p>Chantelouve - Munyn - BAEST VS Kammu - Stndil - pabgamer</p>
                    </div>

                </div>

                <h4>Tournoi de guilde</h4>
                <div class="videoList_category">
                    <div class="videoList_item">
                        <img src="../../img/games/preview_video/kurtzpel/2v2-guild1.jpg" onclick="show('video9')">
                        <p>Lyfahnni - BAEST VS Louphok - Munyn</p>
                    </div>

                    <div class="videoList_item">
                        <img src="../../img/games/preview_video/kurtzpel/2v2-guild2.jpg" onclick="show('video10')">
                        <p>Louphok - Munyn VS Fendline - Aleiya</p>
                    </div>

                    <div class="videoList_item">
                        <img src="../../img/games/preview_video/kurtzpel/2v2-guild3.jpg" onclick="show('video11')">
                        <p>codgui - Skullblaka VS Louphok - Munyn</p>
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