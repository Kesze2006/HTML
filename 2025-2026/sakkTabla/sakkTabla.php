<?php

    for($i = 0; $i < 8; $i++)
    {
        $oszlop = [];
        for($j=0;$j<8;$j++)
        {
            $sor = '<div>'.$j.'</div>';
            $oszlop[] = '<div>'.$sor.'</div>';
        }

        $tabla = '<div>'.$oszlop[$i].'</div>';
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sakk Tábla</title>
</head>
<body>
    <?php
        echo $tabla;
    ?>
</body>
</html>