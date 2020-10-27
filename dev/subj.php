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
        $predmet=explode(" ",$_GET['id']);
    ?>

    <div class="header">
      <h3 class="header__title header__title--small">
        <?php echo($predmet[0]); ?>
      </h3>
      <a href="./jurnal.php" class="header__link"><img src="./img/icon/next.png" alt="arrow icon" class="header__img header__img--back"></a>
    </div>

    <ul class="discipline">

      <?php
        $sql = "SELECT * FROM journalcurrentasse WHERE iD_predmet = $predmet[1]";
        $predmets = $pdo->query($sql)->fetchAll();
        foreach($predmets as $ocenka){
      ?>

      <li class="discipline__item">
        <a class="discipline__link" href="#">
          <p class="discipline__text">
            <?=$ocenka["Дата"]?>
          </p>
          <div class="discipline__mark">
            <?=$ocenka["Оценка"]?>
          </div>
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