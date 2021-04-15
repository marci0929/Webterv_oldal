<?php

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
    <?php $currentPage = 'Belepes';
    include_once("php/include/nav.php"); ?>
    <div style="margin-top: 2em;">
        <section>
            <h1 style="text-align: center">Itt tudsz bejelentkezni már meglévő fiókodba, vagy regisztrálni!</h1>

            <section class="width-55">

                <form style="text-align: left;margin-left: 40%" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                    <div class="input-group">
                      <label>Felhasználónév</label><br>
                 
                      <input type="text" name="username" value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>">
                  
                        <p class="error"><?php echo isset($errors['username']) ? $errors['username'] : '' ?></p>

                    </div>
                
                    <div class="input-group">
                      <label>Jelszó</label><br>
                   
                      <input type="password" name="password" value="<?php if (isset($_POST['password'])) echo $_POST['password']; ?>">
                        <p class="error"><?php echo isset($errors['password']) ? $errors['password'] : '' ?></p>
                    </div>
                
                    <div class="input-group">
                      <button type="submit" class="btn" name="belepes">Belépés</button>
                    </div>
                </form>
                <p></p>
                <p style="text-align: center">Ha nincs még fiókod, <a href="regisztracio.php"><strong>ide</strong></a>
                    kattintva tudsz regisztrálni</p>

            </section>
        </section>
        <?php include_once("php/include/footer.php"); ?>
    </div>
</div>
</body>
</html>