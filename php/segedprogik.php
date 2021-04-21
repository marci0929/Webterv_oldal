<?php

function atlagAr(string $input)
{
    if (!validateField($input, "Nincs bemenet!")) return;
    $input = explode(' ', $input);
    $osszeg = 0;
    $darab = 0;
    $hiba = false;

    //összetett számítás
    foreach ($input as $ar) {
        if (is_numeric(trim($ar)) && $ar > 0) {
            $darab++;
            $osszeg += $ar;
        } else {
            $hiba = true;
            break;
        }
    }

    if (!$hiba) {
        echo "Az általad beírt értékek átlaga: " . $osszeg / max($darab,0);
    } else {
        echo "Hiba a bemenetben!";
    }
}

function maxAr(string $input)
{
    if (!validateField($input, "Nincs bemenet!")) return;

    $input = explode(' ', $input);
    $maximum = 0;
    $hiba = false;

    //összetett számítás
    foreach ($input as $ar) {
        if (is_numeric($ar) && $ar >= 0) {
            if ($ar > $maximum) {
                $maximum = $ar;
                continue;
            }
        } else {
            $hiba = true;
            break;
        }
    }

    if (!$hiba) {
        echo "A legdrágább bor " . $maximum . " Ft-ba kerül.";
    } else {
        echo "Hiba a bemenetben!";
    }
}

function bornevek($egyedilista)
{
    if (!validateField($egyedilista, "Nincs bemenet!")) return;

    $egyedilista = explode("\r\n", $egyedilista);

    //string műveletek
    sort($egyedilista, SORT_STRING);
    $egyedilista = array_unique($egyedilista);

    if (count($egyedilista) > 0) {
        if (strlen(trim($egyedilista[0])) === 0) {
            echo "Nem értelmes bemenet!";
            return;
        }

        echo "Az egyedi bornevek: <br/>";
        foreach ($egyedilista as $nev) echo trim($nev) . "<br/>";
    } else {
        echo "Hiba a bemenetben!";
    }
}

function anagram(string $string)
{
    if (!validateField($string, "Nincs bemenet!")) return;

    static $tarsasagok =
        ["aeklrt" => "Takler", "alnvyy" => "Vylyan", "ááélmoprssz" => "Mészáros Pál",
            "ooorsst" => "Ostoros", "eegr" => "Gere", "accdfiikllnoóöst" => "Alföldi koccintós"];

    //string műveletek
    if (strlen($string) > 0) {
        $string = str_replace(' ', '', $string);
        $string = strtolower($string);

        $arr = str_split($string);
        sort($arr);
        $string = implode("", $arr);

        foreach ($tarsasagok as $anag => $rendesnev) {
            if ($anag == $string) {
                echo "Ebből pont kijön az, hogy: " . $rendesnev;
                return;
            }
        }
        echo "Ebből nem jön ki egyik ismert bortársaság neve sem. :(";
    } else {
        echo "Hiba a bemenetben!";
    }
}

/**
 * Mező helyesség ellenőrzés
 * @param $field string     Az ellenőrzött mező
 * @param string $errorMsg A dobott hibaüzenet
 * @return bool             Valid volt-e a mező értéke
 */
function validateField($field, string $errorMsg): bool
{
    if (!isset($field) || empty($field)) {
        echo ($errorMsg == null) ? "" : $errorMsg;
        return false;
    }
    return true;
}

?>