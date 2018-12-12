<div class = "catalog_container">

  <?php foreach ($products as $product): ?>
    

    <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="/img/small/<?=$images[$product['id']][0]['path']?>" alt="Card image cap">

                 <div class="card-body">
                  <h5 class="card-title"><?=$product['name']?></h5>
                    <p class="card-text"><?=$product['description']?></p>
                    <p class="card-text">Цена: <strong><?=$product['price']?></strong></p>
                    <a href="/product/card/?id=<?=$product['id']?>"class="card-link">Подробнее<a>
                 <a href="/cart/cart/?id=<?=$product['id']?>" class="card-link">Добавить в корзину</a>
                 </div>
      </div>
  <?php endforeach;?>
</div>