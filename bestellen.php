<?php





$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO user (Naam, Email, Telefoonnummer, Postcode, Huisnummer, Woonplaats, Straat, Bierflesje, Kosten)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $mysqli->stmt_init();

$stmt ->prepare($sql);



$stmt->bind_param("sssssssss",
                 $_POST["Naam"],
                 $_POST["Email"],
                 $_POST["Telefoon"],
                 $_POST["Postcode"],
                 $_POST["Huisnummer"],
                 $_POST["Woonplaats"],
                 $_POST["Straat"],
                 $_POST["Bierflesje"],
                 $_POST["Kosten"]);

        
                      
$stmt->execute();
?>