<div id="img_container"><img src="" width="700px"></div>
<div class="images-list">
    <?php
    echo "<table>"; // Начинаем таблицу
    $k = 0; // Вспомогательный счётчик для перехода на новые строки
    $cols = 3; // Количество столбцов в будущей таблице с картинками
    for ($i = 0; $i < count($files); $i++) { // Перебираем все файлы
        if (($files[$i] != ".") && ($files[$i] != "..")) { // Текущий каталог и родительский пропускаем
            if ($k % $cols == 0) echo "<tr>"; // Добавляем новую строку
            echo "<td>"; // Начинаем столбец
            $path = $dir.$files[$i]; // Получаем путь к картинке
            echo "<div class='in'>"; // Делаем ссылку на картинку
            echo "<img src='$path' alt='' width='150' />"; // Вывод превью картинки
            echo "</div>"; // Закрываем ссылку
            echo "</td>"; // Закрываем столбец
            /* Закрываем строку, если необходимое количество было выведено, либо данная итерация последняя */
            if ((($k + 1) % $cols == 0) || (($i + 1) == count($files))) echo "</tr>";
            $k++; // Увеличиваем вспомогательный счётчик
        }
    }
    echo "</table>"; // Закрываем таблицу
    ?>
    <p>
<!--        <form action="gallery" method="post" enctype='multipart/form-data'>-->
        <!--            <input type='file' name='file'>-->
        <!--            <input type="submit" value="Загрузить"/>-->
        <?php
                    echo Form::open('pages/gallery', array('enctype'=>'multipart/form-data'));
            echo Form::file('file', array('id'=>'file'));
            echo Form::submit('submit', 'Загрузить');
            echo Form::close();
        ?>
    </p>
</div>