<?php 
require "function.php";
require "database.php";



if (isset($_POST["title"]) && isset($_POST["createdBy"]) 
&& isset($_POST["priority"])  && isset($_POST["id"])){
    
    $createdBy =$_POST ['createdBy'];
    $title =$_POST ['title'];
    $priority =$_POST ['priority'];    
    $id =$_POST ['id'];

if (check_duplicate($title, $pdo)){
    
          echo" <p>A task already exists with that title.</p> 
           <p>Please edit the task again and choose another title.</p> ";

       
       

}else{
    
$statement = $pdo->prepare(
"UPDATE todos SET title = :title, createdBy = :createdBy, priority = :priority WHERE id = :id");
$statement->
execute(array(":title" => $_POST['title'],
":createdBy" => $_POST['createdBy'],":priority" =>
 $_POST['priority'], ":id" => $_POST['id']));   

echo "<p>task updated</p>";
header('Location: index.php');

}
}


?>