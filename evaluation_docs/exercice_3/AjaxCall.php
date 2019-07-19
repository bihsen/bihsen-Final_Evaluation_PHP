<?php
$db = new PDO('mysql:host=localhost;dbname=exo1_userslist;charset=utf8', 'root', '');


$post = array();
$errors = array();

if (!empty($_POST)) {

	// Basics validations
	if (empty($_POST['brand'])) {
		$errors[] = 'brand is mandatory';
	}

	if (empty($_POST['model'])) {
		$errors[] = 'model is mandatory';
	}
	if (empty($_POST['year'])) {
		$errors[] = 'Year of release is mandatory';
	}
	if (empty($_POST['color'])) {
		$errors[] = 'color is mandatory';
	}

	if (count($errors) === 0) {

		// If no errors, insert into DB
		$pdo = new PDO('mysql:host=localhost;dbname=exo1_userslist;charset=utf8', 'root', '');

		$insert = $pdo->prepare('INSERT INTO vehicules(brand, model, year , color ) VALUES( ?, ? , ? , ?)');
		$insert->bindValue(1, $_POST['brand']);
		$insert->bindValue(2, $_POST['model']);
		$insert->bindValue(3, $_POST['year']);
		$insert->bindValue(4, $_POST['color']);

		if ($insert->execute()) {
			echo 'Car successfully addded !';
		} else {
			echo 'Error inserting into the DB';
		}
	} else {
		echo implode('<br>', $errors);
	}
}
