<?php
function criptografa($senha){
    echo $senha . "<br>";
    echo md5 ($senha). "<br>";
    echo base64_encode($senha)."<br>";
    echo sha1($senha)."<br>";
    echo password_hash($senha,PASSWORD_DEFAULT)."<br>";
    echo password_hash($senha, PASSWORD_BCRYPT);
}

echo criptografa("leila");




?>