<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@300;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./style/main.css">
  <title>Document</title>
</head>

<body>
  <div class="wrapper">
    <div class="sign">
      <img class="sign__logo" src="./img/logo.png">
      <h4 class="sign__header">Авторизация</h4>
      
      <form action="./auth.php" method="post" class="sign-form">
        <ul class="sign-form__list">
          <li class="sign-form__item">
            <label class="sign-form__text">Логин:</label>
            <input type="text" class="sign-form__input" name="logininput">
          </li>
          <li class="sign-form__item">
            <label class="sign-form__text">Пароль:</label>
            <input type="password" class="sign-form__input" name="pwdinput">
          </li>
        </ul>
        <button type="submit" name="loginbutton" class="sign-form__link"><div class="sign-form__button">OK</div></button>
      </form>

      <a href="#" class="sign__help">Забыли пароль?</a>

    </div>
  </div>
</body>

</html>