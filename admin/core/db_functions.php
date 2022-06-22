<?php require_once("connect.php");?>
<?php

	function storeUser($name, $email, $password){
		global $connect;
		
		$query = "INSERT INTO users(";
		$query .= "name, email, password) ";
		$query .= "VALUES('{$name}', '{$email}','{$password}')";

		$result = mysqli_query($connect, $query);

		if($result){
			$user = "SELECT * FROM users WHERE email = '{$email}'";
			$res = mysqli_query($connect, $user);

			while ($user = mysqli_fetch_assoc($res)){
				return $user;
			}
		}else{
				return false;
			}

	}


	function getUserByNameAndPassword($name, $surname, $email, $password){
		global $connect;
		// fetch data
			$query = "SELECT * FROM users WHERE name = :name AND surname = :surname";
				// $password = password_verify($_POST['password'], $row['password']);

			$statement = $connect->prepare($query);
			$statement->execute(
				array(
					':name' => $name,
					':surname' => $surname,
					':email' => $password,

				)
			);


		$query = "SELECT * from users where email = '{$email}' and password = '{$password}'";
	
		$user = mysqli_query($connect, $query);
		
		if($user){
			while ($res = mysqli_fetch_assoc($user)){
				return $res;
			}
		}
		else{
			return false;
		}
	}


	function emailExists($email){
		global $connect;
		$query = "SELECT email from users where email = '{$email}'";

		$result = mysqli_query($connect, $query);

		if(mysqli_num_rows($result) > 0){
			return true;
		}else{
			return false;
		}
	}

?>