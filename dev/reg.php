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
      <h4 class="sign__header">Регистрация</h4>
  
      <form action="./regist.php" class="sign-form" method="post">
        <ul class="sign-form__list">
          <li class="sign-form__item">
            <label class="sign-form__text">ФИО:</label>
            <input type="text" class="sign-form__input" name="fioinput">
          </li>
          <li class="sign-form__item">
            <label class="sign-form__text">Логин:</label>
            <input type="text" class="sign-form__input" name="logininput">
          </li>
          <li class="sign-form__item">
            <label class="sign-form__text">Пароль:</label>
            <input type="text" class="sign-form__input" name="pwdinput">
          </li>
        </ul>
        <button class="sign-form__link" type="submit" name="loginbutton"><div class="sign-form__button">OK</div></button>
      </form>
  
      <a href="./sign-in.php" class="sign__help">Уже есть аккаунт?</a>

    </div>
  </div>
</body>

</html>