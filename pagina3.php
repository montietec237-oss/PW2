<?php
    session_start();

echo 'Usuário: ' . $_SESSION['usuario'] . '<br>';
echo 'Email: ' . $_SESSION['email'] . '<br>';
echo 'Idade: ' . $_SESSION['idade'] . '<br>';
?>

<a href="pagina3.php">Próxima Página</a>