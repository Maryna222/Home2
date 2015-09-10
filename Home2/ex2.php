<?php
/**
 * Created by PhpStorm.
 * User: Marina
 * Date: 07.09.2015
 * Time: 22:27
 */
$arr = [];
$n_max = 8;
for($i=0; $i<$n_max; $i++){

    $arr[$i] = rand(5,20);

    print("$arr[$i]");
    print", ";

}
print"<br>";
$minn = 999999;
for($j=0; $j<count($arr); $j++){
    if($arr[$j] < $minn) {
        $minn = $arr[$j];
    }

}
print"<br>";
print"$minn";
print"<br>";

for($k=0; $k<count($arr); $k++){
    if($arr[$k] == $minn) {
        $t = 1;
        while ($t<(count($arr)-$k))  {
            $arr[$k + $t] = $arr[$k + $t] * $minn;
            $t++;
        }
    }
    print("$arr[$k]");
    print", ";
}

?>