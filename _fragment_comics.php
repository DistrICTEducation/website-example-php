<?php

include_once './_php/_config_database.php';
include_once './_php/_function_database_connection.php';
include_once './_php/_model_page.php';


function fragment_comics()
{
?>
<div id="comic-view">
<?php
    open_database_connection();

    if ($result = page_select_all())
    { 
        while($obj = $result->fetch_object())
        {
            //$obj->sequence_number; $obj->upload_date;
?>
    <div>
        <img src="_img/<?php echo $obj->id ?>.jpg" alt="<?php echo $obj->title?>" height="150px" id="<?php echo $obj->id ?>" class="comic-page"/>
    </div>
<?php
        }
    }
    
    $result->close();
    unset($obj);
    
    close_database_connection();
?>
</div>
<?php
}
?>