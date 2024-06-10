<?php
include_once 'inc/header.php';

require_once('config.php');
// get all Category
$sql  = "SELECT * FROM cat ";
$q = mysqli_query($connect,$sql);







?>



<div class="container pt-5 mt-5">
    <div class="row">
        <div class="col">


        <table  class="table table-hover">
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
                    <a href="#" data-id="<?=$data['id']   ?>"  class="delete">
                        <i class="bi bi-trash text-danger"></i>
                    </a>
                    <a href="#"  data-id="<?=$data['id']   ?>"  class="edit">
                        <i class="bi bi-pencil-square text-info"></i>
                    </a>
                </td>
            </tr>
            <?php endwhile;    ?>
        </tbody>
    </table>

        </div>
    </div>
</div>




<?php
include_once 'inc/footer.php'

?>