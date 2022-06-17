<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Create a Record</title>
  </head>
  <body class="container">
    <h1>Use form below to create a record in our SCP subject database</h1>
    <p><a href="index.php" class="btn btn-primary">Back to index page</a></p>
    
    <form method="POST" action="connection.php" class="form-group">
        <label>Enter SCP Number</label>
        <br>
        <input type="text" name="number" placeholder="Number" class="form-control">
        <br><br>
        <label>Enter Class</label>
        <br>
        <input type="text" name="class" placeholder="Class" class="form-control">
        <br><br>
        <label>Enter Description</label>
        <br>
        <input type="text" name="description" placeholder="Description" class="form-control">
        <br><br>
        <label>Enter Procedure</label>
        <br>
        <input type="text" name="procedure" placeholder="Procedure" class="form-control">
        <br><br>
        <label>Enter Image Address</label>
        <br>
        <input type="text" name="image" placeholder="images/nameOfImage.jpg or similar" class="form-control">
        <br><br>
        <input type="submit" name="submit" value="Submit record" class="btn btn-dark">
    </form>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>