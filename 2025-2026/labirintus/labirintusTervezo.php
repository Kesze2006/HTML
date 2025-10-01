<?php
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
                $vissza .= "<td>" . $cella . "</td>";
            }
            $vissza .= "</tr>";
        }
        $vissza .= "</table>";
        return $vissza;
    }



    //session_start();
    $config["oszlop"]=10;
    $config["sor"]=10;
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
    </style>
</head>
<body>
    <h1>Labirintus szerkesztő</h1>
    <?php echo $tablaKesz;?>
</body>
</html>