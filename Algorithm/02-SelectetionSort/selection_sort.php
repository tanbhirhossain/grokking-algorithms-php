<?php 


function selection_sort($arr)
{
   $n=count($arr);

   for($i=0; $i<$n-1; $i++){
        $minIndex = $i;

        for($j=$i+1; $j<$n; $j++){
            if($arr[$j] < $arr[$minIndex]){
                $minIndex = $j;
            }
        }

        if($minIndex != $i){
            $temp = $arr[$i];
            $arr[$i] = $arr[$minIndex];
            $arr[$minIndex] = $temp;
        }
   }
   return $arr;


}


$arr = [9,2,1,3,4,8,11,15,17,10,5,6,20,7,12,14,13];
print_r(selection_sort($arr));
