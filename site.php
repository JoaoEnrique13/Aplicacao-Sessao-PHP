<?php
    session_start();

    if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)){
        header('location:index.php');
    }

    $logado = $_SESSION['login'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Usuário logado ". $logado; ?></title>
</head>
<body>
    <?php echo "Usuário logado ". $logado; ?>
    <form action="deslogar.php" method="post">
        <button type="submit" name="sair">Sair</button>
    </form>
</body>
</html>