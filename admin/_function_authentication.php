<?php

require_once 'database.php';
require_once 'user.php';
require_once 'emailaddressvalidator.php';

/**
 * @param type $email_address
 * @param type $password
 * @return boolean
 */
function login($password) {
    $result = false;
    
    $email_address = mysql_real_escape_string($email_address);
    $password = mysql_real_escape_string($password);
    $salt = 'igCHI';
    $password = hash('sha256', $password . $salt);
    $sql = 'SELECT  _id
            FROM    user AS u
            WHERE   u.emailaddress = "' . $email_address . '"
            AND     u.password = "' . $password . '"';
    $result = mysql_query($sql);
    
    mysql_real_escape_string($password);
    if (!$result) {
        echo ('Could not successfully run query ($sql) from DB: ' . mysql_error());
        return false;
    } else {
        $row = mysql_fetch_row($result);
        $_id = $row[0]['_id'];
        $_SESSION['USER'] = $_id;
        return true;
    }
}

/**
 * @return boolean
 */
function logout() {
    return !session_destroy();
}
