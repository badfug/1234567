<?php

include "db.php"; 

function get_posts($con){ 
$sql = "SELECT * FROM posts"; 

$result = mysqli_query($con, $sql); 

$posts = mysqli_fetch_all($result, MYSQLI_ASSOC); 
return $posts; 
} 

$posts = get_posts($connect);

function add_posts($link, $title, $tags, $text){ 
    $sql = "INSERT INTO `posts` (`title`, `tags`, `img`, `text`) VALUES ('".$title."', '".$tags."', '-', '".$text."');"; 
    
    $result = mysqli_query($link, $sql); 
}

function del_posts($link, $id){ 
    $sql = "DELETE FROM `posts` WHERE id=".$id.";"; 
    
    $result = mysqli_query($link, $sql); 
} 

function edit_posts($link, $id, $title, $tags, $text){ 
    $sql = "UPDATE `posts` SET `title` = '$title', `tags` = '$tags', `img` = '-', `text` = '$text' WHERE `posts`.`id` = $id";

    $result = mysqli_query($link, $sql); 
}
?>

