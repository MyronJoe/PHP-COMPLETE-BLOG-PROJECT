<input type="checkbox" id="check1">
<label for="check1">
    <i class="fas fa-bars" id="btn"></i>
    <i class="fas fa-times" id="cancel"></i>
</label>
<div class="sidebar1">
    <header>Dashboard</header>
    <ul>
        <li><a href="<?php echo BASE_URL . '/admin/posts/index.php'; ?>"><i class="fas fa-qrcode"></i>Manage Post</a></li>
        <li><a href="<?php echo BASE_URL . '/admin/users/index.php'; ?>"><i class="fas fa-calendar-week"></i>Manage User</a></li>
        <li><a href="<?php echo BASE_URL . '/admin/topics/index.php'; ?>"><i class="fas fa-stream"></i>Manage Topic</a></li>
    </ul>
</div>