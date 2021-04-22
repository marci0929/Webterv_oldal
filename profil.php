<?php
session_start();
require_once('php/User.php');
require_once('php/Users.php');
include_once('php/processImage.php');

if (!isset($_SESSION['user'])) header("Location: belepes.php");
$currentPage = 'Profil';

$profilkep = "img/alapProfilkep.jpg";
$user = Users::getUser($_SESSION['user']['username'],$_SESSION['user']['password']);
$userDir = "php/users/" . $_SESSION['user']['username'];

$extensions = array("jpg", "png", "jpeg");
foreach ($extensions as $ext) {
    if (file_exists($userDir . "/pic." . $ext)) {
        $profilkep = $userDir . "/pic." . $ext;
        break;
    }
}

?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <title>BorÁSZ-Profil</title>
    <?php include_once("php/include/styles.php") ?>
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
                <img src="<?php echo $profilkep ?>"
                     alt="Profilkép"
                     style="border: 5px solid black; border-radius: 5px;"
                     width="256" height="256">
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
                    <form action="profil.php" method="POST" enctype="multipart/form-data">
                        <input style="margin-bottom: 5px;" type="file" id="file-upload" name="profile-pic" accept="image/*"/> <br/>
                        <input type="submit" name="upload-btn" value="Feltöltés"/>
                    </form>
                </li>
            </ul>
            </div>
        </section>
        <?php include_once("php/include/footer.php"); ?>
    </div>
</div>
</body>
</html>