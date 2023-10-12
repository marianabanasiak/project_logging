<?php
session_start();
if(!empty($_SESSION['login'])) {
	unset($_SESSION['login']);
	header("Location: http://localhost/project_logging/");
} else {
	echo 'Brak zalogowanego uzytkownika';
}