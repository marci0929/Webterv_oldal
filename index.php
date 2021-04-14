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
		Minden ami bor.
		</span>
    </header>
    <div id="navbar-top">
        <?php $currentPage='Kezdolap'; include_once("php/include/nav.php"); ?>
    </div>
    <div style="margin-top: 2em;">
        <aside class="width-40">
            <b>Petőfi Sándor</b>
            <p> „Fehér bor, szőke lyány, fényes nap<br>
                Hatottak egykor lelkemig;<br>
                Vörös bor, barna lyány, sötét éj,<br>
                Kedvem most bennetek telik!”</p>
            <b>Hamvas Béla</b>
            <p>
                “Minden bor (...) társas, és igazi lényét akkor tárja fel, ha közösségben isszák.”</p>
            <b>Nagy László</b>
            <p>
                “Ősszel édesült szerelem,<br>
                mint a bor, télre kiforr,<br>
                lélekben erős ragyogás,<br>
                mint a pohárban a bor.”</p>
            <b>William Shakespeare</b>
            <p>
                “Ugyan, ugyan, a jó bor jó barát, csak tudni kell hozzá. Ne háborogj ellene tovább.”</p>
        </aside>
        <section class="width-55">
            <h1 style="text-align: center">Mit találsz ezeken az oldalakon?</h1>
            <h2>Borok fajtái</h2>
            <p>Néhány, napjainkban népszerű borról találsz információt</p>
            <h2>Szőlőfajták</h2>
            <p>Érdekel, hogy miből készül a bor? Ezt kerested!!</p>
            <h2>Hol kaphatok jó borokat?</h2>
            <p>Bizonyára az is érdekel, hogy hol vehetsz valami minőségi innivalót. Mutatjuk.</p>
            <h2>Kapcsolat</h2>
            <p>Kérdésed van? Véleményed? Unatkozol? Írj nekünk!</p>
        </section>
        <section>
            <h1 style="text-align: center">Miért jöttünk létre?</h1>

            <p>A különböző borok fogyasztása <em>rengeteg ember</em> számára okoz örömet, rengetegen szeretik a bort. A borok
                népszerűségének számos különböző oka van, ezek közül fogunk néhányat bemutatni.</p>

            <h3>A bor készítésének öröme</h3>
            <p>A bor készítés, a borászat számos ember számára jelent kiváló kikapcsolódási lehetőséget. A
                szőlőtermesztés és a bor készítés majdnem egész éves elfoglaltságot, kikapcsolódást tud jelenteni azok
                számára, akik szeretnek ezzel foglalkozni. A folyamat végén ráadásul olyan itallal gazdagodnak, így a
                borok további előnyeit is élvezni tudják.</p>

            <h3>Ízletesebb lesz tőle az étel</h3>
            <p>A borokat <em>nem csak</em> a szomj oltására lehet alkalmazni, hanem kiváló kiegészítést jelentenek különböző
                ételek mellé is. Nem is kell a legdrágább borokat vásárolni étkezéshez, hanem csak arra kell
                odafigyelni, hogy milyen ízvilághoz milyen bor a legelőnyösebb.</p>

            <p>Nem csak az ételek mellé, hanem ételekbe alapanyagként is használható a bor, ízesítésre.</p>

            <h3>Színes történelemmel rendelkezik</h3>
            <p>Már az ókori egyiptomiak, görögök, rómaiak is termeltek, fogyasztottat bort, évezredekkel ezelőtt. Ezt a
                tradíciót lehet folytatni manapság is borok fogyasztásával.</p>

            <h3>Egészséges</h3>
            <p>Kis mennyiségben egészséges is a bor fogyasztása az emberi szervezetre. A kis mennyiség napi 1-2 pohár
                fogyasztását jelenti, ami csökkenti a szívinfarktus és az agyvérzés előfordulásának esélyeit.
                Természetesen nagy mennyiségben mind az alkohol, mind a kalóriák bevitele negatív hatást
                eredményezhet.</p>


        </section>
        <?php include_once("php/include/footer.php"); ?>
    </div>
</div>
</body>
</html>