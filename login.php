<?php 
    require_once 'path.php';
    include(ROOT_PATH . "/app/controllers/users.php");
    include(ROOT_PATH . "/app/includes/header.php");
    // include(ROOT_PATH . '/app/helpers/middlewear.php');
    guestOnly();
?>

    <div class="container">

        <div>
            <div class="form ">
                <div class="top">
                    <h4>Login</h4>
                </div>
                <form method="POST" action="login.php" novalidate class="form_sec" style="padding: 1.5em 2.5em 2.5em;">

                    <?php include(ROOT_PATH . "/app/helpers/formerrors.php") ?>

                    <div>
                        <label for="email">Email *</label>
                        <input type="email" class="form-control" id="email" value="<?php echo $email ?>" name="email">
                    </div>

                    <div>
                        <label for="Password">Password *</label>
                        <input type="password" class="form-control" value="<?php echo $password ?>" id="Password" name="password">
                    </div>

                    <div class="form-group mb-0">
                        <input type="submit" name="login-btn" value="Login" class="btn">
                    </div>

                    <div>
                        <small style="font-size: 11px;">You dont have an account? <a href="<?php echo BASE_URL . '/register.php'?>">Sing up</a></small>
                    </div>
                </form>

            </div>
        </div>

    </div>
    
    <?php include(ROOT_PATH . "/app/includes/footer.php") ?> 