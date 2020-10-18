<?php    
include_once("Classes/Crud.php");

$id = $_GET['id'];
$crud = new Crud();
$result = $crud->selectOne($id);
foreach($result as $key => $value){
    $name = $value['stname'];
    $email = $value['stemail'];
    $contact = $value['stcontact'];
}
?>

<form  method="POST" >
Name: <input type="text" name="stName" value="<?php echo $name; ?>"><br/><br/>
Email: <input type="text" name="stEmail" value="<?php echo $email; ?>"><br/><br/>
Contact: <input type="text" name="stContact" value="<?php echo $contact; ?>"> <br/><br/>
<input type="submit" value="update">
</form>
<?php
error_reporting(0);
$sname = $_POST['stName'];
$semail = $_POST['stEmail'];
$scontact = $_POST['stContact'];

if(!empty($sname) && !empty($semail) && !empty($scontact))
{

    $result = $crud->update($id,$sname,$semail,$scontact);
    
    if($result == TRUE){ 
        header('Location: index.php');   
    }
    else {
        echo "Updatetion Failed";
    }


}
else{
    echo "Please enter the required data to Update";
}

?>