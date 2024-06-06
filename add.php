

<?php
require_once('config.php');
// get all Category
$sql  = "SELECT * FROM cat ";
$q = mysqli_query($connect,$sql);

// get numbers of cat
$count = mysqli_num_rows($q );
/*  if($count>4)
 header('Location:list.php') ; */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
</head>
<body>
    <form action="ok.php" method="post">
        <input type="text" name="cat" >
        <textarea name="detail" id=""></textarea>
        <button type="submit">Add</button>
    </form>


</body>
</html>