<!DOCTYPE html>
<html>
<body>

<?php

    var_dump($_GET);
    echo "<br>";
    foreach($_GET as $key=> $value){
        echo "$key = $value <br>";
    }
    
    ?>
<hr>

    <form action ="imprimir.php" method="get">
    Nome: <input type="text" nome="nome">
    <br>
    E-mail: <input type="text" nome="email">
    <br>
    <input type="submit">
    </form>
    
 
<br>================== exercicio 2.b========================<br>"
<?php

var_dump($_GET);
echo "<br>";
foreach($_GET as $key=> $value){
    echo "$key = $value <br>";
}

?>
<hr>

<form action ="imprimir.php" method="get">
Nome: <input type="text" nome="nome">
<br>
E-mail: <input type="text" nome="email">
<br>
<input type="submit">
</form>



</body>
</html>
