<?php
    include_once './_fragment_header.php';
    include_once './_fragment_comics.php';
    include_once './_fragment_footer.php';
    include_once './_php/_config_definitions.php';
    
    $page_name = 'index';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo PAGE_TITLE; ?></title>
        <script src="_js/lib/jquery/jquery-1.11.1.js" lang="javascript"></script>
    </head>
    <body>
<?php
// TODO : refactor to template? header - %content% - footer (or load content via JavaScript)
fragment_header($page_name);
fragment_comics();
fragment_footer();
?>
    </body>
</html>
