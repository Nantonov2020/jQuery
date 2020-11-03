<?php

$array = [];
if ((isset($_POST['name'])) && (isset($_POST['address'])) && (isset($_POST['age']))){
    $array['field']['name'] = false;
    $array['field']['address'] = false;
    $array['field']['age'] = false;
    $array['status'] = 'error';

    if ($_POST['name'] != ''){
        $array['field']['name'] = true;
    }

    if ($_POST['address'] != ''){
        $array['field']['address'] = true;
    }

    if (!empty($_POST['age'])){
        $array['field']['age'] = true;
    }

    if ($array['field']['name'] === true && $array['field']['address'] === true && $array['field']['age'] === true){
        $array['status'] = 'success';
    }

}

//$array = $_POST;

echo json_encode($array);
