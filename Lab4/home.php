  <?php	
        include 'header.html';
    ?>
    <section id = "about" class="about">
        <div class="connection" id = "connection">
            <?php 
                
                echo '<p> Здравствуй, '.$_POST['login'].'</p>'; 
                if ($_POST['category'] == '1'){ 
                    echo '<p>Спасибо за Ваше предложение:</p>';
                    echo '<textarea>'.$_POST['message'].'</textarea>';
                }else{
                    echo '<p>Мы рассмотрим Вашу жалобу:</p>';
                    echo '<textarea rows="10" cols = "100">'.$_POST['message'].'</textarea>';
                }
            ?>
            <br>
            <?php
                $file;
                if (isset($_POST['file']) & $_POST['file'] != '') 
                echo 'Вы приложили следующий файл: '.$_POST['file'];
            ?>
            <br>
            <?php
                echo '<a 
                class="btn" href="/index.php?login='.$_POST['login'].'&email='.$_POST['email'].'&contact='.$_POST['contact'].'">Заполнить снова
                </a>';
            ?> 
        </div>
    </section>
    <footer id = "footer1" class="footer1">
        <div class="container">
            <li>
                <?php
                    echo date('Сформировано d.m.Y в G:i:s', time()+3600*3);
                ?>
            </li>
        </div>
        <div class="copyright">&copy;Сыров.М.Е, 2022 <br>Сформированно: <?php echo date('l, F jS, Y'); ?></div>
    </footer>
</body>
</html>