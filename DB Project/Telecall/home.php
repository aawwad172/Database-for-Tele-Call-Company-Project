<?php
session_start();
	if(!isset($_SESSION['id'])){
		header("Location: index.php");
		exit();
	}
    require "connection.php";

$sql = "SELECT * FROM `customers`";
$statement = $pdo->prepare($sql);
$statement->execute();
$data = $statement->fetchAll();
    ?>




    <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <h2>Customers</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>SSN</th>
            <th>Phone</th>
            <th>Adress</th>
            <th>Subscription</th>
            <th>Total Bills</th>
          </tr>
        </thead>
        <tbody>

          <tr>
          <?php
            foreach($data as $row){ ?>
            <td><?php echo $row['ID']?></td>
            <td><?php echo $row['FirstName'] . " " . $row['LastName']?></td>
            <td><?php echo $row['SSN']?></td>
            <td><?php echo $row['phoneNumber']?></td>
            <td><?php echo $row['Address']?></td>
            <td><?php echo $row['Sub_Type']?></td>
            <td><?php echo $row['Bill']?></td>
          </tr>
           <?php } ?>

        </tbody>
      </table>
    </div>

    <div class="container">
      <h2>Projects</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Budget</th>
            <th>Department</th>
           
          </tr>
        </thead>
        <tbody>

          <tr>
          <?php
          $sql = "SELECT * FROM `project`";
          $statement = $pdo->prepare($sql);
          $statement->execute();
          $data = $statement->fetchAll();
        

           
            foreach($data as $row){ ?>

            <td><?php echo $row['PROJECT_ID']?></td>
            <td><?php echo $row['PROJECT_NAME'] ?></td>
            <td><?php echo $row['BUDGET']?></td>
            <td><?php echo $row['DEP_ID']?></td>
            
          </tr>
           <?php } ?>

        </tbody>
      </table>
    </div>
  </body>
</html>