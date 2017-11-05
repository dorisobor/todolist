<?php
require "database.php";


// function to delete the task
if(isset ($_GET['task'])){
  $task = $_GET['task'];


// delete task
$statement= $pdo->prepare("
			DELETE FROM todos 
            WHERE id = :id
			");
		
 $statement ->execute([
'id' => $task
 ]);
 
   
}
header('Location: index.php')

?>