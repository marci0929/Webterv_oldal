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