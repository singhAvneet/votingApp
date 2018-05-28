<!--<?php-->

<!--/**-->
<!-- * Function to query information based on -->
<!-- * a parameter: in this case, location.-->
<!-- *-->
<!-- */-->
<!--$servername = "localhost";-->
<!--$username = "id5004403_username";-->
<!--$password = "password";-->
<!--$dbname = "id5004403_vote";-->

<!--function escape($html)-->
<!--{-->
<!--	return htmlspecialchars($html, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");-->
<!--}-->


<!--if (isset($_POST['submit'])) -->
<!--{-->
	
<!--	try -->
<!--	{	-->
		// require "../config.php";
		// require "../common.php";

		// $connection = new PDO($dsn, $username, $password, $options);
<!--		$connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);-->

<!--		$sql = "SELECT * -->
<!--						FROM users-->
<!--						WHERE location = :location";-->

<!--		$location = $_POST['location'];-->

<!--		$statement = $connection->prepare($sql);-->
<!--		$statement->bindParam(':location', $location, PDO::PARAM_STR);-->
<!--		$statement->execute();-->

<!--		$result = $statement->fetchAll();-->
<!--	}-->
	
<!--	catch(PDOException $error) -->
<!--	{-->
<!--		echo $sql . "<br>" . $error->getMessage();-->
<!--	}-->
<!--}-->
<!--?>-->

		
<!--<?php  -->
<!--if (isset($_POST['submit'])) -->
<!--{-->
<!--	if ($result && $statement->rowCount() > 0) -->
<!--	{ ?>-->
<!--		<h2>Results</h2>-->

<!--		<table>-->
<!--			<thead>-->
<!--				<tr>-->
<!--					<th>#</th>-->
<!--					<th>Email</th>-->
<!--					<th>Party</th>-->
<!--					<th>Month</th>-->
<!--					<th>Year</th>-->
<!--					<th>Location</th>-->
<!--					<th>Date</th>-->
<!--				</tr>-->
<!--			</thead>-->
<!--			<tbody>-->
<!--	<?php -->
<!--		foreach ($result as $row) -->
<!--		{ ?>-->
<!--			<tr>-->
<!--				<td><?php echo escape($row["id"]); ?></td>-->
<!--				<td><?php echo escape($row["email"]); ?></td>-->
<!--				<td><?php echo escape($row["party"]); ?></td>-->
<!--				<td><?php echo escape($row["month"]); ?></td>-->
<!--				<td><?php echo escape($row["year"]); ?></td>				-->
<!--				<td><?php echo escape($row["location"]); ?></td>-->
<!--				<td><?php echo escape($row["date"]); ?> </td>-->
<!--			</tr>-->
<!--		<?php -->
<!--		} ?>-->
<!--		</tbody>-->
<!--	</table>-->
<!--	<?php -->
<!--	} -->
<!--	else -->
<!--	{ ?>-->
<!--		<blockquote>No results found for <?php echo escape($_POST['location']); ?>.</blockquote>-->
<!--	<?php-->
<!--	} -->
<!--}-->
<!--?> -->

<!--<h2>Find user based on location</h2>-->

<!--<form method="post">-->
<!--	<label for="location">Location</label>-->
<!--	<input type="text" id="location" name="location">-->
<!--	<input type="submit" name="submit" value="View Results">-->
<!--</form>-->

<!--<a href="index.php">Back to home</a>-->
