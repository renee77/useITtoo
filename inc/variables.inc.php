<?php
define('BASE_PATH', dirname(__DIR__)); // = path to  ~/htdocs/backend
define('BASE_URL', '/backend'); // URL-path as you use it in your webbrowser, this is the project directory probably in htdocs (xamp)


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




// RECIPE VARIABLES
$recipeBasics = [
    "Wortelchips van schillen" => [
        "wortelchips.jpg",
        ["Schillen van 3-4 wortels",
        "1-2 eetlepels olijfolie",
        "Grof zeezout naar smaak"],
        [
          "Verwarm de oven voor op 180 graden Celsius",
          "Gebruik een dunschiller om dunne slierten van de wortelschillen te maken.",
          "Verdeel de wortelslierten gelijkmatig over een met bakpapier beklede bakplaat. Ze mogen elkaar licht raken, want ze krimpen nog tijdens het bakken.",
          "Bestrijk de slierten dun met olijfolie met een kwastje.",
          "Bestrooi met grof zeezout naar smaak.",
          "Bak ze ongeveer 10 tot 15 minuten in het midden van de oven. Houd ze goed in de gaten, ze moeten knapperig en licht goudbruin worden. Is de kleur al te donker terwijl ze nog vochtig zijn, dek dan af met bakpapier.",
          "Laat de wortelchips 5 minuten afkoelen buiten de oven zodat ze nog krokanter worden."
        ],

    ],

    "Wortelgroenpesto" => [
        "wortelpesto.jpg",
        [
            "1 bos wortelgroen (van ongeveer 8-10 wortels, gewassen en grof gehakt)" ,
            "50 g pijnboompitten of walnoten",
            "2 teentjes knoflook",
            "50 g Parmezaanse kaas (of edelgistvlokken voor vegan)", 
            "100 ml olijfolie (eventueel iets meer voor smeuïgheid)",
            "1 el citroensap", 
            "Zout en peper naar smaak" ],
        [
            "Was het wortelgroen grondig en laat uitlekken. Verwijder de harde steeltjes en lelijke blaadjes.", 
            "Rooster de pijnboompitten of walnoten lichtjes in een droge koekenpan tot ze goudbruin zijn. Laat ze even afkoelen.", 
            "Doe het wortelgroen, noten, knoflook, Parmezaanse kaas, olijfolie en citroensap in een keukenmachine of blender.", 
            "Mix tot een gladde pesto. Voeg indien nodig extra olie toe voor de gewenste dikte.", 
            "Breng op smaak met zout en peper. Proef en pas eventueel nog aan.", 
            "Bewaar de pesto in een luchtdicht potje. Een dun laagje olie bovenop helpt om de pesto langer vers te houden.", 
        ],
    ],

    "Wortelsalade" => [
        "wortelsalade.jpg",
        [
            "300 gram wortels (julienne of grof geraspt)", 
            "1 sinaasappel (sap en eventueel partjes)", 
            "75 gram rozijnen", 
            "1 eetlepel honing", 
            "2 eetlepels olijfolie", 
            "1 eetlepel appelciderazijn", 
            "Peper naar smaak", 
            "Optioneel: verse peterselie of bieslook voor de garnering",    
        ],
        [
            "Schil de wortels en rasp ze grof in een kom.", 
            "Pers de sinaasappel uit. Voeg het sap toe aan de wortels. Je kunt eventueel ook wat partjes sinaasappel snijden en toevoegen.", 
            "Doe de rozijnen erbij.", 
            "Maak een dressing door de olijfolie, appelazijn, honing en peper door elkaar te mengen.", 
            "Giet de dressing over de wortelsalade. Meng alles goed door elkaar.", "Garneer met verse peterselie of bieslook indien gewenst.", 
            "Voor de beste smaak kun je de salade even afgedekt in de koelkast laten staan zodat de smaken intrekken.", 
        ],

    ],
];


// which arrays are valid as a source this for check get parameter 'source'
$allowedSources = [
    'vegtablePhotos' => $vegtablePhotos,
    'fruitPhotos' => $fruitPhotos,


    'recipePhotos' => $recipeBasics,
];