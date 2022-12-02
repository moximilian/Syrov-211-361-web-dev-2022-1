<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SweeSpoo</title>
    <link rel="stylesheet" href="styl/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet" />
    <script src="main.js" defer></script>
</head>

<body>
    <div class="wrapper">

        <div class="content">
            <header class="header">
                <ul class="horizontal-list">
                    <li>
                        <img style="width:65px; position: absolute; top:10px; left:150px;" src="pics/logo.png" alt="">
                    </li>
                    <li>
                        <h2><a href="main.php">Главная</a></h2>
                    </li>
                    <li>
                        <h2><a href="catalog.php">Каталог</a></h2>
                    </li>
                    <li>
                        <h2><a href="auth.php">Войти</a></h2>
                    </li>
                    <li>
                        <h2><a href="bucket.php">Коризина</a></h2>
                    </li>
                    <li>
                        +7(987)631-05-78<br>
                        surovmax03@gmail.com
                    </li>
                </ul>

            </header>
            <main>
            </main>
        </div>
        <div class="container">
            <footer>

                <?php
                echo date('Сформировано d.m.Y в G:i:s', time() + 3600 * 3);
                ?>
                <br>
                <div class="copyright">&copy;Сыров.М.Е, 2022 </div>
            </footer>
        </div>

    </div>
</body>

</html>