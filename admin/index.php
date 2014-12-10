<?php
    include_once './../_fragment_header.php';
    include_once './../_fragment_footer.php';
    include_once './_fragment_login.php';
    include_once './_fragment_console.php';
    $page_name = 'about';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Site administration</title>
    </head>
    <body>
<?php
fragment_header($page_name);

// Page contents depend on whether or not the user has been authenticated.
if (! $_SESSION["user"])
{
    fragment_login();
}
else
{
    fragment_console();
}

fragment_footer();
?>
    </body>
</html>
