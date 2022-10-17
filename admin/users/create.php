<?php
require_once '../../path.php';
include ROOT_PATH . '/admin/includes/adminheader.php';
?>
<section style="display: flex;">
  <div class="lside">
  <?php include ROOT_PATH . '/admin/includes/adminsidbar.php';?>
  </div>

  <div class="rside">
    <div class="rside-top">
      <a href="<?php echo BASE_URL . '/admin/users/create.php'; ?>" class="btn btn-primary mr-3">Add Users</a>
      <a href="<?php echo BASE_URL . '/admin/users/index.php'; ?>" class="btn btn-primary">Manage Users</a>
    </div>

    <div class="adduser-sec">
      <h2>Add Users</h2>

      <form action="" method="" class="form">
        <div class="form-group">
          <label for="user">Name</label>
          <input type="email" class="form-control" id="user" name="user">
        </div>
    
        <div class="form-group">
          <label for="description">Description</label>
          <textarea class="form-control" id="description" rows="3" name=""></textarea>
        </div>

        <button type="submit" class="btn btn-primary my-2">Add User</button>
      </form>
    </div>




  </div>
</section>

</body>

</html>