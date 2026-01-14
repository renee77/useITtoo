<?php

// !!! dont forget to add a new products categorie array to allowedSources !!


$vegtablePhotos = [
    'aardappels' => 'aardappels.jpg',
    'aubergine' => 'aubergine.jpg',
    'boerenkool' => 'boerenkool.jpg',
    'champignons' => 'champignons.jpg',
    'cherry tomaatjes' => 'cherry_tomaatjes.jpg',
    'groene asperges' => 'groene_asperges.jpg',
    'paprikas' => 'paprikas.jpg',
    'pompoen' => 'pompoen.jpg',
    'spinazie' => 'spinazie.jpg',
    'spruitjes' => 'spruitjes.jpg',
    'tomaat' => 'tomaat.jpg',
    'uien' => 'ui.jpg',
    'zoete aardappels' => 'zoete_aardappel.jpg'
];

$fruitPhotos = [
    'blauwe druiven' => 'blauwe_druif.jpg',
    'frambozen' => 'framboos.jpg',
    'gala appels' => 'gala_appel.jpg',
    'groene appels' => 'groene_appel.jpg',
    'kersen' => 'kers.jpg'
];

// which arrays are valid as a source this for check get parameter 'source'
$allowedSources = [
    'vegtablePhotos' => $vegtablePhotos,
    'fruitPhotos' => $fruitPhotos
];
