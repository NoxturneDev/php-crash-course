<?php include './headers/headers.php' ?>
<?php
$msyqli = $connection;

if (isset($_POST['submit'])) {
  $user_name = $_POST['name'];
  $user_email = $_POST['email'];

  // check for user data in database
  $get_users = mysqli_query($msyqli, "SELECT * FROM users WHERE name='$user_name'");
  $users = mysqli_fetch_assoc($get_users);

  $users_object = [
    'name' => '',
    'id' => 0
  ];

  if ($users) {
    $users_object['id'] = (int)$users['id'];
    $users_object['name'] = $users['name'];
    $user_id = $users_object['id'];
    echo 'user is already in database ';
    var_dump($users_object);

    // add the feedback data
    $feedback_text = $_POST['feedback'];
    $feedback_title = $_POST['title'];
    $add_feedback_query = "INSERT INTO feedback (feedback, title, user_id) VALUES ('$feedback_text', '$feedback_title','$user_id')";
    $add_query = mysqli_query($msyqli, $add_feedback_query);

    if ($add_query) {
      echo "added new feedback";
    } else {
      echo "failed to add feedback";
      echo mysqli_error($msyqli);
    }
  } else {
    $users_query_insert = "INSERT INTO users (email, name) VALUES ('$user_email', '$user_name')";
    $query_insert = mysqli_query($connection, $users_query_insert);

    if ($query_insert) {
      echo "Added new user";
      // get the newest added user 
      $get_users = mysqli_query($msyqli, "SELECT * FROM users WHERE name='$user_name'");
      $users = mysqli_fetch_assoc($get_users);

      $users_object['id'] = (int)$users['id'];
      $users_object['name'] = $users['name'];

      $user_id = $users_object['id'];
      var_dump($users_object);

      // add the feedback data
      $feedback_text = $_POST['feedback'];
      $feedback_title = $_POST['title'];
      $add_feedback_query = "INSERT INTO feedback (feedback, title, user_id) VALUES ('$feedback_text', '$feedback_title','$user_id')";
      $add_query = mysqli_query($msyqli, $add_feedback_query);

      if ($add_query) {
        echo "added new feedback";
      } else {
        echo "failed to add feedback";
        echo mysqli_error($msyqli);
      }
    } else {
      echo "somehow failed" . mysqli_error($connection);
    }
  }
}

?>

<body>
  <main>
    <div class="container d-flex flex-column align-items-center">
      <img src="/php-fundamentals/feedback/img/logo.png" class="w-25 mb-3" alt="">
      <h2>Feedback</h2>
      <p class="lead text-center">Leave feedback for Traversy Media</p>
      <form action="<?php echo $_SERVER['PHP_SELF'] ?>" class="mt-4 w-75" method="POST">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="mb-3">
          <label for="title" class="form-label">title</label>
          <input class="form-control" id="title" name="title" placeholder="Enter your feedback title" required></input>
        </div>
        <div class="mb-3">
          <label for="body" class="form-label">Feedback</label>
          <textarea class="form-control" id="feedback" name="feedback" placeholder="Enter your feedback" required></textarea>
        </div>
        <div class="mb-3">
          <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
        </div>
      </form>
    </div>
  </main>

  <footer class="text-center mt-5">
    Copyright &copy; 2022
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>