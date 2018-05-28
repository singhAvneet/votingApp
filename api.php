<?php

/**
 * Function to query information based on 
 * a parameter: in this case, location.
 *
 */
$servername = "localhost";
$username = "id5004403_username";
$password = "password";
$dbname = "id5004403_vote";

function escape($html)
{
	return htmlspecialchars($html, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
}


// if (isset($_POST['submit'])) 
// {
	
	try 
	{	
		// require "../config.php";
		// require "../common.php";

		// $connection = new PDO($dsn, $username, $password, $options);
		$connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

	//	$sql = "SELECT * FROM users		WHERE location = :location";
		$location =strtolower($_GET['party']); 
		$month=strtolower($_GET['month']);
		$email=strtolower($_GET['email']);
		
	if($email!=null){
	   $sql = "SELECT id FROM users where email = :email and month = :month	";
        		$statement = $connection->prepare($sql);
        			$statement->bindParam(':email', $email, PDO::PARAM_STR);
        	$statement->bindParam(':month', $month, PDO::PARAM_STR);
	}
	else{
        	if($month!=null){
        	$sql = "SELECT COUNT(party) as party FROM users where party = :location and month = :month	";
        		$statement = $connection->prepare($sql);
        			$statement->bindParam(':location', $location, PDO::PARAM_STR);
        	$statement->bindParam(':month', $month, PDO::PARAM_STR);
        	}
        	else{
        	$sql = "SELECT COUNT(party) as party FROM users where party = :location";
        		$statement = $connection->prepare($sql);
        			$statement->bindParam(':location', $location, PDO::PARAM_STR);
        
        	}
	
        }

	
		
		$statement->execute();

		$result = $statement->fetchAll();
		$result = (object) $result;
	
	//	$result=json_decode($data);
		echo json_encode($result);;

	}
	
	catch(PDOException $error) 
	{
		echo $sql . "<br>" . $error->getMessage();
	}
// }
?>

