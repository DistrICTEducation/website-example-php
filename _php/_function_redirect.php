<?php
/**
 * Call this function in the PHP web page's header to redirect the user to
 * the given URL.
 * @param type $path
 */
function redirect($path) {
    header('Location: ' . $path);
}
