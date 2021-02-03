<?php
/*
Attraverso un’altra chiamata ajax, filtrare gli album per artista
*/


$dischi = [
    ['poster' => '../dist/img/boulevard.jpg',
        'titolo' => '461 Ocean Boulevard',
        'artista' => 'Eric Clapton',
        'anno' => '1974'],
    ['poster' => '../dist/img/have-a-nice-day.jpg',
        'titolo' => 'Have a nice day',
        'artista' => 'Bon Jovi',
        'anno' => '2005'],
    ['poster' => '../dist/img/beast.jpg',
        'titolo' => 'The Number of the Beast',
        'artista' => 'Iron Maiden',
        'anno' => '1982'],
    ['poster' => '../dist/img/bring.jpg',
        'titolo' => 'Bring on the Night',
        'artista' => 'sting',
        'anno' => '1986'],
    ['poster' => '../dist/img/notw-cover.jpg',
        'titolo' => 'News of the World',
        'artista' => 'Queen',
        'anno' => '1977'],
    ['poster' => '../dist/img/fear-of.jpg',
        'titolo' => 'Fear of the Dark',
        'artista' => 'Iron Maiden',
        'anno' => '1992'],
    ['poster' => '../dist/img/lost-highway.jpg',
        'titolo' => 'Lost Highway',
        'artista' => 'Bon Jovi',
        'anno' => '2007'],
    ['poster' => '../dist/img/brand-new.jpg',
        'titolo' => 'Brand New Days',
        'artista' => 'sting',
        'anno' => '1995'],
    ['poster' => '../dist/img/2020.jpg',
        'titolo' => 'Bon Jovi 2020',
        'artista' => 'Bon Jovi',
        'anno' => '2020'],
    ['poster' => '../dist/img/pilgrim.jpg',
        'titolo' => 'Pilgrim',
        'artista' => 'Eric Clapton',
        'anno' => '1998'],
    ['poster' => '../dist/img/after-death.jpg',
        'titolo' => 'Live After Death',
        'artista' => 'Iron Maiden',
        'anno' => '1992'],
    ['poster' => '../dist/img/these-days.jpg',
        'titolo' => 'These Days',
        'artista' => 'Bon Jovi',
        'anno' => '1995'],
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