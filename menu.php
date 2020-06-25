<div id="menu">
<?php
    if( !isset($_GET['p']) ) 
        $_GET['p']='viewer';
    echo '<a href="?p=viewer"'; 
    if( $_GET['p'] == 'viewer' ) 
        echo ' class="selected"'; 
    echo '>Просмотр записей</a>';

    echo '<a href="?p=main-form"';
    if( $_GET['p'] == 'main-form' ) echo ' class="selected"';
        echo '>Главная форма</a>';
   
    echo '<a href="?p=add-question"'; 
    if( $_GET['p'] == 'add-question' ) 
        echo ' class="selected"';
    echo '>Добавить вопрос</a>';

?>
</div>