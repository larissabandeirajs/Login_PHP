<?php
session_start();
if(!isset($_SESSION['login'])){
    header('location:index.php');
    exit;
}else{
echo "Avistamos um usuario<br>";
echo "▬▬▬.◙.▬▬▬<br>";
echo "═▂▄▄▓▄▄▂<br>";
echo "◢◤ █▀▀████▄▄▄▄▄▄◢◤<br>";
echo "█▄ █ :) ██▀▀▀▀▀▀▀╬<br>";
echo "◥█████◤<br>";
echo "══╩══╩══<br>";
echo "▬▬▬Seja Bem Vindo!▬▬▬";

}