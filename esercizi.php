<?php


$int = 4;
var_dump($int);

$flo = 4.5;
var_dump($flo);

$string = [3,4,7,10];
var_dump($string);


$bool = true;
var_dump($bool);



$text = "Marco"; 
$text2 = "hai"; 
$text3 = "sete"; 
$text4 = "?"; 
$text5 = "Perchè"; 
$text6 = '$text2'; 
$text7 = 'bevuto'; 
$text8 = "tutto";

echo $text . ' ' .  $text2 . ' '.  $text3 . ' '.  $text4 . ' '.  $text5 . ' '. $text2 .' '. $text7 .' '. $text8;



$words1 = [ 
    'una', 
    67, 
    'vita', 
    'colle',
    'mi', 
    'rosso', 
    [ 
      'oscura', 
      'era', 
      89, 
      [ 
        'mezzo',
        [ 
          'cammin', 
          'Nel', 
          [ 
            'selva', 
            'la', 
            [ 
              'via', 
              'una', 
              true, 
            ] 
          ], 
        ] 
      ], 
    'ritrovai', 
    'per' 
    ], 
    'diritta' 
  ]; 
  $words2 = [ 
    'elemento1' => 25.89, 
    'elemento2' => 'nostra', 
    'elemento3' => [ 
                      'Virgilio', 
                      'smarrita', 
                      'ché' 
                    ] 
  ];


  $corsoHackademy = [ 'docenti' => ["Mattia", "emanuele"], 'studenti' => ["Daniele", "Federica", "Alessandro"], 
  'argomenti' => ["html", "css", "bootstrap", "javascript", "php"], ];

  echo "Sono " . $corsoHackademy ['studenti'][0] . " e sto studiando " . $corsoHackademy ['argomenti'][4] . " con " . $corsoHackademy ['studenti'][1];

  $x = 10; 
  $y = 20; 
  $z = "20"; 
  $w = 10;

  var_dump ($y !== $z);