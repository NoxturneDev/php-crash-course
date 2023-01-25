<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

if (isset($_GET['submit'])) {
  $name = $_GET['name'];
  $age = $_GET['age'];

  echo $name . $age;
}
?>

<html>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
  <div>
    <label>Name: </label>
    <input type="text" name="name">
    <label>Age: </label>
    <input type="number" name="age">
  </div>
  <br>
  <div>
    <!-- <label>Password: </label> -->
    <!-- <input type="password" name="password"> -->
  </div>
  <br>
  <input type="submit" name="submit" value="Submit">
</form>

</html>