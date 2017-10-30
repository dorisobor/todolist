 <?php
 //Include database connection file
 require "database.php";

 //Prepare statement
    $statement = $pdo->prepare("SELECT id,title, completed, createdBy  FROM  todos");
 
  $statement->execute();
   // Fetch all rows
$tasks=  $statement ->fetchAll(PDO::FETCH_ASSOC);
    
     ?>