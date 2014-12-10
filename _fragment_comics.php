<?php
function fragment_comics()
{
?>
<div id="comic-view">
<?php
    for ($id = 0; $id < 4; $id++)
    {
?>
    <div>
        <img src="_img/<?php echo $id ?>.jpg" alt="<?php echo $id ?>" height="150px"/>
    </div>
<?php
    }
?>
</div>
<?php
}
?>