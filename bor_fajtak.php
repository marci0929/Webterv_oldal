<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <title>BorÁSZ-Borfajták</title>

    <!-- Egyedi font import -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div id="body_main">
    <header>
        <span>
		Milyen borok is vannak?
		</span>
    </header>
    <?php $currentPage = 'Borfajtak';
    include_once("php/include/nav.php"); ?>
    <div style="margin-top: 2em;">
        <section>
            <h1 style="text-align: center">Mit találsz itt?</h1>
            <h3>Népszerű bortermelőket</h3>
            <p>Napjainkban rengeteg bortársaság van. Jó helyen jársz, ha nem tudod melyiket válaszd.</p>
            <h3>Népszerű borokat</h3>
            <p>A termelőnél talán fontosabb a termés. Lentebb megtalálod, mit érdemes leemelni a boltok polcairól.</p>
        </section>
        <section>
            <table class="tablazat" style="width:100%">
                <tr>
                    <th id="bortermelo" style="text-align:center; font-size:30px" colspan="2">Bortermelők</th>
                </tr>
                <tr>
                    <th id="logo">Logó</th>
                    <th id="leiras">Bemutatkozó videók</th>
                </tr>

                <tr>
                    <td headers="logo"><img src="./img/gere_logo.png" height="300" alt="gere logo"></td>
                    <td headers="bortermelo">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/xtjpJoIgAgA"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </td>
                </tr>
                <tr>
                    <td headers="logo"><img src="./img/sauska_logo_black_300dpi.jpg" height="300" alt="sasuka_logo">
                    </td>
                    <td headers="bortermelo">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/FFUcddouTlA"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </td>
                </tr>
                <tr>
                    <td headers="logo"><img src="./img/bock.jpg" height="300" alt="bock"></td>
                    <td headers="bortermelo">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/tbUnvMHbv0U"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </td>
                </tr>

            </table>
            <p></p>
            <p></p>
            <p></p>


            <table class="tablazat" style="width:100%">
                <tr>
                    <th id="bor" style="text-align:center; font-size:30px" colspan="2">Finom borok</th>
                </tr>
                <tr>
                    <td headers="bor" style="width:50%"><img src="./img/gere_kop.png" height="300" alt="gere_kop"></td>
                    <td headers="bor">
                        <p style="font-size:20px"><strong>Gere Kopár</strong></p>
                        <p>
                            A Gere Kopár a pincészet emblematikus csúcsbora. Csak a legszebb évjáratokban készül <u>Villány
                                legjobb dűlőiből</u> (Kopár, Csillagvölgy, Konkoly) szelektált alapanyagok
                            felhasználásával.
                            A mély, sötét színárnyalatok a megszokott koncentrációról árulkodnak. Illatában már most
                            nagyon sokrétű; pörkölési aromák, fahéj, fekete szeder, cseresznye, érett meggy, pici
                            borsosság, szegfűszeg, vanília, minerális jegyek. Ízében is kellőképp összetett. A
                            borsos-minerális jelleg itt is jelen van, melyek cseresznyét és fekete bogyósokat
                            gazdagítanak. A savak szépek, vibrálnak. A tanninok intenzívebb jelleget mutatnak, de borunk
                            még gyerekcipőben jár. Lecsengése hosszú, a kishordós jelleg szépen megbújik a háttérben,
                            így a gyümölcsöké maradhat a főszerep. Elegáns, kerek, gyümölcsös, ugyanakkor fajsúlyos,
                            testes tétel, hosszú utóízzel és érési potenciállal.
                        </p>
                    </td>
                </tr>
                <tr>
                    <td headers="bor"><img src="./img/gere_sau.png" height="300" alt="gere_sau"></td>
                    <td headers="bor">
                        <p style="font-size:20px"><strong>Gere Cabernet Sauvignon</strong></p>
                        <p>
                            <i>Aszalt szilva és meggy, fekete ribizli, kávés, kakaóbabos jegyek.</i> Kóstolva elegáns és
                            vibráló, mely nagyon szép komplexitással, és hosszú utóízzel párosul. A tudatos
                            hordóhasználat jól integrálódik a fekete bogyós aromákba, melyeket némi fehérbors és keleti
                            fűszerek gazdagítanak. A tanninok remekül támogatják a bort.
                        </p>
                    </td>
                </tr>
                <tr>
                    <td headers="bor"><img src="./img/sau_roze.png" height="300" alt="sau_roze"></td>
                    <td headers="bor">
                        <p style="font-size:20px"><strong>Sauska Rozé</strong></p>
                        <p>
                            Kortyolj bele a villányi borok hercegnőjének kikiáltott Sauska Rosé ízébe! Különleges
                            stílusa teszi különlegesen elegáns rozévá, hiszen már színében is néhány árnyalattal
                            visszafogottabb, azonban pirosribizlis illata és íze mindenért kárpótol!<u> Minden túlzás
                                nélkül állíthatjuk, hogy a Sauska Rozé az egyik legszebb és legfinomabb rozénk.</u>
                            Ajándéknak is kifejezetten jó döntés!
                        </p>
                    </td>
                </tr>
                <tr>
                    <td headers="bor"><img src="./img/sau_cuv.png" height="300" alt="sau_cuv"></td>
                    <td headers="bor">
                        <p style="font-size:20px"><strong>Sauska Cuvée</strong></p>
                        <p>
                            Cabernet sauvignon, merlot, kékfrankos, portugieser, cabernet franc házasítása. Élénk bíbor
                            rózsaszínes karimával, friss és rendkívül üde. Illatában primer gyümölcsök, meggy és
                            feketeszeder, meg a finom házi cseresznyekompót leve. Kortya játékosan könnyed és
                            harmonikus, a ribizli friss savaival, lehelletnyi füstösséggel, selymes, lágy tanninokkal.
                            Ajánlott fogyasztási hőmérséklet:12 °C.
                        </p>
                    </td>
                </tr>
                <tr>
                    <td headers="bor"><img src="./img/bock_cult.png" height="300" alt="bock_cult"></td>
                    <td headers="bor">
                        <p style="font-size:20px"><strong>Bock Cultus Cuvée</strong></p>
                        <p>
                            Karakteres, mediterrán villányi vörös házasítás Bock József pincéjéből. A feketebogyós
                            gyümölcsök mellett a finom fűszeres jegyek, és a feszes, határozott ízvilág teszi igazi
                            villányivá. Kínálhatjuk vadakkal, sült húsokkal és esti beszélgetésekhez keménysajtok mellé
                            is.</p>
                    </td>
                </tr>
            </table>
        </section>
        <?php include_once("php/include/footer.php"); ?>
    </div>
</div>
</body>
</html>