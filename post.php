
<?php require_once 'path.php';
include(ROOT_PATH . "/app/includes/header.php") ;
include(ROOT_PATH . "/app/controllers/posts.php");

if(isset($_GET['id'])){
    $post = selectOne('posts', ["id" => $_GET['id']]);
    // dump($post);
}

$pageTitle = $post['title'];
?>
<title><?php echo $pageTitle ?></title>

    <div class="content">

        <section>
            <!-------------------------------- Left side ------------------------------------>
            <div class="left">
                <!-------------------------------- Post section ------------------------------------>
                <div class="post_sec">
                    
                    <div class="post_topic">
                        <p>NEWS</p>
                    </div>
                    <div class="post_header">
                        <h2><?php echo $post['title'] ?></h2>
                    </div>
                    <div class="post_desc">
                        <div class="author">
                            <small>By <span style="color: red;">Joe Kachi</span></small>
                            <small><span style="margin: 0 3px 0 10px;" class="fas fa-clock"></span><?php echo date('F j, Y', strtotime($post['created_at'])) ?></small>
                        </div>
                        <div class="shear_it">
                            <ul>
                                <li><a href="#"><span class="fas fa-share"></span></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="post_body">
                        <div class="post_img">
                            <img style="height: 450px;" src="<?php echo BASE_URL . '/assets/images/' . $post['image'] ?>" alt="">
                        </div>

                        <div class="post_header">
                            <small style="font-size: 14px;"><?php echo $post['title'] ?></small>
                        </div>

                        <div class="post_cont"
                            style="line-height:23px; color:#4C4E4D; letter-spacing: 1px; font-size: 18px;">

                            <?php echo $post['body'] ?>

                        </div>

                        <div class="downloa_sec" style="margin: 35px 0;">
                            <p><strong>Listen and share your thought below:</strong></p>
                            <p style="margin: 25px 0;"><strong><audio src="audio/Dremo-Monaco-(TrendyBeatz.com).mp3"
                                        controls="controls"></audio></strong></p>

                            <p><a href=""><strong style="color: #040820; font-size: 20px;">DOWNLOAD MP3</strong></a></p>
                        </div>

                    </div>


                    <div id="M811623ScriptRootC1323864">
                    </div>
                    <script data-cfasync="false"
                        src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                    <script src="https://jsc.adskeeper.com/x/c/xclusivepop.com.1323864.js" async>
                    </script>


                    <div class="recomended">
                        <!-------------------------------- recomended section ------------------------------------>
                        <div class="recomend">
                            <div class="header_line">
                                <div class="header_title">
                                    <p><span>Recomended</span></p>
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
                                        <small>BY <a href="#"><span style="color:red; margin-right: 10px;">JOE
                                                    KACHI</span></a> Jul
                                            2, 2022 | 13:22</small>
                                    </div>
                                </div>
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
                                        <small>BY <a href="#"><span style="color:red; margin-right: 10px;">JOE
                                                    KACHI</span></a> Jul
                                            2, 2022 | 13:22</small>
                                    </div>
                                </div>
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
                                        <small>BY <a href="#"><span style="color:red; margin-right: 10px;">JOE
                                                    KACHI</span></a> Jul
                                            2, 2022 | 13:22</small>
                                    </div>
                                </div>
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
                                        <small>BY <a href="#"><span style="color:red; margin-right: 10px;">JOE
                                                    KACHI</span></a> Jul
                                            2, 2022 | 13:22</small>
                                    </div>
                                </div>
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
                                        <small>BY <a href="#"><span style="color:red; margin-right: 10px;">JOE
                                                    KACHI</span></a> Jul
                                            2, 2022 | 13:22</small>
                                    </div>
                                </div>
                            </div>
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