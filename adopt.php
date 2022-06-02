
<?php require("./templates/header.php"); ?>
<?php require("./common.php"); ?>
<?php require("../configs/config.php"); ?>

    <div class="container">
        <?php require "./templates/nav.php" ?>
        <div class="card" style="width: 50%">
        <form method="post" style="padding: 20px" action="./submitapplication.php">
            <div class="form-group">
                <label for="name" class="text-primary">Name</label>
                <input class="form-control" id="name" name="name">

                <label for="phone" class="text-primary">Phone Number</label>
                <input class="form-control" id="phone" name="phone">

                <label for="email" class="text-primary">Email Address</label>
                <input class="form-control" id="email" name="email">

                <label for="address" class="text-primary">Address</label>
                <input class="form-control" id="address" name="address">
            
                <label for="currentPets" class="text-primary">Do you have any pets currently?</label>
                <select class="form-control" id="currentPets" name="currentPets">
                    <option>Yes</option>
                    <option selected>No</option>
                </select>

                <label for="currentPetDetails" class="text-primary">If you do have current pets, what kind and how many?</label>
                <textarea class="form-control" id="currentPetDetails" rows="3" name="currentPetDetails"></textarea>

                <label for="animal" class="text-primary">Pet you want to adopt</label>
                <input class="form-control" id="animal" name="animal">

                <label for="comments" class="text-primary">Comments</label>
                <textarea class="form-control" id="comments" rows="3" name="comments"></textarea>

            </div>
                <input  type="submit" class="btn btn-primary" name="submit" value="Submit adoption application">
        </form>
        </div>
    </div> <!-- container -->

<?php require("./templates/footer.php"); ?>