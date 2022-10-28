<?php
require_once '../../path.php';
include ROOT_PATH . '/admin/includes/adminheader.php';
include(ROOT_PATH . "/app/controllers/posts.php");
adminOnly()
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

      <form action="edit.php" method="POST" class="form" enctype="multipart/form-data" novalidate>
        
        <?php include(ROOT_PATH . "/app/helpers/formerrors.php") ?>

        <div class="form-group">
          <input type="hidden" class="form-control" value="<?php echo $id?>" id="post" name="id">
        </div>

        <div class="form-group">
          <label for="post">Title</label>
          <input type="text" class="form-control" value="<?php echo $title?>" id="post" name="title">
        </div>
    
        <div class="form-group">
          <label for="description">Content</label>
          <textarea class="form-control" id="description" value="" rows="3" name="body"><?php echo $body?></textarea>
        </div>

        <div class="form-group">
          <label for="image">Image</label>
          <input type="file" value="<?php echo $image?>" class="form-control-file"  id="image" name="image">
        </div>

        <div class="form-group">
          <label for="topic">Topic</label>
          <select name="topic_id" class="form-control" id="topic">
          <option value=""></option>
          <?php foreach ($topics as $key => $topic): ?> 
            
            <?php if (!empty($topic_id) && $topic_id == $topic['id']): ?>
              <option selected value="<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></option>
            <?php else: ?>
              <option value="<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></option>
            <?php endif; ?> 

          <?php endforeach ?>
            
          </select>
        </div>

        <div class="form-group form-check">
          <?php if (empty($published) && $published == 0): ?>
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="published">
            <label class="form-check-label" for="exampleCheck1" >Publish</label>
          <?php else: ?>
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="published" checked>
            <label class="form-check-label" for="exampleCheck1" >Publish</label>
          <?php endif; ?> 
        </div>

        <button type="submit" name="edit-post-btn" class="btn btn-primary my-2">Update Post</button>
      </form>
    </div>




  </div>
</section>

</body>

</html>