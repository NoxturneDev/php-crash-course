<!-- 
// session_start();

// if (isset($_SESSION['username'])) {
//   echo '<h1>Welcome, ' . $_SESSION['username'] . '</h1>';
//   echo '<a href="logout.php">Logout</a>';
// } else {
//   echo '<h1>Welcome, Guest</h1>';
//   echo '<a href="/php-crash/13_sessions.php">Home</a>';
// } -->

<?php 

  session_start();

  if(isset($_SESSION['username'])){
    echo 'welcome ' . $_SESSION['username'];
  } else {
    echo 'Guest';
    echo '<a href="/php-fundamentals/13_sessions.php">home </a>';
  }
?>