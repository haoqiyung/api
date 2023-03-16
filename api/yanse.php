<?php
include("./API.php");
tongji("yanse");
function randomColor(){
    $str = '#';
    for ($i=0; $i < 6; $i++) {
        $randomNum = rand(0,15); 
        switch ($randomNum) {
            case '10':
                $randomNum='A';break;
            case '11':
                $randomNum='B';break;
            case '12':
                $randomNum='C';break;
            case '13':
                $randomNum='D';break;
            case '14':
                $randomNum='E';break;
            case '15':
                $randomNum='F';break;
        }
        $str.=$randomNum;
    }
    return $str;
}
echo $a = randomColor();



?>