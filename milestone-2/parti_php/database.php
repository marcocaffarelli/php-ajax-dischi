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
    ['poster' => '../dist/img/new_jersey.jpg',
        'titolo' => 'New Jersey',
        'artista' => 'Bon Jovi',
        'anno' => '1988'],
    ['poster' => '../dist/img/queen.jpg',
        'titolo' => 'Live at Wembley 86',
        'artista' => 'Queen',
        'anno' => '1992'],
    ['poster' => '../dist/img/sting.jpg',
        'titolo' => 'Ten\'s Summoner\'s Tales',
        'artista' => 'Sting',
        'anno' => '1993'],
    ['poster' => '../dist/img/steve_gadd.jpg',
        'titolo' => 'Steve Gadd Band',
        'artista' => 'Steve Gadd Band',
        'anno' => '2018'],
    ['poster' => '../dist/img/ironmaiden.jpeg',
        'titolo' => 'Brave new World',
        'artista' => 'Iron Maiden',
        'anno' => '2000'],
    ['poster' => '../dist/img/eric_clapton.jpg',
        'titolo' => 'One more car, one more rider',
        'artista' => 'Eric Clapton',
        'anno' => '2002'],
];

/*
foreach ($dischi as $card) {
    //var_dump($card);
    foreach ($card as $datiCard) {
        //var_dump($datiCard);
    }
}
*/
    header('Content-Type: application/json');

    echo json_encode($dischi);
?>