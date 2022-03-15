<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>stock</title>
    <link rel="stylesheet" href="stock.css">
</head>
<body>
<div class="box">
    <a href="entry.php">entry</a>
</div>
<div class="box">
    <a href="update.php">update</a>
</div>
   <div class="box">
    <a href="stock.php">stock</a>
</div>
<div class="box">
    <a href="sales.php">sales</a>
</div>
    
<table>
    <tr>
       <td class="heading">sno</td>
        <td class="heading">name</td>
        <td class="heading">quantity</td>
        
    </tr>
   
    <?php
        $connection=mysqli_connect('localhost','root','','shivam');
        
        $query="SELECT * FROM STOCK ORDER BY QTY ASC";
    $sno=1;
         $result=mysqli_query($connection,$query);
        while($row=mysqli_fetch_assoc($result))
        {
            ?>
            <tr>
               <td><?php echo $sno; $sno++;?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['qty']; ?></td>
                
                
            </tr>
    <?php
        }
    ?>
    
    
    
</table>  
</body>
</html>