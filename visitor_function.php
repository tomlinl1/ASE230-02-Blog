<?php
$fp = fopen('visitors.csv', 'r+');
    $temp = [];
    while($record = fgetcsv($fp)){
        if($i == $record[0]){
            $record[1] += 1;
            $visit_count = $record[1];   
        }
        $temp[] = $record;
        }
        
        
    fclose($fp);

    $fp = fopen('visitors.csv', 'w');
    foreach($temp as $record) {
        fputcsv($fp, $record); 
    }

    fclose($fp);
