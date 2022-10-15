<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Myron Blog</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <div class="containerr">

        <div class="hero">
            <div class="logo">
                CodingNepal
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
                <div class="nav-items">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Blogs</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Feedback</a></li>
                </div>
                <div class="search-icon">
                    <!-- <span class="fas fa-search"></span> -->
                </div>
            </nav>
            <form action="#" class="nav_form mobile_nav">
                <input type="search" class="search-data" placeholder="Search" required>
                <button type="submit" class="fas fa-search"></button>
            </form>

        </div>
    </div>

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
                        <small style="font-size: 11px;">Already have an account? <a href="#">Sing In</a></small>
                    </div>
                </form>

            </div>
        </div>

    </div>

    <div class="footer containerr">


        <div class="social-icon">
            <li><a href="#" class="fas fa-search"></a></li>
            <li><a href="#" class="fas fa-times"></a></li>
            <li><a href="#" class="fas fa-calculator"></a></li>
            <li><a href="#" class="fas fa-clock"></a></li>
        </div>

        <div class="footer-items">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Blogs</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Feedback</a></li>
        </div>

        <p>KorrectNaija &copy 2022</p>
    </div>
    <script src="js/main.js"></script>
    <script>

    </script>
</body>

</html>