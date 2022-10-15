<?php require_once 'path.php'; ?>
<?php include(ROOT_PATH . "/app/includes/header.php") ?>

    <div class="content">

        <section>
            <!-------------------------------- Left side ------------------------------------>
            <div class="left">
                <!-------------------------------- category section ------------------------------------>
                <div class="Category">
                    <div class="card">
                        <div class="img_sec">

                            <div class="topic">
                                <p><a href="#">Entertainment</a></p>
                            </div>
                            <a href="#"><img src="assets/images/images(56).jpg" alt="NEWS"></a>
                        </div>
                        <div class="title_sec">
                            <a href="#">
                                <h2 class="title">This is the title of this post as you know</h2>
                            </a>

                            <a href="#">
                                <p class="post_content">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Quidem quas ut, veritatis
                                    placeat odio earum!
                                </p>
                            </a>
                            <small>BY <a href="#"><span style="color:red; margin-right: 10px;">JOE KACHI</span></a> Jul
                                2, 2022 | 13:22</small>
                        </div>
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