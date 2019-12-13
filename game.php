<?php
require 'Blackjack.php';
require 'card.php';

//Sesion
session_start();

//this line makes PHP behave in a more strict way
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);
$player1 = new blackjack('Jeroen De Vetter', '0' , 'Player');
$player2 = new blackjack('Dealer', '0' , 'Dealer');

$symbols = ['Diamonds', 'Hearts' , 'Clubs' , 'Spades'];
$names = ['Ace','2','3','4','5','6','7','8','9','10','Jack','Queen','King'];

$cards = [];

foreach ($symbols as $symbol) {
    foreach ($names as $name) {
        array_push($cards , new card($name ,$symbol));
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="game.css">
    <title>Document</title>
</head>
<body>
<h1>Blackjack Jeroen De Vetter</h1>

<div>
    <?php
    foreach ($cards as  $card) {
        if ($card->cardSymbol == 'Hearts') {
            echo "<span>$card->cardName</span>";
            echo '<span style="color: red">&#9829;</span>';
            echo '<br>';

        }
    }
    ?>
</div>
<div>
    <?php
     foreach ($cards as  $card) {
         if ($card->cardSymbol == 'Clubs') {
             echo "<span>$card->cardName</span>";
             echo '<span>&#9827;</span>';
             echo '<br>';
         }
     }
    ?>

</div>
<div>
    <?php
    foreach ($cards as  $card) {
        if ($card->cardSymbol == 'Diamonds') {

            echo "<span>$card->cardName</span>";
            echo '<span style="color: red">&#9830;</span>';
            echo '<br>';
        }
    }
    ?>
</div>
<div>
    <?php
    foreach ($cards as  $card) {
        if ($card->cardSymbol == 'Spades') {
            echo "<span>$card->cardName</span>";
            echo '<span>&#9824;</span>';
            echo '<br>';
        }
    }
    ?>
</div>

<form method="post">
    <button type="submit" name="Hit">Hit </button>
    <?php
    if(isset($_POST['Hit'])) {

        $player1->Hit($cards);


        $_SESSION['PlayerCard'][] = $cards[$player1->playerCard];
        foreach ($_SESSION['PlayerCard'] as $card) {
            switch ($card->cardSymbol){
                case 'Spades':
                    echo "<span>".$card->cardName."</span>";
                    echo '<span>&#9827;</span>';
                    echo '<br>';
                    break;
                case 'Diamonds':
                    echo "<span>".$card->cardName."</span>";
                    echo '<span style="color: red">&#9830;</span>';
                    echo '<br>';
                    break;
                case 'Clubs':
                    echo "<span>".$card->cardName."</span>";
                    echo '<span>&#9824;</span>';
                    echo '<br>';
                    break;
                default:
                    echo "<span>".$card->cardName."</span>";
                    echo '<span style="color: red">&#9829;</span>';
                    echo '<br>';
                    break;
            }
        }

    }
    ?>
</form>
</body>
</html>
