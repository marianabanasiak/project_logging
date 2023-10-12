<?php
$usersData = [
    'viper' => 'trxhr45',
    'bambik' => 'qwertyx231',
];
session_start();
function checkData($usersData, $data) {
	if (array_key_exists($data['login'], $usersData)) {
		$_SESSION['login']= $data['login'];
			if($usersData[$_SESSION['login']] == $data['pass']) {
				echo 'Witaj w Twoim panelu, ' . $_POST['login'] . '!' . '<br>';
				echo '<a href="myaccount.php">Moje Konto</a>';
			} else {
				echo'Błędne dane' . '<br>';
				echo '<a href="index.php">Strona Główna</a>';
			}
	}else {
		echo'Błędne dane do logowania' . '<br>';
		echo '<a href="index.php">Strona Główna</a>';
	}
}
checkData($usersData, $_POST);
/*session start zawsze na początku pliku!
poprawić warunek w lin 7
sprawdzić, czy użytkownik istneje w  naszej "bazie danych"
sprawdzić, czy wpisane hasło jest dobre, jezeli wszystko ok, przenopsimy do strony 
"myaccount.php"
Witamy się użyzytkownikiem po jego nazwie i wyświetlamy link do wylogowania.
Po kliknięciu linku wylogowyjemy uzytkownika "czyścimy" sesje i przenosimy z powrotem 
do formularza logowania i wrzucamy do gita

*/