<div class="new-question">
    <form method="post" action="main-form.php">
        <label for="questionName">Введите текст вопроса</label><br>
        <input type="text" name="questionName" id="questionName" placeholder="Введите текст вопроса"><br>

        <label for="questionType">Тип поля вопроса</label><br>
        <select name="questionType">
                <option value="1" selected>Текстовое</option>
                <option value="2">Текстовое</option>
                <option value="3">Radiobutton</option>
                <option value="4">Checkbox</option>
        </select><br>
        <?php
        
            if (!isset($_POST['questionType']))
                echo 'Не выбран тип вопроса';
            else{
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
        <button type="submit" name="addQuestion">Добавить вопрос</button>

        

    </form>  
</div>