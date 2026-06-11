<?php
$title = $_POST["titolo"];
$artist = $_POST["artista"];
$cover = $_POST["url_cover"];
$year = $_POST["anno_di_pubblicazione"];
$genre = $_POST[ "genere"];

$formData = [
    "titolo" => $title,
    "artista" => $artist,
    "url_cover" => $cover,
    "anno_di_pubblicazione" => $year,
    "genere" => $genre 
];


$dischi = file_get_contents('dischi.json');
$dischiArray = json_decode($dischi, true);
$dischiArray[] = $formData;

$jsonData = json_encode($dischiArray);

file_put_contents('dischi.json', $jsonData); 

header("Location: index.php")

?>

