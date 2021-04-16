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
        <section style="height: 600px;">
            <h1 style="text-align: center">Itt találod a profilod adatait!</h1>

            <div class="float-left" style="margin-right: 50px;">
                <img src="img/alapProfilkep.jpg" alt="Profilkép"
                     style="border: 5px solid black; border-radius: 5px;"
                     width="256px" height="256px">
            </div>

            <div class="float-left">
            <h2>Felhasználói adatok:</h2>
            <ul>
                <li>Felhasználónév: <?php echo $_SESSION['user']['username'] ?></li>
                <li>E-mail cím: <?php echo $_SESSION['user']['email'] ?></li>
                <li>Jelszó: <?php echo $_SESSION['user']['password'] ?></li>
                <li></li>
                <li>
                    <p style="margin-bottom: 5px;"><u>Profilkép módosítása:</u></p>
                    <input style="margin-bottom: 5px;" type="file" id="file-upload" name="profile-pic" accept="image/*"/> <br/>
                    <input type="submit" name="upload-btn" value="Feltöltés"/>
                </li>
            </ul>
            </div>
        </section>
        <?php include_once("php/include/footer.php"); ?>
    </div>
</div>
</body>
</html>