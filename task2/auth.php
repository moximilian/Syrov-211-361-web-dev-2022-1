<?php
include 'template.php';
if(!empty($_POST)){
    $sql="INSERT INTO `users` (`name`, `login`, `pass`) VALUES('Максим Сыров 211-361,'$_POST[login]','$_POST[password]')";
    mysqli_query($connect,$sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <section id = "about" class="about">
        <div class="authentication" id = "authentication">
            <form  method="post">
                <h1><b>Авторизация</b></h1>
                <b>Логин:</b>
                <input type="text" size="41" name="login">
                <p>
                    <strong>Пароль:</strong>
                    <input type="password" maxlength="20" size="39" name="password">
                </p>
                <input type="submit" plaseholder = "Авторизоваться"> <br>
                <a style="color:black;"href = "">Зарегистироваться</a>
            </form>
        </div>
    
    </section>

</body>
</html>