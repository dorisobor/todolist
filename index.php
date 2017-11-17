<<<<<<< HEAD
<!doctype html>
<html lang="sv">
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title>To do list</title>
</head>
<body>
  <?php
  
    
//inlude php files
    
require "database.php";
require "fetch_all_todos.php";
require "add.php";


?>
<!--Content page !-->
<div class="content">
<img src="images/todo-image.jpg" alt="todo">

<!--List !-->
<div class="list">
    <ul class="tasks">
    
 <?php 
        
 //foreach to show all the tasks in the list
   foreach($tasks as $task) {
        
  ?>
   
 <li>
 <!--if the task is completeted it will be underlined aka false value 0 !-->
 <span class="task <?=$task['completed']  ? 'done' : '' ?>">  
   <?=$task['title'] .' - '. $task['createdBy']?>
   </span>
  <!--turn edit button into a link as well as
   make the keywords in the link to variables!-->
 <a href="edit-task.php?edit=<?=$task['id'];?>"> 
     <img src ="images/edit.png" alt ="edit" height="20" width="20"
      class="edit"> </a>
         
   <?php
    // if statement: if the task isnt done let the done button appear
     if (!$task['completed']) : 
     ?>
     <!--turn the marked done button into a link as well as
      make the keywords in the link to variables!-->
    <a href="marked-done.php?done&task=<?=$task['id'];?>" 
    class="done-button"> Mark as done</a>
    <?php 
// end the if statement
    endif;
    ?>
   <!--show an alerted icon on tasks with high priorities !-->
   <?php
   if ($task['priority']) : 
    ?>
 <img src="images/warning_sign.png" alt="alert" 
     class="alert" height="18" width="18">
     <?php 
     // end the if statement
    endif;
    ?>

      <!--turn delete button into a link as well as
           make the keywords in the link to variables!-->
     <a href="delete-task.php?task=<?=$task['id'];?>"> 
     <img src ="images/delete.png" alt ="delete" 
     height="20" width="20" class="delete-button"> </a>
    

</li>
       
 <?php 
  //end of loop     
   }
  ?>

    </ul>
  
     <br>
  <!--Form to add another task !-->
 <form action="index.php" class="add-task" method="post">
    <h3> Add new task:</h3>
    <input type="text" name="title" placeholder="Type your task" class="input">
    <br><br>
     <input type="text" name="createdBy" placeholder="Type your name" class="input">
     <br><br>
        
<!--a priority that user gets to add, normal has the 
        value 0 and high has the value 1 !-->
<select name="priority">
<option value=" selected="selected">----Select Priority-----</option>
   <option name="priorityNormal" value="0">Normal</option>
  <option  name="priorityHigh" value="1">High</option>
        </select>
         <br><br>
        <input type="submit" value="Add" class="submit">
</form>
<!--uppdate button!-->
<br><br> <br><br>
<form action="index.php"  method="post">

<input type="submit" name="sortPriority" value="Sort Priority">
<input type="submit" name="finishedTasks" value="Sort by finished tasks">
</form>

</div>
</div>
<footer> <img src="images/cute-thingy.png" alt="cutiepie" height="100px" widht="100px"> 
<br> <a href="https://github.com/dorisobor">Visit my Github!</a> </footer>

</body>
=======
<!doctype html>
<html lang="sv">
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title>To do list</title>
</head>
<body>
  <?php
   session_start(); 
    
//inlude php files
    
require "database.php";
require "fetch_all_todos.php";
require "add.php";

    
    
    
    ?>
<!--Content page !-->
<div class="content">
<img src="images/todo-image.jpg" alt="todo">

<!--List !-->
<div class="list">
    <ul class="tasks">
    
    <?php 
        
      //foreach to show all the tasks in the list
        foreach($tasks as $task) {
        
        ?>
   
     
     <li>
     <!--if the task is completeted it will be underlined aka false value 0 !-->
     <span class="task <?=$task['completed']  ? 'done' : '' ?>">  
     <?=$task['title'] .' - '. $task['createdBy']?>
        </span>
         <?php
         // if statement: if the task isnt done let the done button appear
         if (!$task['completed']) : 
         ?>
         <!--turn the marked done button into a link as well as
           make the keywords in the link to variables!-->
    <a href="marked-done.php?done&task=<?=$task['id'];?>" 
    class="done-button"> Mark as done</a>
    
    <?php 
    // end the if statement
    endif;
    ?>
      <!--turn delete button into a link as well as
           make the keywords in the link to variables!-->
     <a href="delete-task.php?task=<?=$task['id'];?>"> 
     <img src ="images/delete.png" alt ="delete" height="20" width="20"> </a>

    </li>
       
       <?php 
       //end of loop     
        }
     ?>

    </ul>
  
        
    <br>
    <!--Form to add another task !-->
    <form action="index.php" class="add-task" method="post">
        <h3> Add new task:</h3>
        <input type="text" name="title" placeholder="Type your task" class="input">
        <br><br>
        <input type="text" name="createdBy" placeholder="Type your name" class="input">
        <br><br>
        <input type="submit" value="Add" class="submit">
</form>
</div>
</div>
<footer> <img src="images/cute-thingy.png" alt="cutiepie" height="100px" widht="100px"> 
<br> <a href="https://github.com/dorisobor">Visit my Github!</a> </footer>

</body>
>>>>>>> 04533909290c4708ea056e4263ec8ce6d9de594a
</html>