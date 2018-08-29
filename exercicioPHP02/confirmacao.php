<!DOCTYPE html>
<html>
    <head>
     
      <meta charset="utf-8">
    
    </head>
    <body> 
    
    <!-- ?php

    var_dump($_GET);

    ?>  -->
    
    <?php

     if($_GET){
         $nome_usuario= $_GET ['name'];
         $email = $_GET['email'];
         $idade = $_GET['idade'];
         $hobbies =$_GET['hobbies'];

    }
     echo "$nome_usuario <br> $email";

    ?>
    <p>Agradecemos a sua inscrição, <?php echo $nome_usuario; ?>. Você disse que tem X anos (<?php echo $idade; ?>).
        Registramos o seu e-mail: (<?php echo $email; ?>). Obrigado!
</p>
<?php ?>

    <p> Hobbies:
    <ul>
        <?php  foreach($hobbies as $hobbie): ?>
        <li><?php echo $hobbie; ?> </li>
        <?php endforeach; ?>
    </ul>
    </p>

    </body>




</html>










