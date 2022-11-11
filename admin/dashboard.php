<?php
require_once '../path.php';
include(ROOT_PATH . "/app/controllers/users.php");
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/admin.css">
  <title>Myron-Blog</title>

  <style>
    .submenu ul{
        display: none;
        position: absolute;
        background-color: white;
        padding: 5px 10px 5px 0px;
        transition: 2s ease-out;
      }
      .submenu ul li a{
        color: #040820;
        display: inline-block;
        margin-bottom: 10px;
        font-weight: bold;
      }
      .submenu ul li a:last-child{
        margin-bottom: 0px;
      }
      .submenu ul li a:hover{
        color: orangered

      }
      .handler{
        position: relative;
      }
      .handler:hover .submenu ul{
        display: block;
        top: 20px;
        
      }
  </style>
</head>

<body>

  <nav style="display: flex;">

    <div class="logo">
      <h3><a href="<?php echo BASE_URL . '/index.php'; ?>">MYRON-BLOG</a></h3>
    </div>

    <div class="links">

      <ul>
        <li><a href="<?php echo BASE_URL . '/admin/posts/index.php'; ?>">Manage Post</a></li>
        <li><a href="<?php echo BASE_URL . '/admin/users/index.php'; ?>">Manage User</a></li>
        <li><a href="<?php echo BASE_URL . '/admin/topics/index.php'; ?>">Manage Topic</a></li>
      </ul>

    </div>


    <div class="user">
      <ul>
        <?php if (isset($_SESSION['username'])) : ?>
          <li class="handler ">
            <a href=""><?php echo $_SESSION['username'] ?><span class="fa fa-user ml-1"></span></a>
            <div class="submenu">
              <ul style="top:30px; right:0px">
                <li><a href="<?php echo BASE_URL . '/logout.php' ?>"><span style="display: inline; margin-right:5px;" class="fa-solid fa-arrow-right-from-bracket"></span>Logout</a></li>
              </ul>
            </div>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </nav>


  <section >

    <h2 style="text-align: center ;">MyronBlog - Dashboard</h2>


  </section>

</body>

</html>