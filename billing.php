<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="billin.css">
</head>
<body>
<?php
    $connection=mysqli_connect('localhost','root','','shivam');
    $name=$_POST['name'];
    $da=date('Y-m-d');
        $query="INSERT INTO SALES(NAME,DATE) VALUES('$name','$da')";
    $result=mysqli_query($connection,$query);
    $query="SELECT * FROM SALES WHERE NAME='$name'";
    $result1=mysqli_query($connection,$query);
    $row1=mysqli_fetch_assoc($result1);
?>
<img src="jk.png">
    <br>
<h4>sn enterprices</h4>
<div class="main-box">
   <div class="upperbox">
   <table>
   <tr>
   <td>
        <p>gstin: 22buqpj8444q1zt</p>
        <p> pan no: buqpj8444q</p>
    </td>
    <td>
    <h6>dealer address:</h6>
    <?php
        echo $_POST['add'];
    ?>
    
    </td>
    <td>
        <label>date:</label>
        <?php
        echo date('d-m-Y');
        ?>
    </td>
    </tr>
    <tr>
        <td>
            <?php
            echo $_POST['name'];?>
            <br>
            <?php
            echo $_POST['add'];
            ?>
            <br>
            <?php
            echo $_POST['phone'];
            ?>
            <br>
            <p>gst: <?php echo $_POST['gst'];?>
                
            </p>
            
            
        </td>
        <td>
            <p>bill no:</p>
            <?php
            echo $row1['id'];
            ?>
        </td>
    </tr>
    <table class="bill">
    <tr>
        <td>sno</td>
        <td>product description</td>
        <td>qty</td>
        <td>cgst(%)</td>
        <td>sgst(%)</td>
        <td>unit rate</td>
        <td>value</td>
        <td>amount</td>
    </tr>
       
    <tr>
      <td> <?php
        $s=0;
          echo ++$s;
          ?>
          </td> 
        <td>
            <?php
            echo $_POST['desc1'];
            ?>
        </td>
        <td>
            <?php
            echo $_POST['qty1'];
            ?>
        </td>
        <?php
        $gst=$_POST['price1']*0.21875;
        $cgst=$gst/2*$_POST['qty1'];
        $unit=$_POST['price1']-$gst;
        $amount=$_POST['price1']*$_POST['qty1'];
        $t=0;
        $t=$t+$amount;
        ?>
        <td>
            <?php
            echo $cgst;?>
        </td>
         <td>
            <?php
            echo $cgst;?>
        </td>
         <td>
            <?php
            echo $unit;?>
        </td>
         <td>
            <?php
            echo $_POST['price1'];?>
        </td>
         <td>
            <?php
            echo $amount;?>
        </td>
        
    </tr>
      <tr>
      <td> <?php
          echo ++$s;
          ?>
          </td> 
        <td>
            <?php
            echo $_POST['desc2'];
            ?>
        </td>
        <td>
            <?php
            echo $_POST['qty2'];
            ?>
        </td>
        <?php
        $gst=(int)$_POST['price2']*0.21875;
        $cgst=$gst/2*(int)$_POST['qty2'];
        $unit=(int)$_POST['price2']-$gst;
        $amount=(int)$_POST['price2']*(int)$_POST['qty2'];
        $t=$t+$amount;
        ?>
        <td>
            <?php
            echo $cgst;?>
        </td>
         <td>
            <?php
            echo $cgst;?>
        </td>
         <td>
            <?php
            echo $unit;?>
        </td>
         <td>
            <?php
            echo $_POST['price2'];?>
        </td>
         <td>
            <?php
            echo $amount;?>
        </td>
        
    </tr>
            <tr>
      <td> <?php
          echo ++$s;
          ?>
          </td> 
        <td>
            <?php
            echo $_POST['desc3'];
            ?>
        </td>
        <td>
            <?php
            echo $_POST['qty3'];
            ?>
        </td>
        <?php
       $gst=(int)$_POST['price3']*0.21875;
        $cgst=$gst/2*(int)$_POST['qty3'];
        $unit=(int)$_POST['price3']-$gst;
        $amount=(int)$_POST['price3']*(int)$_POST['qty3'];
        $t=$t+$amount;
        ?>
        <td>
            <?php
            echo $cgst;?>
        </td>
         <td>
            <?php
            echo $cgst;?>
        </td>
         <td>
            <?php
            echo $unit;?>
        </td>
         <td>
            <?php
            echo $_POST['price3'];?>
        </td>
         <td>
            <?php
            echo $amount;?>
        </td>
        
    </tr>
       </table>
     </table>
     <div class="total">
        <label>total</label>
         <?php echo $t; ?>
     </div>
     <br>
     <br>
     <br>
     <br>
     <br>
     <table class="signature">
         <tr>
             <td>customer signature</td>
             <td>authority signature</td>
         </tr>
     </table>
   </div>
   <div class="last">
   <p>sn enterprises dealer 6265211941 thank you for visiting</p>
    </div> 
</div>

<?php
    if($_POST['qty1']>0)
    {
    $name=$_POST['desc1'];
    $quant=$_POST['qty1'];
    $connection=mysqli_connect('localhost','root','','shivam');
    if($connection)
    {
        $q="SELECT * FROM STOCK WHERE NAME='$name'";
        $query=mysqli_query($connection,$q);
        $row=mysqli_fetch_assoc($query);
        $quant=$row['qty']-$quant;
        $query1="UPDATE STOCK SET QTY='$quant' WHERE NAME='$name'";
        $sqlquery=mysqli_query($connection,$query1);
    }
    }
     if($_POST['qty2']>0)
    {
    $name=$_POST['desc2'];
    $quant=$_POST['qty2'];
    $connection=mysqli_connect('localhost','root','','shivam');
    if($connection)
    {
        $q="SELECT * FROM STOCK WHERE NAME='$name'";
        $query=mysqli_query($connection,$q);
        $row=mysqli_fetch_assoc($query);
        $quant=$row['qty']-$quant;
        $query1="UPDATE STOCK SET QTY='$quant' WHERE NAME='$name'";
        $sqlquery=mysqli_query($connection,$query1);
    }
    }
     if($_POST['qty3']>0)
    {
    $name=$_POST['desc3'];
    $quant=$_POST['qty3'];
    $connection=mysqli_connect('localhost','root','','shivam');
    if($connection)
    {
        $q="SELECT * FROM STOCK WHERE NAME='$name'";
        $query=mysqli_query($connection,$q);
        $row=mysqli_fetch_assoc($query);
        $quant=$row['qty']-$quant;
        $query1="UPDATE STOCK SET QTY='$quant' WHERE NAME='$name'";
        $sqlquery=mysqli_query($connection,$query1);
    }
    }
?>
<?php
    $connection=mysqli_connect('localhost','root','','shivam');
    
    $r=$row1['id'];
        $query="INSERT INTO AMOUNT VALUES('$r','$t')";
    $result=mysqli_query($connection,$query);
?>

</body>
</html>