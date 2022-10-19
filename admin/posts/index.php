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
            <a href="<?php echo BASE_URL . '/admin/posts/create.php'; ?>" class="btn btn-primary mr-3">Add Post</a>
            <a href="<?php echo BASE_URL . '/admin/posts/index.php'; ?>" class="btn btn-primary">Manage Post</a>
        </div>

        <div class="adduser-sec">
            <h2>Manage Posts</h2>

            <table class="table mt-3 text">
                
                <tr>
                    <th>S/N</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Action</th>
                </tr>
        
                <tr>
                    <th scope="row">1</th>
                    <td>This is our first post</td>
                    <td>Myron</td>
                    <td class="d-flex justify-content-between">
                    <a href="<?php echo BASE_URL . '/admin/posts/edit.php'; ?>" class="btn btn-sm btn-primary mr-1">Edit</a>
                    <a href="" class="btn btn-sm btn-danger mr-1">Delete</a>
                    <a href="" class="">Publish</a>
                    </td>
                </tr>

                <tr>
                    <th scope="row">2</th>
                    <td>This is our second post</td>
                    <td>Kachi</td>
                    <td class="d-flex justify-content-between">
                    <a href="<?php echo BASE_URL . '/admin/posts/edit.php'; ?>" class="btn btn-sm btn-primary mr-1">Edit</a>
                    <a href="" class="btn btn-sm btn-danger mr-1">Delete</a>
                    <a href="" class="">Publish</a>
                    </td>
                </tr>
                    
                
            </table>


        </div>


    </div>
</section>

</body>

</html>