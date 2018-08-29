<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head> 

<body>
<?php

/* exercicio 1 */

echo " <br>================== exercicio 1 ======================== <br>" ;
 $numero1 = 20;
 $numero2 = 10;

if($numero1> $numero2){
    echo "o maior numero é: ".$numero1;

}else{
    echo "o maior numero é: ".$numero2;
}  






    /* exercicio 2 */
    echo " <br>================== exercicio 2 ========================<br>";
    $numero = rand (1,5);

    if($numero === 3 &&  5){
        echo "numero valido: ".$numero;
    } else{
        echo "numero errado";
    } 


    /* exercicio 3 */
    echo " <br>================== exercicio 3 ========================<br>";
    $numero = rand (1,5);

    if($numero === 3 ){
        echo "numero valido: ".$numero;
    } else{
        echo "O número NÃO é 3”";
    } 
    
 
    /* exercicio 4 */
    echo " <br>================== exercicio 4 ========================<br>";
     $numero = rand (1,100);
     if ($numero > 50){
        echo "O número é maior que 50:";
    } else{
        echo "O número NÃO cumpre a condição";
    } 
  

/* exercicio 5 */
echo " <br>================== exercicio 5 ========================<br>";
    $numero = rand (1,100);
    echo $numero;
    if($numero > 50 && ( ($numero % 2) == 0) ){
        echo " O número é maior que 50 ou par:";
    } else{
        echo " O número NÃO cumpre a condição";
    } 
   
    /* exercicio 5.a */
    echo " <br>================== exercicio 5.a =======================<br>";
     $numero = rand (0,100);
    echo $numero;
    if($numero >= 0 && ( ($numero % 2) == 0)){
        echo "  O número é maior que 50 ou par:";
    } else{
        echo "  O número NÃO cumpre a condição";
    }  

    /* exercicio 6 */
    echo " <br>================== exercicio 6 ========================<br>";
     $idade= 16;
     $casado =true;
     $sexo =  "outro";
     
     if ($idade > 18 && true && "outro"){
         echo "Bem vindo!";
     }else{
         echo "Até logo";
     }
    

    /* exercicio 7.a */
    echo " <br>================== exercicio 7 ========================<br>";
       $quantidadeDeAlunos = -100;
    if ($quantidadeDeAlunos) {
        echo "true";
        }
        else {
        echo "false";
        }  

    /* exercicio 7.a.1 */
    echo " <br>================== exercicio 7.a.1 =====================<br>";   
      $quantidadeDeAlunos = -100;
      if ($quantidadeDeAlunos) {
          echo "true";
          }
          else {
          echo "false";
          }  
    /* exercicio 7.a.2 */
    echo " <br>================== exercicio 7.a.2 =====================<br>";
     $quantidadeDeAlunos = -1;
    if ($quantidadeDeAlunos) {
        echo "true";
        }
        else {
        echo "false";
        }      

    /* exercicio 7.a.3 */
    echo " <br>================== exercicio 7.a.3 =====================<br>";
     $quantidadeDeAlunos = 0;
    if ($quantidadeDeAlunos) {
        echo "true";
        }
        else {
        echo "false";
        }      

    /* exercicio 7.a.4 */
    echo " <br>================== exercicio 7.a.4 =====================<br>";
    $quantidadeDeAlunos = 1;
    if ($quantidadeDeAlunos) {
        echo "true";
        }
        else {
        echo "false";
        }  
    /* exercicio 7.a.5 */
    echo " <br>================== exercicio 7.a.5 =====================<br>";    
    $quantidadeDeAlunos = 100;
     if ($quantidadeDeAlunos) {
         echo "true";
            }
     else {
         echo "false";
            }          


    /* exercicio 7.b */
    echo " <br>================== exercicio 7.b =======================<br>";      
        if ($i = 1) {
        echo "true";
        }else{
        echo "false";
     }
    /* exercicio 8 */
        if ($i = 0) {
            echo "true";
        }else{
            echo "false";
        }

   
    /* exercicio 9*/
    echo " <br>================== exercicio 9 ========================<br>"; 
    $numero= 40;
    $max = (($numero % 2) == 0)? " O número é par "
    : " O número é impar ";  
    echo $max;

    /* exercicio 10*/ 
    echo " <br>================== exercicio 10 =======================<br>"; 
      $i = mt_rand(1,5);
     
     switch ($i) {
        case 1 :
        echo $i ;
        break;
        case 5 :
        echo $i;
        break;
        default:
        break;
     } 
    /* exercicio 11*/  
    echo " <br>================== exercicio 11 =======================<br>"; 
     $i = mt_rand(1,5);
    
    switch ($i){
        case 1:
        echo $i;
        break;
        case 2:
        echo $i;
        break;
        default:
        echo "NÃO é igual a 1 ou 2";
        break;
    }     
  
  
  
    /* exercicio 12*/ 
    echo " <br>================== exercicio 12 =======================<br>";  
    $x = mt_rand(1,100);
    $y = mt_rand(1,100);
    echo"x é : " .$x . "<br>"; 
    echo"y é : ".$y. "<br>";

    if ( $x > $y) {
        echo $x. " é maior que: ".$y;
    }else{
        echo $y. " é maior que: ".$x;
    }

    
     
?>
</body>


</html>