<?php include "./../inc/header.php" ;   ?>
<?php include "./../inc/nav.php" ;  ?>
<?php  session_start() ; ?>
    

  
    
    <div class="col-8 mx-auto">
    <h1>Create Category</h1>
    <?php if (isset($_SESSION['success'])) :     ?>
    <div class="alert alert-success p-1 container">
    <?php echo $_SESSION['success']  ;    ?>
    </div>
    <?php endif;       
    unset($_SESSION['success']);
    ?>
    <form action="../../handelers/handelcategories.php" method="POST">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>

  <button type="submit" class="btn btn-primary">Save</button>
</form>

    </div>
<?php include "./../inc/footer.php" ;   ?>