 <?php
 //Include database connection file
 require "database.php";

 //Prepare statement 
  $statement = $pdo->prepare("SELECT * FROM todos ORDER BY id DESC");
  
 //execute it
 $statement->execute();
  
// Fetch all rows
$tasks =  $statement ->fetchAll(PDO::FETCH_ASSOC); 
    
     ?>
