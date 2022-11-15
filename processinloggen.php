<?php
if (strlen($_POST["wachtwoord"]) < 8) {
    die("wachtwoord moet tenmiste 10 karakters hebben");
}


if ( ! preg_match("/[0-9]/", $_POST["wachtwoord"])) {
    die("wachtwoord moet tenminste 1 letter hebben");
}

if  ( ! preg_match("/[0-9]/", $_POST["wachtwoord"])) {
    die("wachtwoord moet tenminste 1 nummer hebben");
}
if(!empty($_POST["email"])) {
    $email = $_POST["email"];
}

print_r($_POST);

$password_hash = password_hash($_POST["wachtwoord"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "./database.php";



$mysqli = require __DIR__ . "./database.php";

$sql = "INSERT INTO user (email, password.hash)
        VALUES (?,?)";

$stmt = $mysqli->stmt_init();

$stmt->prepare($sql);

$stmt->bind_param("ss",
                 $_POST["email"],
                 $_POST["password.hash"]);
                 

if ($stmt->execute)










?>

<!DOCTYPE html>
<html lang="nl">
<label> Email is <?php echo $email; ?> </label>
</html>
print_r($_POST);
var_dump($password_hash);


