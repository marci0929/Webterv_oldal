<?php
session_start();
require_once('php/User.php');

$currentPage = 'Segedprogramok';

?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <title>BorÁSZ-Segédprogramok</title>

    <!-- Egyedi font import -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
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
                <p>Add meg néhány bor árát, szóközzel elválasztva, egész számként, a program visszaadja az átlagát.<br>Az alkalmazás csak a számértékeket veszi figyelembe, a többi típust figyelmen kívül hagyja.</p>
                
                <?php

                    $atlag ="";

                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['atlagsub'])) {
                      
                        $atlag = $_POST["atlag"];
                        
                    }
                    ?>

                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                      Ide írhatod a borok árát!<br>
                      <textarea type="text" name="atlag" cols="50" rows="3" value="<?php echo $atlag;?>"></textarea>
                      <br><br>
                      <input type="submit" name="atlagsub" value="Számolj!">  
                      <br>
                    </form>

                    <?php
                    echo "<br>";
                    echo "Az általad beírt értékek átlaga: ";
                    $atlag=explode(' ', $atlag);
                    $osszeg=0;
                    $darab=0;
                    //összetett számítás
                    foreach ($atlag as $ar) {
                        if(is_numeric($ar)){
                        $darab++;
                        $osszeg+=$ar;
                        }
                    }
                    if($darab>0){
                    echo $osszeg/$darab;
                    }
                    else{
                        echo "Túl kevés bemenő érték!";
                    }
                    echo "<br>";
                    ?>
            </div>
            <div style="margin-bottom: 20px; margin-left: 30%;">
                <h3>Legdrágább bor</h3>
                <p>Add meg néhány bor árát, szóközzel elválasztva, egész számként, a program visszaadja közülük a legdrágábbat.
                <br>Az alkalmazás csak a számértékeket veszi figyelembe, a többi típust figyelmen kívül hagyja.</p>
                
                <?php

                    $max ="";

                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['maxsub'])) {
                      
                        $max = $_POST["max"];
                        
                    }
                    ?>

                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                      Ide írhatod a borok árát!<br>
                      <textarea type="text" name="max" cols="50" rows="3" value="<?php echo $max;?>"></textarea>
                      <br><br>
                      <input type="submit" name="maxsub" value="Számolj!">  
                      <br>
                    </form>

                    <?php
                    echo "<br>";
                    echo "Az általad beírt értékek átlaga: ";
                    $max=explode(' ', $max);
                    $maximum=0;
                    //összetett számítás
                    foreach ($max as $ar) {
                        if(is_numeric($ar)){
                            if($ar>$maximum){
                                $maximum=$ar;
                            }
                        }
                    }
                    if(count($max)>0){
                    echo "A legdrágább bor: ".$maximum." Ft-ban kerül.";
                    }
                    else{
                        echo "Nincs bemenő érték!";
                    }
                    echo "<br>";
                    ?>
            </div>
             <div style="margin-bottom: 20px; margin-left: 30%;">
                <h3>Egyedi bornevek</h3>
                <p>Mindeki szeret új neveket kitalálni boroknak. Csakhogy amikor elkap minket a hév, előfordul, hogy egy nevet kétszer is mondunk. Írd be az általad kitalált neveket, mindet új sorba, és a program visszaad egy listát, amiben minden név csak egyszer szerepel.
                </p>
                
                <?php

                    $egyedilista =[];

                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['listasub'])) {
                      
                        $egyedilista = $_POST["egyedilista"];
                        
                    }
                    ?>

                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                      Ide írhatod a borok árát!<br>
                      <textarea type="text" name="egyedilista" cols="20" rows="10" value="<?php echo $egyedilista;?>"></textarea>
                      <br><br>
                      <input type="submit" name="listasub" value="Kérem a listát!">  
                      <br>
                    </form>

                    <?php
                    echo "<br>";
                    echo "Az egyedi bornevek: <br><br>";
                    if(count($egyedilista)>0){
                    $egyedilista=explode("\r\n", $egyedilista);
                }
                    //string műveletek
                    sort($egyedilista, SORT_STRING);
                    $egyedilista=array_unique($egyedilista);
                    if(count($egyedilista)>0){
                        foreach ($egyedilista as $nev) {
                            echo $nev."<br>";
                        }
                    }
                    else{
                        echo "Nincs bemenő érték!";
                    }
                    echo "<br>";
                    ?>
            </div>
        </section>
        <?php include_once("php/include/footer.php"); ?>
    </div>
</div>
</body>
</html>