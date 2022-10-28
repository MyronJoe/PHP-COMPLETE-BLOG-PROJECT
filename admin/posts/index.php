<?php
require_once '../../path.php';
include ROOT_PATH . '/admin/includes/adminheader.php';
include(ROOT_PATH . "/app/controllers/posts.php");
adminOnly()
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
                    <th></th>
                </tr>
                <?php foreach ($posts as $key => $post): ?>
                    <tr>
                        <th scope="row"><?php echo $key + 1; ?></th>
                        <td><?php echo $post['title']; ?></td>
                        <td>Myron</td>
                        <td class="d-flex justify-content-around">
                        
                            <a href="edit.php?id=<?php echo $post['id']; ?>" class="btn btn-sm btn-primary mr-1">Edit</a>
                            
                            <a href="index.php?del_id=<?php echo $post['id'] ?>" class="btn btn-sm btn-danger mr-1">Delete</a>
                        </td>

                        <td>
                            <?php if($post['published']): ?>
                                <a href="edit.php?published=0&p_id=<?php echo $post['id'] ?>" class="">Unpublish</a>
                            <?php else: ?>
                                <a href="edit.php?published=1&p_id=<?php echo $post['id'] ?>" class="">Publish</a>
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