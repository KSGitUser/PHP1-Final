<div>
 <h1><?=$product['name']?></h1> 
  <?php foreach($images as $image):?>
    <img src="/img/small/<?=$image['path']?>" alt="">
  <?php endforeach;?>
  <p><?=$product['description']?></p>
  <p>Цена: <?=$product['price']?> рублей</p>
  <button data-id="<?=$product['id']?>" id="add_to_cart">Добавить в корзину</button>
</div>



 