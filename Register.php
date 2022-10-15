<?php require_once 'path.php'; ?>
<?php include(ROOT_PATH . "/app/includes/header.php") ?>

    <div class="container">

        <div>
            <div class="form ">
                <div class="top">
                    <h4 class="m-0 text-uppercase font-weight-bold text-light">Register</h4>
                </div>
                <form method="POST" action="" novalidate class="form_sec" style="padding: 2.5em;">



                    <div>
                        <label for="name">Name *</label>
                        <input type="text" class="form-control" id="name">
                    </div>


                    <div>
                        <label for="email">Email *</label>
                        <input type="email" class="form-control" id="email">
                    </div>


                    <div>
                        <label for="Password">Password *</label>
                        <input type="password" class="form-control" id="Password">
                    </div>


                    <div>
                        <label for="Confirm Password">Confirm Password *</label>
                        <input type="password" class="form-control" id="Confirm Password">
                    </div>



                    <div class="form-group mb-0">
                        <input type="submit" value="sign up" class="btn">
                    </div>

                    <div>
                        <small style="font-size: 11px;">Already have an account? <a href="<?php echo BASE_URL . '/login.php'?>">Sing In</a></small>
                    </div>
                </form>

            </div>
        </div>

    </div>

    <?php include(ROOT_PATH . "/app/includes/footer.php") ?> 