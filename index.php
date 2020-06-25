<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8" >
        <title>Экзамен</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    <?php
    require 'menu.php'; 

    if( $_GET['p'] == 'viewer' )
    { 
        include 'viewer.php'; 
        if( !isset($_GET['pg']) || $_GET['pg']<0 ) 
            $_GET['pg']=0;
        echo getList( $_GET['pg']);
    } else
    if( $_GET['p'] == 'main-form' ) { 
        include 'main-form.php'; 
    } 
    // else
    // if( $_GET['p'] == 'edit' ) { 
    //     include 'edit.php';
    //  } else
    // if( $_GET['p'] == 'delete' ) {
    //     include 'delete.php'; 
    // } 

    ?>
</body>
</html>