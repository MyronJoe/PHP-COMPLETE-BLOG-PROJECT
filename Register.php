<?php require_once 'path.php'; ?>
<?php include(ROOT_PATH . "/app/controllers/users.php") ?>
<?php include(ROOT_PATH . "/app/includes/header.php") ?>


    <div class="container">

        <div>
            <div class="form ">
                <div class="top">
                    <h4 class="m-0 text-uppercase font-weight-bold text-light">Register</h4>
                </div>

                <form method="POST" action="Register.php" novalidate class="form_sec" style="padding: 1.5em 2.5em 2.5em;">

                    <?php if(count($errors) > 0): ?>
                        <div class="form-error">
                            <?php foreach($errors as $error): ?>
                                <p><?php echo $error ?></p>
                            <?php endforeach ?>
                        </div>
                    <?php endif; ?>
                    
                    <div>
                        <label for="name">Name *</label>
                        <input type="text" class="form-control" value="<?php echo $username ?>" id="name" name="username">
                    </div>


                    <div>
                        <label for="email">Email *</label>
                        <input type="email" class="form-control"  value="<?php echo $email ?>" id="email" name="email">
                    </div>


                    <div>
                        <label for="Password">Password *</label>
                        <input type="password" class="form-control" value="<?php echo $password ?>" id="Password" name="password">
                    </div>


                    <div>
                        <label for="Confirm Password">Confirm Password *</label>
                        <input type="password" class="form-control" value="<?php echo $confirmpass ?>" id="Confirm Password" name="passwordconfirm">
                    </div>



                    <div class="form-group mb-0">
                        <input type="submit" name="register-btn" value="sign up" class="btn">
                    </div>

                    <div>
                        <small style="font-size: 11px;">Already have an account? <a href="<?php echo BASE_URL . '/login.php'?>">Sing In</a></small>
                    </div>
                </form>

            </div>
        </div>

    </div>

    <?php include(ROOT_PATH . "/app/includes/footer.php") ?> 