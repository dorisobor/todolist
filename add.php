<?php 
 require "database.php";

// add item
if(isset($_POST['name'])){ 
$name =$_POST ['name'];
    
    if(!empty($name)){
		$addQuery = $pdo->prepare("
			INSERT INTO todos (title, createdBy, completed)
			VALUES (:name, :user, 0,())
			");
		$addQuery->execute([
			'name' => $name,
			'user' => $_SESSION['user_id']
			]);
	}
}
?>
