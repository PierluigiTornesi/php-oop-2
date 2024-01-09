<?php 
require_once __DIR__ .'/../Models/Prodotto.php';
require_once __DIR__ .'/../Models/Categoria.php';
require_once __DIR__ .'/../Models/Gioco.php';
require_once __DIR__ .'/../Models/Cibo.php';
require_once __DIR__ .'/../Models/Cuccia.php';

$cat1 = new Categoria('gatti','cat.jpg');
$prod1 = new Prodotto('gatti','cat.jpg','croccantini.jpg','croccantini per gatti','3.99 euro');
$gioco1 = new Gioco('gatti','cat.jpg','laser.jpg','laser per gatti','8.99 euro','6 mesi','dentro casa al buio');
$cibo1 = new Cibo('cani','dog.jpg','crocchette;jpg','crocchette per cani','4.99 euro','01/01/2026','carne');
$cuccia1 = new Cuccia('cani','dog.jpg','cucci.jpg','Cuccia per cane ','13.99 euro','legno','in casa','S (30x50x100)');

?>