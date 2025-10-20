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
    if(isset($_GET))
    {
        if(isset($_GET["szallitasId"]))
        {
            if($_GET["szallitasId"] != "")
            {
                $szId = $_GET["szallitasId"]-1;
            }
            else
            {
                $szId = -1;
            }
            
            if($szId >= 0 && $szId <= count($adatok))
            {
                //d($adatok);
                echo '<div>
                        Honnan: <strong>'.$adatok[$szId][1].'</strong>
                        Hova: <strong>'.$adatok[$szId][2].'</strong>
                    </div>';
            }
            else
            {
                echo "A számozás 1-essel kezdődik és 33-mal végződik. Az álltala megadott ".($szId+1)." ID nem létezik. / Üres adatot adott meg!";
            }
        }
    }

?>