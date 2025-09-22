<?php
    session_start();
    if(!isset($_SESSION["szamozott"]))
    {
        $_SESSION["szamozott"]= array();
    }

    if(isset($_SESSION["szamozott"]))
    {
        $_SESSION["szamozott"][] = $_GET["szamozott"];
    }
    echo end($_SESSION["szamozott"]);
    //Megkéne csinálni hogy működjön
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Első oldal</title>
</head>
<body>
    <form method="get">
        <input type="text" name="szamozott">
        <input type="submit">
    </form>
    <form method="get">
        <input type="text" name="nemSzamozott">
        <input type="submit">
    </form>
</body>
</html>