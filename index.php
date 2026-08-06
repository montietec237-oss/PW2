<?php

$expiracao = time() + (86400 * 30); // 86400 = 1 day


$dados = [
    "usuário" => "João Silva",
    "email" => "joão.silva@gmail.com",
    "idade" => 30
];

setcookie("usuário", "João Silva", $expiracao);
setcookie("email", "joão.silva@gmail.com", $expiracao);
setcookie("idade", 30, $expiracao);

?>

<a href="perfil.php">Ver perfil</a>