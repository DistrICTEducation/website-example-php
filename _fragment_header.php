<?php
function fragment_header($current_page) {
    $prefix = $current_page == 'index' ? '' : '../';
?>
<div>
    <h1>My Web Comic</h1>
</div>
<div id="nav-container">
    <ul>
        <li id="nav-index"><a href="<?php echo $prefix ?>">Index</a></li>
        <li id="nav-about"><a href="<?php echo $prefix ?>about">About</a></li>
        <li id="nav-admin"><a href="<?php echo $prefix ?>admin">Admin</a></li>
    </ul>
</div>
<?php } ?>
