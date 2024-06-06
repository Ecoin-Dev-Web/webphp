

<?php
require_once('config.php');
// get cat by ID
$id = (isset($_GET['q']))?$_GET['q']:NULL;
$sql  = "SELECT * FROM cat WHERE id=$id ";
$q = mysqli_query($connect,$sql);

$data = mysqli_fetch_array($q,MYSQLI_ASSOC);
echo '<pre>';
print_r($data);
echo '</pre>'; 
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
    <form action="update.php" method="post">
        <input type="text" name="cat" value="<?=$data['nom'] ?>" >
        <input type="hidden" name="id" value="<?=$data['id'] ?>" >
        <button type="submit">Update</button>
    </form>


</body>
</html>