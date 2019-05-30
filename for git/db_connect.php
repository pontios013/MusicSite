<?php
 
/**
 * A class file to connect to database
 */
class DB_CONNECT {
 
    function __construct() {
        $this->connect();
    }
 
    function __destruct() {
        $this->close();
    }
 
    function connect() {
        include 'db_config.php';

        $con=mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);
// Check connection
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

// ...some PHP code for database "my_db"...

// Change database to "test"
        mysqli_select_db($con,"id9642978_project");

// ...some PHP code for database "test"...

        mysqli_close($con);
    }

    function close() {
        $this->close();
    }
 
}
 
?>