<?php
session_start();
require_once('php/LoginValidator.php');
require_once('php/Users.php');
require_once('php/User.php');

$currentPage = 'Belepes';

if (isset($_POST['login'])) {
    $loginValidator = new LoginValidator($_POST);
    $errors = $loginValidator->validate();

    if (isset($errors) && empty($errors)) {

        $felhasznalo = $loginValidator->getUser();
        if ($felhasznalo == null || !$felhasznalo instanceof User) return;

        $_SESSION['user'] = $felhasznalo;

    }
}
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
		Itt tudsz belépni felhasználói fiókodba.
		</span>
    </header>
    <?php include_once("php/include/nav.php"); ?>
    <div style="margin-top: 2em;">
        <section>
            <h1 style="text-align: center">Itt tudsz bejelentkezni már meglévő fiókodba, vagy regisztrálni!</h1>

            <form style="text-align: left;margin-left: 40%" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <div class="input-group">
                    <label>Felhasználónév</label><br>

                    <input type="text" name="username"
                           value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>">
                    <p class="error"><?php echo $errors['username'] ?? '' ?></p>

                </div>
                <div class="input-group">
                    <label>Jelszó</label><br>

                    <input type="password" name="password"
                           value="<?php if (isset($_POST['password'])) echo $_POST['password']; ?>">
                    <p class="error"><?php echo isset($errors['password']) ? $errors['password'] : '' ?></p>
                </div>
                <div class="input-group">
                    <button type="submit" class="btn" name="login">Belépés</button>
                    <span class="success"><?php echo isset($errors) && empty($errors) ? 'Sikeres belépés!' : '' ?></span>
                </div>
            </form>

            <section class="width-55">
                <p style="text-align: center;">Ha nincs még fiókod, <a href="regisztracio.php"><em>ide</em></a>
                    kattintva tudsz regisztrálni</p>

            </section>
        </section>
        <?php include_once("php/include/footer.php"); ?>
    </div>
</div>
</body>
</html>