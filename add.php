<?php 
require "function.php";


// function to add a new task
if(isset($_POST['title']) && isset($_POST['createdBy']) && isset($_POST['priority']) ){ 
$createdBy =$_POST ['createdBy'];
$title =$_POST ['title'];
$priority =$_POST ['priority'];    
    
    
//calling function to check for duplicate title, pulling in $title variable and $pdo. 
if (check_duplicate($title, $pdo)){ 
   
   echo "<p> The title already exists - please enter a new one!</p>";

} else{

//If the  fields are empty an error message will be displayed
if ($title == '' || $createdBy == '' | $priority == ''){
       
       
echo "<p>Please fill in both fields and pick a priority to add a task!</p>";
 } else{
     
       $statement= $pdo->prepare("
	    INSERT INTO todos (title, createdBy, priority)
		VALUES (:title, :createdBy, :priority)
		");
		

    $statement-> execute(array(
    ":createdBy"  => $_POST["createdBy"],
    ":title" => $_POST ["title"],
    ":priority" => $_POST ["priority"],
    ));
  
    
    header('Location: index.php');

}
}
}

?>