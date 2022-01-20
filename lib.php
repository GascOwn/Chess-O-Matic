<?php

//ARRAY

$acceptedValues = [3, 4, 6, 8];

$objects = [
  'home' => ['stylesheet' => 'index',
                  'tpl' => 'tpl/pred.php',
                ],
  'gioca' => ['stylesheet' => 'scacchiera',
                  'tpl' => 'tpl/scacchiera.php',
                ],
  'contatti' => ['stylesheet' => 'contatti',
                  'tpl' => 'tpl/contatti.php',
                ],
  'form' => ['stylesheet' => 'form',
                  'tpl' => 'tpl/form.php',
                ],
              ];

$menu = [
  "Home" => "home",
  "Crea La Tua Scacchiera" => "form",
  "Contatti" => "contatti",
];

 $noLabelInputs = ["hiddenToGioca" => ["type" => "hidden",
                                       "name" => "ID",
                                       "value" => "gioca"
                                      ],
                   "submit" => ["type" => "submit",
                                "name" => "submit",
                                "value" => "invia"
                                    ],
];

$inputs = ["Nome utente" => ["type" => "text",
                             "name" => "nomeutente",
                             "value"=> ""
                           ],
           "Colore primario" => [ "type" => "color",
                                  "name" => "pcol",
                                  "value" => "#ffffff"
                                ],
          "Colore secondario" => [ "type" => "color",
                                    "name" => "scol",
                                    "value" => "#000000",
                                  ]
];

 $selects = [
  "numbers" => ["labels" => ["Numero di colonne", "Numero di righe"],
                "id" => ["larg", "alt"],
                "values" =>["Tre" => "3", "Quattro" => "4", "Sei" =>"6", "Otto" => "8"]
               ],
];

//FUNZIONI

//crea la scacchiera
function CreateChessboard(int $alt, int $larg){

    $str = '<div id="scacchiera">';
    for($i = 0; $i < $alt; $i++){
      $str .= '<div class="riga-scacchiera" id="riga' . $i . '">';
      for($j = 0; $j < $larg; $j++){
        $colore = (($i + $j) % 2) ? 'secondario' : 'primario';
        $str .= '<div class="quadrato-' . $colore . '"></div>';
      }
      $str .= '</div>';
    }
  $str .= '</div>';
  return $str;
}

//crea input per form
function CreateInput($name, $type, $value){
  return '<input type="' . $type. '" id="' . $name . '"name="'. $name .'"  value="'. $value .'">';
}

//crea label per form
function CreateLabel($id, $label){
  return '<label for="' . $id . '">' . $label . ': </label>';
}

//crea le scelte a tendina per form
function CreateSelect($id, $options){
  $str =  '<select id="' . $id . '" name="'. $id . '">';
  foreach($options as $k => $m) {
    $str .= '<option value="' . $m . '">'. $k . '</option>';
    }
  $str .=  '</select><br><br>';

  return $str;
}

function Menu($menu){
  $str = "<ul>";
  foreach ($menu as $k => $m) {
      $str .= "<li>".
      '<a href="?ID='. $m .'">'. $k .'</a>'.
      '</li>';
  }

  $str .= "</ul>";

  return $str;
}
