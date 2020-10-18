<?php
include_once("Dbconfig.php");

class Crud extends Dbconfig{
    public function __construct(){
        parent::__construct();
    }

    public function insert($name, $email, $contact){
        $query = "INSERT INTO student (stname, stemail, stcontact)
        VALUES ('$name', '$email', '$contact')";

        if($this->connection->query($query))
        {
            return true;
        }
        else{
            return false;
        }
    }

    public function select(){
        $query = "SELECT * FROM student";
        $result = $this->connection->query($query);
        
        if ($result == false) {
			return false;
		} 
        $rows = array();
		
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
            
        return $rows;
    }

    public function selectOne($id){
        $query = "SELECT * FROM student WHERE stid='$id'";
        $result = $this->connection->query($query);
        
        if ($result == false) {
			return false;
		} 
        $rows = array();
		
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
            
        return $rows;
    }

    public function update($id,$name,$email,$contact){
        $query = "UPDATE student SET stname='$name', stemail='$email', stcontact='$contact' WHERE stid='$id'";

        if($this->connection->query($query))
        {
            return true;
        }
        else{
            return false;
        }
    }

    public function delete($id){
        $query = "DELETE FROM student WHERE stid='$id'";
        if($this->connection->query($query))
        {
            return true;
        }
        else{
            return false;
        }
    }
}
?>