<?php
include 'index.php';
if(isset($_POST['sell'])){
    echo $game1->sell();
}