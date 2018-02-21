<?php
require('database.php');

//Create New Users
if($_SERVER['REQUEST_METHOD'] == "POST") {
  $first_name = $_POST["first_name"];
  $last_name = $_POST["last_name"];
  $age = $_POST["age"];

  try{

  } catch(PDOException $e){
    echo "<h4 style='color:red;'>".$e->getMessage(). "</h4>";
  }
}


if(isset($_GET["id"])){
  $id = $_GET["id"];
  $last_name, 'age' => $age]);
  echo "Insert user: {$first_name} {$last_name}";


      $id =  $pdo->lastInsertId();

    echo
    "<script>location.href='/read.php?show=one&id={$id}'</script>";
  } catch(PDOException $e){
    echo "<h4 style='color:red;'>".$e->getMessage(). "</h4>";
  }
  }

?>
<html>
  <head>
    <title>Simple CRUD</title>
  </head>
  <body>
    <form action="/update.php?id=<?php echo $results[0]->id; ?>" method="POST">
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
