<?php
require_once 'include/db.php';
include 'Lab5/header.html';
$discription = mysqli_query($mysql, "SELECT * FROM `discription`");
$definition = mysqli_query($mysql, "SELECT * FROM `definition`");
?>
<div class="bgimage"> 
<div class="content">
    <div class="tablet">
        <table>
            <tr>
                <h3>
                    <th>Название</th>
                </h3>
                <h3>
                    <th>Информация</th>
                </h3>
                <h3>
                    <th>Картинка</th>
                </h3>
            </tr>
            <?php
            while ($disc = mysqli_fetch_assoc($discription) and $dif = mysqli_fetch_assoc($definition)) {
            ?>
                <tr>
                    <th><?php echo $dif[name] ?></th>
                    <th><?php echo $disc[data] ?></th>
                    <th>
                        <div class="images">
                            <img title = "<?php echo $dif[name] ?>"src="Lab5/pics/<?php echo $disc[image_link] ?>" style="width:250px " alt="">
                        </div>
                    </th>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
    </div>
</div>

<footer id="footer1" class="footer1">
    <div class="container">
        <?php
        echo date('Сформировано d.m.Y в G:i:s', time() + 3600 * 3);
        ?>
    </div><br>
    <div class="copyright">&copy;Сыров.М.Е, 2022 </div>
</footer>