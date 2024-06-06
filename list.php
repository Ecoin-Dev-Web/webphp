

<?php
require_once('config.php');
// get all Category
$sql  = "SELECT * FROM cat ";
$q = mysqli_query($connect,$sql);

// get numbers of cat
$count = mysqli_num_rows($q );
echo $count;


/* $data = mysqli_fetch_array($q,MYSQLI_ASSOC);

echo '<pre>';
print_r($data);
echo '</pre>'; */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
</head>
<body>
<?php //if($count<=4):  ?>
<a href="add.php">Add</a>
<?php //endif;  ?>
    <table border="2" cellspacing="0"  cellpadding="6"   >
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php  while($data = mysqli_fetch_array($q,MYSQLI_ASSOC)):      ?>
            <tr>
                <td><?=$data['id']   ?></td>
                <td><?=$data['nom']   ?></td>
                <td>
                    <a href="delete.php?q=<?=$data['id']   ?>">Delete</a>
                </td>
            </tr>
            <?php endwhile;    ?>
        </tbody>
    </table>
</body>
</html>