<?php
function fragment_login($action)
{
?>
<form action="<?php echo $action; ?>" method="POST">
    <table>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username"/></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password"/></td>
        </tr>
    </table>
    <input type="submit"/>
</form>
<?php
}
?>