<?php

/**
 * <p>Select all the pages from the <code>comics_page</code> table.</p>
 * @return mysql result
 */
function page_select_all() {
    global $mysqli;
    $sql = 'SELECT   page.id, page.title, page.sequence_number, page.upload_date
            FROM     comics_page page
            ORDER BY page.sequence_number, page.upload_date';
   $result = $mysqli->query($sql);
   return $result;
}