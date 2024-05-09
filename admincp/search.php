<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>
<body>

<?php
// $data = array();
//    $data['mymail'] = isset($_POST['mail'])?$_POST['mail']:null;
//    $data['mypass'] = isset($_POST['pass'])?$_POST['pass']:null;
//    echo "<pre>";
//    print_r($data);
//    echo "</pre>";
?>

<form action="result.php" method="post">
    <div>
    <input type="email" name="mail" placeholder="your mail">
    </div>
   <div>
    <input type="password" name="pass" placeholder="your password">
   </div>

    <button type="submit">Login</button>
</form>

</body>
</html>