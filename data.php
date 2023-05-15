<?php
header('content-type: application/json');

$numberInput = $_POST['numberInput'];
$textInput = $_POST['textInput'];

$array = array();
for ($i = 0; $i < $numberInput; $i++) {
    $array[] = $textInput . ' ' . ($i + 1);
}

echo json_encode($array);
