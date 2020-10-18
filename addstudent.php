
<a href="index.php">Record of Students</a>

<form  method="POST" >
Name: <input type="text" name="stName"><br/><br/>
Email: <input type="text" name="stEmail"><br/><br/>
Contact: <input type="text" name="stContact"> <br/><br/>
<input type="submit" name="submit">
</form>

<?php
include_once("Classes/Crud.php");

error_reporting(0);
$name = $_POST['stName'];
$email = $_POST['stEmail'];
$contact = $_POST['stContact'];
$crud = new Crud();
if(!empty($name) && !empty($email) && !empty($contact))
{
    $result = $crud->insert($name,$email,$contact);
    if($result == TRUE){
        header('Location: index.php');    
    }
    else {
        echo "Insertion Failed";
    }
}
else{
    echo "Please enter the required data";
}

?>