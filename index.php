<?php 
require_once __DIR__ . '/database/db.php';

// var_dump($cat1);
// var_dump($prod1);
// var_dump($gioco1);
// var_dump($cibo1);
// var_dump($cuccia1);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prodotti per cani e gatti</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
</head>
<body>
    <div class="container">
        <h2>Categoria prodotti : Gatti</h2>
        <div class="card mb-3  mt-4" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-1">
                    <!-- icona categoria -->
                    <img src='./assets/img/<?php echo $prod->icon_category ?>' class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">
                            <!-- nome del prodotto -->
                            <?php echo $prod->get_titolo() ?>
                            per
                            <!-- categoria del prodotto -->
                            <?php echo $prod->category; ?>
                        </h5>
                        <!-- descrizione prodotto -->
                        <p class="card-text">Una comoda spazzola per i gatti. </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <!-- prezzo prodotto -->
                        <li class="list-group-item">Prezzo : <?php echo $prod->get_prezzo() ?> </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <!-- immagine prodotto -->
                    <img src='./assets/img/<?php echo $prod->get_path_img() ?>' class="w-100" alt="...">
                </div>
            </div>
        </div>

        <div class="card mb-3  mt-4" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-1">
                    <!-- icona categoria -->
                    <img src='./assets/img/<?php echo $gioco->icon_category ?>' class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">
                            <!-- nome del gioco -->
                            <?php echo $gioco->get_titolo() ?>
                            per
                            <!-- categoria del gioco -->
                            <?php echo $gioco->category; ?>
                        </h5>
                        <!-- descrizione gioco -->
                        <p class="card-text">Laser per i gatti da usare <?php echo $gioco->get_utilizzo()?> per gatti di minimo <?php echo $gioco->get_eta_min() ?>.</p>
                    </div>
                    <!-- prezzo gioco -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Prezzo : <?php echo $gioco->get_prezzo() ?> </li>
                    </ul>
                </div>
                <div class="col-md-3">
                     <!-- immagine gioco -->
                    <img src='./assets/img/<?php echo $gioco->get_path_img() ?>' class="w-100 mt-5" alt="...">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h2>Categoria prodotti : Cani </h2>
        <div class="card mb-3  mt-4" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-1">
                    <!-- icona categoria -->
                    <img src='./assets/img/<?php echo $cibo->icon_category ?>' class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">
                            <!-- nome del cibo -->
                            <?php echo $cibo->get_titolo() ?>
                            per
                            <!-- categoria del cibo -->
                            <?php echo $cibo->category; ?>
                        </h5>
                         <!-- descrizione cibo -->
                        <p class="card-text">Crocchette per cane al gusto  <?php echo $cibo->get_ingrediente() ?>.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <!-- scadenza cibo -->
                        <li class="list-group-item">Scadenza : <?php echo $cibo->get_data_scadenza() ?> </li>
                        <!-- prezzo cibo -->
                        <li class="list-group-item">Prezzo : <?php echo $cibo->get_prezzo() ?> </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <!-- immagine cibo -->
                    <img src='./assets/img/<?php echo $cibo->get_path_img() ?>' class="w-100" alt="...">
                </div>
            </div>
        </div>

        <!-- cuccia con trait valido -->
        <div class="card mb-3  mt-4" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-1">
                    <!-- icona categoria -->
                    <img src='./assets/img/<?php echo $cuccia->icon_category ?>' class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">
                            <!-- nome del prodotto -->
                            <?php echo $cuccia->get_titolo() ?>
                            per
                            <!-- categoria del prodotto -->
                            <?php echo $cuccia->category; ?>
                        </h5>
                        <!-- descrizione prodotto -->
                        <p class="card-text">Cuccia per <?php echo $cuccia->category ?> da usare <?php echo $cuccia->get_luogo_uso() ?> di dimensione
                        <?php echo $cuccia->get_dimensione() ?> .</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Materiale cuccia : <?php echo $cuccia->get_materiale() ?> </li>
                        <li class="list-group-item">Peso cuccia : 
                            <?php try{
                                $result = $cuccia->controlloPeso(10);
                            }catch(Exception $e){
                                echo 'Errore , peso non valido';
                            }  ?> 
                        </li>
                        <li class="list-group-item">Prezzo : <?php echo $cuccia->get_prezzo() ?> </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <img src='./assets/img/<?php echo $cuccia->get_path_img() ?>' class="w-100 " alt="...">
                </div>
            </div>
        </div>


        <!-- cuccia con trait non valido -->
        <div class="card mb-3  mt-4" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-1">
                    <!-- icona categoria -->
                    <img src='./assets/img/<?php echo $cuccia2->icon_category ?>' class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">
                            <!-- nome del prodotto -->
                            <?php echo $cuccia2->get_titolo() ?>
                            per
                            <!-- categoria del prodotto -->
                            <?php echo $cuccia2->category; ?>
                        </h5>
                        <!-- descrizione prodotto -->
                        <p class="card-text">Cuccia per <?php echo $cuccia2->category ?> da usare <?php echo $cuccia2->get_luogo_uso() ?> di dimensione
                        <?php echo $cuccia2->get_dimensione() ?> .</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Materiale cuccia : <?php echo $cuccia2->get_materiale() ?> </li>
                        <li class="list-group-item">Peso cuccia : 
                            <?php try{
                                $result = $cuccia2->controlloPeso(-10);
                            }catch(Exception $e){
                                echo 'Peso non disponibile';
                            }  ?> 
                        </li>
                        <li class="list-group-item">Prezzo : <?php echo $cuccia2->get_prezzo() ?> </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <img src='./assets/img/<?php echo $cuccia2->get_path_img() ?>' class="w-100 " alt="...">
                </div>
            </div>
        </div>
    </div>
    
    
</body>
</html>