<div class="new-question">
    <form method="post" action="main-form.php">
        <label for="questionName">Текст вопроса</label><br>
        <input type="text" name="questionName" id="questionName" placeholder="Введите текст вопроса"><br>

        <label for="questionType">Тип поля вопроса</label><br>
        <select name="questionType">
                <option value="1" selected>Текстовое</option>
                <option value="2">Большой текст</option>
                <option value="3">Radiobutton</option>
                <option value="4">Checkbox</option>
        </select><br>
        <?php
        
            if (isset($_POST['questionType']))
            {
                switch ($_POST['questionType']) {
                    case 1:
                      $questionType = 'Текстовое';
                    //   echo '<input type="text" name="inputText">';
                      break;
                    case 2:
                      $questionType = "Большой текст";
                    //   echo '<input type="textarea" name="inputBigText">';
                      break;
                    case 3:
                      $questionType = "Radiobutton";
                    //   echo '<input type="radio" name="inputradio">';
                      break;
                    case 4:
                      $questionType = "Checkbox";
                    //   echo '<input type="checkbox" name="inputCheckbox">';
                      break;
                  }
            }
?>

<button type="submit" name="addQuestion" value="Далее">Далее</button>

<?php
    if (isset($_POST['submit']) && $_POST['submit']=='Далее'){
        
    }
?>



<!-- 
                <label>Количество ответов</label><br>
                <input type="number" name="ansCont">


            if ($_POST['ansCont']<1)
                echo 'Неправильное количество ответов';
            else{
                if ($questionType=="Radiobutton"){
                  for ($i=1;$i<$_POST['ansCont'];$i++){
                      echo str_repeat('<input type="text" name="answer'+$i+'">', $_POST['ansCont']);
                  }  
                }
            }
         -->

        

        
     
        

    </form>  
</div>