<?php
    $titulo = "Formulario PHP";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Aula 17 - PHP</title>
</head>
<body>
    <h1><?php echo $titulo; ?></h1>

    <div id='fg_membersite'>
        <form id='register' action='confirmacao.php' method='get'>
            <fieldset>
                <legend>Inscreva-se</legend>

                <div class='container'>
                    <label for='name' >Nome completo: </label><br/>
                    <input type='text' required name='name' id='name' value='' maxlength="50" /><br/>
                </div>
                <div class='container'>
                    <label for='email' >E-mail:</label><br/>
                    <input type='email'required name='email' id='email' placeholder="usuario@e-mail.com.br" maxlength="50" /><br/>
                </div>
                <div class='container'>
                    <label for='idade' >Idade*:</label><br/>
                    <input type='number' required name='idade' id='idade' value='' maxlength="50" /><br/>
                </div>
                <div class='container'>
                    <label for='senha' >senha*:</label><br/>
                    <input type='password' required name='senha' id='senha' value='' maxlength="50" /><br/>
                </div>
                <div class='container'>
                    <label for='confirma-senha' >confirmar senha*:</label><br/>
                    <input type='password' required name='confirma-senha' id='confirma-senha' value='' maxlength="50" /><br/>
                </div>
                <br>
                <div class='container'>
                <label>HOBBIES</label> <br>
                <label for="hobbies_leitura">
                <input type="checkbox"name="hobbies[]" id="hobbies_leitura" value="leitura">
                Leitura
                </label>
                <label for="hobbies_corrida">
                <input type="checkbox"name="hobbies[]" id="hobbies_corrida" value="corrida">
                Corrida
                </label>
                <button type="submit" name="button">Enviar</button>
                  
                </div>

                <small>* campos obrigatórios</small>
            </fieldset>
        </form>

    </body>
</html>
