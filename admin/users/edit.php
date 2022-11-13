<?php
require_once '../../path.php';
include ROOT_PATH . '/admin/includes/adminheader.php';
include(ROOT_PATH . "/app/controllers/users.php");
adminOnly()
?>
<section style="display: flex;">
  <div class="lside">
    <?php include ROOT_PATH . '/admin/includes/adminsidbar.php'; ?>
  </div>

  <div class="rside">
    <div class="rside-top">
      <a href="<?php echo BASE_URL . '/admin/users/create.php'; ?>" class="btn btn-primary mr-3">Add Users</a>
      <a href="<?php echo BASE_URL . '/admin/users/index.php'; ?>" class="btn btn-primary">Manage Users</a>
    </div>

    <div class="adduser-sec">
      <h2>Edit Users</h2>

      <form action="edit.php" method="POST" class="form">
        <?php include(ROOT_PATH . "/app/helpers/formerrors.php") ?>

        <input type="hidden" class="form-control" name="id" value="<?php echo $id ?>">

        <div class="form-group">
          <label for="username">Usernam</label>
          <input type="text" class="form-control" id="user" name="username" value="<?php echo $username ?>">
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" value="<?php echo $email ?>">
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group">
          <label for="passwordconfirm">Password Confirm</label>
          <input type="password" class="form-control" id="passwordconfirm" name="passwordconfirm">
        </div>

        <div class="form-group">

          <?php if (isset($admin) && $admin == 1) : ?>
            <label>
              <input type="checkbox" name="admin" checked>
              Admin
            </label>
          <?php else : ?>
            <label>
              <input type="checkbox" name="admin">
              Admin
            </label>
          <?php endif; ?>

        </div>

        <button type="submit" name="update-user" class="btn btn-primary my-2">Update User</button>
      </form>
    </div>

  </div>
</section>

</body>

</html>