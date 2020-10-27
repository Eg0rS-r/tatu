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
      <h3 class="header__title">Журнал</h3>
      <a href="./menu.php" class="header__link"><img src="./img/icon/next.png" alt="arrow icon" class="header__img"></a>
    </div>

    <ul class="discipline">

      <?php
        $sql = "SELECT * FROM predmit";
        $predmets = $pdo->query($sql)->fetchAll();
        foreach($predmets as $predmet){
      ?>

      <li class="discipline__item">
        <a class="discipline__link" href="./subj.php?id=<?=$predmet["nazvanie_pred"]." ".$predmet["iD_predmet"]?>">
          <p class="discipline__text"><?=$predmet["nazvanie_pred"]?></p>
          <div class="discipline__mark">4</div>
        </a>
      </li>
      
      <?php
        }
      ?>

    </ul>

    <?php
      }else{
        die('нет доступа!!! ура! <a href="sign-in.php">войти?</a>');
      }
    ?>

  </div>
</body>

</html>