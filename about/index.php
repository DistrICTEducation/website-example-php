<?php
    include_once './../_fragment_header.php';
    include_once './../_fragment_footer.php';
    include_once './_fragment_about.php';
    include_once './../_php/_config_definitions.php';
    
    $page_name = 'about';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo PAGE_TITLE; ?></title>
    </head>
    <body>
<?php
fragment_header($page_name);
fragment_about();
fragment_footer();
?>
    </body>
</html>
