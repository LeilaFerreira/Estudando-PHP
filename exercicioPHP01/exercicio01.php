<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title> aula12 </title>
    </head>
<body>
    Olá,
    <?php
    echo date("Y-m-d");

    $mes="N";
    $sexo= 'F';
    $idade=37;
    $peso=34.5;
    $nome='Leila';
    $sobrenome="Ferreira";

    $idade = "123";
    $idade = true;
    $idade = ["werwrwwrw", true, 234];
   

    echo $nome; echo '<br>' ;
    echo $mes; echo '<br>' ;
    echo $sexo; echo '<br>' ;
    echo $peso."<br>";
    echo $sobrenome."<br>";
    var_dump($idade)."<br>";




    $variavel01 = true;
    $variavel02 = false;
    $variavel03 = 0;
    $variavel04 = 1;
    $variavel05 = 6;
    $variavel06 = '';
    $variavel07 = "3";
    $variavel08 = "true";
    $variavel09 = 'false';
    $variavel10 = null; 


    function tipoDado($varN){

        if ($varN == true)
        {
            echo 'o valor' . $varN . 'é verdadeiro.';
        }
        else
        {
            echo 'o valor' . $varN . 'é falso.';
        }

    }

    tipoDado($variavel01);

    $animais = ["macaco"."<br>", "cachorro"."<br>", "gato"."<br>","golfinho"."<br>","baleia"."<br>","elefante"."<br>", "leão"."<br>"];
    
    $animais[100]="jacaré"."<br>";
    $animais[16]="jumento"."<br>";
    
    var_dump($animais);

    
    $carro = [];
    $carro["cor"] = "Preto"."<br>";
    $carro["marca"] = "ford"."<br>";
    $carro["placa"] = "MG141827"."<br>";
    $carro["modelo"] = "ka"."<br>";
    $carro["ano"] = 2018;
    
    $carro[0]="Leila"."<br>";
    $carro[14]= "empresa seguradora"."<br>";
    var_dump($carro);

    $inteiro=4;
    $decimal=10;

    echo $resto= $inteiro % $decimal;
    echo $inteiro = $inteiro + 5;
    echo $decimal = $decimal - 0.6; $resultado = $inteiro*2+$decimal;

    echo $inteiro + $decimal."<br>";
    echo $inteiro - $decimal."<br>";
    echo $inteiro / $decimal."<br>";
    echo $inteiro * $decimal."<br>";
    
    echo $resto;

    
    

    $palavra01 ="tres";
    $palavra02 ="pratos"; 
    $palavra03 ="de";
    $palavra04 ="trigo";
    $palavra05 ="para"; 
    $palavra06 ="três"; 
    $palavra07 ="tigres"; 
    $palavra08 ="tristes";
    var_dump($palavra06);
    
    
    ?>
</body>
</html>