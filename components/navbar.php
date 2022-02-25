<nav>
  <div class="container">
    <div class="nav-container">
      <div>
        <a href="index.php" class="logo">Blog</a>
      </div>
      
      <form action="/Blog/search.php" method="POST" class="search-container">
        <button name="submit" class="material-icons-outlined search-icons"> search </button>
        <input name="search" class="search-field" type="text" placeholder="Search..." />
      </form>

      <a href="edit.php" class="material-icons search-icons edit-btn">
        edit
      </a>
    </div>
  </div>
</nav>