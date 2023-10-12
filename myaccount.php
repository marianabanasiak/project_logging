<?php
session_start();
if(!empty($_SESSION['login'])) {
	echo 'Witamy na moim koncie!' .  '<br>';
	echo '<a href="logout.php">Wyloguj</a>';
} else {
	echo 'Brak zalogowanego uzytkownika';
}
