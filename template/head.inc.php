<!DOCTYPE html>
    <html lang="<?= $lang[0] ?>">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= title ?></title>
        <link rel="apple-touch-icon" sizes="180x180" href="./public/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./public/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./public/favicon/favicon-16x16.png">
        <link rel="manifest" href="favicon/site.webmanifest">
        <link rel="stylesheet" href="https://giusmili.github.io/PHP-started-2425/css/style.css">
    </head>

<?php
$_php = [
    "PHP"=> ":Hypertext Preprocessor, plus connu sous son sigle PHP, est un langage de programmation libre, principalement utilisé pour produire des pages Web dynamiques via un serveur web, mais pouvant également fonctionner comme nimporte quel langage interprété de façon locale. PHP est un langage impératif orienté objet. Wikipédia",
    "Conçu"=>  "Par : Rasmus Lerdorf",
    "Dernière version"=> ": 8.3.6 (11 avril 2024)",
    "Développeurs"=> ": The PHP Group",
    "Écrit en"=> ": C",
    "Extension de fichier"=> ": php et phar",
    "Licence : Licence libre:"=> "Licence PHP",
    "Paradigmes" => : "Impératif, orienté objet, fonctionnel, procédural, réflexif et interprété",

]
foreach ($_php as $key => $value) {
    print_r($_php)
    foreach ($value as $key_1 => $value_1){
        print_r($value_1)
    }
}
?>