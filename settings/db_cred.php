
//Database credentials
// Define('SERVER', 'us-cdbr-east-06.cleardb.net');
// Define('USERNAME', 'b8381e8687357a');
// Define('PASSWD', '246b0cb');
// Define('DATABASE', 'heroku_c41210addaccbb7');

<?php

//Database credentials
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'us-cdbr-east-06.cleardb.net');
define('DB_USERNAME', 'b8381e8687357a');
define('DB_PASSWORD', '246b0cbe');
define('DB_NAME', 'heroku_c41210addaccbb7');
 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}



?>


<!-- mysql://b8381e8687357a:246b0cb1@us-cdbr-east-06.cleardb.net/heroku_c41210addaccbb7?reconnect=true -->