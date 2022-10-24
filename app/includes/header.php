<?php 
require_once(ROOT_PATH . "/app/includes/session.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .header_titles {
        font-size: 30px;
    }
    </style>
</head>

<body>

    <div class="containerr">

        <div class="hero">
            <div class="logo">
                <a href="<?php echo BASE_URL . '/index.php' ?>">Myron Blog</a>
            </div>
            <nav>
                <div>
                    <div class="cancel-icon">
                        <span class="fas fa-times"></span>
                    </div>
                    <div class="menu-icon">
                        <span class="fas fa-bars"></span>
                    </div>
                </div>
                <div class="search-icon">
                    <!-- <span class="fas fa-search"></span> -->
                </div>
                <div class="nav-items">
                    <li><a href="<?php echo BASE_URL . '/index.php' ?>">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Blogs</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Feedback</a></li>
                </div>

                <div class="user_handel">

                    <!-- checks if a user is logged in inorder to display the user details -->
                    <?php if(isset($_SESSION['id'])): ?>
                        <li class="handler"><a href="#"><?php echo $_SESSION['username']; ?><i style="margin-left: 5px;" class="fas fa-user"></i></a>
                            <div class="submenu">
                                <ul>
                                    <!-- checks if a user is an admin -->
                                    <?php if($_SESSION['admin']): ?>
                                        <li class="margin-bottom: 15px;"><a href="<?php echo BASE_URL . '/admin/dashboard.php' ?>"><span style="display: inline; margin-right:5px;" class="fa-solid fa-table-columns"></span>Dashboard</a></li>
                                    <?php endif; ?>
                                    <!-- <li><a href=""><span style="display: inline; margin-right:5px;" class="fas fa-user"></span>Profile</a></li> -->

                                    <li><a href="<?php echo BASE_URL . '/logout.php' ?>"><span style="display: inline; margin-right:5px;" class="fa-solid fa-arrow-right-from-bracket"></span>Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    <?php else: ?>
                        <!-- if the user is not loggrd in, it displays the rgister link -->
                        <li><a href="<?php echo BASE_URL . '/register.php' ?>">Sing Up<span style="display: inline; margin-left:5px;" class="fa fa-user"></span> </a></li>
                    <?php endif; ?>

                
                </div>
                


            </nav>
            <form action="search.php" method="post" class="nav_form mobile_nav">
                <input type="search" class="search-data" placeholder="Search..." name="search-term">
                <button type="submit" class="fas fa-search"></button>
            </form>

        </div>
    </div>