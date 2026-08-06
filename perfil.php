<?php
//perfil.php
$usuario = $_COOKIE["usuario"];
$email = $_COOKIE["email"];
$idade = $_COOKIE["idade"];

echo "O email do  {$usuario} é {$email} e a sua idade é {$idade}";
?>