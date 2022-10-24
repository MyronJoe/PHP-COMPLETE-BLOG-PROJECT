<?php
require_once 'path.php';
// session_start();
include(ROOT_PATH . "/app/includes/header.php");
include(ROOT_PATH . "/app/controllers/topics.php");
// var_dump($_SESSION);
$posts = [];

$post_title = 'Reacent Post';

if (isset($_POST['search-term'])) {
    $posts = searchPost($_POST['search-term']);
}else{
    $posts = $posts = getPublishedPost();
}


// $getTopic = getPublishedPostUsernam();


// dump($posts);

?>


<div class="content">

    <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

    <section>
        <!-------------------------------- Left side ------------------------------------>
        <div class="left">
            <!-------------------------------- Music section ------------------------------------>
            <div class="header_line">
                <div class="header_title">
                    <p><span><?php echo $post_title ?></span></p>
                </div>
            </div>

            <div class="Music">

                <?php foreach ($posts as $key => $post) : ?>

                    <div class="card">
                        <div class="img_sec">

                            <div class="topic">
                                <p><a href="#"><?php echo $post['topic_id'] ?></a></p>
                            </div>
                            <a href="#"><img src="<?php echo BASE_URL . '/assets/images/' . $post['image'] ?>" alt="<?php echo $post['title'] ?>"></a>
                        </div>
                        <div class="title_sec">
                            <a href="#">
                                <h2 class="title"><?php echo $post['title'] ?></h2>
                            </a>

                            <a href="#">
                                <p class="post_content">
                                    <?php echo substr($post['body'], 0, 120).'...'?>
                                </p>
                            </a>
                            <small>BY <a href="#"><span style="color:red; margin-right: 10px;"><?php echo $post['username'] ?></span></a><?php echo date('F j, Y', strtotime($post['created_at'])) ?></small>
                        </div>
                    </div>

                <?php endforeach; ?>


            </div>
            <!-------------------------------- Video Section ------------------------------------>
            

        </div>
        <!-------------------------------- Right side ------------------------------------>
        <div class="right">
            <?php include("app/includes/side.php") ?>

        </div>
    </section>

</div>

<?php include(ROOT_PATH . "/app/includes/footer.php") ?>