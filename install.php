<!--<?php-->
<!--$servername = "localhost";-->
<!--$username = "id5004403_username";-->
<!--$password = "password";-->
<!--$dbname = "id5004403_vote";-->

<!--try {-->
<!--    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);-->
    // set the PDO error mode to exception
<!--    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);-->

	

<!--    $sql = "CREATE TABLE users (-->
<!--		id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,	-->
<!--		email VARCHAR(50) NOT NULL,-->
<!--		party VARCHAR(30) NOT NULL,-->
<!--		month VARCHAR(30) NOT NULL,-->
<!--		year VARCHAR(30) NOT NULL,		-->
<!--		location VARCHAR(50),-->
<!--		date TIMESTAMP-->
<!--	);";-->

    // use exec() because no results are returned
<!--    $conn->exec($sql);-->
<!--    echo "Table MyGuests created successfully";-->
<!--    }-->
<!--catch(PDOException $e)-->
<!--    {-->
<!--    echo $sql . "<br>" . $e->getMessage();-->
<!--    }-->

<!--$conn = null;-->
<!--?> -->