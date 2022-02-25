<!DOCTYPE html>
<html lang="en">
  <?php include "./components/header.php"?>
  <body>
  <?php include "./components/navBar.php"?>
    <section class="hero-section">
      <div class="container">
        <h1 class="heading hero-heading">Blog of the Day</h1>
        <?php 
          $sql = "SELECT * FROM article Where news_of_the_day='1'";
          $result = mysqli_query($conn, $sql);
          $queryResults = mysqli_num_rows($result);
      
          if ($queryResults > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<div
              class='hero-container'
              style='background-image: url({$row["img"]})'
            >

            <div class='hero-img-container'>
            <h1 class='hero-title'>{$row["title"]}</h1>
            <p class='hero-description'>
            ".substr($row['description'], 0, 100)."...
            </p>
          </div>
            ";
            }
          }
        ?>
        
        </div>
      </div>
    </section>

    <section class="topics">
      <div class="container">
        <h1 class="heading topic-heading">Nice Topics</h1>
        <div class="topics-container">

        <?php 
          $sql = "SELECT * FROM article";
          $result = mysqli_query($conn, $sql);
          $queryResults = mysqli_num_rows($result);

          if ($queryResults > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
               echo "<div class='topic'>
                <div
                  class='topic-img-container'
                  style='background-image: url({$row["img"]})'
                ></div>
                <div class='topic-content'>
                  <h1 class='topic-title'>{$row["title"]}</h1>
                  <p class='topic-description'>
                    ".substr($row['description'], 0, 100)."...
                  </p>
                  <a href='blog.php?id={$row["id"]}' class='btn read-more'>Read more</a>
                </div>
              </div>";
            }
          }
        ?>

              <!-- <div class='topic'>
                <div
                  class='topic-img-container'
                  style='background-image: url()'
                ></div>
                <div class='topic-content'>
                  <h1 class='topic-title'>Tech</h1>
                  <p class='topic-description'>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit ut
                    aliquam, pur us sit amet luctus venenatis, lectus
                  </p>
                  <a href='blog.php' class='btn read-more'>Read more</a>
                </div>
              </div> -->
          
          
        </div>
      </div>
    </section>
    <?php include "./components/footer.php" ?>
  </body>
</html>
