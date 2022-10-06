<?php
$name = 'metro2033';
$file;
$s;
$os;
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
    <?php 
     echo  $name ?>
    </title>
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
                $id='Метро 2034';
                $link='metro2034.php';
                $current_page=true;	
                echo $link;	
                ?>" class = "<?php	
                if( $current_page )	
                  echo 'linkstyle';?>">  
                <?php echo $id;?>
              </a>
              <a href="pics/map.jpg">
                <?php
                $s = date('s');$os = $s % 2;	
                if( $os === 0 )	
                 $name='pics/metrologo.png'; 
                 else	
                   $name='pics/logometro.png';
                echo '<img class = "logo" src="'.$name.'" >';?>
              </a>
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
               <img class="mainjpg" src="pics/2033main.jpg" alt="">
               <h2 id="metro"> Метро 2033</h2>
               
            </div>
        </header>
        <main>
            <div class="discription" style="float:right;">
                <h2>Описание</h2>
                <h4>«Метро́ 2033» — постапокалиптический роман Дмитрия Глуховского, 
                описывающий жизнь людей в московском метро после ядерной войны на Земле.
                 Выпущен издательством «Эксмо» в 2005 году и переиздан издательством 
                 «Популярная литература» в 2007 году. На европейском литературном конкурсе
                  «Еврокон» роман назван «Лучшим дебютом» 2007 года.
                 Меньше чем за три месяца тираж переиздания в 100 тысяч экземпляров 
                 был полностью продан, издательство выпустило дополнительный 
                 100-тысячный тираж, который был распродан менее чем за год к маю 
                 2008 года, третий тираж составил 50 тысяч экземпляров. 
                 Одна из презентаций прошла в рассекреченном бункере Министерства связи
                  на Таганской на глубине 60 метров. Роман также лёг в основу компьютерной
                игры Metro 2033.</h4>
            </div>
            <div class="authorimg">
               <figure>
                  <img class= "author" src="pics/author.jpg" alt="Дмитрий Глуховский - автор"><br>
                  <figcaption><h3>Дмитрий Глуховский</h3></figcaption>
               </figure>
            </div>
            <div class = "mainthing">
             <h2>Краткий сюжет</h2>
             <div class="dics">
              <h4>Книга повествует о людях, оставшихся в живых после ядерной войны. 
                В романе война упоминается лишь вскользь. В результате обмена ядерными ударами все 
                крупные города были стёрты с лица земли. Почти всё действие разворачивается в 
                Московском метрополитене, где на станциях и в переходах живут люди. Благодаря 
                оперативным действиям служб гражданской обороны метрополитен удалось оградить 
                от радиации: почти на всех станциях были закрыты гермозатворы, а в системах 
                вентиляции и водоснабжения активированы противорадиационные фильтры. При этом 
                лишь менее половины станций обитаемы: часть станций заброшена, часть изолирована 
                обрушением тоннелей, часть сгорела. Некоторые станции захвачены существами
                 с поверхности.<br>
                <img class="pic1"src="pics/inside.jpg" alt=""><br>
                Вскоре после ядерной войны централизованная система метрополитена распалась. 
                Станции стали существовать по отдельности. 
                Некоторые объединялись вокруг идей, религий, более сильных станций и т. п..<br>
                <img  class="pic1" src="pics/inside2.jpg" alt=""><br>

                Лежащий на поверхности город практически не был повреждён во 
                время войны, однако под действием времени и агрессивной окружающей
                 среды многие здания обветшали и рассыпались. Растения и животные сильно
                 мутировали..<br>
                <img class="pic1" src="pics/outside.jpg" alt="">
                <img class="pic2" src="pics/lenins.jpg" style="float:right;" alt=""><br>
                </h4>
              </div>
            </div>
        </main>
        <footer>
          <div class="resources">
          Дополнительные ресурсы
          <ul>
            <li> <a href="https://www.chitai-gorod.ru/catalog/book/1166516/">Купить книгу</a></li>
            <li><a href="https://metro.fandom.com/ru/f">Метро Педия</a></li>
            <li><a href="https://store.epicgames.com/ru/p/metro-2033-redux">Купить игру Метро</a></li>
            <li><a href="https://pix.playground.ru/metro_2033_the_last_refuge/">Галлерея Метро</a></li>
          </ul>
          </div>
            <a href="pics/map.jpg"><img class = "logo1"src="pics/metrologo.png" alt=""></a>
            <div class="copyright">&copy;Сыров.М.Е, 2022 <br>Сформированно: <?php echo date('l, F jS, Y'); ?></div>
        </footer>
    </body>
</html>