// DATABASE CREDENTIALS
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'carfiue';

// CONNECTION OF MYSQL DATABASE
$db_connection = mysqli_connect($host, $username, $password, $dbname);

if(!db_connection){

}


<!-- or die('Connection Failed Try Later! ' . mysqli_connect_error()); -->