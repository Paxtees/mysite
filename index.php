<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/norma.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/Background (1).png" type="image/x-icon">
    <title>Регистрация / вход</title>
</head>
<body>
<div class="center-button"><button class="lesgo"><b>Войти</b></button></div>
<div class="main">
          <input type="checkbox" id="chk" aria-hidden="true">
          <a href="#" class="close"><img src="img/Background (2).png" alt="" height="30" width="30"></a>
            <div class="signup">
              <form action="validation-form/check.php" method="post" class="form">
                <label for="chk" aria-hidden="true">Регистрация</label>
                <input type="text" placeholder="Имя" required="" name="name" id="name" >
                <input type="text" name="login" placeholder="Логин" required="" id="login">
                <input type="password" name="pass" id="pass" placeholder="Пароль" required="">
                <button class="btn btn-success" type="submit">Зарегистрироваться</button>
              </form>
            </div>
            <div class="login">
              <form action="validation-form/auth.php" method="post" class="form">
                <label for="chk" aria-hidden="true">Авторизация</label>
                <input type="text" name="login" id="login" placeholder="Почта" required="">
                <input type="password" name="pass" id="pass" placeholder="Пароль" required="">
                <button class="btn btn-success" type="submit">Войти</button>
                <?php $not_exitst = "Такой пользователь не найден" ?>
              </form>
            </div>
        </div>
        <script src="js/index.js"></script>
</body>
</html>