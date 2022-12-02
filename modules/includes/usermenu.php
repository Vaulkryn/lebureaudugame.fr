<div id="menuOverlay"></div>
<nav id="userMenu" class="user_menu">
    <div class="usermenu_container">

        <div class="userprofile">
            <img src="http://localhost/lebureaudugame.fr/uploads/avatar/<?php echo $_SESSION['avatar'] ?>">
            <div class="username"><?php echo $_SESSION['user'] ?></div>
        </div>

        <div class="usernav">
            <ul>
                <li class="dropdown"><i class="fa-solid fa-user"></i> Profil <i class="arrow down"></i></li>
                <li>
                    <ul class="dropdown_list">
                        <li><a href="#">Ma page<a style="color:red;margin:0;cursor:default;"> [non disponible]</a></a></li>
                        <li><a style="cursor:default;">Mes stats<a style="color:red;margin:0;cursor:default;"> [non disponible]</a></a></li>
                        <li><a style="cursor:default;">Mon rang<a style="color:red;margin:0;cursor:default;"> [non disponible]</a></a></li>
                    </ul>
                </li>
            </ul>
            <ul>
                <li class="dropdown"><i class="fa-solid fa-database"></i> Contenu <i class="arrow down"></i></li>
                <li>
                    <ul class="dropdown_list">
                        <li><a href="http://localhost/lebureaudugame.fr/modules/user_contents/video_upload.php">Upload du contenu vidéo</a></li>
                        <li><a href="http://localhost/lebureaudugame.fr/modules/user_contents/screenshot_upload.php">Upload du contenu image</a></li>
                        <li><a href="http://localhost/lebureaudugame.fr/modules/user_contents/uploads_pending.php">Voir les uploads en attente</a></li>
                    </ul>
                </li>
            </ul>
            <ul>
                <li class="dropdown"><i class="fa-solid fa-gear"></i> Paramètres du compte <i class="arrow down"></i></li>
                <li>
                    <ul class="dropdown_list">
                        <li><a href="http://localhost/lebureaudugame.fr/modules/user_settings/changeavatar.php">Changer l'avatar</a></li>
                        <li><a href="http://localhost/lebureaudugame.fr/modules/user_settings/changepseudo.php">Changer le pseudo</a></li>
                        <li><a href="http://localhost/lebureaudugame.fr/modules/user_settings/changemdp.php">Changer le mot de passe</a></li>
                        <li><a style="cursor:default;">Préférences<a style="color:red;margin:0;cursor:default;"> [non disponible]</a></a></li>
                        <li><a style="cursor:default;">Notifications<a style="color:red;margin:0;cursor:default;"> [non disponible]</a></a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <ul>
            <li><a href=""><i class="fa-solid fa-message"></i> Laisser un avis<a style="color:red;margin:0;cursor:default;"> [non disponible]</a></a></li>
        </ul>
        <ul>
            <li><a href="http://localhost/lebureaudugame.fr/modules/includes/logout.php"><i class="fas fa-sign-out-alt"></i> Se déconnecter</a></li>
        </ul>
    </div>
</nav>