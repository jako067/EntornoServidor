<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index')

;

Route::get('movies', function () {

    $peliculasTerror = [
    [
        "titulo" => "El resplandor",
        "director" => "Stanley Kubrick",
        "anyo" => 1980
    ],
    [
        "titulo" => "Psicosis",
        "director" => "Alfred Hitchcock",
        "anyo" => 1960
    ],
    [
        "titulo" => "El exorcista",
        "director" => "William Friedkin",
        "anyo" => 1973
    ],
    [
        "titulo" => "La cosa",
        "director" => "John Carpenter",
        "anyo" => 1982
    ],
    [
        "titulo" => "Hereditary",
        "director" => "Ari Aster",
        "anyo" => 2018
    ],
    [
        "titulo" => "El conjuro",
        "director" => "James Wan",
        "anyo" => 2013
    ],
    [
        "titulo" => "Midsommar",
        "director" => "Ari Aster",
        "anyo" => 2019
    ],
    [
        "titulo" => "It (Eso)",
        "director" => "Andy Muschietti",
        "anyo" => 2017
    ],
    [
        "titulo" => "La bruja",
        "director" => "Robert Eggers",
        "anyo" => 2015
    ],
    [
        "titulo" => "Siniestro",
        "director" => "Scott Derrickson",
        "anyo" => 2012
    ]
];
//$peliculasTerror=[];
    return view('movies.index', compact('peliculasTerror'));

})->name('movies');

Route::get('movies/{id}', function (string $id) {
    return view('movies.show',compact('id')) ;

})->where('id','[0-9]+')
->name('moviesId');



