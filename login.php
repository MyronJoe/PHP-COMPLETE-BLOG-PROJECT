<?php include("app/includes/header.php") ?>

    <div class="container">

        <div>
            <div class="form ">
                <div class="top">
                    <h4>Login</h4>
                </div>
                <form method="POST" action="" novalidate class="form_sec" style="padding: 2.5em;">

                    <div>
                        <label for="email">Email *</label>
                        <input type="email" class="form-control" id="email">
                    </div>

                    <div>
                        <label for="Password">Password *</label>
                        <input type="password" class="form-control" id="Password">
                    </div>

                    <div class="form-group mb-0">
                        <input type="submit" value="Login" class="btn">
                    </div>

                    <div>
                        <small style="font-size: 11px;">You dont have an account? <a href="register.php">Sing up</a></small>
                    </div>
                </form>

            </div>
        </div>

    </div>
    
<?php include("app/includes/footer.php") ?> 