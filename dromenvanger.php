<?php
echo "Hoeveel vrienden zal ik vragen voor hun droom?".PHP_EOL;
$aanvrienden = readline();
$arr = array(
);


if(!is_numeric($aanvrienden)){
for ($i=1; $i <= $aanvrienden; $i++) { 
    
}
    echo "Wat is jouw naam?".PHP_EOL;
    $naam = readline();

    echo "Hoeveel dromen ga je opgeven?".PHP_EOL;
    $numdroomen = readline();
      $numd = [];

    for($a = 1; $a <= $numdroomen; $a++) { 
        echo $naam . " wat is jouw droom?".PHP_EOL;
        $droom = readline();

        $numd[] = $droom;
    }
    $arr[$naam] = $numd;

}

foreach($arr as $naam => $totaal){
    foreach($totaal as $totaal => $inhoudalles){
        echo "$naam heeft als droom $inhoudalles".PHP_EOL;
    }
}
exit;