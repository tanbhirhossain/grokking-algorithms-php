<?php 

function countdown($i){
    if($i <= 0){
        return $i;
    }else{
        print($i."\n");
        countdown($i - 1);
    }
}

countdown(100000);