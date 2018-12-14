<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Интернет-магазин ноутбуков</title>
<link rel="stylesheet" href="/../css/styles.css" type="text/css" media="all">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div id="container">
    <header>
    <div class="logotip">
        <a href='/'><img src="/../img/logotip.png" alt="Логотип сайта" title="Магазин ноутбуков"></a>
    </div>
</header>    <div class="leftblock">
        <nav>
    <div class="menu">
        <ul>
            <li><a href="/">Главная</a></li>
            <li><a href="/../product/index">Каталог</a></li>
			<li><a id="numberInCart" href='/../cart/showCart'>Корзина <?=getQuantatiInCart()?></a></li>
     </ul>
    </div>
</nav>    </div>
    <div class="content">
    <?=renderTemplate("login_tpl", ["message" => $_SESSION['user_id']]);?>
	<!-- Добро пожаловать admin! <a href=''>Выход</a> -->
    <h2>Каталог товаров</h2>
	<div class="wrapper_content"><?=$content?></div>




                </div>
    <footer>
 
<p>&copy; Все права защищены</p>    </footer>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
  $(function(){
      $('#add_to_cart').on('click', function () {
        let productId = $(this).data('id');
        $.ajax({
          url: "/cart/cart/",
          type: "GET",
          data: {
            id: productId
          }
        }).done(
           (response) => {;
           let res = JSON.parse(response);
           let resObj = res['number'];
           $('#numberInCart').text(`КОРЗИНА ${resObj}`)}
          
        )
      })
  })
</script>
</body>
</html>