<?php 

function binarySearch($arr, $val)
{
    $low = 0;
    $high = count($arr) - 1;

    while($low<=$high){
        $mid = (int)(($low+$high)/2);
        if($val == $arr[$mid]){
            return $mid;
        }elseif($val > $arr[$mid]){
            $low = $mid + 1;
        }else{
            $high = $mid - 1;
        }
    }

    return "Not Found";
}

$arr = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
$val = 18;

print(binarySearch($arr, $val));

