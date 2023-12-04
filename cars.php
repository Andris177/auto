<?php
require_once('csv-tools.php');
ini_set('memory_limit', '560M');
$fileName = 'car-db.csv';
$csvData = getCsvData($filename);
function getCsvData($filenName, $withHeader = true){
    if (!file_exists($fileName)){
        echo "$fileName nem található";
        return false;
    }

    $header = $csvData[0];
    var_dump($header);
    return; 

    $keyMaker = array_search('make', $header);
    $keyModel = array_search();
    $result = [];
    $maker = '';
    $model = '';
    foreach ($csvData as $data) {
        if ($maker != $data[$idxMaker]){
            $maker = $data[$idxMaker];
        }
    }


    $csvFile = fopen($fileName, 'r');
    $header = fgetcsv($csvFile);
    if ($withHeader) {
        $lines[] = $header;
    }
    else {
        $lines = [];
    }
    while (! feof(csvFile)) {
        $line = fgetcsv($csvFile);
        $lines[] = $line;
    }
    fclose($csvFile);
    return $lines;
}
?>