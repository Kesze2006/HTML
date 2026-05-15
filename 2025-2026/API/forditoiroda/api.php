<?php
$adatBazis = new PDO("mysql:host=localhost; dbname=forditoiroda;charset=utf8", "root", "");
$path = $_GET["path"] ?? "";
$apiParts = explode("/", $path);

function doku($adatBazis, $id = null)
{
    $leKer = $adatBazis->prepare("SELECT * from doku");
    $leKer->execute();
    return $leKer->fetchAll(PDO::FETCH_ASSOC);
}

function hozzaad($adatBazis, $terjedelem, $szakterulet, $nyelvid, $munkaido)
{
    $leKer = $adatBazis->prepare(
        "INSERT INTO `doku`(`id`, `terjedelem`, `szakterulet`, `nyelvid`, `munkaido`) VALUES (?,?,?,?,?)",
    );
    $leKer->execute([$terjedelem, $szakterulet, $nyelvid, $munkaido]);
    return $leKer->fetchAll(PDO::FETCH_ASSOC);
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    switch ($apiParts[0]) {
        case "doku":
            if (!isset($apiParts[1])) {
                echo json_encode("Nincs 2 cucc");
            }
            if (isset($apiParts[1])) {
                echo json_encode(doku($adatBazis));
            }
            break;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $json = file_get_contents("php://input");
    $data = json_decode($json, true);
    switch ($apiParts[0]) {
        case "postdoku":
            if (!isset($apiParts[1])) {
                echo json_encode("Nincs 2 cucc");
            }
            if (isset($apiParts[1])) {
                echo json_encode(doku($adatBazis));
            }
            break;
    }
}

?>
