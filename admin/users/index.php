<?php
require_once '../../path.php';
include ROOT_PATH . '/admin/includes/adminheader.php';
include(ROOT_PATH . "/app/controllers/users.php");
adminOnly();
?>
<section style="display: flex;">
    <div class="lside">
        <?php include ROOT_PATH . '/admin/includes/adminsidbar.php'; ?>
    </div>
    <div class="rside">
        <div class="rside-top">
            <a href="<?php echo BASE_URL . '/admin/users/create.php'; ?>" class="btn btn-primary mr-3">Add User</a>
            <a href="<?php echo BASE_URL . '/admin/users/index.php'; ?>" class="btn btn-primary">Manage User</a>
        </div>
        <div class="adduser-sec">
            <h2>Manage Users</h2>
            <div class="table">
                <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
            </div>
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th scope="col">S/N</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($admin_users as $key => $user) : ?>

                        <tr>
                            <th scope="row"><?php echo $key + 1 ?></th>
                            <td><?php echo $user['username'] ?></td>
                            <td><?php echo $user['email'] ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $user['id']; ?>" class="btn btn-sm btn-primary mr-1">Edit</a>
                                <a href="index.php?del_id=<?php echo $user['id'] ?>" onclick="return confirm('Are you sure...?')" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

</body>

</html>