<!doctype html>
<html lang="sv">
<head>
<meta charset="utf-8">
<title>Edit/update page</title>

<style>
body{
background-color: white;
margin:0px;
padding:0px;
}
 
 form,h2 {

     margin-top:5px;
 }


div {
    border-radius:10px;
    background-color: #4AC0FE;
    padding:30px;
    width: 200px;
    height:200px;
  margin:0 auto; 
  position:relative;
  top:150px;
  text-align: center;
}

img {
    margin-left:250px;
    float:left;
    position:relative;
    height:500px;
    width: 500px;

}
</style>
</head>
<body>


<?php
 //Include database connection file
 require "database.php";
 
 
 if(isset($_GET['edit']) ){ 
  $id = $_GET ['edit'];

  //Prepare statement that will help showing the specific task with the id
  $statement = $pdo->prepare("SELECT * FROM todos 
  WHERE id ='$id'");
 
 //execute it
 $statement->execute();

 // Fetch all rows
$tasks =  $statement ->fetchAll(PDO::FETCH_ASSOC); 

}
 ?>
<?php 
        
 //foreach to show the task
   foreach($tasks as $task) {
        
  ?>
   <div>
   <h2>Edit/Update task</h2>
   <!--form to edit/update the task-->
<form action="send-edit-task.php"  method="post">

<input type="text" name="createdBy" value="<?=$task['createdBy'];?>">
<br><br>

<input type="text" name="title" value="<?=$task['title'];?>">
<br><br>

<select name="priority">
<option value=" selected="selected">----Select Priority-----</option>
   <option name="priorityNormal" value="0">Normal</option>
  <option  name="priorityHigh" value="1">High</option>
        </select>
        <br><br>

<input type="hidden" name="id">
<input type="submit" name="update" value="Update">
<input type="button" value="Go back!" onclick="history.back()">


</form>
<img src ="images/batfamily.jpg" alt="bat-family">

<?php

}
 
 ?>
</body>
</html>