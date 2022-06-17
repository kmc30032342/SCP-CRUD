<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Update a Record</title>
  </head>
  <body class="container">
    <h1>Update SCP Subject Record</h1>
    <p><a href="index.php" class="btn btn-primary">Back to index page</a></p>
    
    <?php
        
        include "connection.php";
        
        $id = $_GET['update'];
        $record = $connection->query("select * from scp where id=$id");
        $row = $record->fetch_assoc();
        
    ?>
    
    <form method="post" action="connection.php" class="form-group">
        
        <input type="hidden" name="id" value="<?php echo $row['id'] ?>"
        
        <label>SCP Subject Number</label>
        <br>
        <input type="text" name="number" placeholder="Number" class="form-control" value="<?php echo $row['number'] ?>">
        <br><br>
        <label>Class</label>
        <br>
        <input type="text" name="class" placeholder="Class" class="form-control" value="<?php echo $row['class'] ?>">
        <br><br>
        <label>Description</label>
        <br>
        <input type="text" name="description" placeholder="Description" class="form-control" value="<?php echo $row['description'] ?>">
        <br><br>
        <label>Procedure</label>
        <br>
        <input type="text" name="procedure" placeholder="Procedure" class="form-control" value="<?php echo $row['procedure'] ?>">
        <br><br>
        <label>Image Address</label>
        <br>
        <input type="text" name="image" placeholder="images/nameOfImage.jpg or similar" class="form-control" value="<?php echo $row['image'] ?>">
        <br><br>
        <input type="submit" name="update" value="Update record" class="btn btn-dark">
    </form>
    
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
  </body>
</html>