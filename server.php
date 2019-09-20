<?php 

    
    $id = "";
    $name = "";
	$surname = "";
	$email = "";
	$edit_state = false;
	$update = false;
    
    session_start();
    
    $db = mysqli_connect('localhost', 'root', '', 'assigment_01');

    if (isset($_POST['save'])) {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$email = $_POST['email'];


		mysqli_query($db, "INSERT INTO users (id, name, surname, email) VALUES ('$id', '$name', '$surname', '$email')"); 
		$_SESSION['message'] = "Good job !"; 
		header('location: Assigment_01.php');
	}


	$results = mysqli_query($db, "SELECT * FROM users"); 

	if (isset($_POST['update'])){
		
	}

	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM users");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$id = $n['id'];
			$name = $n['name'];
			$surname = $n['surname'];
			$email = $n['email'];
		}
	}

	

	

?>