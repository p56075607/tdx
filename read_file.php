<?php
foreach (glob(__DIR__ . '/raw/*.csv') as $csvfile) {
    echo $csvfile . "\n";
    
}