<?php
function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}
 
$time_start = microtime_float();
$n = 1e4;
$arr = [];
for($i=0;$i<$n;$i++) {
    $arr[] = rand(1,1e4);
}
foreach ($arr as $k=>$v) {
    for($i=$k+1;$i<$n;$i++) {
        if($arr[$k] < $arr[$i]) {
            $vvv = $arr[$k];
            $arr[$k] = $arr[$i];
            $arr[$i] = $vvv;
        }
    }
}
 
$time_end = microtime_float();
$time = $time_end - $time_start;
echo $time;