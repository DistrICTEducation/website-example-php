<?php
function fragment_console() {
    $number_of_comics = 10;
    
    fragment_addcomic();
    
    if ($number_of_comics > 0)
    {
        fragment_addpage();
    }
    else
    {
        echo '<p>You need to have at least one comic before you can add pages.</p>';
    }
}

function fragment_addcomic() {
?>
<form action="" method="POST" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Title</td>
            <td><input type="text" name="title"/></td>
        </tr>
        <tr>
            <td>Summary</td>
            <td></td>
        </tr>
    </table>
    <input type="submit" name="submit" value="Submit">
</form>
<?php
}

function fragment_addpage() {
?>
<form action="" method="POST" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Title</td>
            <td><input type="text" name="title"/></td>
        </tr>
        <tr>
            <td>Part of</td>
            <td>
                <select>
                    <!-- drop down menu of all comics (value == id; option == title) -->
<?php
    for ($id = 0; $id < 4; $id++)
    {
?>
                    <option value="<?php echo $id ?>">Comic <?php echo ($id + 1) ?></option>
<?php
    }
?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Filename</td>
            <td><input type="file" name="file" id="file"/></td>
        </tr>
    </table>
    <input type="submit" name="submit" value="Submit">
</form>
<?php
}
?>