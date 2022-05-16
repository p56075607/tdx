<?php
$count = [
    'dead' => 0,
    'hurt' => 0,
];
foreach (glob(__DIR__ . '/raw/*.csv') as $csvfile) {
    
    $fid = fopen($csvfile,'r');
    $header = fgetcsv($fid,2048);
    fgetcsv($fid,2048); #略過第二行英文欄位名
    while($line = fgetcsv($fid,2048)){
        $data = array_combine($header,$line);
        $count['dead'] += $data['死亡人數'];
        $count['hurt'] += $data['受傷人數(含2~30日內死亡)'];
        
    }
    
}
print_r($count);