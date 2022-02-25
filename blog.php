<!DOCTYPE html>
<html lang="en">
  <?php include "./components/header.php" ?>
  <body>
  <?php include "./components/navbar.php" ?>

  <?php 
    $a_id = mysqli_real_escape_string($conn, $_GET['id']);

    $sql = "SELECT * FROM article Where id='$a_id'";
    $result = mysqli_query($conn, $sql);
    $queryResults = mysqli_num_rows($result);

    if ($queryResults > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
          echo "<section class='hero-section'>
          <div class='container'>
            <div
              class='hero-container blog-img'
              style='background-image: url({$row["img"]})'
            >
          </div>
        </section>
        
        <section class='article'>
        <div class='text-container'>
          <div class='blog-info'>
            <div class='btn small-cards'>
              <span class='material-icons-outlined info-icon'> schedule </span>
              {$row["date"]}
            </div>
            <div class='btn small-cards'>
              <span class='material-icons info-icon'> person </span>{$row["author"]}
            </div>
          </div>
          <div class='article-container'>
            <h1 class='blog-topic'>{$row["title"]}</h1>
  
            <p class='article'>
            {$row["article"]}
            </p>
          </div>
        </div>
      </section>
        
        ";
      }
    }
  ?>
    <!-- <section class='hero-section'>
      <div class='container'>
        <div
          class='hero-container blog-img'
          style='background-image: url()'
        >
        
      </div>
    </section>
    <section class='article'>
      <div class='text-container'>
        <div class='blog-info'>
          <div class='btn small-cards'>
            <span class='material-icons-outlined info-icon'> schedule </span
            >10/05/2022
          </div>
          <div class='btn small-cards'>
            <span class='material-icons info-icon'> person </span>John Smith
          </div>
        </div>
        <div class='article-container'>
          <h1 class='blog-topic'>The future of tech.</h1>

          <p class='article'>
            Non sagittis in nulla hac imperdiet diam. Matti s lorem arcu non
          </p>
        </div>
      </div>
    </section> -->

    <?php include "./components/footer.php" ?>
  </body>
</html>
