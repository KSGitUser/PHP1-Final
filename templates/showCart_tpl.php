<table class="tg">
<thead>
        <tr>
          <td>id товара</td>
          <td>наименование товар</td>
          <td>стоимость</td>
          <td>количество</td>
          <td>сумма</td>



        </tr>
      </thead>
  <?php foreach ($products as $product): ?>

      <tr>
      <?php foreach ($product as $key => $value): ?>
         <td class="<?=$key?>_cell"><?=$value?></td>
           <?php endforeach;?>
         <td class="subtotal_line_cell"><?=$product['price']*$product['quantity']?></td>
         <td class="delete_link_cell">
           <a href="/cart/deleteCartItem/?id=<?=$product['id']?>">Удалить</a>
        </td>
      </tr>

<?php endforeach;?>
   </table>