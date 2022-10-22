<?php
require_once '../../path.php';
include ROOT_PATH . '/admin/includes/adminheader.php';
include(ROOT_PATH . "/app/controllers/posts.php")
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
      <h2>Add Post</h2>

      <form action="create.php" method="POST" class="form" novalidate>

      <?php include(ROOT_PATH . "/app/helpers/formerrors.php") ?>

        <div class="form-group">
          <label for="post">Title</label>
          <input type="text" class="form-control" value="<?php echo $title?>" id="post" name="title">
        </div>
    
        <div class="form-group">
          <label for="description">Content</label>
          <textarea class="form-control" id="description" value="<?php echo $body?>" rows="3" name="body"></textarea>
        </div>

        <div class="form-group">
          <label for="image">Image</label>
          <input type="file" class="form-control-file" value="<?php echo $image?>" id="image" name="image">
        </div>

        <div class="form-group">
          <label for="topic">Topic</label>
          <select name="topic_id" class="form-control" id="topic">
          <option value=""><?php echo $topic_id?></option>
          <?php foreach ($topics as $key => $topic): ?>          
            <option value="<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></option>
          <?php endforeach ?>
            
          </select>
        </div>

        <button type="submit" name="post-btn" class="btn btn-primary my-2">Add Post</button>
      </form>
    </div>




  </div>
</section>

</body>

</html>