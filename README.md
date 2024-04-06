# index.php

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessão PSP</title>
</head>
<body>
    <form action="ope.php" method="post" id="formlogin" name="formlogin">
        <label for="login">Nome: </label>
        <input type="text" name="login" id="login"><br><br>

        <label for="password">Senha: </label>
        <input type="password" name="password" id="password"><br><br>


        <input type="submit" value="Logar">
    </form>
</body>
</html>
```

# site.php
```php
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
```

# ope.php
```php

session_start();


$_SESSION["login"] = $_POST["login"];
$_SESSION["password"] = $_POST["password"];

header("location:site.php");
```


# deslogar.php
```php
<?php
session_start();

unset($_SESSION["login"]);

header('location:index.php');
?>
