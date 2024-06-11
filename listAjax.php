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

<a class="btn btn-primary btn-sm " href="addAjax.php" role="button"> Add Category</a>
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
                    <a href="#"  
                    data-id="<?=$data['id']   ?>" 
                    data-nom="<?=$data['nom']   ?>" 
                    data-detail="<?=$data['detail']   ?>" 
                    class="edit"
                     data-bs-toggle="modal" data-bs-target="#catModal"
                    >
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



<!-- Modal -->
<div class="modal fade" id="catModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Category</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Nom:</label>
            <input type="text" name="nom" class="form-control" id="nom">
          </div>

          <input type="hidden" name="id" id="id" >
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Detail:</label>
            <textarea name="detail" class="form-control" id="detail"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" id="update" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?php
include_once 'inc/footer.php'

?>