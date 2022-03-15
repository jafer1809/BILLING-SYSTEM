<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $quant=$_POST['quantity'];
    $connection=mysqli_connect('localhost','root','','shivam');
    if($connection)
    {
        $q="SELECT * FROM STOCK WHERE NAME='$name'";
        $query=mysqli_query($connection,$q);
        $row=mysqli_fetch_assoc($query);
        $quant=$quant+$row['qty'];
        echo $quant;
        $query1="UPDATE STOCK SET QTY='$quant' WHERE NAME='$name'";
        $sqlquery=mysqli_query($connection,$query1);
        if($sqlquery)
            echo "update";
       header("Location: update.php");
        
    }
    else
        die("database not found");
}
?>