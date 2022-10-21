<?php
require_once '../../path.php';
include ROOT_PATH . '/admin/includes/adminheader.php';
include(ROOT_PATH . "/app/controllers/posts.php")
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
                <div class="table">
                    <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
                </div>
                <tr>
                    <th>S/N</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Action</th>
                </tr>
                <?php foreach ($posts as $key => $post): ?>
                    <tr>
                        <th scope="row"><?php echo $key + 1; ?></th>
                        <td><?php echo $post['title']; ?></td>
                        <td>Myron</td>
                        <td class="d-flex justify-content-between">
                        
                            <a href="<?php echo BASE_URL . '/admin/posts/edit.php'; ?>" class="btn btn-sm btn-primary mr-1">Edit</a>
                            
                            <a href="" class="btn btn-sm btn-danger mr-1">Delete</a>
                            
                            <?php if($post['published']): ?>
                                <a href="" class="">Unpublish</a>
                            <?php else: ?>
                                <a href="" class="">Publish</a>
                            <?php endif; ?>

                        </td>

                    </tr>         
                <?php endforeach ?>
            </table>


        </div>


    </div>
</section>

</body>

</html>