<?php
	include 'db.php';
	session_start();

	if(isset($_SESSION['user_id'])){
		$db = $pdo->open();

		try{
			$stmt = $db->prepare("SELECT * FROM user_details WHERE user_id=:user_id");
			$stmt->execute(['user_id'=>$_SESSION['user_id']]);
			$user_id = $stmt->fetch();
		}
		catch(PDOException $e)
		{
			echo "There is some problem in connection: " . $e->getMessage();
		}

		$pdo->close();
	}
?>