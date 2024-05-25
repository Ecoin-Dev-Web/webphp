<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
<?php
$v = isset($_POST['send'])?$_POST['send']:NULL;
const P  = 'up/';
if($v=='ok'){

$file_name_p1 = 'product_'.time();
$file =  $_FILES['ecoin']['name']?$_FILES['ecoin']['name']:'default.pdf';
$file_name_p2 = end(explode('.',$file));

$file_name = $file_name_p1.'.'.$file_name_p2;

move_uploaded_file($_FILES['ecoin']['tmp_name'],P.$file_name);
echo '<br>';
echo '<pre>';
print_r($_FILES);
echo '</pre>';
}
?>
  <form action="" method="post" class="mb-3 row"  enctype="multipart/form-data">
  <div class="mb-3">
  <label for="formFile" class="form-label">Upload you File</label>
  <input class="form-control" name="ecoin" type="file" id="formFile">
  <input type="hidden" name="send" value='ok'>
</div>
<button class="btn btn-primary btn-sm col-3 " type="submit" role="button"> Upload</button>
</form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>