<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'users');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME); // Används för att kolla om användaren är en administratör.

// Check connection
if($link === false){ // Om något blev fel, t.ex. att användaren INTE är en adminstratör, så skriver vi ut det..
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

else { // Annars, om allt gick rätt till, så skall vi skriva att vi lyckades komma in

echo "Login succesful!<br>";
}
?>
