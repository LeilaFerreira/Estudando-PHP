<?php 
$a= [
    "a"=>"1",
    "b"=>"2",
    "c"=>"Eu <3 JSON"
];
var_dump ($a);
echo "<hr>";

$a = json_encode($a);
echo $a;
echo "<hr>";

$b = json_decode($a, true);
var_dump ($b);
echo "<hr>";

echo $b["c"];
echo "|"; 
echo $b["a"];
echo "|";
echo $b["b"];
echo "<hr>";




?>