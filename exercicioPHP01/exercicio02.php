<!DOCTYPE html>
<html>
<head>
</head>

<body>
<?php

$a= 10;
$b= 5;

if($a > $b){
    echo 'o maior numero é'.$a;
}

else{
    echo 'o maior numero é'.$b;
}

$num = rand (1,5);
    if ($num == 3 || $num == 5){
        echo 'numero gerado = '.$num;
    }
    else {
        echo 'errou';
    }
    


?>







</body>


</html>
