<?php
class widgets {

  public static function navbar(){
    session_start();
?>
    <head>
      <title>Financial Tracker | Control your bills and expenses</title>
      <link rel = "stylesheet" href = "stylesheets/styles.css">
      <meta name="viewport" content="width=device-width">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
      <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    </head>
    <body>
      <nav>
          <a class = "hamburger is-hidden" id = "hamburger"><i  class = "fa fa-bars fa-2x"></i></a>
          <div class = "nav-items">
            <?php
              if (!isset($_SESSION['login'])){
            ?>
          <ul>
            <li><a href="register.php">Register</a></li>
            <li><a href="login.php">Sign in</a></li>
            <li><a href="index.php">Home</a></li>
          </ul>
        <?php } else {?>
          <form class = "logoutForm" action = "includes/logoutProcess.php" id = "logoutForm"></form>
          <ul>
          <li><a href = "#" id = "logout">Log Out</a></li>
          <li><a href="viewposts.php">Logs</a></li>
          <li><a href="index.php">Home</a></li>
          <li><p>signed in as: <?php echo $_SESSION['username']?></p></li>
        </ul>
       <?php }?>
          </div>
      </nav>
<?php }


  public static function postManagerNav(){
    session_start();
?>
<head>
  <title>Financial Tracker | Control your bills and expenses</title>
  <link rel = "stylesheet" href = "stylesheets/styles.css">
  <meta name="viewport" content="width=device-width">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>
  <nav>
      <a class = "hamburger is-hidden" id = "hamburger"><i  class = "fa fa-bars fa-2x"></i></a>
      <div class = "nav-items">
        <?php
          if (!isset($_SESSION['login'])){
        ?>
      <ul>
        <li><a href="register.php">Register</a></li>
        <li><a href="login.php">Sign in</a></li>
        <li><a href="index.php">Home</a></li>
      </ul>
    <?php } else {?>
      <form class = "logoutForm" action = "includes/logoutProcess.php" id = "logoutForm"></form>
      <ul>
      <li><a href = "#" id = "logout">Log Out</a></li>
      <li><a href="viewposts.php">View All Posts</a></li>
      <li><a href="createpost.php">Create Post</a></li>
      <li><a href="index.php">Home</a></li>
      <li><p>signed in as: <?php echo $_SESSION['username']?></p></li>
    </ul>
   <?php }?>
      </div>
  </nav>



<?php
  }
  public static function heroBanner(){
    ?>
    <div class = "hero-banner">
      <div class = "hero-text">
        <h1>Remember</h1>
        <p>Have you ever started a movie and realized</p>
        <p>You already watched it?</p>
        <p>Log your movies with Remember.</p>
      </div>
    </div>
<?php
  }
}
?>
