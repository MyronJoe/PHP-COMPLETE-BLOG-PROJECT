<?php
require_once(ROOT_PATH . "/app/includes/session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Myron Blog Dashboard</title>
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="icon" href="../../assets/images/Mj-fav-icon.png"/>
    

    <style>
      .success{
        color: #155724!important;
        background-color: #d4edda!important;
        border-color: #c3e6cb!important;
      }
      .danger{
        color: #491217!important;
        background-color: #ffb9d1!important;
        padding:8px 10px;
        border-color: #491217!important;
      }
      .form-error{
        background-color: #ffb9d1;
        padding:8px 10px;
        border: 2px solid #491217;;
        margin-bottom: 1em;
      }
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
</head>
<body>
<nav style="display: flex;">
    <div class="logo">
      <h3><a href="<?php echo BASE_URL . '/index.php'; ?>">MYRON-BLOG</a></h3>
    </div>
    <div class="user">
      <ul>
        <?php if(isset($_SESSION['username'])): ?>
          <li class="handler ">
            <a href=""><?php echo $_SESSION['username'] ?><span class="fa fa-user ml-1"></span></a>
            <div class="submenu">
                <ul style="top:30px; right:0px">
                    <li ><a href="<?php echo BASE_URL . '/logout.php' ?>"><span style="display: inline; margin-right:5px;" class="fa-solid fa-arrow-right-from-bracket"></span>Logout</a></li>
                </ul>
            </div>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </nav>