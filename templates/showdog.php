<?php
	try {	
		require "../configs/config.php"; 
    
      $image = '<img class="d-block w-100" src="images/' . $dog["photoLocation"] . '">';

      if($imageURL != '') 
        $image = '<img class="d-block w-100" src="' . $imageURL . $dog["photoLocation"] . '">';

      echo "<script>console.log('Console: " . $image . "' );</script>";
  } catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
  }

?>

<!-- Begin showdog -->
<div class="card border-primary" style="width: 50%"> 
              <div class="card-header">
                </div> <!-- Header -->
                <div class="card-body">
                  <h5 class ="card-title"><?php echo $dog["name"]; ?></h5>
                  <p class="card-text">Description: <?php echo $dog["description"]; ?></p>
                  <p class="card-text">Age: <?php echo $dog["age"]; ?></p>
                  <p class="card-text">Breed: <?php echo $dog["breed"]; ?></p>
                  <div class = "col-sm">
                      <?php echo $image ?>
                   </div>
                </div> <!-- Body -->
                <div class="card-footer">
                  <div class = "row">
                      <div class = "col-sm">
                          <?php if ($dog["status"] == 'available') { ?>
                             <span class="label label-success">Available for adoption! Submit an application now!</span>
                          <?php } else { ?>
                              <span class="label label-inverse">Pet has been adopted</span>
                          <?php } ?>
                      </div>
                  </div>
              </div>
            </div> <!-- Card -->   
           <p>
<!-- End showdog -->