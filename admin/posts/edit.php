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
      <a href="<?php echo BASE_URL . '/admin/posts/create.php'; ?>" class="btn btn-primary mr-3">Add Post</a>
      <a href="<?php echo BASE_URL . '/admin/posts/index.php'; ?>" class="btn btn-primary">Manage Post</a>
    </div>

    <div class="adduser-sec">
      <h2>Edit Post</h2>

      <form action="" method="" class="form">
        <div class="form-group">
          <label for="post">Title</label>
          <input type="email" class="form-control" id="post" name="title">
        </div>
    
        <div class="form-group">
          <label for="description">Content</label>
          <textarea class="form-control" id="description" rows="3" name="body"></textarea>
        </div>

        <div class="form-group">
          <label for="image">Image</label>
          <input type="file" class="form-control-file" id="image" name="image">
        </div>

        <div class="form-group">
          <label for="topic">Topic</label>
          <select name="topic" class="form-control" id="topic">
            <option value="poetry">Poetry</option>
            <option value="life">Life</option>
          </select>
        </div>

        <button type="submit" class="btn btn-primary my-2">Update Post</button>
      </form>
    </div>




  </div>
</section>

</body>

</html>