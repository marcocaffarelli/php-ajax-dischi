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
        <img src="../dist/img/new_jersey.jpg">
        <h3>New Jersey</h3>
        <div>Bon Jovi</div>
        <div>1988</div>
    </div>'],
    ['<div class="card"> 
        <img src="../dist/img/queen.jpg">
        <h3>Live at Wembley 86</h3>
        <div>Queen</div>
        <div>1992</div>
    </div>'],
    ['<div class="card"> 
        <img src="../dist/img/sting.jpg">
        <h3>Ten\'s Summoner\'s Tales</h3>
        <div>Sting</div>
        <div>1993</div>
    </div>'],
    ['<div class="card"> 
        <img src="../dist/img/steve_gadd.jpg">
        <h3>Steve Gadd Band</h3>
        <div>Steve Gadd Band</div>
        <div>2018</div>
    </div>'],
    ['<div class="card"> 
        <img src="../dist/img/ironmaiden.jpeg">
        <h3>Brave new World</h3>
        <div>Iron Maiden</div>
        <div>2000</div>
    </div>'],
    ['<div class="card"> 
        <img src="../dist/img/eric_clapton.jpg">
        <h3>One more car, one more rider</h3>
        <div>Eric Clapton</div>
        <div>2002</div>
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