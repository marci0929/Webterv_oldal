<?php

require_once('php/KapcsolatValidator.php');

if (isset($_POST['submit'])) {
    $validator = new KapcsolatValidator($_POST);
    $errors = $validator->validate();
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
		Lépj velünk kapcsolatba!
		</span>
    </header>
    <div id="navbar-top">
        <?php $currentPage = 'Kapcsolat';
        include_once("php/include/nav.php"); ?>
    </div>
    <div style="margin-top: 2em;">
        <img src="./img/borasz.jpg" alt="Borász embör" height="330"
             style="float:right;vertical-align:top;margin-right:120px;">
        <section style="width:50%">
            <h1 style="text-align: center">Miben segíthetünk?</h1>
            <h2>Elérhetőségeink</h2>
            <p>email:borasz@bor.hu</p>
            <p>tel.:+55 555 555</p>
            <h2>Székhelyünk</h2>
            <p>Villány szőlőbirtokainak tövében</p>
        </section>

        <section>
            <h1 style="text-align: center">Töltsd ki ezt az űrlapot, így is üzenhetsz nekünk!</h1>
            <div style="margin-right:20%;margin-top:50px;float:right;display:inline;text-align:right">
                <p>Milyen sorrendben ellenőrizzük a megkereséseket:</p>
                <ol type="1">
                    <li>Személyesen (a szőlőföldeken)</li>
                    <li>Személyesen (szaküzleteinkben)</li>
                    <li>Telefonon</li>
                    <li>Email-ben</li>
                    <li>Postai levélben</li>
                    <li>Füstjelekkel küldött üzenet</li>
                </ol>
            </div>
            <div style="margin-left:20%;margin-top:50px;float:left;display:inline">
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

                    <label for="name">Teljes név:</label><br>
                    <input type="text" id="name" name="name" style="margin-bottom:10px"
                           value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>"><br>
                    <div>
                        <p class="error"><?php echo isset($errors['name']) ? $errors['name'] : '' ?></p>
                    </div>

                    <label for="kor">Életkor:</label><br>
                    <input type="number" id="kor" name="kor" style="margin-bottom:10px"
                           value="<?php if (isset($_POST['kor'])) echo $_POST['kor']; ?>"><br>
                    <div>
                        <p class="error"><?php echo isset($errors['kor']) ? $errors['kor'] : '' ?></p>
                    </div>

                    <p>Válaszd ki a nemed!</p>

                    <input type="radio" id="ferfi" name="nem"
                           value="F" <?php if (isset($_POST['nem']) && $_POST['nem'] === 'F') echo 'checked'; ?>>
                    <label for="ferfi">Férfi</label><br>

                    <input type="radio" id="no" name="nem"
                           value="N" <?php if (isset($_POST['nem']) && $_POST['nem'] === 'N') echo 'checked'; ?>>
                    <label for="no">Nő</label><br>
                    <div>
                        <p class="error"><?php echo isset($errors['nem']) ? $errors['nem'] : '' ?></p>
                    </div>

                    <p style="margin-top:10px">Mivel kapcsolatban szeretnél nekünk írni?
                        <input name="mirol" list="mirol">
                        <datalist id="mirol">
                            <option value="Megjegyzés a weboldalhoz">
                            <option value="Borokkal kapcsolatban">
                            <option value="Borok beszerzésével kapcsolatban">
                            <option value="Szőlőkkel kapcsolatban">
                            <option value="Csak mert unatkozom">
                            <option value="Egyéb">
                        </datalist>
                    <div>
                        <p class="error"><?php echo isset($errors['mirol']) ? $errors['mirol'] : '' ?></p>
                    </div>
                    </p>

                    <p>Milyen borokat ittál eddig?</p>
                    <button type="button"
                            onclick="alert('Sötét piros volt? Akkor vörösbor.\nÁtlátszó világos volt? Akkor fehérbor.\nÁtlátszó piros volt? Akkor rozé.')">
                        Segítség a borok típusának meghatározásában
                    </button>
                    <br>
                    <p></p>
                    <input type="checkbox" id="bor1" name="borok[]"
                           value="v" <?php if (isset($_POST['borok']) && in_array("v", $_POST['borok'])) echo 'checked'; ?>>
                    <label for="bor1">Vöröset</label><br>
                    <input type="checkbox" id="bor2" name="borok[]"
                           value="f" <?php if (isset($_POST['borok']) && in_array("f", $_POST['borok'])) echo 'checked'; ?>>
                    <label for="bor2">Fehéret</label><br>
                    <input type="checkbox" id="bor3" name="borok[]"
                           value="r" <?php if (isset($_POST['borok']) && in_array("r", $_POST['borok'])) echo 'checked'; ?>>
                    <label for="bor3">Rozét</label>
                    <div>
                        <p class="error"><?php echo isset($errors['borok[]']) ? $errors['borok[]'] : '' ?></p>
                    </div>
                    <p></p>

                    <fieldset style="width:100px">
                        <legend>Kedvenc borom</legend>
                        <label for="faj">Fajta:</label><br>
                        <input type="text" id="faj" name="faj" placeholder="Cabernet Sauvignon"
                               value="<?php if (isset($_POST['faj'])) echo $_POST['faj']; ?>"><br>
                        <label for="bsza">Borászat:</label><br>
                        <input type="text" id="bsza" name="bsza" placeholder="Takler"
                               value="<?php if (isset($_POST['bsza'])) echo $_POST['bsza']; ?>"><br><br>
                    </fieldset>
                    <p style="font-style: italic">*Opcionális</p>
                    <p></p>
                    <p>Ide írhatod amit üzenni szeretnél:</p>
                    <textarea name="uzi" rows="10" cols="30"
                              placeholder="Üzenet helye"><?php if (isset($_POST['uzi'])) echo $_POST['uzi']; ?></textarea>
                    <div>
                        <p class="error"><?php echo isset($errors['uzi']) ? $errors['uzi'] : '' ?></p>
                    </div>
                    <br>
                    <div>
                        <p class="success"><?php echo isset($errors) && sizeof($errors) == 0 ? 'Üzenet elküldve! Hamarosan válaszolunk.' : '' ?></p>
                    </div>
                    <input name="submit" type="submit" value="Küldés" style="margin-top:30px">
                    <input name="reset" type="reset" value="Visszaállítás">
                </form>

            </div>
        </section>
        <?php include_once("php/include/footer.php"); ?>
    </div>
</div>
</body>
</html>