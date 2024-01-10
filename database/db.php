<?php 
require_once __DIR__ .'/../Models/Prodotto.php';
require_once __DIR__ .'/../Models/Categoria.php';
require_once __DIR__ .'/../Models/Gioco.php';
require_once __DIR__ .'/../Models/Cibo.php';
require_once __DIR__ .'/../Models/Cuccia.php';

//$cat1 = new Categoria('gatti','/assets/img/cat.jpg');
//prodotto per i gatti - spazzola
$prod = new Prodotto('gatti','cat.png','spazzola.png','Spazzola','3.99 euro');
//gioco per i gatti - laser
$gioco = new Gioco('gatti','cat.png','laser.jpg','Laser','8.99 euro','3 mesi','dentro casa al buio');
$cibo = new Cibo('cani','dog.png','crocchette.jpg','Crocchette','7.99 euro','01/01/2026','carne');
$cuccia = new Cuccia('cani','dog.png','cuccia.jpg','Cuccia ','13.99 euro','legno','in casa','S (58x85x58)');
$cuccia2 = new Cuccia('cani','dog.png','cuccia.jpg','Cuccia ','11.99 euro','legno','in giardino','L (78x105x78)');


?>