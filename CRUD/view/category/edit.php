<?php include "./../inc/header.php" ;   ?>
<?php include "./../inc/nav.php" ;  ?>
<?php include "../../core/functions.php" ;  ?>


    
    <div class="col-8 mx-auto">
    <h1>Edit Category</h1>
    <form action="../../handelers/handelEditCategory.php" method="POST">
  <div class="mb-3">
    <label for="name" class="form-label">New Name</label>
    <input type="name" class="form-control" id="exampleInputEmail1" name="new_name">
  </div>

  

  <button type="submit" class="btn btn-info">Edit</button>
</form>

    </div>
<?php include "./../inc/footer.php" ;   ?>