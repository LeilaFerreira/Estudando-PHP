<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head> 

<body>
<?php


/* exercicio 1 */
echo " <br>================== exercicio 1 ======================== <br>" ;
 for ($i=1; $i<=100; $i++){
    echo $i.'<br>';
} 


/* exercicio 2 */
echo " <br>================== exercicio 2 ========================<br>";
 $numero = rand(0,100);
 echo  "Repetir ate == > ". $numero . "<br>" ;
for ($i=0; $i <= $numero; $i++){
    echo $i.'<br>';     

} 

/* exercicio 3 */
echo " <br>================== exercicio 3 ========================<br>";
 for ($i=1; $i<=10; $i++){
    echo "2x $i =". 2 * $i."<br>";
}
  /* exercicio 4 */
  echo " <br>================== exercicio 4 ========================<br>";
  $cont = 0;
  $numLancamentos = 0;
  while ($cont != 5){
    $moeda= rand(0,1);

    if($moeda == 1){
        $cont++;
       
    }

    $numLancamentos++;
     
  }
  echo "número de lançamentos da
  moeda  => " . $numLancamentos;

 /* exercicio 5 */
 echo " <br>================== exercicio 5 ========================<br>";

 do{
     $moeda = rand(0,1);
     $i++;
 } while ($moeda !=1);
 echo "joguei a moeda $i vezes!"; 

 /* exercicio 6 */
 echo " <br>================== exercicio 6.a ========================<br>";

 $array = ["Leo","Leila","Lilith","Dio","Bimo"];
for ($i = 0; $i < count($array) ; $i++) {
echo $array[$i] . "<br>";
} ;
/* exercicio 6.a */
echo " <br>================== exercicio 6.b ========================<br>";

$array = ["Leo","Leila","Lilith","Dio","Bimo"];
$i = 0;
while ($i < count($array)  ){
    echo $array[$i] . "<br>";
    $i++;
    
}
echo " <br>================== exercicio 6.c ========================<br>";
$array = ["Leo","Leila","Lilith","Dio","Bimo"];
$i = 0;
do{
    echo  $array[$i]."<br>" ;
    $i++;
}
while ($i < count($array));

echo " <br>================== exercicio 7 ========================<br>";

for ($i=0; $i < 10; $i++) {
    $numeros[$i] = mt_rand(0,10); // atribuindo numeros aleatorios ao array
  }

  echo "<br>Utilizando foreach: <br>";
  foreach ($numeros as $value) {
    echo "$value - ";

    if($value == 5){
      echo "Encontramos um 5!";
      break;
    }
  }

  echo "<br>Utilizando for: <br>";
  for ($i=0; $i < count($numeros); $i++) {
    echo $numeros[$i]. ", ";
    if($numeros[$i] == 5){
      echo "<br>Encontramos um 5!<br>";
      break;
    }
  }

  echo " <br>Utilizando while: <br>";

  $i = 0; //contador do while e do/while
  while($i < count($numeros)){
    echo $numeros[$i]. ", ";// imprime os valores de cada posição

    if($numeros[$i] == 5){// verifica se o valor da posição atual é um 5
      echo "<br> Encontramos um 5! <br>";// avisa quando encontra um 5
      break;// para o loop
    }
    $i++; //acrescente +1 no contador;
  }

  echo "Utilizando do/while: <br>";
  do{
    echo $numeros[$i]. ", ";
    if($numeros[$i] == 5){
      echo "<br> Encontramos um 5! <br>";
      break;
    }
    $i++;
  } while($i < count($numeros));


echo " <br>================== exercicio 8 ========================<br>";


    
echo " <br>================== exercicio 9 ========================<br>";

$mascota= ["animal" => "elefante",
        "idade" => 38,
        "altura" => 1.6,
        "nome" => "Leo"];

foreach ($mascota as $key => $value) {
echo "$key: $value <br>";
}
echo " <br>================== exercicio 10 ========================<br>";
$mascota= ["animal" => "cachorro",
        "idade" => 5,
        "altura" => 0.6,
        "nome" => "sonic"];

foreach ($mascota as $key => $value) {
echo "$key: $value <br>";
}


?>
</body>