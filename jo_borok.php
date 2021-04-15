<?php
    session_start();
    $currentPage = 'Jobor';
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
		Oké, hol kapok finom bort?!
		</span>
    </header>
    <?php include_once("php/include/nav.php"); ?>
    <div style="margin-top: 2em;">
        <aside>
            <iframe src="https://www.google.com/maps/d/embed?mid=1WuvfOU_Mq4RpTpba-odWoXrWSjf1hL4Z" width="640"
                    height="480"></iframe>
        </aside>
        <section class="width-55" style="height: 525px;">
            <h1>Magyar borvidékek listája</h1>
            <p>A jobb oldali térképen láthatók Magyarország főbb borrégiói.<br/>
                Ezek közül a legfontosabbakról alább olvashatsz.</p>
            <h2>Tokaji borvidék</h2>
            <p>A Tokaji borvidék vagy Tokaj-hegyaljai borvidék (röviden Hegyalja vagy Tokaj-Hegyalja) a világ első zárt
                borvidéke, 1737 óta. Magyarország északkeleti részén, a Zempléni-hegység déli, délkeleti lábainál
                található. Területe <b>88 124 hektár</b>.
                Az UNESCO Világörökség Bizottsága mint kultúrtájat 2002-ben felvette a világörökségi listára
                Tokaj-hegyaljai történelmi borvidék kultúrtáj néven.</p>
            <h2>Badacsonyi borvidék</h2>
            <p>A Badacsonyi borvidék a Dunántúl közepén, a Balaton északi partjának nyugati részén, a Badacsony
                környékén található, amely a Balaton-felvidék földrajzi tájegység legnagyobb bazaltsapkás deflációs
                tanúhegye. A Badacsonyi Borvidék a Badacsony Hegyközség,
                a Badacsonyi Borfalvak Hegyközség, a Káptalantóti-Csobánc Hegyközség és a Szent György-hegy Hegyközség
                társulásaiból áll.</p>
            <h2>Villányi borvidék</h2>
            <p>A Villányi borvidék (korábban Villány–Siklósi borvidék) úttörő szerepet játszott a magyar borászat
                újjászületésében. <strong>Magyarország egyik legfejlettebb bortermő vidéke ez.</strong> Sikerét egyesek
                a nagyüzemi
                termelés alatt összeszokott kiváló szakembereknek,
                mások az idetelepült svábok kitartásának tulajdonítják. </p>
        </section>
        <?php include_once("php/include/footer.php"); ?>
    </div>
</div>
</body>
</html>