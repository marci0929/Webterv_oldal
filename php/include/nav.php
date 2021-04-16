<div id="navbar-top">
    <div id="navbar-menu">
        <nav>
            <ul class="flex-container">
                <li class="flex-item grow-1"
                    <?php echo (isset($currentPage) && $currentPage == 'Kezdolap') ? " id= active_menu" : ""; ?>>
                    <a href="index.php">Kezdőlap</a>
                </li>
                <li class="flex-item grow-1"
                    <?php echo (isset($currentPage) && $currentPage == 'Borfajtak') ? " id= active_menu" : ""; ?>>
                    <a href="bor_fajtak.php">Borok fajtái</a>
                </li>
                <li class="flex-item grow-1"
                    <?php echo (isset($currentPage) && $currentPage == 'Szolok') ? " id= active_menu" : ""; ?>>
                    <a href="szolok.php">Szőlők fajtái</a>

                </li>
                <li class="flex-item grow-1"
                    <?php echo (isset($currentPage) && $currentPage == 'Jobor') ? " id= active_menu" : ""; ?>>
                    <a href="jo_borok.php">Hol kaphatok jó borokat?</a>

                </li>
                <li class="flex-item grow-2"
                    <?php echo isset($currentPage) && ($currentPage == 'Kapcsolat') ? " id= active_menu" : ""; ?>>
                    <a href="kapcsolat.php">Kapcsolat</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="float-right">
        <nav>
            <ul class="flex-container">
                <?php if (isset($_SESSION['user'])) { ?>
                    <li class="flex-item grow-1"
                        <?php echo isset($currentPage) && ($currentPage == 'Profil') ? " id= active_menu" : ""; ?>>
                        <a href="profil.php">Profilom</a>
                    </li>
                    <li class="flex-item grow-1">
                        <a href="logout.php">Kijelentkezés</a>
                    </li>
                <?php } else { ?>
                    <li class="flex-item grow-1"
                        <?php echo isset($currentPage) && ($currentPage == 'Belepes') ? " id= active_menu" : ""; ?>>
                        <a href="belepes.php">Bejelentkezés</a>
                    </li>
                <?php } ?>
            </ul>
        </nav>
    </div>
</div>