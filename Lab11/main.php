<?php

function outNumAsLink($x, $type) // функция ВЫВОДИТ ЧИСЛО КАК ССЫЛКУ
{
    if ($type == 'DIV') {
        if ($x <= 9)
            return '<a href=main.php?html_type=DIV&content=' . $x . '> ' . $x . '</a>';
        else
            return $x;
    } else {
        if ($x <= 9)
            return '<a href=main.php?html_type=TABLE&content=' . $x . '> ' . $x . '</a>';
        else
            return $x;
    }
}
function outRow($n)
{
    for ($i = 2; $i <= 9; $i++) // цикл со счетчиком от 2 до 9.
        echo outNumAsLink($n, 'DIV') . 'x' . outNumAsLink($i, 'DIV') . '=' . outNumAsLink($i * $n, 'DIV') . '<br>';
}
function outTableForm()
{
    if (!isset($_GET['content'])) {
        echo '<table>';
        echo '<tr>';
        echo '<th> Первое число </th>';
        echo '<th> x </th>';
        echo '<th> Второе число </th>';
        echo '<th> = </th>';
        echo '<th> Результат </th>';
        echo '</tr>';
        for ($i = 2; $i <= 9; $i++) {

            for ($n = 2; $n <= 9; $n++) {
                echo '<tr>';
                echo '<th>' . outNumAsLink($i, 'TABLE') . '</th>';
                echo '<th> x </th>';
                echo '<th>' . outNumAsLink($n, 'TABLE') . ' </th>';
                echo '<th> = </th>';
                echo '<th>' . outNumAsLink($i * $n, 'TABLE') . '</th>';
                echo '</tr>';
            }
        }
    } else {
        echo '<table>';
        echo '<tr>';
        echo '<th> Первое число </th>';
        echo '<th> x </th>';
        echo '<th> Второе число </th>';
        echo '<th> = </th>';
        echo '<th> Результат </th>';
        echo '</tr>';

        for ($n = 2; $n <= 9; $n++) {
            echo '<tr>';
            echo '<th>' . outNumAsLink($_GET['content'], 'TABLE') . '</th>';
            echo '<th>' . outNumAsLink($n, 'TABLE') . ' </th>';
            echo '<th>' . outNumAsLink($_GET['content'] * $n, 'TABLE') . '</th>';
            echo '</tr>';
        }
    }
    echo '</table>';
}
function outDivForm()
{
    // если параметр content не был передан в программу
    if (!isset($_GET['content'])) {
        for ($i = 2; $i < 10; $i++) // цикл со счетчиком от 2 до 9
        {
            echo '<div class="ttRow">'; // оформляем таблицу в блочной форме
            outRow($i); // вызывем функцию, формирующую содержание
            // столбца умножения на $i (на 4, если $i==4)
            echo '</div>';
        }
    } else {
        echo '<div class="ttRow">'; // оформляем таблицу в блочной форме
        outRow($_GET['content']); // выводим выбранный в меню столбец
        echo '</div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet" />
    <title>Lab11</title>
</head>

<body>
    <header>
        <h1>Сыров Максим</h1>
        <h3>Лабораторная работа 11</h3>
        <div id='main_menu'><?php
                            echo '<ul class = "horizontal-list">';
                            echo '<li><a href="main.php?html_type=TABLE';
                            if (isset($_GET['content']))
                                echo '&content=' . $_GET['content'] . '"';
                            echo '"';
                            if (array_key_exists('html_type', $_GET) && $_GET['html_type'] == 'TABLE')
                                if (!array_key_exists('try', $_GET)) {
                                    echo ' class="selected"';
                                }
                            echo '>Табличная форма</a></li>';
                            echo '<a href="main.php?html_type=DIV';
                            if (isset($_GET['content']))
                                echo '&content=' . $_GET['content'] . '"';
                            echo '"';
                            if (array_key_exists('html_type', $_GET) && $_GET['html_type'] == 'DIV')
                                echo ' class="selected"';
                            echo '>Блочная форма</a></li></ul>';
                            ?>
        </div>
    </header>
    <main>
        <div id="product_menu">
            <?php
            
            if (!isset($_GET['html_type']) && !isset($_GET['content'])) {
                header("Location: main.php?html_type=TABLE&try=1");
            }
            echo '<ul>';
            echo '<li><a href=main.php'; // начало ссылки ВСЯ ТАБЛИЦА УМНОЖНЕНИЯ
            if (!isset($_GET['content'])) // если в скрипт НЕ был передан параметр content
                echo ' class="selected"'; // ссылка выделяется через CSS-класс
            echo '>Вся таблица умножения</a></li>'; // конец ссылки
            for ($i = 2; $i <= 9; $i++) {
                if (isset($_GET['html_type']))
                    echo '<li><a href="main.php?html_type=' . $_GET['html_type'] . '&content=' . $i . '" '; // начало ссылки
                echo '<li><a href="main.php?content=' . $i . '" '; // начало ссылки
                /* echo '<li><a href="main.php?html_type=' . $_GET['html_type'] . '&content=' . $i . '" '; // начало ссылки*/
                /*|*/
                if (isset($_GET['content']) && $_GET['content'] == $i)
                    echo ' class="selected"'; // ссылка выделяется через CSS-класс
                /*|*/
                echo '>Таблица умножения на ' . $i . '</a></li>'; // конец ссылки
            }
            echo '</ul>';
            ?>
            <div class="contented">
                <?php
                if (isset($_GET['html_type']) && $_GET['html_type'] == 'TABLE' || (isset($_GET['try']) && $_GET['try'] == '1')) {
                    outTableForm(); // выводим таблицу умножения в табличной форме
                }
                if (isset($_GET['html_type']) && $_GET['html_type'] == 'DIV') {
                    outDivForm(); // выводим таблицу умножения в блочной форме
                }
                if (!isset($_GET['html_type'])) {
                    echo 'Выберите тип верстки';
                }
                ?>
            </div>
        </div>

    </main>
    <footer style="<?php if (isset($_GET['html_type']) && $_GET['html_type'] == 'TABLE' && !isset($_GET['content']))
                        echo '
    position: relative;
    top:2200px;';
                    else if (isset($_GET['html_type']) && $_GET['html_type'] == 'DIV') {
                        echo 'position: relative;
        top:1000px;';
                    } else {
                        echo 'position: relative;
        top:750px;';
                    } ?>">
        <?php
        $s = '';
        if (isset($_GET['html_type']) && $_GET['html_type'] == 'TABLE')
            $s .= 'Табличная верстка. '; // строка с информацией
        else if (isset($_GET['html_type']))
            $s .= 'Блочная верстка. ';
        if (!isset($_GET['content']))
            $s .= 'Таблица умножения полностью. ';
        else
            $s .= 'Столбец таблицы умножения на ' . $_GET['content'] . '. ';
        echo $s . date('d.Y.M h:i:s');
        ?>
    </footer>
</body>

</html>