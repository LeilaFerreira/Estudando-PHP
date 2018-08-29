<?php
  $numeroMagico = 20;
 

 
 
 echo " <br>================== exercicio 1.a ========================<br>";

 function maior1 ($num1, $num2, $num3){
        return max($num1, $num2, $num3);
}   
echo maior1(130, 20, 50); 

echo " <br>================== exercicio 1.b ========================<br>";

 function tabela($min, $max){
    
    for ($i=$min; $i<= $max; $i++){
        $result[$i] = $i;
    }
    return $result;
}
    foreach (tabela (2, 10) as $leo){
    echo "$leo";
}
 
echo " <br>================== exercicio 1.c.d========================<br>";

function maior ($num1, $num2, $num3){
    
   global $numeroMagico;
    
    if($num1 == null || $num1 == ""){

        if($num2 ==   $numeroMagico ){
            echo "verdade!";
        }else{
            echo "falso!";
        }

        if($num3 ==  $numeroMagico ){
            echo "verdade!";
        }else{
            echo "falso!";
        }


    }
}   
echo maior("", 100, 20); 
echo " <br>================== exercicio 1.e========================<br>";






?>