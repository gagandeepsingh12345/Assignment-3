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
<h2>use the form to enter a new page record<h2>
<a href="index.php" class="btn btn-warning">Back to index page</a>
<form class="form-group"  method="post" action="app/connection.php">

        <label>Enter a page name:</label>
        <br>
        <input type="text"  class="form-control" name="pg"  placeholder="Write page name here" required>
        <br><br>
        <label>Heading one</label>
        <br>
        <input type="text"  class="form-control" name="h1" placeholder="Heading one" >
        <br><br>
        <label>Enter a Second Heading:</label>
        <br>
        <input type="text" name="h2" placeholder="Second heading here" class="form-control">
        <br>
        
        <label>Paragraph 1:</label>
        <br>
        <textarea name="p1" placeholder="Write p1 here" class="form-control" row="5"></textarea>
        <br><br>
        <label>Paragraph 2:</label>
        <br>
        <textarea name="p2" placeholder="Write p2 here" class="form-control" row="5"></textarea>
        <br>
       
        <label>Paragraph 3:</label>
        <br>
        <textarea name="p3" placeholder="Write p3 here" class="form-control" row="5"></textarea><br>
        <label>Enter image address:</label>
        <br>
        <input type="text" name="img1" placeholder="e.g images/pic.jpg" class="form-control">
        <br><br>
        <hr widht="75%">
        <label>Enter image2 address:</label>
        <br>
        <input type="text" name="img2" placeholder="e.g images/pic.jpg" class="form-control">
        <hr width="75%">
        <br><label>Enter image3 address:</label>
        <br>
        <input type="text" name="img3" placeholder="e.g images/pic.jpg" class="form-control">
        <br>
        <hr width="75%">
        <input type="submit"  class="btn btn-primary" name="submit" value="Submit Page Data">
        

        
        
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>