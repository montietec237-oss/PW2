<?php
    session_start();

$_SESSION['user'] = 'João Silva';
$_SESSION['email'] = 'joão.silva@gmail.com';
$_SESSION['idade'] = 30;

$_SESSION['carrinho'] =
[
    "id" => 1,
    "nome" => "Produto A",
    "preco" => 19.99,
];

?>

<a href="perfil.php">Ver Perfil</a>