<?php
$a = "A B C D E F";
$b = "G H I J K L M";

$a_expload = explode(" ",trim($a));
$b_expload = explode(" ",trim($b));

$odd = array();
$even = array();

foreach($a_expload as $key=>$value){
    if($key % 2 == 0)
    {
        $even[] = $value;
    }
    else{
        $odd[] = $value;
    }
}

foreach($b_expload as $key=>$value){
    if($key % 2 == 0)
    {
        $even[] = $value;
    }
    else{
        $odd[] = $value;
    }
}

$output1 = implode(" ", $odd);
$output2 = implode(" ", $even);

echo "output 1 ===> ".$output2."\n";
echo "output 2 ===> ".$output1."\n";
?>