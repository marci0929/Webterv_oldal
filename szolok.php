<!DOCTYPE html>
<?php $currentPage="Szolok"; ?>
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
		Miből készül a bor?
		</span>
    </header>
    <div id="navbar-top">
        <?php $currentPage='Szolok'; include_once("php/include/nav.php"); ?>
    </div>
    <div style="margin-top: 2em;">
        <section>
            <h1 style="text-align: center">Mit találsz itt?</h1>
            <h3>Szőlőfajtákat</h3>
            <p>Talán nem meglepő dolog, ha azt mondjuk, a bor szőlőből készül (jobb esetben). Az viszont nem mindegy,
                hogy milyen szőlőből! Itt találsz néhány népszerű, bortermő szőlőt.</p>
            <h3>Borvidékeket</h3>
            <blockquote>„A Villányi borvidék napsütötte lankáin...”</blockquote>
            <p> - áll a címkén. Mit is jelent ez pontosan? Egy kicsit többet
                annál, amit elsőre gondolnánk...</p>
        </section>
        <section>
            <table class="tablazat" style="width:100%">
                <tr>
                    <th style="text-align:center; font-size:30px" colspan="2">Szőlőfajták</th>
                </tr>
                <tr>
                    <th id="logo">Kép a szőlőről</th>
                    <th id="leiras">Fajta leírása</th>
                </tr>

                <tr>
                    <td headers="logo"><img alt="cabernet sauvignon" src="./img/szolo_c_s.jpg" height="300"></td>
                    <td headers="leiras">Franciaországból származó szőlőfajta. Tőkéje gyenge, merev vesszőzetű, fürtjei
                        kicsik, közepesen
                        tömöttek. Fő szabály szerint október elején érik, de a 2000-től tapasztalható felmelegedés miatt
                        már gyakori a szeptemberi szüret is.
                    </td>
                </tr>
                <tr>
                    <td headers="logo"><img alt="chardonnay" src="./img/szolo_char.jpg" height="300"></td>
                    <td headers="leiras">A Franciaországból származó Chardonnay szőlőfajta termésének fürtje kicsi,
                        hengeres vagy vállas,
                        többnyire középtömött, de lehet laza és tömött is. A termés gömbölyű, fehéres zöld bogyói
                        lehetnek kicsik és közepesen nagyok vastag héjjal. A termés íze édes, jellegzetes zamatú.
                        Kedvező időjárási körülmények esetén magas cukorfokkal szüretelhető. Sokarcú fajta: készíthető
                        belőle viszonylag egyszerű ivóbor, nagy beltartalmú gasztronómiai bor, barrique érleléssel
                        tekintélyes különlegesség, de házasításokban is megállja a helyét. Bora általában kemény
                        karakterű, finom zamatú, alkoholban gazdag. Hazánkban a borvidékek többségében elterjedt.
                        Külföldi, főleg francia borértők gyakran hangoztatják, hogy túldimenzionált a fajta hazai
                        jelenléte.
                    </td>

                </tr>
                <tr>
                    <td headers="logo"><img alt="kekfra" src="./img/kekfra.jpg" height="300"></td>
                    <td headers="leiras">A legelterjedtebb kékszőlő fajtánk. Származása nem tisztázott, valószínűleg
                        német vagy osztrák
                        eredetű. Fürtje közepesen nagy, vállas, olykor ágas, nem túl tömött. A bogyók általában
                        középnagyok, gömbölyűek és vastag héjjal rendelkeznek. A termés színe sötétkék, kissé hamvas és
                        lédús, az íze édes. Jellemzője, hogy egyenletes termésátlagot és cukorfokot nyújt. A fürtjei nem
                        rothadnak, így a termés sokáig a tőkén tartható és hosszú időn át szüretelhető. A fajta bora
                        kellemes zamatú, csersavdús, sötétvörös színű, kissé savas. A kékfrankos hagyományosan az egri
                        bikavér legfontosabb összetevője. Magyarország egész területén elterjedt, de a leggyakrabban a
                        Szekszárdi, a Villányi, a Soproni, az Egri és a Mátraaljai borvidékeken találkozhatunk vele. A
                        borszeretők nagy örömére reneszánszát éli.
                    </td>

                </tr>

            </table>
        </section>

        <section>
            <h1 style="font-size:30px">Magyar borvidékek</h1>
            <article style="background-color:rgba(150, 50, 80, 0.3)">
                <h2 style="text-shadow:2px 2px 3px #ffffff;">Egri borvidék</h2>
                <p>Eger városának alapítása kb. a 10. századra tehető, a szőlőtermesztés valószínűleg a 11. században
                    honosodott meg a környéken, amelyben nagy szerepe lehetett az I. István által 1004-ben alapított
                    egri püspökségnek.
                    <wbr>
                    A szőlőtermesztésnek és borkészítésnek nagy lendületet adott a tatárjárást követő időszakban
                    betelepült vallonok megjelenése, ők honosították meg a szőlő francia művelési módját és a fahordó
                    használatát. A környéken megtelepedett ciszterci szerzetesek a 13. században már Egerből fedezték
                    borszükségletüket.
                </p>
                <p>A szőlőtermesztés és a belőle készült borral való kereskedelem a 16. századra vált meghatározóvá a
                    vidéken. A borkészítést a török hódoltság és az egri vár 1596-os elesése visszavetette ugyan, de nem
                    szüntette meg.
                    <wbr>
                    Ebben az időben fehérborok készítése jellemezte a vidéket. A héjon erjesztett vörösbor készítésének
                    technológiáját és a kadarka szőlőfajtát is a törökök elől menekülő rácok hozták magukkal. A
                    szőlőművelést a 91 éves török uralom idején se hagyták abba: a törökök ugyan nem nagyon itták a
                    bort, de eladásából komoly bevételhez jutottak. Eközben a vörösborszőlő fajták egyre több teret
                    nyertek, a fehérborszőlők termesztése visszaszorult.
                </p>
                <p>A város visszafoglalása után lakossága rohamosan nőtt, gazdasága pedig alig húsz év alatt
                    gyakorlatilag monokultúrássá vált: egyértelműen a szőlő- és bortermelésre alapozott. A szőlőhegyek
                    többségének jelenleg is használt neve a 17. század végén és a 18. században alakult ki, már ekkori
                    források említik például az Eged, és Rác szőlőhegyeket. A legöregebb pincék is ebből az időszakból
                    származnak.</p>
                <p>Mivel a katolikus egyházi szertartások elengedhetetlen kelléke a bor, az egri püspökök, illetve
                    érsekek később is gondot fordítottak a bortermelésre. Az első pincéket az egri püspök birtokairól
                    borban beszedett tizedet és az egyházmegyéből begyűjtött dézsma tárolására vájták a könnyen
                    faragható riolittufába.</p>
            </article>
            <p></p>
            <article style="background-color:rgba(150, 50, 80, 0.3)">
                <h2 style="text-shadow:2px 2px 3px #ffffff;">Bükki borvidék</h2>
                <p>A Bükk-vidék lejtőin és völgyeiben a vadszőlő őshonos növényként évezredek óta jelen van.
                    Szőlőművelésről a 14. század elejéről maradtak fenn először írásos emlékek, 1503. február 11-én
                    pedig II. Ulászló erősítette meg Miskolc város korábbi borszabadalmát. A 18. század során az Avason
                    hatalmas pincerendszer alakult ki, melyek nemespenésszel borított belsejében rengeteg bort érleltek.
                    A hegyaljai szőlőkből is került ide must és a komoly export miatt a miskolci borok több országban
                    híresek és kedveltek voltak. A 19–20. században főként pezsgő alapborok készültek a környéken.</p>
                <p>A filoxéra-járványt a terület nagyon megszenvedte, az egykori szőlőültetvények nagy részét mára
                    kivágták, helyüket beépítették. Jelenleg az avasi pincék egy része használaton kívül van, de még
                    létezik, mint ahogy Görömböly egykor nevezetes pincesora is jó állapotban található.</p>
                <p>1945 után nagyon sok, zömében fehér fajtát telepítettek a borvidéken, a kék szőlők 1980-tól jelentek
                    meg. Ma a fehér és kék szőlők aránya 70-30%. A borvidék elsősorban szőlő alapanyagot termelt,
                    melyeket más borvidékeken használtak fel.</p>
                <p>A rendszerváltás utáni időszak nyomott szőlő felvásárlási árai mellett a gazdák egyre több területen
                    hagytak fel a műveléssel, így a borvidék mérete folyamatosan csökken. 2018-ban megalakult a
                    Szövetség a Bükki Borvidékért közösség, mely tucatnyi fiatal generációs borászt tömörítve elkezdett
                    a borvidék legégetőbb problémáival foglalkozni. 2019 végén egyesületté alakultak, saját magukra
                    nézve szigorúbb termékszabályozást vezettek be és dolgoznak az első borvidéki bormárka kialakításán
                    is.</p>
            </article>
            <p></p>
            <article style="background-color:rgba(150, 50, 80, 0.3)">
                <h2 style="text-shadow:2px 2px 3px #ffffff;">Balaton-felvidéki borvidék</h2>
                <p>Az egész Balaton borrégióra jellemző a 2000 éves római szőlőművelés hagyományainak részleges
                    továbbvitele.</p>
                <p>Az 1300-as évek elején a Veszprémi püspökség hozott létre kiterjedt szőlőbirtokokat ezen a vidéken. A
                    következő századokban a királyi, főúri és kisnemesi birtokok, szőlőskertek borai nagy hírnévre
                    tettek szert, és már a középkorban délnémet területekre, az Alpokon túlra is szállították őket. A
                    legnagyobb szőlőbirtokai az Esterházy családnak voltak.</p>
                <p>A borvidék 1990-ben vált önállóvá; mai nevét pedig 1999-ben kapta.</p>
                <p>A Balaton-parton futó 71-es útról, Zánkánál térünk le. A vidéket már a kerékpárosok is felfedezték
                    maguknak. A közeli Balatont immár körbeérő kerékpárúthoz kapcsolódnak a kitáblázott, kis forgalmú,
                    csendes utak; a falvak közti csekély távolság pedig remek kerékpáros kirándulóhellyé teszi a Balaton
                    északi partjától csupán néhány km-re fekvő Káli-medencét.</p>
                <p>A táj mediterrán hangulatú, és nem véletlenül. A vulkáni kúpok déli lejtői hamar átmelegszenek, a
                    közeli Bakony pedig megvéd az északról érkező szelektől, viharoktól. A hegyek bazaltja jó hőtartó
                    képességével, míg a közeli Balaton nagy vízfelületével csökkenti a hőingadozást. Mindezen tényezők
                    együtt speciális mediterrán mikroklímát alakítanak ki a medencében. Az országban itt kezdődik
                    leghamarabb a tavasz és tart legtovább az ősz.</p>
                <p>A Káli-medence jó földrajzi adottságainak köszönhetően már a történelem kezdetei óta lakott, éltek
                    itt a késő bronzkorban harcias kelták, eraviszkuszok. A Káli–medence A Balaton előidézte mikroklíma
                    miatt ideális hely szőlőtermesztésre, a vulkáni vörös talaj és a kő pedig az itt termő bor zamatát
                    adja – ezt már, mint sok minden mást, a rómaiak is tudták. Kékkút forrását is ők fedezték fel,
                    olyannyira, hogy a forrás vize Theodora bizánci császárné kedvenc itala volt. A hegy levét pedig
                    annyira élvezték, hogy Probus császár idején a környékbeli borokat a Vinea Pannonia Nobilis
                    Districtus kitüntető megkülönböztetéssel illették. A honfoglalást követően így a magyar bor
                    előállításának hármas alapja volt: egyrészt a magyarság magával hozott belső-ázsiai és
                    kaukázus-vidéki hagyományai, másrészt a Pannóniában és ezen belül is a Balaton-felvidéken fennmaradt
                    és átvett római gyakorlat, harmadrészt a térítő bencés és később megtelepedő más tanító rendek által
                    közvetített Itáliából, Burgundiából, Anjouból, Rajna-völgyéből hozott és átadott ismeretanyag és
                    ízlésvilág.</p>
            </article>

        </section>
        <?php include_once("php/include/footer.php"); ?>
    </div>
</div>
</body>
</html>