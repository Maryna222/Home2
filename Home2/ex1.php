<?php
/**
 * Created by PhpStorm.
 * User: Marina
 * Date: 08.09.2015
 * Time: 0:04
 */
$s = rand(200,500);
echo "Distance $s <br>";
$t = rand(3,6);
echo "Time $t <br>";
$tmp = speed($s, $t);
echo "$tmp";


function speed($a, $b){
    if($b == 0){
        echo "False info";
    }else{
        $v = $a/$b;
        echo "Speed $v km/h <br>";
        $v = $v*1000/3600;
        echo "Speed $v m/s";
    }
}