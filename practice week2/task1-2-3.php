<?php

$array10 = ["Car Models!", 123, 1.23, true, false, "Volvo", "BMW", "TOYOTA", null, null, "Null", true];

if($array10 == true){
    echo 'This is loop starting step';
}

echo '<hr>';


for($i = 0; $i < count($array10); $i++){
    echo $array10[$i].'<br>';
}

echo '<hr>';

foreach ($array10 as $item){
    echo $item.'<br>';
}

echo '<hr>';

if($array10 == false){
    echo 'This is loop starting step';
}else{
    echo 'Loop finished';
}


?>