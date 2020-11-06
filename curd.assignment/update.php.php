<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>CRUD Assignment</title>
  </head>
  <body class="container">
  

    <h1>CRUD Assignment</h1>
<a href="index.php" class="btn btn-warning">Back to index page</a>

<h2>Use the form to Update a page record<h2>


<?php
include "app/connection.php";
$id = $_GET['update'];
$record = $connection->query("select * from pages where id=$id") or die ($connection->error);
$row = $record->fetch_assoc();
?>
<form class="form-group"  method="post" action="app/connection.php">
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label>Enter a page name:</label>
        <br>
        <input type="text"  class="form-control" name="pg" value="<?php echo $row['pg']; ?>">
        <br><br>
        <label>Heading one</label>
        <br>
        <input type="text"  class="form-control" name="h1" value="<?php echo $row['h1']; ?>" >
        <br><br>
        <label>Enter a Second Heading:</label>
        <br>
        <input type="text" class="form-control" name="h2" value="<?php echo $row['h2']; ?>">
        <br>
        
        <label>Paragraph 1:</label>
        <br>
        <textarea name="p1"  class="form-control" row="5" placeholder="<?php echo $row['p1']; ?>"><?php echo $row['p1']; ?></textarea>
        <br><br>
        <label>Paragraph 2:</label>
        <br>
        <textarea name="p2"  class="form-control" row="5" placeholder="<?php echo $row['p2']; ?>"><?php echo $row['p2']; ?></textarea>
        <br>
       
        <label>Paragraph 3:</label>
        <br>
        <textarea name="p3"  class="form-control" row="5" placeholder="<?php echo $row['p3']; ?>"><?php echo $row['p3']; ?></textarea><br>
        <label>Enter image address:</label>
        <br>
        <input type="text" name="img1"  class="form-control" value="<?php echo $row['img1']; ?>">
        <br><br>
        <hr widht="75%">
        <label>Enter image2 address:</label>
        <br>
        <input type="text" name="img2" class="form-control" value="<?php echo $row['img2']; ?>">
        <hr width="75%">
        <br><label>Enter image3 address:</label>
        <br>
        <input type="text" name="img3" class="form-control" value="<?php echo $row['img3']; ?>">
        <br>
        <hr width="75%">
        <input type="submit"  class="btn btn-primary" name="Update" value="update Page Data">
        

        
        
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>