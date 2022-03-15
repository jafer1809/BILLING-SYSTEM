<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>signup</title>
    <link rel="stylesheet" href="entry.css">
</head>
<body>
<hr>
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
<div class="box1">
    <form action="entry1.php" method="post">
        <div class="name">
           <label for="name">
            name
        </label>
        <input type="text" placeholder="name" name="name" required>
        <br>
        </div>
        <label for="quantity">
            quantity
        </label>
        <input type="text" placeholder="quantity" name="quantity" required>
        <button type="submit" name="submit">
            submit
        </button>
    </form>
</div>

    
</body>
</html>