<?php
	try {	
		require "../configs/config.php";
		require "./common.php";

		$connection = new PDO($dsn, $username, $password, $options);

		$sql = "SELECT * FROM pet WHERE type = 'dog'";

		$statement = $connection->prepare($sql);
		$statement->execute();

      $result = $statement->fetchAll();	

	} catch(PDOException $error) {
		echo $sql . "<br>" . $error->getMessage();
	}
?>

<?php require("./templates/header.php"); ?>

    <div class="container">
      <?php 
         require("./templates/nav.php");
         if (!$result && $statement->rowCount() == 0) { ?>
          <h4> All of our dogs have found their forever home! No dogs to display.</h4>
         <?php } 
         else 
         { 
            foreach ($result as $dog) { 
              require("./templates/showdog.php");
             } // <!-- foreach --> 
          } ?> <!-- else -->
      
    </div> <!-- container -->
        
    <?php require("./templates/footer.php"); ?>