<?php foreach ($gallery as $img):?> 
<a href="/bigPicture.php/?id=<?=$img['id_img']?>">
    <img src="/img/small/<?=$img['path']?>" alt="">
</a>
<?php endforeach;?>