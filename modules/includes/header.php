<header class="topnav">
    <div class="header_left">
        <a href="http://localhost/lebureaudugame.fr">Le Bureau du Game</a>
        <b style="cursor:default;margin-top:10px;color:darkorange">Alpha <b style="font-family:sans-serif;">v0.4</b></b>
    </div>
    <div class="header_right">
        <form action="" method="">
            <input type="text" name="" id="" class="search_field" placeholder="[non disponible]" required>
            <button type="submit" class="search_button"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>

        <?php if (isset($_SESSION['user'])) {
            echo '<a id="userMenuLink"><img src="http://localhost/lebureaudugame.fr/uploads/avatar/' . $_SESSION['avatar'] . '"><i class="arrow arrow_right"></i></a>';
        } else {
            echo '<a href="http://localhost/lebureaudugame.fr/modules/user_settings/register.php">S\'inscrire</a>
            <a id="loginLink">Connexion</a>';
        } ?>
    </div>
</header>