<?php 


// add task functions
if(isset($_POST['title']) && isset($_POST['createdBy']) ){ 
$createdBy =$_POST ['createdBy'];
$title =$_POST ['title'];    
    
    
    $statement= $pdo->prepare("
			INSERT INTO todos (title, createdBy)
			VALUES (:title, :createdBy)
			");
		

    
    $statement-> execute(array(
    ":createdBy"  => $_POST["createdBy"],
    ":title" => $_POST ["title"]
    ));
  
    
    header('Location: index.php');

    
}

?>