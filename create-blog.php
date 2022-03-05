<?php

include "./db/db.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["title"]) ||
  empty($_POST["author"]) || 
  empty($_POST["description"]) ||
  empty($_POST["article"]) || 
  empty($_POST["img"])) {
    $errorMessage = "Fill all the fields to create the article!";
    header("Location: ./index.php?created=failed");
  } else {
  $title = mysqli_real_escape_string($conn, $_POST['title']);
  $author = mysqli_real_escape_string($conn, $_POST['author']);
  $date = mysqli_real_escape_string($conn, date('Y-m-d H:i:s'));
  $topic = mysqli_real_escape_string($conn, $_POST['topic']);
  $description = mysqli_real_escape_string($conn, $_POST['description']);
  $article = mysqli_real_escape_string($conn, $_POST['article']);
  $img = mysqli_real_escape_string($conn, $_POST['img']);
  
  $sql = "INSERT INTO article (title, author, description, article, topic, news_of_the_day, date, img)
   VALUES ('$title', '$author','$description','$article','$topic','0','$date','$img')";
  
  mysqli_query($conn, $sql);
  header("Location: ./index.php?created=success");
  }
}

