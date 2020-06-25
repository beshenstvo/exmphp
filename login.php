<?php 
    session_start();
    $errors = [];
    if(!empty($_POST[login]) && !empty($_POST['password'])){
        if( ($_POST['login']=='admin') && ($_POST['password']=='12345') ){
            $_SESSION['user'] = ['login' => 'admin', 'password' => $_POST['password']];
            header('Location: index.php');
            die();
        }else{
            $errors[] = 'Неверный логин или пароль';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Создание формы</h2>
    <ul>
        <?php foreach ($errors as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
    <form  method="post">
        <div class="form">
            <div>
                <label for="login">Логин</label>
                <input name="login" id='login' type="text">
            </div>
            <div>
                <label for="password">Пароль</label>
                <input name="password" id='password' type="password">
            </div>
        </div>
        <button type="submit">Войти</button>
    </form>
    <div>
        <h3>Логин и пароль админа</h3>
        <p>Логин - admin </p>
        <p>Пароль - 12345</p>
    </div>
</body>
</html>