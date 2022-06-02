<?php
	try {	
		require "../configs/config.php";
		require "./common.php";

		$connection = new PDO($dsn, $username, $password, $options);

		$sql = "SELECT * FROM pet WHERE type = 'cat'";

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
          <h4> All of our cats have found their forever home! No cats to display.</h4>
         <?php } 
         else 
         { 
            foreach ($result as $cat) { 
              require("./templates/showcat.php");
             } // <!-- foreach --> 
          } ?> <!-- else -->
      
    </div> <!-- container -->
        
    <?php require("./templates/footer.php"); ?>