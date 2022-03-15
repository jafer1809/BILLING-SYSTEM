<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $quant=$_POST['quantity'];
    $connection=mysqli_connect('localhost','root','','shivam');
    if($connection)
    {
        $query="INSERT INTO STOCK(NAME,QTY)";
        $query .="VALUES('$name','$quant')"; 
        $sqlquery=mysqli_query($connection,$query);
        header("Location: entry.php");
    }
    else
        die("database not found");
}
?>