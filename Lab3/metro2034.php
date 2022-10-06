<?php
$name = 'metro2034';
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php 
     echo  $name ?></title>
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap"
      rel="stylesheet"
    />
    </head>
    <body>
        <header style="height:150px ;">
            <aside class="links">
            <a href="<?php	
                $id='Метро 2033';
                $link='metro2033.php';
                $current_page=true;	
                echo $link;	?>" 
                class = "<?php	
                if( $current_page )	
                  echo 'linkstyle';?>">  
                <?php echo $id;?>
              </a>
                <a href="pics/map.jpg"><?php
                   $s = date('s');	
                   $os = $s % 2;	
                   if( $os === 0 )	
                   $name='pics/metrologo.png'; 
                   else	
                   $name='pics/logometro.png';
                   echo '<img class = "logo" src="'.$name.'" >'; 
                  ?></a>
                <a href="<?php	
                $id='Метро 2035';
                $link='metro2035.php';
                $current_page=true;	
                echo $link;	?>" 
                class = "<?php	
                if( $current_page )	
                  echo 'linkstyle';?>">  
                <?php echo $id;?>
              </a>
             </aside>
             <div class = "hdr">
               <h1>Сыров М.Е. Лабораторная работа 3</h1>
               <img class="mainjpg1" src="pics/2034main.png" alt="">
               <h2>Метро 2034</h2>
            </div>
        </header>
        <main>
            <div class="discription" style="float:right;">
                <h2>Описание</h2>
                <h4>Метро 2034 — постапокалиптический роман Дмитрия Глуховского, 
                    сиквел романа «Метро 2033», описывающего жизнь людей в 
                    Московском метрополитене после ядерной войны.
                    Сюжет перемещается из центральной части метро, описанной в романе 
                    «Метро 2033» за пределы Кольцевой линии (Ганзы). 
                    Главной в сюжете становится станция «Севастопольская», 
                    которая является самой южной обитаемой точкой метро. 
                    аждый день её жители вынуждены отбивать атаки монстров —
                    мутантов, нападающих со стороны станции «Чертановская»</h4>
            </div>
            <div class="authorimg">
               <figure>
                  <img class= "author" src="pics/author.jpg" alt="Дмитрий Глуховский - автор"><br>
                  <figcaption><h3>Дмитрий Глуховский</h3></figcaption>
               </figure>
            </div>
            <div class = "mainthing">
             <h2>Персонажи</h2>
             <div class="dics">
              <h4>
                <h3>Гомер</h3><br>
                Один из жителей станции «Севастопольская». 
                До судного дня работал помощником машиниста. 
                Сознавая свою бесполезность в военном деле, он посвятил
                 остаток своей жизни летописи и архивированию, постепенно 
                 собирая все уцелевшие источники информации, дабы сложить хотя
                  бы приблизительную картину исторической эпохи метро. В одной
                   из последних увидевших свет глав Гомер задался целью написать 
                   роман, некую эпитафию всему человечеству, позволившую бы как можно
                    яснее отразить все его отношение к происшедшим вещам, и заодно лишний
                     раз вспомнить о безвозвратно утраченном мире.
                     <img class = "pici" src="pics/homer.jpg" alt=""><br>
                <h3>Хантер</h3><br>
                Один из второстепенных героев предыдущей книги «Метро 2033». 
                В «Метро 2034» он играет одну из главных ролей в сюжете, выступая
                 в роли бригадира одного из дозорных отрядов «Севастопольской». 
                 Хантер — циничный и нелюдимый, безэмоциональный персонаж. 
                 В предшествующих роману событиях он пережил тяжелейшие физические
                  и душевные травмы, в корне изменившие его натуру, в связи с чем 
                  он превращается в человека-машину, машину для убийств, безжалостно
                   расправляющуюся с любым препятствием, вставшим на пути. 
                   Однако автор ставит Хантера в неожиданное положение, сводя 
                   его с девочкой Сашей, испытывая его, на первый взгляд, 
                   бесчеловечную натуру чувством, напоминающим любовь и родственную 
                   привязанность одновременно. 
                   <img class = "pici"src="pics/hunter.jpg" alt=""><br>
                <h3>Артём</h3><br>
                У Артёма, главного персонажа предыдущей книги «Метро 2033»,
                 после происшедших с ним событий, по словам Мельника,
                 «случилось помешательство, но его выходили». 
                  Артём живет нормальной человеческой жизнью, женился.
                   В книге также есть Артём Попов, который живет на «Тульской».
                   <img class = "pici"src="pics/artem.jpg" alt=""><br>
                <h3>Мельник</h3><br>
                Мельник за время отсутствия Хантера 
                лишился правой ноги и правой руки и сел в 
                инвалидное кресло. Несмотря на это, он все же остался
                в Полисе главой ордена. Именно он даёт
                Бригадиру жетон на людей для зачистки Тульской.
                <img class = "pici" src="pics/melnik.jpg" alt=""><br>
                </h4>
              </div>
            </div>
        </main>
        <footer>
        <div class="resources1">
          Дополнительные ресурсы
          <ul>
            <li> <a href="https://www.chitai-gorod.ru/catalog/book/1166514/">Купить книгу</a></li>
            <li><a href="https://metro.fandom.com/ru/f">Метро Педия</a></li>
            <li><a href="https://store.epicgames.com/ru/p/metro-2033-redux">Купить игру Метро</a></li>
            <li><a href="https://pix.playground.ru/metro_2033_the_last_refuge/">Галлерея Метро</a></li>
          </ul>
          </div>
            <a href="pics/map.jpg"><img class = "logo2"src="pics/metrologo.png" alt=""></a>
            <div class="copyright1">&copy;Сыров.М.Е, 2022 <br>Сформированно: <?php echo date('l, F jS, Y'); ?></div>
        </footer>
    </body>
</html>