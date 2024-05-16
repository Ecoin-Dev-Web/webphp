<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>
<body>

<?php
// const MAIL = "admin@gmail.com";
// const PASS = 123;

$users = [
   ['a@a.a',123,1],
   ['b@b.b',123,2],
   ['c@c.c',123,1]
];
//in_array
$data = array();
   $data['mymail'] = isset($_POST['mail'])?$_POST['mail']:null;
   $data['mypass'] = isset($_POST['pass'])?$_POST['pass']:null;
   $data['check'] = isset($_POST['send'])?$_POST['send']:null;
  
if($data['check']=='ok'){
    foreach($users as $user){
        if($user[0]== $data['mymail'] && $user[1]== $data['mypass'] ){
            $_SESSION['mysess'] = $data['mymail']; 
            if($user[2]== 1) {
                $_SESSION['role'] = 1;
                    header("Location: 1.php");
            }elseif($user[2]== 2){
                $_SESSION['role'] = 2;
                   header("Location: 2.php");
            }else {
                die("Not Sur");
            }
            break;
        }  else {
            header("Location: product.php");
           }
   
//    if($data['mymail']== MAIL && $data['mypass']== PASS){
//     $_SESSION['mysess'] = md5($data['mymail']);
//     header("Location: admin.php");

}
}
   
?>

<form action="" method="post">
    <div>
    <input type="email" name="mail" placeholder="your mail">
    </div>
   <div>
    <input type="password" name="pass" placeholder="your password">
    <input type="hidden" name="send" value="ok" >
   </div>

    <button type="submit">Login</button>
</form>

</body>
</html>