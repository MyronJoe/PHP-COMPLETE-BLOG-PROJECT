<?php
require_once '../../path.php';
include ROOT_PATH . '/admin/includes/adminheader.php';
include(ROOT_PATH . "/app/controllers/topics.php");

?>
<section style="display: flex;">
    <div class="lside">
        <?php include ROOT_PATH . '/admin/includes/adminsidbar.php'; ?>
    </div>

    <div class="rside">
        <div class="rside-top">
            <a href="<?php echo BASE_URL . '/admin/topics/create.php'; ?>" class="btn btn-primary mr-3">Add Topic</a>
            <a href="<?php echo BASE_URL . '/admin/topics/index.php'; ?>" class="btn btn-primary">Manage Topic</a>
        </div>

        <div class="adduser-sec">
            <h2>Manage Topics</h2>

            <table class="table mt-3">
                
                <div class="table">

                    <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

                </div>

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
                        <a href="<?php echo BASE_URL . '/admin/topics/edit.php'; ?>" class="btn btn-sm btn-primary mr-1">Edit</a>
                            <a href="" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>
                            <a href="<?php echo BASE_URL . '/admin/topics/edit.php'; ?>" class="btn btn-sm btn-primary mr-1">Edit</a>
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