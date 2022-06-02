<?php
	try {	
		require "../configs/config.php";
		require "./common.php";

		$connection = new PDO($dsn, $username, $password, $options);

		$sql = "SELECT * FROM pet";

		$statement = $connection->prepare($sql);
		$statement->execute();

        $result = $statement->fetchAll();	

	} catch(PDOException $error) {
		echo $sql . "<br>" . $error->getMessage();
	}
?>

<?php require("./templates/header.php"); ?>

    <div class="container">
      <?php require("./templates/nav.php"); ?>
      <h1> Find your new best friend today! </h1>
      <p> Click on the cats or dogs page in the top navigation bar to see a list of our available pets. If you see a pet you like, submit an adoption application!</p>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
         </ol>
      <div class="carousel-inner">
         <div class="carousel-item active">
            <img class="d-block w-100" src="./images/dog.jpeg" alt="First slide">
         </div>
         <div class="carousel-item">
            <img class="d-block w-100" src="./images/cat.jpeg" alt="Second slide">
         </div>
         <div class="carousel-item">
            <img class="d-block w-100" src="./images/cat2.jpeg" alt="Third slide">
         </div>
      </div>
   <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
   </a>
   <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
   </a>
   </div>
    </div> 
        
    <?php require("./templates/footer.php"); ?>