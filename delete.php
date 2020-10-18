<?php    
include_once("Classes/Crud.php");

$id = $_GET['id'];
$crud = new Crud();
$result = $crud->delete($id);

if($result == TRUE){
    header('Location: index.php');    
}
else {
    echo "Deletion Failed";
}

?>