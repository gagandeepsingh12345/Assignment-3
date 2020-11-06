<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="css/index.css">
    <title>CRUD Assignment</title>
    
  </head>
  <body class="container">
      <div class="header">
        <h1>SCP Foundation</h1>
    </div>  
  <?php include "app/connection.php" ?>
  
  <ul  class="nav outline-light bg-white">
      
 <?php foreach($result as $page): ?>
 
  <li class ="nav-item active ">
  <a href="index.php?page='<?php echo $page['pg']; ?>'" class="nav-link"   ><?php echo $page['pg']; ?></a>
 
  </li>

 <?php endforeach; ?>

  <li class ="nav-item active">

  <a href="form.php" class="nav-link">Enter a New Page Record  </a>
  
  </li>
  </ul>
  <a href="index.php" class="btn btn-warning">Home</a>
<!-- database content here -->
<div class="row">
  
  <div class="col">
      <?php 
      if (isset($_GET['page']))
      {
          $pg = trim($_GET['page'], "'");
          $record = $connection->query("select * from pages where pg='$pg'") or die ($connection->error);

$row = $record->fetch_assoc();
$h1 = $row['h1'];
$h2 = $row['h2'];

 

$p1 = $row['p1'];
$p2 = $row['p2'];
$p3 = $row['p3'];

$img1 = $row['img1'];
$img2 = $row['img2'];
$img3 = $row['img3'];

$id = $row['id'];
$update = "update.php?update=" . $id;
$delete = "app/connection.php?delete=" . $id;

echo "
<h1>{$pg}</h1>
<h2>{$h1}</h2>
<p>{$p1}</p>
<p>{$p2}</p>
<p>{$p3}</p>
<p><img src='{$img1}'></p>
<p><img src='{$img2}'></p>
<p><img src='{$img3}'></p>


<p>
 <a href='{$update}' class='btn btn-primary'>Update</a>
  <a href='{$delete}' class='btn btn-warning'>Delete</a>
 ";


}
else
{
echo "
  <h2>Welcome to Kenworth</h2>

      <img src='images/Kenworth-K200.jpg' style='width:250px'>
        <h5>K200</h5>
       <p> For the driver the K200 defines interior space and comfort, delivering easy sleeper access and room to move with a near flat floor. Another feature, the optional Active Cab Entry system, provides peace of mind for applications requiring frequent cab entry and exit. <a href='https://30029497.2020.labnet.nz/crud.assignment/index.php?page=%27SCP%202%27'>Learn More...</a></p>
    <hr>

      <img src='images/top-t610-1.jpg' style='width:250px' >
        <h5>T610</h5>
        <p>The T610 is one of the most aerodynamic and fuel efficient production trucks ever to carry the iconic Kenworth badge. Suitable for virtually any application, the T610 is made to measure for line haul, including maximum payload 26m B-Double configurations. <a href='https://30029497.2020.labnet.nz/crud.assignment/index.php?page=%27SCP%203%27'>Learn More...</a></p>
     <hr>

      <img src='images/c509.jpg' style='width:250px'>
        <h5>C510</h5>
    <p>    The distinctive sloping bonnet of the C510 gives excellent visibility and the drop front frame enables room for a large radiator providing exceptional cooling in the most arduous of conditions. The C510 is available in a 6×4, 8×4 and 8×6 configuration. <a href='https://30029497.2020.labnet.nz/crud.assignment/index.php?page=%27SCP%201%27'>Learn More...</a></p>
    <hr>

      <img src='images/engine-truck-cummins_X15.jpg ' style='width:200px'>
        <h5>X15</h5>
        <p>Cummins X15 is an undisputed leader in its class. Cummins award-winning VGT™ Turbocharger sets the industry standard for reliability and durability while delivering exceptional throttle response. This, together with the Xtra-High Pressure Injection fuel system delivers 15 percent greater horsepower with 60 percent more torque rise than its predecessor. 
        <a href='https://30029497.2020.labnet.nz/crud.assignment/index.php?page=%27SCP%205%27'>Learn More...</a></p>
    <hr>
   <hr>

      <img src='images/800px-SCP002.jpg ' style='width:200px'>
        <h5>SCP 6</h5>
        <p>SCP-002 is to remain connected to a suitable power supply at all times, to keep it in what appears to be a recharging mode. In case of electrical outage, the emergency barrier between the object and the facility is to be closed and the immediate area evacuated. 
        <a href='https://30029497.2020.labnet.nz/crud.assignment/index.php?page=%27SCP%206%27'>Learn More...</a></p>
    <hr>
<hr>

      <img src='images/SCP004_door.jpg ' style='width:200px'>
        <h5>SCP 7</h5>
        <p>When handling items SCP-004-2 through SCP-004-13, proper procedure is vital. The items are not permitted to be moved off-site unless accompanied by two Level 4 security personnel. Under no circumstances should any other component of SCP-004 be taken through SCP-004-1. 
        <a href='https://30029497.2020.labnet.nz/crud.assignment/index.php?page=%27SCP%207%27'>Learn More...</a></p>
    <hr>
    
    <hr>

      <img src='images/SCP-005.jpg ' style='width:200px'>
        <h5>SCP 8</h5>
        <p>When handling items SCP-004-2 through SCP-004-13, proper procedure is vital. The items are not permitted to be moved off-site unless accompanied by two Level 4 security personnel        
        <a href='https://30029497.2020.labnet.nz/crud.assignment/index.php?page=%27SCP%207%27'>Learn More...</a></p>
    <hr>
    <hr>

      <img src='images/eris.jpg ' style='width:200px'>
        <h5>SCP 9</h5>
        <p> The Foundation is to promote the usage of alternative internet chatrooms and other VoIP applications to divert demand from SCP-5721<a href='https://30029497.2020.labnet.nz/crud.assignment/index.php?page=%27SCP%209%27'>Learn More...</a></p>
    <hr>
    <hr>

      <img src='images/bigfoot_patterson01-new.png ' style='width:200px'>
        <h5>SCP 10</h5>
        <p>Absolutely no contact with wild or captive instances of SCP-1000 is allowed without prior approval by Director Jones
Absolutely no contact with wild or captive instances of SCP-1000 is allowed without prior approval by Director Jones 
        <a href='https://30029497.2020.labnet.nz/crud.assignment/index.php?page=%27SCP%2010%27'>Learn More...</a></p>
    <hr>
";


}
?>
</div>


</div>
<div class="footer">
            <p>
                Name=Gagandeep Singh<br>
                Student Id=30029497<br>
            </p>
         </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>