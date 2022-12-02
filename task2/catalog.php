<?php
include 'db.php';
include 'template.php';
function AddBucket($connect,$id,$title,$price,$image){
    $sql = "INSERT INTO `basket`(id_item,title,price,`image`) VALUES
    ($id,'$title','$price','$image')";
    mysqli_query($connect,$sql);
}
if(isset($_GET['id'])){
$discription = mysqli_query($mysql, "SELECT * FROM `item` WHERE `id` = $_GET[id]");
} else{
    $discription = mysqli_query($mysql, "SELECT * FROM `item`");
}
?>
<div class="catalogIt">
    <button onclick="AddBucket('Location: bucket')"></button>
    <div class="bgimage">
<?php
                   while ($disc = mysqli_fetch_assoc($discription)) {
                    $content.= '<div class = "creative">
                    <div class="images">
                            <img title="'.$disc['title'].'" src="pics/'.$disc['image'].'.jpg" style="width:250px; " alt=""><br>
                    </div>
                    <a style="color:black;" href="\catalog.php?id='.$disc['id'].'">'.$disc['title'].'</a><br>
                    
                    Цена = '.$disc['price'].'(руб)<br>
                     <button id='.$disc["id"].' onclick="'.AddBucket($mysql,$disc['id'],$disc['title'],$disc['price'],$disc['image']).'"> Добавить </button>';
                    echo $content;
                    $content="";
                    ?>
                    <?php
                    if (isset($_GET['id'])) { 
                         echo 'Количество = ',$disc['amount'],'<br>';
                         echo 'Дополнительная информация <br>',$disc['info']; 
                    }
                }
                    ?>

    </div>
</div>
                