<?php

function getDeck() {
    $suits = [
        'corazones' => 'cor',
        'diamantes' => 'rom',
        'picas' => 'pic',
        'treboles' => 'tre'
    ];

    $values = [
        '1', '2', '3', '4', '5', '6', '7', '8', '9', '10',
        'J', 'Q', 'K'
    ];

    $deck = [];

    // Cartas normales
    foreach ($suits as $suitName => $suitPrefix) {
        foreach ($values as $value) {
            $image = "{$suitPrefix}_" . strtolower($value) . ".png";
            $deck[] = [
                'suit' => $suitName,
                'value' => $value,
                'image' => $image
            ];
        }
    }
    // Comodines
    $deck[] = [
        'suit' => 'comodin',
        'value' => '0',
        'image' => 'jok_1.png'
    ];

    $deck[] = [
        'suit' => 'comodin',
        'value' => '0',
        'image' => 'jok_2.png'
    ];

    return $deck;
}

// Ejemplo de uso:
$miBaraja = getDeck();

//echo '<pre>';
//echo print_r($miBaraja);
//echo '</pre>';
