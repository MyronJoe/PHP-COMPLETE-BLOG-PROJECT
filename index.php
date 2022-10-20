<?php
    require_once 'path.php';
    // session_start();
    include(ROOT_PATH . "/app/includes/header.php");
    include(ROOT_PATH . "/app/controllers/topics.php");
    // var_dump($_SESSION);
?>

    

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

                    <div class="card">

                        <div class="img_sec">
                            <a href="#">
                                <div class="Video_tag">

                                    <p><span class="fas fa-play"></p>
                                </div>
                                <img src="assets/images/NACOMES.jpeg" alt="NEWS">
                            </a>
                        </div>

                        <div class="title_sec">
                            <a href="#">
                                <h2 class="title">This is the title of this post</h2>
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

                    <div class="card">
                        <div class="img_sec">

                            <div class="topic">
                                <p><a href="#">Sports</a></p>
                            </div>
                            <a href="#"><img src="assets/images/images(56).jpg" alt="NEWS"></a>
                        </div>
                        <div class="title_sec">
                            <a href="#">
                                <h2 class="title">This is the title of this post</h2>
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