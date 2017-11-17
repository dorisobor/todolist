<?php

//Make function to check duplicates for title
function check_duplicate($title, $pdo){   
        
    $statement = $pdo->prepare("SELECT * FROM todos WHERE title = :title");
    $statement->execute(array(":title" => $title)); 
    
    $task = $statement->fetchAll(PDO::FETCH_ASSOC);
       
    if (empty($task)){
        //return false if the field is empty
        return false;
        
    }
    //return true if the title already exists 
    return true;
}

?>