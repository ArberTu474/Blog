<!DOCTYPE html>
<html lang="en">
<?php include "./components/header.php" ?>
<body>
<?php include "./components/navbar.php" ?>
<div class="container">
  <h1 class="create-title">Create an Article</h1>

  <?php 
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //   if (empty($_POST["title"]) ||
    //   empty($_POST["author"]) || 
    //   empty($_POST["topic"]) ||
    //   empty($_POST["description"]) ||
    //   empty($_POST["article"]) || 
    //   empty($_POST["img"])) {
    //     $errorMessage = "Fill all the fields to create the article!";
    //   }
    // }

  ?>
  

  <form action="./create-blog.php" method="POST" class="edit-form">
    <label for="title" class="label">Title</label>
    <input autocomplete="off" name="title" type="text" class="input">
    <label for="author" class="label">Author</label>
    <input autocomplete="off" name="author" type="text" class="input">
    <label for="topic" class="label">Topic</label>
    <select name="topic" class="input">
      <option value="TECH">TECH</option>
      <option value="FOOD">FOOD</option>
      <option value="NEWS">NEWS</option>
    </select>
    <label for="description" class="label">Description</label>
    <input autocomplete="off" name="description" type="text" class="input">
    <label for="article" class="label">Article</label>
    <textarea name="article" cols="30" rows="10" class="input text-area"></textarea>
    <label for="img" class="label">Image link</label>
    <input autocomplete="off" name="img" type="text" class="input">
    <button type="submit" name="create" class="btn create-blog-btn">Create Blog</button>
  </form>
</div>
<?php include "./components/footer.php" ?>
</body>
</html>