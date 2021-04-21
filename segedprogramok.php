<?php
session_start();

require_once('php/User.php');
include_once('php/segedprogik.php');

$currentPage = 'Segedprogramok';

?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <title>BorÁSZ-Segédprogramok</title>
    <?php include_once("php/include/styles.php") ?>
</head>
<body>
<div id="body_main">
    <header>
        <span>
		Ezen az oldalon különféle király segédprogramokat találhatsz, a mindennapi életed megkönnyítéséhez. ;)
		</span>
    </header>
    <?php include_once("php/include/nav.php"); ?>
    <div style="margin-top: 2em;">
        <section>
            <div style="margin-bottom: 20px; margin-left: 30%;">
                <h3>Borok átlagos ára</h3>
                <p>Add meg néhány bor árát, szóközzel elválasztva, egész számként, a program visszaadja az átlagát.<br>Az
                    alkalmazás csak a számértékeket veszi figyelembe, a többi típust figyelmen kívül hagyja.</p>

                <form method="post">
                    <label for="atlag">Ide írhatod a borok árát!</label><br>
                    <textarea name="atlag" id="atlag" cols="50"
                              rows="3"><?php echo (isset($_POST["atlag"])) ? $_POST["atlag"] : '' ?></textarea>
                    <br><br>
                    <input type="submit" name="atlagsub" value="Számolj!">
                    <br>
                </form>

                <br/>
                <?php if (isset($_POST["atlag"])) atlagAr($_POST["atlag"]); ?>

            </div>
            <div style="margin-bottom: 20px; margin-left: 30%;">
                <h3>Legdrágább bor</h3>
                <p>Add meg néhány bor árát, szóközzel elválasztva, egész számként, a program visszaadja közülük a
                    legdrágábbat.
                    <br>Az alkalmazás csak a számértékeket veszi figyelembe, a többi típust figyelmen kívül hagyja.</p>

                <form method="post">
                    <label for="max">Ide írhatod a borok árát!</label> <br/>
                    <textarea name="max" id="max" cols="50"
                              rows="3"><?php echo (isset($_POST["max"])) ? $_POST["max"] : '' ?></textarea>
                    <br><br>
                    <input type="submit" name="maxsub" value="Számolj!">
                    <br>
                </form>

                <br/>
                <?php if (isset($_POST["max"])) maxAr($_POST["max"]); ?>

            </div>
            <div style="margin-bottom: 20px; margin-left: 30%;">
                <h3>Egyedi bornevek</h3>
                <p>Mindeki szeret új neveket kitalálni boroknak. Csakhogy amikor elkap minket a hév, előfordul, hogy egy
                    nevet kétszer is mondunk. Írd be az általad kitalált neveket, mindet új sorba, és a program visszaad
                    egy listát, amiben minden név csak egyszer szerepel.
                </p>

                <form method="post">
                    <label for="egyedilista">Ide írhatod a borok nevét!</label> <br/>
                    <textarea name="egyedilista" id="egyedilista" cols="20"
                              rows="10"><?php echo (isset($_POST["egyedilista"])) ? $_POST["egyedilista"] : '' ?></textarea>
                    <br><br>
                    <input type="submit" name="listasub" value="Kérem a listát!">
                    <br>
                </form>

                <br/>
                <?php if (isset($_POST["egyedilista"])) bornevek($_POST["egyedilista"]); ?>

            </div>
            <div style="margin-bottom: 20px; margin-left: 30%;">
                <h3>Anagramma kereső</h3>
                <p>
                    Adj meg néhány betűt, én pedig megmondom, hogy melyik bortársaság nevét lehet belőle kirakni!
                    A bemenet egy darab összefüggő betűhalmaz.
                </p>

                <form method="get">
                    <label for="string">Ide írhatod a betűket!</label> <br/>
                    <textarea name="string" id="string" cols="20"
                              rows="10"><?php echo (isset($_GET["string"])) ? $_GET["string"] : '' ?></textarea>
                    <br><br>
                    <input type="submit" name="stringsub" value="Kérem a stringem!">
                    <br>
                </form>

                <br/>
                <?php if (isset($_GET["string"])) anagram($_GET["string"]); ?>

            </div>
        </section>
        <?php include_once("php/include/footer.php"); ?>
    </div>
</div>
</body>
</html>