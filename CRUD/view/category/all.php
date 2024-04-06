<?php  session_start() ;        ?>
<?php include "./../inc/header.php" ;   ?>
<?php include "./../inc/nav.php" ;  ?>
<?php include "../../database/helpers/categoriesFunctions.php" ; ?>

<?php
$categories = readAllCategories() ;

?>
    

    
    
    <div class="col-8 mx-auto">
    <h1>All Categories</h1>
    <?php if(isset($_SESSION['deletion'])) : ?>
        <div class="alert alert-danger p-1 container" >
        <?php echo $_SESSION['deletion'] ;    ?>
        </div>
        <?php endif;    
        unset($_SESSION['deletion']) ;
        
        ?>
        <a href="create.php" class="btn btn-success">Create</a>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    <?php foreach($categories as  $category)  :  ?>
    <tr>
      <th scope="row"><?php echo $category['id'] ;?></th>
      <td><?php echo $category['name'] ;  ?></td>
      <td> <a href="edit.php?id=<?php echo $category['id']  ?>" class="btn btn-warning">Edit</a>
      </form>
         <form action="../../handelers/handelDeletecategory.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $category['id'] ?>">
        <button type="submit" class="btn btn-danger">Delete</button>
      </form> 
    </td>
    </tr>

        <?php endforeach ;   ?>
    
  </tbody>
</table>

    </div>
<?php include "./../inc/footer.php" ;   ?>