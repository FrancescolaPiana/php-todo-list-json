<?php
header('Access-Controll-Allow-Origins: *');
//consente accesso a GET e POST
header('Access-Controll-Allow-Headers: X-Requested-With');

//leggo il file JSON
$data = file_get_contents('data.json');

// $data = json_decode($data, true);

if (isset($_POST['text'])) {
    $dato = [
        'text' => $_POST['text'],
        'done' => $_POST['done']
    ];
    //convertiamo data in php readable
    $data = json_decode($data, true);
    $data[] = $dato;


    //ri salviamo i dati nel dile json
    file_put_contents('data.json', json_encode($data));

}
;


header('Content-Type: application/json');

//good json
echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);

//HOW TO DO a PERFECT ARRAY

// $array = ['€', 'http://example.com/some/cool/page', '337'];
// $bad   = json_encode($array);
// $good  = json_encode($array,  JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);
// $bad would be ["\u20ac","http:\/\/example.com\/some\/cool\/page","337"]
// $good would be ["€","http://example.com/some/cool/page",337]
