<<<<<<< HEAD
<?php
require "database.php";

// function to mark the task done
if(isset($_GET['task'])){
	$task = $_GET['task'];

        //Prepare statement to update the task to done
  
				$statement = $pdo->prepare("
					UPDATE todos SET completed = 1
					WHERE id = :task
					");

				$statement ->execute([
					'task' => $task
					
					]);
		
	}

header('Location: index.php')

=======
<?php
require "database.php";

// function to mark the task done
if(isset($_GET['task'])){
	$task = $_GET['task'];

        //Prepare statement to update the task to done
  
				$statement = $pdo->prepare("
					UPDATE todos SET completed = 1
					WHERE id = :task
					");

				$statement ->execute([
					'task' => $task
					
					]);
		
	}

header('Location: index.php')

>>>>>>> 04533909290c4708ea056e4263ec8ce6d9de594a
?>