<?php
    function d($elem)
    {
        echo "<pre>".var_dump($elem)."</pre>";
    }

    function tablaKeszit()
    {
        global $config;
        $vissza = "";
        $vissza .= "<table>";
        for($sor=0;$sor < $config["sor"];$sor++)
        {
            $vissza .= "<tr>";
            for($cella=0;$cella < $config["oszlop"];$cella++)
            {
                $gombSzin = "";
                if(isset($_SESSION["labirintus"][$sor][$cella]) && $_SESSION["labirintus"][$sor][$cella])
                {
                    $gombSzin= " fal";
                }
                $vissza .= '<td><input class="'.$gombSzin.'" type="submit" value="" name="gomb-'.$sor."-".$cella.'"></td>';
            }
            $vissza .= "</tr>";
        }
        $vissza .= "</table>";
        return $vissza;
    }



    session_start();
    $config["oszlop"]=10;
    $config["sor"]=10;


    if(isset($_GET))
    {
        $t = array_keys($_GET);
        foreach($t as $index)
        {
            if(str_starts_with($index,"gomb-"))
            {
                $darabok = explode("-",$index);
                if(sizeof($darabok) == 3)
                {
                    if(isset($_SESSION["labirintus"][$darabok[1]][$darabok[2]]) && $_SESSION["labirintus"][$darabok[1]][$darabok[2]])
                    {
                        $_SESSION["labirintus"][$darabok[1]][$darabok[2]] = false;
                    }
                    else{
                        $_SESSION["labirintus"][$darabok[1]][$darabok[2]]=true;
                    }
                    
                }
            }
        }
        if(isset($_GET["save"]))
        {
            $_SESSION["mentettLabirintusok"][$_GET["save"]] = $_SESSION["labirintus"];
        }
    }
    //d($_SESSION["mentettLabirintusok"]);
    $tablaKesz = tablaKeszit();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Labirint</title>
    <style>
        table,td{
            border:1px solid black;
        }
        td{
            width: 25px;
            height: 25px;
        }
        td input[type=submit]
        {
            height: 100%;
            width: 100%;
        }
        input.fal
        {
            background-color: red;
        }
    </style>
</head>
<body>
    <h1>Labirintus szerkesztő</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
        <?php echo $tablaKesz;?>
        <button type="submit" name="save" value="1">Mentés</button>        
    </form>
</body>
</html>