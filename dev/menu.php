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

    <?php
      require_once './database/db.php';
      if(isset($_SESSION['user_login'])){
    ?>

    <div class="header">
      <h3 class="header__title">ТАТК ГА       
        <?php
          if(isset($_COOKIE['page'])){
            if ($_COOKIE['page'] = $key){
              echo('<h2 class="header_login">Приветствую, '.$_SESSION['user_login'].'!</h2>');
            }
          }
          echo('<a href=logout.php class="header_logout">Выйти из акка</a>');     /* нужно этот header_logout покрасивше сделать (или не надо вообще его, я просто не знаю)*/
        ?>
      </h3>
    </div>

    <nav class ="menu">
      <ul class="menu__list">
        <li class="menu__item">
          <a class="menu__link"  href ='./jurnal.php'>
              <img class = "menu__img" src="./img/menu/journal.png">
              <h3 class="menu__text">Журнал</h3>
          </a>
        </li>
  
        <li class="menu__item">
          <a class="menu__link"  href ='#'>
              <img class = "menu__img" src="./img/menu/bell.png">
              <h3 class="menu__text">Расписание</h3>
          </a>
        </li>
        
        <li class="menu__item">
          <a class="menu__link"  href ='#'>
              <img class = "menu__img" src="./img/menu/email.png">
              <h3 class="menu__text">Рапорт</h3>
          </a>
        </li>
        
        <li class="menu__item">
          <a class="menu__link"  href ='#'>
              <img class = "menu__img" src="./img/menu/lens.png">
              <h3 class="menu__text">Справка</h3>
          </a>
        </li>
      </ul>
    </nav>

  </div>

  <?php
    }else{
      die('нет доступа!!! ура! <a href="sign-in.php">войти?</a>');
    }
  ?>

</body>

</html>