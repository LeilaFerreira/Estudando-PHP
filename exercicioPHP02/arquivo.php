
<?php
global $arquivo;

function verificarArquivo (){
   
    $arquivo =  'texto.txt';
   
    if (file_exists($arquivo)){
      $fp =  fopen ($arquivo,"r+");
      for ($i = 0; $i < 100; $i++) {
        fwrite($fp,"Olá Mundo! Testando. \n" );
      } 
        fclose($fp);
    }
    else{
        fopen($arquivo, "x+");
    }
}
//echo verificarArquivo();


echo "Exercicio-2c <hr>";
$arquivo =  'texto.txt';
//abre o arquivo para manipular
$arquivo02 = fopen($arquivo, "r");
// pega o tamanho do arquivo 
$tamanho = filesize($arquivo);

$conteudo = fread($arquivo02, $tamanho);
fclose($arquivo02);
echo $conteudo;

echo "<br> Exercicio-2d <hr>";

$paginaInicio = file_get_contents($arquivo);
$convert = explode("\n", $paginaInicio);

foreach($convert as  $linha){
    echo $linha."<br>";
}
echo "<br> Exercicio-3a <hr>";

$paginaInicio = file_get_contents("categorias.json");


$b = json_decode($paginaInicio, true);


foreach($b as  $linha){
    foreach($linha as  $valor){
        //echo $valor["id"];
        //  echo $valor ["nome"];
        echo "<input type=\"checkbox\" name=".$valor ["nome"]." value=".$valor["id"].">".$valor ["nome"]." <br>";
    }
}



?>