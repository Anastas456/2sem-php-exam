<form name="main-form" method="post" action="?p=main-form">
    <label for="num1">num1</label>
    <input type="number" name="num1" id="num1" placeholder="num1" required>

    <label for="num2">num2</label>
    <input type="number" name="num2" id="num2" placeholder="num2" required>

    <label for="text1">text1</label>
    <input type="text" name="text1" id="text1" placeholder="text1" required>

    <label for="text2">text2</label>
    <input type="text" name="text2" id="text2" placeholder="text2" required><br>
    
    <label for="radio">radio</label><br>
    <input type="radio" name="radio" value="radio1">radio1<br>
    <input type="radio" name="radio" value="radio2">radio2<br>

    <label for="checkbox">checkbox</label><br>
    <input type="checkbox" name="checkbox[1]" value="checkbox1">checkbox1<br>
    <input type="checkbox" name="checkbox[2]" value="checkbox2">checkbox2<br>
    <input type="checkbox" name="checkbox[3]" value="checkbox3">checkbox3<br> 
   
    <input type="submit" name="button" value="Добавить запись">
</form>
<?php
$password='123456789';
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    if( isset($_POST['button']) && $_POST['button']== 'Добавить запись')
    {
        $mysqli = mysqli_connect('std-mysql', 'std_949', $password, 'std_949');
        if( mysqli_connect_errno() ) 
            echo 'Ошибка подключения к БД: '.mysqli_connect_error(); 
        
        if ($_POST['num2']<0){
            echo 'num2 должно быть положительным';
            exit();
        }
        if ( (strlen($_POST['text1'])>30) || (strlen($_POST['text1'])<1)){
            echo 'text1 должен содержать от 1 до 30 симвоов';
            exit();
        }
        if ( (strlen($_POST['text2'])>255) || (strlen($_POST['text2'])<1)){
            echo 'text2 должен содержать от 1 до 255 симвоов';
            exit();
        }

        if (!isset($_POST['radio'])){
            echo 'не выбран радиобатон';
            exit();
        }
        else{
            $radio="'".htmlspecialchars($_POST['radio'])."'";
        }
        
       
        if (!isset($_POST['checkbox'])){
            echo 'не выбран checkbox';
            exit();
        }
        else{
            $checkbox=
        }
        // $check1="";
        // $check2="";
        // $check3="";
        // if ($_POST['checkbox1']=="")
        //     $checkbox1="";
        // else{
        //     $checkbox1="'".htmlspecialchars($_POST['checkbox1'])."', ";
        //     $check1="checkbox1, ";
        // }
        // if ($_POST['check2']=="")
        //     $checkbox2="";
        // else{
        //     $checkbox2="'".htmlspecialchars($_POST['checkbox2'])."', ";
        //     $check2="checkbox2, ";
        // }
        // if ($_POST['check3']=="")
        //     $checkbox3="";
        // else{
        //     $checkbox3="'".htmlspecialchars($_POST['checkbox3'])."', ";
        //     $check3="checkbox3, ";
        // }


        $sql_res=mysqli_query($mysqli, "INSERT INTO 2sem_php_exam (num1, num2, text1, text2, radio, checkbox) VALUES ('".    //$check1 $check2 $check3
        htmlspecialchars($_POST['num1'])."', '".
        htmlspecialchars($_POST['num2'])."', '".
        htmlspecialchars($_POST['text1'])."', '".
        htmlspecialchars($_POST['text2'])."', $radio);");
        //$checkbox1 $checkbox2 $checkbox3

        if( !$sql_res )
            echo '<div>Запись не добавлена</div>';
        else
            echo '<div>Запись добавлена</div>';
        mysqli_close($mysqli);    
    }
        
?>