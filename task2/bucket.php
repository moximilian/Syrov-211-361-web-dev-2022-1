<?php
include 'db.php';
include 'template.php';
function DeleteFromBasket($connect, $id)
{
    $sql = "DELETE FROM `basket` WHERE `id_item` = $id;";
    mysqli_query($connect, $sql);
}
$discription = mysqli_query($mysql, "SELECT * FROM `basket`");
?>
<div class="bgimage">
    <div class="content">
        <?php
        while ($disc = mysqli_fetch_assoc($discription)) {
            $content .= '<div class = "creative">
                    <div class="images">
                            <img title="' . $disc['title'] . '" src="pics/' . $disc['image'] . '.jpg" style="width:100px " alt=""><br>
                    </div>
                    <a href="\catalog.php?id=' . $disc['id_item'] . '">' . $disc['title'] . '</a><br>'
                . $disc['price'] . '(руб)<br>
                     <button onclick="' . DeleteFromBasket($mysql, $disc['id_item']) . '"> Удалить </button>';
            echo $content;
            $content = "";


            echo $disc['info'];
            $total_price += $disc['price'];
        }
        echo "Общая цена = ";
        echo $total_price;
        ?>
    </div>
</div>