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
      <a href="<?php echo BASE_URL . '/admin/topics/create.php'; ?>" class="btn btn-primary mr-3">Add Topic</a>
      <a href="<?php echo BASE_URL . '/admin/topics/index.php'; ?>" class="btn btn-primary">Manage Topic</a>
    </div>

    <div class="adduser-sec">
      <h2>Edit Topic</h2>

      <form action="" method="" class="form">
        <div class="form-group">
          <label for="topic">Name</label>
          <input type="email" class="form-control" id="topic" name="topic">
        </div>
    
        <div class="form-group">
          <label for="description">Description</label>
          <textarea class="form-control" id="description" rows="3" name=""></textarea>
        </div>

        <button type="submit" class="btn btn-primary my-2">Update Topic</button>
      </form>
    </div>




  </div>
</section>

</body>

</html>