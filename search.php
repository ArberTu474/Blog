<!DOCTYPE html>
<html lang="en">
<?php include "./components/header.php" ?>
<body>
<?php include "./components/navbar.php" ?>
<div class="container">

  <?php 
    if (isset($_POST['submit'])) {
      $search = mysqli_real_escape_string($conn, $_POST['search']);
      $sql = "SELECT * FROM article WHERE title LIKE '%$search%' OR article LIKE '%$search%' OR author LIKE '%$search%'";
      $result = mysqli_query($conn, $sql);
      $queryResults = mysqli_num_rows($result);

      if ($queryResults > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<a href='blog.php?id={$row["id"]}' class='search-item-container'>
          <div class='search-img' style='background-image: url({$row["img"]})'></div>
          <div class='search-content'>
          <div class='btn search-info-cards'>
            <span class='material-icons info-icon'> person </span>{$row["author"]}
          </div>
            <h1 class='search-title'>{$row["title"]}</h1>
            <p class='search-description'>".substr($row['description'], 0, 100)."...</p>
          </div>
          </a>";
        }
      } else {
        echo "<div class='no-results-container'>
        <img src='./img/empty.svg' class='no-results-img'>
        <h1 class='no-results-title'>There are no results!</h1>
      </div>";
      }
    }
  
  ?>
  
  



  <!-- <a class='search-item-container'>  
    <div class='search-img' style='background-image: url(https://i.ibb.co/r7cz6Pc/food.jpg);'></div>
    <div class='search-content'>
      <h1 class='search-title'>Helllo</h1>
      <p class='search-description'>jdhdfossca scjahcao chadv si avhadvvhdjvdjvd vhdvhaojc vjvdsjv vdvbjvs j.</p>
    </div>
  </a> -->

</div>
<?php include "./components/footer.php" ?>
</body>
</html>