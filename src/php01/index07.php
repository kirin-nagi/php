<?php
function text($number1, $number2, $number3)
{
    $total = $number1 + $number2 + $number3;
    if($total >=210){
        echo $total . "点なので合格です";
    }else{
        echo $total . "点なので不合格です";
    }
}    

$total = text(70,50,90);
echo $total;