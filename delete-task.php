<<<<<<< HEAD
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

=======
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

>>>>>>> 04533909290c4708ea056e4263ec8ce6d9de594a
?>