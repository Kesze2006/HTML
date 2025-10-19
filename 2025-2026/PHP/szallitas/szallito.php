<?php
    function feladat2()
    {
        echo <<<'HTML'
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Szállítós feladat</title>
        </head>
        <body>
            <form method="get">
                <label for="szallitasId">Adja meg melyik adatsorra kíváncsi! </label>
                <input type="number" id="szallitasId" name="szallitasId">
                <input type="submit">
            </form>
        </body>
        </html>
        HTML;
    }
    
    include("fugvenyek.php");
    $fajl = fopen("szallit.txt","r");
    $adatok = [];
    $sor = fgets($fajl);
    $darabok = explode(" ",$sor);
    $szalagHossz = $darabok[0];
    $sebesseg = $darabok[1];
    while(!feof($fajl))
    {
        $sor = fgets($fajl);
        if($sor != "")
        {
            $darabok = explode(" ",$sor);
            //d($darabok);
            $adatok[] = $darabok;
        }
    }
    fclose($fajl);
    //d($adatok);
    echo feladat2();
?>