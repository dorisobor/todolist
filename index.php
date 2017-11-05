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
</html>