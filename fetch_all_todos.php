<<<<<<< HEAD
 <?php
 //Include database connection file
 require "database.php";
 
 //sort tasks by priority
 
 if(isset($_POST['sortPriority']) ){ 
  
  //Prepare statement and sort the list by priority
  $statement = $pdo->prepare("SELECT * FROM todos 
  ORDER BY priority DESC");
 
 //execute it
 $statement->execute();

 // Fetch all rows
$tasks =  $statement ->fetchAll(PDO::FETCH_ASSOC); 

 }

  //sort finished tasks

 elseif
 (isset($_POST['finishedTasks']) ) {

    
  $statement = $pdo->prepare("SELECT * FROM todos 
  ORDER BY completed DESC");
 

 $statement->execute();
 

$tasks =  $statement ->fetchAll(PDO::FETCH_ASSOC); 

}
else 
{
 
 // Sort list by default if no button is pressed
 
  $statement = $pdo->prepare("SELECT * FROM todos 
  ");
  
 
 $statement->execute();
  

$tasks =  $statement ->fetchAll(PDO::FETCH_ASSOC); 
    
}
?>
=======
 <?php
 //Include database connection file
 require "database.php";

 //Prepare statement 
  $statement = $pdo->prepare("SELECT * FROM todos");
  
 //execute it
 $statement->execute();
  
// Fetch all rows
$tasks =  $statement ->fetchAll(PDO::FETCH_ASSOC); 
    
     ?>
>>>>>>> 04533909290c4708ea056e4263ec8ce6d9de594a
