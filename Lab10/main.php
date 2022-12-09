<?php
include 'styles.html';
?>
<?php
function test_symbs($text)
{
    $symbs = array(array(2));
    $l_text = strtolower($text);
    for ($i = 0; $i < strlen($l_text); $i++) {
        if (isset($symbs[$l_text[$i]][0]))
            $symbs[$l_text[$i]][0]++;
        else {
            $symbs[$l_text[$i]][0] = 1;
            $symbs[$l_text[$i]][1] = $l_text[$i];
        }
    }
    return $symbs;
}
function fetch_array_new($words)
{
    $aray = array(array(2));
    $index = 0;
    foreach ($words as $x) {
        if (!array_search($x, $aray)) {
            $aray[$index][0] = 1;
            $aray[$index][1] = $x;
            $index++;
        } else {
            for ($j = 0; $j < $index; $j++) {
                if ($aray[$j][1] == $aray[$index][1])
                    $aray[$index][0]++;
            }
        }
    }
    return $aray;
}
function anylize_text($text)
{
    $content = "";
    $content .= '<div class = "urtext">|' .  iconv("windows-1251", "utf-8",$text) . '|</div>
 <ul>
  <li>Количество символов: ' . strlen($text) . '<br>';
    $cifra = array(
        '0' => true, '1' => true, '2' => true, '3' => true, '4' => true,
        '5' => true, '6' => true, '7' => true, '8' => true, '9' => true
    );
    $symbol = array(
        "'" => true, '.' => true, ',' => true, '"' => true, '!' => true,
        '?' => true, ';' => true, ':' => true, '#' => true
    );
    $count_int = 0;
    $word = '';
    $words = array();
    $symbols = test_symbs($text);
    $countUp = 0;
    $countLow = 0;
    $spaces = 0;
    $punctuation = 0;
    echo iconv("windows-1251", "utf-8",$text[0]), strtolower(iconv("windows-1251", "utf-8",$text[0]));
    for ($i = 0; $i < strlen($text); $i++) {
        if (array_key_exists($text[$i], $symbol))
            $punctuation++;
        if ( $text[$i] == mb_strtolower($text[$i])) $countLow++;
        else $countUp++;
        if (array_key_exists($text[$i], $cifra))
            $count_int++;
        if ($text[$i] == ' ')
            $spaces++;
        if ($text[$i] == ' ' || $i == strlen($text) - 1 || $text[$i] == '.' || $text[$i] == ',' || $text[$i] == ';') {
            if ($word) {
                if (isset($words[$word]))
                    $words[$word]++;
                else {
                    $words[$word] = 1;
                }
            }
            $word = '';
        } else $word .= $text[$i];
    }
    $content .= '
 <li> Количество букв:' . strlen($text) - $count_int - $punctuation - $spaces  . '</li>
 <li> Количество строчных букв: ' . $countLow . '</li>
 <li> Количество заглавных букв: ' . $countUp . '</li>
 <li> Количество знаков препинания: ' . $punctuation . '</li>
 <li> Количество цифр:' . $count_int . '</li>
 <li> Количество слов: ' . count($words) . '</li>
 <li> Количество вхождений каждого символа текста:<br>';
    krsort($symbols);
    $content .= '<ul>';
    
    $symbols = array();
    for ($i = 0; $i < strlen($text); $i++) {
        array_push(
            $symbols,
            strtolower(substr($text, $i, 1))
        );
    }
    $unique_symbols = array_unique($symbols);
    $unique_symbols_freq = array();

    foreach ($unique_symbols as $symbol) {$unique_symbols_freq[$symbol] = 0;}
    foreach ($symbols as $symbol) {$unique_symbols_freq[$symbol]++;}
    foreach ($unique_symbols_freq as $unique_symbol => $frequency) {
        if ($unique_symbol == " ") $unique_symbol = "'space'";
        $content .= '<li>'.iconv("windows-1251", "utf-8",$unique_symbol).')'.$frequency.'</li>';
    }
    $content .= '</ul>';
    $content .= '</li>';
    //ksort($words)

    $content .= '<li> Отсортированный список всех слов в тексте и количество их вхождений';
    $content .= '<ul>';
    $words = explode(" ",preg_replace("/[^a-zA-Zа-яА-Я]/u", " ", iconv("windows-1251", "utf-8",$text)));
    $words = array_filter($words);
    $unique_words = array_unique($words);
    $unique_words_freq = array();
    foreach ($unique_words as $unique_word) {$unique_words_freq[$unique_word] = 0;}
    foreach ($words as $word) {$unique_words_freq[$word]++;}
    ksort($unique_words_freq);

    foreach ($unique_words_freq as $unique_word => $frequency) {
        $content.= '<li>'.$unique_word.') '.$frequency.'</li>';
    }
    $content .= '</ul>';
    $content .= '</li>';
    echo $content;
}

if (isset($_POST['data']) && $_POST['data']) {
    //anylize_text($_POST['data']);
    anylize_text(iconv("utf-8", "windows-1251", $_POST['data']));
} else echo '<div class="error"> Нет текста для анализа</div>';
echo '<a href = "/index.html">Другой анализ текста</a>'
?>