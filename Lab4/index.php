<?php	
        include 'header.html';
    ?>
    <section id = "about" class="about">
        <div class="connection" id = "connection">
            <form action="home.php?" method="post">
                <?php 
                    if(isset($_GET['login']) ){
                        $login = $_GET['login'];
                        $email = $_GET['email'];
                        $contact = $_GET['contact'];
                    }else{
                        $login = "";
                        $email = "";
                        $contact = "";
                    }
                ?>
                <p><b>Обратная связь</b></p>
                
                <p><b>ФИО:</b>
                    <input type="text" maxlength="30" size="40" name="login" value = <?php echo $login ?>>
                </p>
                <p><b>Email:</b>
                    <input type="text" maxlength="30" size="40" name="email" placeholder="Введите Ваш Email" value = <?php echo $email ?>>
                </p>
                <p><b>Откуда вы узнали о нас</b></p>
                <input type="radio" id="contactChoice1" name="contact" value = "1" <?php if ($contact == "1") echo "checked" ?>>
                <label for="contactChoice1" name = "1" >Рассказали друзья</label>
            
                <input type="radio" id="contactChoice2" name="contact" value = "2" <?php if ($contact == "2") echo "checked" ?>>
                <label for="contactChoice2" name = "2">Реклама из интернета</label>
                            
                <p><b>Тип обращения</b></p>
                <select size="1" style="width: 100px;" name = "category">
                    <option disabled>Выберети один вариант</option>
                    <option value="1" name = "one">Предложение</option>
                    <option value="2" name = "two">Жалоба</option>
                </select>
            
                <p><b>Введите текст обращения</b></p>
                <p><textarea rows="10" cols = "75" name = "message"></textarea></p>

                <p><b>Прикрепите файл</b></p>
                <input type="file" name="file" > 
                          
                <fieldset>  
                    <legend>
                        <input type="checkbox" checked> Даю согласие на обработку перональных данных <br>
                    </legend>
                <input type="submit">
            </form>
        </div>
    </section>
    <footer id = "footer1" class="footer1">
        <div class="container">
            <li>
                <?php
                    echo date('Сформировано d.m.Y в G:i:s', time()+3600*3);
                ?>
            </li>
        </div><br>
        <div class="copyright">&copy;Сыров.М.Е, 2022 </div>
    </footer>
</body>
</html>