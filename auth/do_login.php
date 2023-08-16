<?php
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}

	require_once('authenticate.php');

	// if(isLoggedIn()){
	// 	header("location: ../index");
	// 	exit();
	// }

	if(isset($_POST['username']) && isset($_POST['password']) ){
		try{
			require_once('connection.php');
			$query = $database_handler->prepare("SELECT user_id,firstname,lastname,time_started,time_completed,time_elapsed,score FROM user WHERE username=? AND password=? AND quiz_id=?;");
			$query->bind_param('ssi',$_POST['username'],$_POST['password'],$_POST['qid']);
			$query->execute();
			$query->store_result();
			$query->bind_result($user_id, $firstname, $lastname, $time_started, $time_completed, $time_elapsed, $score);
			if($query->num_rows == 1){

				if(!isset($_SESSION)){
					session_start();
				}
				$_SESSION['logged_in'] = TRUE;

				$query->data_seek(0);
				$query->fetch();
				setcookie('user_id', $user_id, time()+86400);
				setcookie('firstname', $firstname, time()+86400);
				setcookie('lastname', $lastname, time()+86400);
				setcookie('time_started', $time_started, time()+86400);
				setcookie('time_completed', $time_completed, time()+86400);
				setcookie('time_elapsed', $time_elapsed, time()+86400);
				setcookie('score', $score, time()+86400);
				header("location: ../index");
				
				
			}
			else{
				header('location: ../login.php');
				exit();
			}
		}
		catch(ErrorException $e){
			echo $e->getMessage();
		}
	}
	else{
		header('location: ../login.php');
		exit();
	}
?>
