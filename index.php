<?php
	include_once('libraries/PDOFactory.php');
	include_once('model/entities/theme.php');
	include_once('model/repositories/themeRepo.php');
	
	$pdo = PDOFactory::getMysqlConnection();
	
	$theme = new themeRepository();
	$listImgTheme = $theme -> getAll($pdo,1);
	
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>I love monkeys</title>
        <link rel="stylesheet" href="sass/style.css">
    </head>
    <body>
        <div class="start"><input class="start-game" type="button" value="Start Game"></div>
        <audio autoplay="autoplay" id="dk">
            <source src="dk.mp3">
        </audio>
        <audio id="nice" src="nice.mp3"></audio>
        <audio id="scream" src="scream.mp3"></audio>
        <div class="container">

            <div class="score-board">
                <span class="score">
                    <img src="assets/img/count_monkey.png" alt="Monkey score">
                    <span class="count_remaining"></span>
                </span>
                <div class="counter" id= "counter">00s</div>
                <span class="victory">
                    <img src="assets/img/victory_monkey.png" alt="Monkey victory">
                </span>
            </div>

            <img id="monkey1" class="monkey1" src="<?php echo $listImgTheme[0]->getAnimeau1() ?>" width="300px" height="300px" alt="Monkey1">
            <img id="monkey2" class="monkey2" src="<?php echo $listImgTheme[0]->getAnimeau2() ?>" alt="Monkey2">
            <img id="monkey3" class="monkey3" src="<?php echo $listImgTheme[0]->getAnimeau3() ?>" alt="Monkey3">
			<input id="objet" type="hidden" name="objet" value="<?php echo $listImgTheme[0]->getObjet()?>" />
        </div>
        <div class="end-game"><h1>Fin de la partie !</h1><br><h2>Votre Score : </h2><h1 class='score-final'></h1></div>
    <script src="libraries/jquery-3.2.1.min.js"></script>
    <script src="js/script.js"></script>
    </body>
</html>