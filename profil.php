<?php
session_start();
require_once('php/User.php');

if (!isset($_SESSION['user'])) header("Location: belepes.php");
$currentPage = 'Profil';

?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <title>BorÁSZ-Kezdőlap</title>

    <!-- Egyedi font import -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div id="body_main">
    <header>
        <span>
		<?php echo $_SESSION['user']['username'] . ' profilja'?>
		</span>
    </header>
    <?php include_once("php/include/nav.php"); ?>
    <div style="margin-top: 2em;">
        <section>
            <h1 style="text-align: center">Itt tudod módosítani a fiókod beállításait!</h1>

        </section>
        <?php include_once("php/include/footer.php"); ?>
    </div>
</div>
</body>
</html>