
<a href="addstudent.php">Add new student</a>
<table>
<tr>
<th>Name</th>
<th>Email</th>
<th>Contact</th>

</tr>
<?php    
include_once("Classes/Crud.php");
$crud = new Crud();
$row = $crud->select();
foreach ( $row as  $key => $value){
        echo"<tr>";
        echo"<td> $value[stname] </td>";
        echo"<td> $value[stemail] </td>";
        echo"<td> $value[stcontact] </td>";
        echo"<td> <a href='edit.php?id=$value[stid]'>Edit</a> </td>";
        echo"<td> <a href='delete.php?id=$value[stid]'>Delete</a> </td>";
        echo"</tr>";
    }
?>


</table>