<?php
require_once('php/RegistrationChecker.php');

if (isset($_POST['submit'])) {
    $registerValidator = new RegistrationChecker($_POST);
    $errors = $registerValidator->validate();
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
		Itt tudsz regisztrálni egy új fiókot!
		</span>
    </header>
    <?php $currentPage = 'Belepes';
    include_once("php/include/nav.php"); ?>
    <div style="margin-top: 2em;">
        <section>
            <h1 style="text-align: center">Itt tudsz regisztrálni egy új fiókot!</h1>
            <form style="text-align: center" method="post" action="regisztracio.php">
                <div class="input-group">
                    <label>Felhasználónév (kis és nagybetűket, valamit számokat tartalmazhat)</label><br>

                    <input type="text" name="username"
                           value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>">

                    <p class="error"><?php echo isset($errors['username']) ? $errors['username'] : '' ?></p>

                </div>
                <div class="input-group">
                    <label>Email cím</label><br>

                    <input type="email" name="email" value="">
                    <p class="error"><?php echo isset($errors['email']) ? $errors['email'] : '' ?></p>
                </div>
                <div class="input-group">
                    <label>Életkorod (ha nem múltál el 16 éves, nem regisztrálhatsz)</label><br>

                    <input type="number" name="eletkor">
                    <p class="error"><?php echo isset($errors['kor']) ? $errors['kor'] : '' ?></p>
                </div>
                <div class="input-group">
                    <label>Jelszó</label><br>

                    <input type="password" name="password_1">
                    <p class="error"><?php echo isset($errors['password1']) ? $errors['password1'] : '' ?></p>
                </div>
                <div class="input-group">
                    <label>Ismételd meg a jelszót</label><br>

                    <input type="password" name="password_2">
                    <p class="error"><?php echo isset($errors['password2']) ? $errors['password2'] : '' ?></p>
                </div>
                <div class="input-group">
                    <button type="submit" class="btn" name="regisztralas">Regisztráció</button>
                </div>
                <p>
                <p></p>
                Van már fiókod? <a href="belepes.php"><strong>Bejelentkezés</strong></a>
                </p>
            </form>
        </section>
        <?php include_once("php/include/footer.php"); ?>
    </div>
</div>
</body>
</html>