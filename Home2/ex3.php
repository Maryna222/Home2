<?php
/**
 * Created by PhpStorm.
 * User: Marina
 * Date: 08.09.2015
 * Time: 0:24
 */
$dist=$_POST['dist'];

$t=$_POST['t'];

if($t == 0){
    echo "False info";
}else{
    $v = $dist / $t;
    echo "Speed $v km/h <br>";
    $v = $v*1000/3600;
    echo "Speed $v m/s";
}

echo "<br><a href='ex3form.html'>back</a>";
?>