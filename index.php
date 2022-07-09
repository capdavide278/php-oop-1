<?php
include __DIR__ . '/Movie.php';

$marvel = new Movie();
$marvel-> titolo = "spiderman";
$marvel-> regista = "Jon Watts";
$marvel-> attoreprincipale ="Tom Holland";
$marvel-> numeroFilm = 3;

var_dump($marvel);