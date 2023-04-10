<?php
	session_start();

	if ($_SERVER['REQUEST_METHOD'] == 'POST'){

		require "connection.php";

		$sql = "SELECT * FROM employee WHERE EMAIL = :email AND EMP_ID = :password";

		$email = $_POST["username"];
		$password = $_POST["id"];	

		$statement = $pdo->prepare($sql);
		$statement->bindParam(':email', $email, PDO::PARAM_STR);
		$statement->bindParam(':password', $password, PDO::PARAM_INT);
		$statement->execute();
		$data = $statement->fetch();
		$pdo = null;

		
    
			$_SESSION['id'] = $data["EMP_ID"];
      header("Location: home.php");
		

	}
?>



<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h2>Login</h2>
      <form action="index.php" method="post">
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" id="password" placeholder="Enter ID" name="id">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </body>
</html>