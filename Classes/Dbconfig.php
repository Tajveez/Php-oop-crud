<?php
class dbconfig{
    private $host="localhost";
    private $username = "root";
    private $password = "";
    private $database = "testdb";

    protected $connection;

    public function __construct()
    {
        if(!isset($this->connection)){
            $this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if(!$this->connection){
            echo "Cannot connect to the database";
            exit;
            }
        }
    return $this->connection;
    }
}

?>