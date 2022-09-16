<?php

include "file.php";

$dsn = "mysql:host=localhost;dbname=pdc10_db";
$user = "root";
$passwd = "";

$pdo = new PDO($dsn, $user, $passwd);
$result = File::handleUpload($_FILES['picture_path']);

if ($result == "error"){
	('Location: index.php?error=' . "error file type");
}
else{
	if ($result !== FALSE) {
		try {
			
		$register = new File($_POST['complete_name'], $_POST['email'], $_POST['password'], $result['save']);
            
			$result = $register->save();
			header('Location: index.php?success=1');
		}
		catch (Exception $e) {
			error_log($e->getMessage());
}
	} else {    

		header('Location: index.php?error=' . $e->getMessage());
	}
}
