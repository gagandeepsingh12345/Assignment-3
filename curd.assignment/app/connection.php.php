<?php 
$user = "a3002949_Crud";
$pw = "Toiohomai1234";
$db = "a3002949_crud.assignment";


$connection = new mysqli('localhost', $user, $pw, $db) or die (mysqli_error($connection));

$result = $connection->query("select * from pages") or die ($connection->error);

if(isset($_POST['submit']))
{
    $pg = $_POST['pg'];

    $h1 = $_POST['h1'];
    $h2 = $_POST['h2'];
    

    
    $p1 = $_POST['p1'];
    $p2 = $_POST['p2'];
    $p3 = $_POST['p3'];


    $img1 = $_POST['img1'];
    $img2 = $_POST['img2'];
    $img3 = $_POST['img3'];

    $sql = "insert into pages(pg, h1, h2, p1, p2, p3, img1, img2, img3)
    values('$pg','$h1','$h2', '$p1','$p2','$p3','$img1','$img2','$img3')";

    if ($connection->query($sql) === TRUE)

    {
        echo "<h1>Record added successfull</h1>
        <p><a href='../index.php'>Back to index page</p>
        ";


    }else
    {
        
        echo "<h1>error submitting data </h1>
        <p>{$connection->error}</p>
        <p><a href='../index.php'>Back to index page</p>
        ";

    }
}
if(isset($_GET['delete']))
{
    $id =$_GET['delete'];
    $del = "delete from pages where id='$id'";
    
    if($connection->query($del) === TRUE)
    {
        echo "
        <p>Record was deleted.<a href='../index.php'>Return to Index Page</a></p>";
        
    }
    else
    {
    echo "
    <p>There was an error deleting this record.</p>
    <p{$connection->error}></p>
    <p><a href='../index.php'>Back to index page</a></p>
    ";    
    }
    }
if(isset($_POST['update']))
{
    $pg = $_POST['id'];
    $pg = $_POST['pg'];

    $h1 = $_POST['h1'];
    $h2 = $_POST['h2'];
    

    
    $p1 = $_POST['p1'];
    $p2 = $_POST['p2'];
    $p3 = $_POST['p3'];


    $img1 = $_POST['img1'];
    $img2 = $_POST['img2'];
    $img3 = $_POST['img3'];

$update = "update pages set pg='$pg', h1='$h1', h2='$h2', p1='$p1', p2='$p2', p3='$p3', img1='$img1', img2='$img2', img3='$img3' 
where id='$id'";
    if($connection->query($update) === TRUE)
    {
        echo "
        <h1>Record updated successfull</h1>
        <p><a href='../index.php'>Back to index page</p>
        
        ";
    }
    else
    {
        echo "
        <h1>Error updating data </h1>
        <p>{$connection->error()}</p>
        <p><a href='../index.php'>Back to index page</p>
        ";

    }
}

?>