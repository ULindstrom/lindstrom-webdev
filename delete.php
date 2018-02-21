<?php
require('database.php');
// POST
// GET
// PUT
// DELETE

// Handles GET Request
if($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET["id"]) ){
  && $id = $_GET["id"];


  try{
    $statement = $pdo->prepare(
      'DELETE FROM users WHERE id = :id');
      $statement->execute(["id" => $id]);
      echo "<script>location.href='/read.php?show=all='</script>";
  } catch(PDOException $e){
    echo "<h4 style='color:red;'>".$e->getMessage(). "</h4>";
  }
} else {
  echo "<script>location.href='/read.php?show=all='</script>";
  die();
}


?>
<html>
  <head>
    <title>Simple CRUD</title>
  </head>
  <body>
    <form action="/update.php?id=<?php echo $results[0]->id; ?>" method="POST">
      <input type="hidden" name="_method" value="PUT">
      <label for="first_name">First Name</label><br>
      <input type="text" name="first_name" value="<?php echo $results[0]->first_name; ?>"><br>
      <label for="last_name">Last Name</label><br>
      <input type="text" name="last_name" value="<?php echo $results[0]->last_name; ?>"><br>
      <label for="age">Age</label><br>
      <input type="text" name="age" value="<?php echo $results[0]->age; ?>"><br>
      <button type="submit">Save</button>
    </form>
  </body>
  </html>
