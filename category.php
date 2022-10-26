<?php require_once 'path.php'; ?>
<?php include(ROOT_PATH . "/app/includes/header.php");
include(ROOT_PATH . "/app/controllers/topics.php");

if (isset($_GET['t_id'])) {
    $post_title = 'You selected '. $_GET['name'] .' topic';
    $posts = getPostByTopics($_GET['t_id']);
    // dump($posts);
}

?>

    <div class="content">

        <section>
            <!-------------------------------- Left side ------------------------------------>
            <div class="left">
            <p style="font-size:20px; margin-bottom: 1em; font-weight:bold;"><span><?php echo $post_title ?></span></p>
                <!-------------------------------- category section ------------------------------------>
                <div class="Category">
                <?php foreach ($posts as $key => $post) : ?>

                    <div class="card">
                        <div class="img_sec">

                            <div class="topic">
                                <p><a href="#"><?php echo $_GET['name'] ?></a></p>
                            </div>
                            <a href="post.php?id=<?php echo $post['id']; ?>"><img src="<?php echo BASE_URL . '/assets/images/' . $post['image'] ?>" alt="<?php echo $post['title'] ?>"></a>
                        </div>
                        <div class="title_sec">
                            <a href="post.php?id=<?php echo $post['id']; ?>">
                                <h2 class="title"><?php echo $post['title'] ?></h2>
                            </a>

                            <a href="post.php?id=<?php echo $post['id']; ?>">
                                <p class="post_content">
                                    <?php echo substr($post['body'], 0, 120).'...'?>
                                </p>
                            </a>
                            <small>BY <a href="#"><span style="color:red; margin-right: 10px;"><?php echo $post['username'] ?></span></a><?php echo date('F j, Y', strtotime($post['created_at'])) ?></small>
                        </div>
                    </div>

                <?php endforeach; ?>
                </div>


            </div>
            <!-------------------------------- Right side ------------------------------------>
            <div class="right">

                <?php include("app/includes/side.php") ?>

            </div>
        </section>

    </div>
    
    <?php include(ROOT_PATH . "/app/includes/footer.php") ?> 