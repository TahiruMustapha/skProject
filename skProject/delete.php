<?php
include "database.php";
$id = $_GET['id'];

$sql = "DELETE FROM my_project WHERE id = $id";
$result = mysqli_query($connection , $sql);
if($result){
    header("location: main.php?msg=Comments deleted successfully ");
}else{
    echo "Failed: " .mysqli_error($connection);
};
?>