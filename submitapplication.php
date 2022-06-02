<?php 
    require "../configs/config.php";
    require "./common.php";
        
        try {
        $connection = new PDO($dsn, $username, $password, $options);

        $new_application = array(
            "name"       => escape($_POST['name']),
            "phone"       => escape($_POST['phone']),
            "email"       => escape($_POST['email']),
            "address"       => escape($_POST['address']),
            "currentPets"       => escape($_POST['currentPets']),
            "currentPetDetails"       => escape($_POST['currentPetDetails']),
            "animal"       => escape($_POST['animal']),
            "comments"      => escape($_POST['comments'])
        );

        $sql = sprintf(
            "INSERT INTO %s (%s) values (%s)",
            "application",
            implode(", ", array_keys($new_application)),
            ":" . implode(", :", array_keys($new_application)));
        
        $statement = $connection->prepare($sql);
        $statement->execute($new_application);
        
        header ("location: /index.php");
        }
    
        catch(PDOException $error) {
            echo $sql . "<br>" . $error->getMessage();
        }
?>