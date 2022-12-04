<?php

//leggo il file JSON
// $data = file_get_contents('data.json');

//converto il json in array php
// $todolist = json_decode($data, true);


//rimuovo un parametro dall'array php
// unset($todolist[6]);


//ri codifico la variabile array php in JSON
// $todolist = json_encode($todolist);

//ri carico il nuovo e modificato JSON nel file origine cosi da apportare una modifica permanente
// file_put_contents('data.json', $todolist);

// header('Content-Type: application/json');
// echo json_encode($todolist, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);


//HOW TO DO a PERFECT ARRAY

// $array = ['€', 'http://example.com/some/cool/page', '337'];
// $bad   = json_encode($array);
// $good  = json_encode($array,  JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);
// $bad would be ["\u20ac","http:\/\/example.com\/some\/cool\/page","337"]
// $good would be ["€","http://example.com/some/cool/page",337]
