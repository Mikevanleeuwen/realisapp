<?php
include 'game.php';

$game1 = new Game();
$game1->name = 'Far Cry 3';
$game1->genre = 'Shooter';
$game1->amount = 15;
$game1->online = false;
$game1->price = 54.99;
$game1->gameplayLength = 24;
?>

<p>Current game:<?php echo $game1->name ?></p>
<p>Genre:<?php echo $game1->genre ?></p>
<p>Price:<?php echo $game1->price ?></p>
<p>Amount:<?php echo $game1->amount ?></p>
<form method="POST" action="sell.php">
    <input  name="sell" type="submit" value="Sell"/>
</form>

