<?php
function findMax($arr){
    $max=$arr[0][0];
    $count=count($arr);
    for ($i=0;$i<$count;$i++){
        for ($j=0;$j<count($arr[$i]);$j++){
            if ($max<$arr[$i][$j]){
                $max=$arr[$i][$j];
            }
        }
    }
    return $max;
}

$arr=[[1,2,3],[8,7,0],[2,-6,4]];
echo findMax($arr);