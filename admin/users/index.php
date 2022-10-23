<?php
require_once '../../path.php';
include ROOT_PATH . '/admin/includes/adminheader.php';
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
                        <th scope="col">Action</th>
                        <!-- <th scope="col">Handle</th> -->
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>
                        <a href="<?php echo BASE_URL . '/admin/users/edit.php'; ?>" class="btn btn-sm btn-primary mr-1">Edit</a>
                            <a href="" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>
                            <a href="<?php echo BASE_URL . '/admin/users/edit.php'; ?>" class="btn btn-sm btn-primary mr-1">Edit</a>
                            <a href="" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>


        </div>


    </div>
</section>

</body>

</html>