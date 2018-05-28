<?php

/**
 * Use an HTML form to create a new entry in the
 * users table.
 *
 */

$servername = "localhost";
$username = "id5004403_username";
$password = "password";
$dbname = "id5004403_vote";
if (isset($_POST['submit']))
{
	
	// require "../config.php";
	// require "../common.php";

	try 
	{
		// $connection = new PDO($dsn, $username, $password, $options);
		$connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$new_user = array(
			
			"email"     => $_POST['email'],
			"party"       => $_POST['party'],
			"month"  => $_POST['month'],
			"year"  => $_POST['year'],
			"location"  => $_POST['location'],
			"city"  => $_POST['city'],
			"province"  => $_POST['province'],
			"country"  => $_POST['country']
			
		);

		$sql = sprintf(
				"INSERT INTO %s (%s) values (%s)",
				"users",
				implode(", ", array_keys($new_user)),
				":" . implode(", :", array_keys($new_user))
		);
		
		$statement = $connection->prepare($sql);
		$statement->execute($new_user);
	}

	catch(PDOException $error) 
	{
		echo $sql . "<br>" . $error->getMessage();
	}
	
}
?>



<?php 
if (isset($_POST['submit']) && $statement) 
{ ?>
	<span id="notice"> successfully added.</span>
<?php 
}

?>
<link rel="stylesheet" href="css/style.css">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<strong><p id="h2">Add a user</p></strong>
<p class="para">Lets bring back canadian values on the world’s stage</p>
<p class="para">Please participate wisely to express your choice of government </p>
<span id="h4"></span>
<style>
    .button{
        opacity: 0.5;
  pointer-events: none;
  cursor: default;
    }
    .hidden1{
        display:none;
    }
</style>
<!--action="https://singhavneet.000webhostapp.com/vote/create.php"-->
<form  method="POST" enctype="multipart/form-data">
	

 <div class="row ">
 <div class="col-sm-6 form-group">

 	<label for="email">Email Address</label>
	<input class="form-control" type="email" name="email" id="email"  pattern="[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$" required>

 </div>
  <div class="col-sm-6 form-group">
      <label for="sel1">Select list (select one):</label>
      <select class="form-control"  name="party" id="party"  required>
        <option value=""></option>
        <option value="ndp">NDP</option>
        <option value="libral">Libral</option>
        <option value="conservative">Conservative</option>
         <option value="bloc">Bloc</option>
        <!--<option value="canadian">Canadian</option>-->
        <option value="christian">Christian</option>
        <option value="communist">Communist</option>
         <option value="green">Green</option>
        <option value="libertarian">Libertarian</option>
        <!--<option value="marijuana">Marijuana</option>-->
        <option value="marxist">Marxist</option>
         <option value="progressive">Progressive</option>
        <!--<option value="western">Western</option>-->
   
      </select>
 
  </div>
 

 </div>
   <div class="col-sm-12 form-group">
	<input type="text" name="month" id="month" required class="hidden1">
	<input type="text" name="year" id="year" required class="hidden1">
	<input type="text"  name="location" id="location" required class="hidden1">
	<input type="text" name="city" id="city" required class="hidden1">
	<input type="text" name="province" id="province" required class="hidden1">
	<input type="text"  name="country" id="country" required class="hidden1">
	<input type="submit" name="submit" value="Submit" class="btn btn-default button" >
 </div>
 </div>


</form>
	<error id="error" style="display:none;color:rgba(198,15,19,.5)">submit intercepted due invalid email</error>
	<error id="error2" style="display:none;color:rgba(198,15,19,.5)">you can not vote twice in a month</error>

<script src="script.js"></script>