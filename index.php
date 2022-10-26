<?php
require_once 'path.php';
include(ROOT_PATH . "/app/includes/header.php");
include(ROOT_PATH . "/app/controllers/topics.php");

$posts = getPublishedPost();


?>

<title>Home | Myron-Blog</title>
<div class="content">

    <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

    <section>
        <!-------------------------------- Left side ------------------------------------>
        <div class="left">
            <!-------------------------------- Music section ------------------------------------>
            <div class="header_line">
                <div class="header_title">
                    <p><span>Lastest Song</span></p>
                </div>
            </div>

            <div class="Music">

                <?php foreach ($posts as $key => $post) : ?>

                    <!-- function that fetches topics -->
                    <?php 
                        $topicId = $post['topic_id'];
                        $topics = selectOne('topics', ['id' => $topicId]);
                        // dump($topics);
                    ?>

                    <div class="card">
                        <div class="img_sec">

                            <div class="topic">
                                <p><a href="<?php echo BASE_URL . '/category.php?t_id=' . $topics['id'] . '&name=' . $topics['name']?>"><?php echo $topics['name'] ?></a></p>
                            </div>
                            <a href="post.php?id=<?php echo $post['id'] . '&title=' . $post['title']?>; ?>"><img src="<?php echo BASE_URL . '/assets/images/' . $post['image'] ?>" alt="<?php echo $post['title'] ?>"></a>
                        </div>
                        <div class="title_sec">
                            <a href="post.php?id=<?php echo $post['id'] . '&title=' . $post['title']?>; ?>">
                                <h2 class="title"><?php echo $post['title'] ?></h2>
                            </a>

                            <a href="post.php?id=<?php echo $post['id'] . '&title=' . $post['title']?>; ?>">
                                <p class="post_content">
                                    <?php echo substr($post['body'], 0, 120).'...'?>
                                </p>
                            </a>
                            <small>BY <a href="#"><span style="color:red; margin-right: 10px;"><?php echo $post['username'] ?></span></a><?php echo date('F j, Y', strtotime($post['created_at'])) ?></small>
                        </div>
                    </div>

                <?php endforeach; ?>



                <div class="more">
                    <a href="">More Songs</a>
                </div>
            </div>
            <!-------------------------------- Video Section ------------------------------------>
            <div class="header_line">
                <div class="header_title">
                    <p><span>Lastest Video</span></p>
                </div>
            </div>
            <div class="Video">

                <?php foreach ($posts as $key => $post) : ?>

                    <div class="card">
                        <div class="img_sec">
                            <a href="post.php?id=<?php echo $post['id'] . '&title=' . $post['title']?>; ?>">
                                <div class="Video_tag">

                                    <p><span class="fas fa-play"></p>
                                </div>
                                <img src="<?php echo BASE_URL . '/assets/images/' . $post['image'] ?>" alt="<?php echo $post['title'] ?>">
                            </a>
                        </div>

                        <div class="title_sec">
                            <a href="post.php?id=<?php echo $post['id'] . '&title=' . $post['title']?>; ?>">
                                <h2 class="title"><?php echo $post['title'] ?></h2>
                            </a>

                            <a href="post.php?id=<?php echo $post['id'] . '&title=' . $post['title']?>; ?>">
                                <p class="post_content">
                                    <?php echo substr($post['body'], 0, 120).'...'?>
                                </p>
                            </a>
                            <small>BY <a href="#"><span style="color:red; margin-right: 10px;"><?php echo $post['username'] ?></span></a><?php echo date('F j, Y', strtotime($post['created_at'])) ?></small>
                        </div>
                    </div>

                <?php endforeach; ?>

                <div class="more">
                    <a href="">More Videos</a>
                </div>
            </div>

            <!-------------------------------- News section ------------------------------------>
            <div class="header_line">
                <div class="header_title">
                    <p><span>Lastest News</span></p>
                </div>
            </div>
            <div class="NEWS">

                <?php foreach ($posts as $key => $post) : ?>

                    <!-- function that fetches topics -->
                    <?php 
                        $topicId = $post['topic_id'];
                        $topics = selectOne('topics', ['id' => $topicId]);
                        // dump($topics);
                    ?>

                    <div class="card">
                        <div class="img_sec">

                            <div class="topic">
                                <p><a href="<?php echo BASE_URL . '/category.php?t_id=' . $topics['id'] . '&name=' . $topics['name']?>"><?php echo $topics['name'] ?></a></p>
                            </div>
                            <a href="post.php?id=<?php echo $post['id'] . '&title=' . $post['title']?>; ?>"><img src="<?php echo BASE_URL . '/assets/images/' . $post['image'] ?>" alt="<?php echo $post['title'] ?>"></a>
                        </div>
                        <div class="title_sec">
                            <a href="post.php?id=<?php echo $post['id'] . '&title=' . $post['title']?>; ?>">
                                <h2 class="title"><?php echo $post['title'] ?></h2>
                            </a>

                            <a href="post.php?id=<?php echo $post['id'] . '&title=' . $post['title']?>; ?>">
                                <p class="post_content">
                                    <?php echo substr($post['body'], 0, 120).'...'?>
                                </p>
                            </a>
                            <small>BY <a href="#"><span style="color:red; margin-right: 10px;"><?php echo $post['username'] ?></span></a><?php echo date('F j, Y', strtotime($post['created_at'])) ?></small>
                        </div>
                    </div>

                <?php endforeach; ?>
                <div class="more">
                    <a href="">More News</a>
                </div>
            </div>

        </div>
        <!-------------------------------- Right side ------------------------------------>
        <div class="right">
            <?php include("app/includes/side.php") ?>

        </div>
    </section>

</div>

<?php include(ROOT_PATH . "/app/includes/footer.php") ?>