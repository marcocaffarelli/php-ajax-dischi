<?php
/*
Stampare a schermo una decina di dischi musicali.
Utilizzare:
Html, Sass, JS, VueJS, PHP
Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
Seconda Milestone:
Attraverso l’utilizzo di AJAX: al caricamento della pagina ajax chiederà attraverso una chiamata i dischi a php e li stamperà attraverso VueJS.
*/

$dischi = [
    ['<div class="card"> 
        <img src="../dist/img/logo.png">
        <h3>New Jersey</h3>
        <div>Bon Jovi</div>
        <div>1988</div>
    </div>'],
    ['<div class="card"> 
        <img src="../dist/img/logo.png">
        <h3>New Jersey</h3>
        <div>Bon Jovi</div>
        <div>1988</div>
    </div>'],
    ['<div class="card"> 
        <img src="../dist/img/logo.png">
        <h3>New Jersey</h3>
        <div>Bon Jovi</div>
        <div>1988</div>
    </div>'],
    ['<div class="card"> 
        <img src="../dist/img/logo.png">
        <h3>New Jersey</h3>
        <div>Bon Jovi</div>
        <div>1988</div>
    </div>'],
    ['<div class="card"> 
        <img src="../dist/img/logo.png">
        <h3>New Jersey</h3>
        <div>Bon Jovi</div>
        <div>1988</div>
    </div>'],
    ['<div class="card"> 
        <img src="../dist/img/logo.png">
        <h3>New Jersey</h3>
        <div>Bon Jovi</div>
        <div>1988</div>
    </div>'],
];



foreach ($dischi as $card) {
    //var_dump($card);
    foreach ($card as $datiCard) {
        //var_dump($datiCard);
    }
}

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Php-ajax-dischi</title>
    </head>
    <body>
        <!-- header -->
        <header>
            <nav>
                <!-- <img src="../dist/img/logo.png" alt="logo di spotify"> -->
            </nav>
        </header>
        <!-- /header -->

        <!-- main -->
        <main>
            <!-- ciclo foreach per stampare le card -->
            <?php foreach ($dischi as $card) { ?>
                <!-- ciclo foreach per stampare i dati delle card -->
                <?php foreach ($card as $datiCard) { ?>         
                    <?php 
                        echo $datiCard;
                    ?>
                <?php } ?>
                <!-- /ciclo foreach per stampare i dati delle card -->
            <?php } ?>
            <!-- /ciclo foreach per stampare le card -->
        </main>
        <!-- /main -->
    </body>
</html>