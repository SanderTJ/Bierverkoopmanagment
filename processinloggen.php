<?php
if (strlen($_POST["password"]) < 8) {
    die("wachtwoord moet tenmiste 8 karakters hebben");
}


if ( ! preg_match("/[0-9]/", $_POST["password"])) {
    die("wachtwoord moet tenminste 1 letter hebben");
}

if  ( ! preg_match("/[0-9]/", $_POST["password"])) {
    die("wachtwoord moet tenminste 1 nummer hebben");
}
if(!empty($_POST["email"])) {
    $email = $_POST["email"];
}



$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
print_r($_POST);
var_dump($password_hash);

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO user (email, password_hash)
        VALUES (?, ?)";

$stmt = $mysqli->stmt_init();

$stmt->prepare($sql);

$stmt->bind_param("ss",
                 $_POST["email"],
                 $password_hash);
                 
$stmt->execute();

header("location: index.php");

echo "inloggen succesvol";










?>

<!DOCTYPE html>
<html lang="nl">
<label> Email is <?php echo $email; ?> </label>
</html>



