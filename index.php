<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/mixin.css">
  <title>Lyracons | Tienda</title>
</head>
<body>

  <div class="filter-modal-mobile">
    <div class="close-modal-btn"><img src="images/icons/CRUZ CIERRE - mobile.svg" alt=""></div>
    <h1 class="mont-light">Flitrá por:</h1>
    <div class="size-section">
      <div class="section-title">Talle:</div>
      <div class="sizes-wrapper">
        <div class="size-item selected">36</div>
        <div class="size-item">37</div>
        <div class="size-item">38</div>
        <div class="size-item">39</div>
        <div class="size-item">40</div>
        <div class="size-item">41</div>
        <div class="size-item">42</div>
        <div class="size-item">43</div>
      </div>
    </div>
    <div class="color-section">
      <div class="section-title">Color: Animal print negro</div>
      <div class="colors-wrapper">
        <div class="color-item selected"></div>
        <div class="color-item"></div>
        <div class="color-item"></div>
      </div>
    </div>
    <div class="price-section">
      <div class="section-title">Precio:</div>
      <div class="prices-wrapper">
        <div class="price-item">
          <input type="radio" name="price" value="2-3" id="radio1" checked>
          <label for="radio1" id="radio-label-1">✓</label>
          <div class="price-value">$2.000 - $3.000</div>
        </div>
        <div class="price-item">
          <input type="radio" name="price" value="3-4" id="radio2">
          <label for="radio2" id="radio-label-2">✓</label>
          <div class="price-value">$3.000 - $4.000</div>
        </div>
      </div>
    </div>
    <button class="btn-apply-filters">Aplicar</button>
  </div>

  <div class="main-wrapper">
    <div class="header">

      <div class="top-banner">
        <span class="mont-bold">¡Aprovechá la promo!</span> 
        <div>Comprá hasta 12 cuotas sin interés</div>
        <div class="close-wrapper">
          <img src="images/icons/close-icon.png" alt="">
        </div>
      </div>

      <div class="main-content">

        <!-- Desktop View -->
        <div class="desktop-view">
          <div class="logo">
            <img src="images/Grupo 18549.svg" alt="">
          </div>
  
          <div class="navbar">
            <div class="navbar-item item-shop">
              <a item-shop" href="#">Shop</a>
              <ul class="shop-dropdown">
                <li><a href="#">Pantalones</a></li>
                <li><a href="#">Remeras</a></li>
                <li><a href="#">Camperas</a></li>
              </ul>
            </div>
            <a class="navbar-item item-winter" href="#">Real Winter</a>
            <a class="navbar-item" href="#">Complementos</a>
            <a class="navbar-item" href="#">Editoriales</a>
          </div>
          <div class="search-section">
            <div class="search-input">
              <input type="text" placeholder="BUSCAR">
              <img src="images/icons/search.svg" alt="">
            </div>
            <a href="#"><div class="btn-item btn-login">Ingresar</div></a>
            <a href="#"><div class="btn-item">Carrito</div></a>
            <img src="images/icons/Componente 28 – 2.svg" alt="">
          </div>
        </div>

        <!-- Mobile View -->
        <div class="mobile-view">
          <div class="btn-wrapper">
            <div class="mobile-menu-btn"><img src="images/icons/menu.svg" alt=""></div>
            <img src="images/icons/search.svg" alt="">
          </div>
          <div class="logo">
            <img src="images/Grupo 18549.svg" alt="">
          </div>
          <img src="images/icons/Componente 28 – 2.svg" alt="">
        </div>
      </div>

    </div>

    <section>

      <div class="main-section-wrapper">

        <div class="title-wrapper">
          <div class="breadcrumb">
            <img src="images/icons/Trazado 11.svg" alt="">
            <div>Invierno 2020</div>
          </div>
          <h1 class="main-title mont-light">Título de categoría</h1>
        </div>
        
        <div class="filters-buttons-mobile">
          <div class="filter-btn">
            <div>Filtrá por</div> <div>+</div>
          </div>
          <div class="filter-btn">
            <div>Ordená por</div> <img src="images/icons/Grupo 7364.svg" alt="">
          </div>
        </div>

        <div class="content-wrapper">


          
          <div class="filters-section-desktop">
            <div class="section-title">Filtrar por</div>

            <div class="filter-item">
              <div class="filter-title">
                <div>Talle</div>
                <div class="btn-minus">
                  <img data="size" src="images/icons/menos.svg" alt="">
                </div>
                <div class="btn-plus">
                  <img data="size" src="images/icons/mas.svg" alt="">
                </div>
              </div>
              <div class="options-wrapper options-size">
                <div class="option"><input type="radio" name="talle"><div>35</div></div>
                <div class="option"><input type="radio" name="talle"><div>36</div></div>
                <div class="option"><input type="radio" name="talle"><div>37</div></div>
                <div class="option"><input type="radio" name="talle"><div>38</div></div>
                <div class="option"><input type="radio" name="talle"><div>39</div></div>
                <div class="option"><input type="radio" name="talle"><div>40</div></div>
                <div class="option"><input type="radio" name="talle"><div>41</div></div>
              </div>
            </div>

            <div class="filter-item">
              <div class="filter-title">
                <div>Color</div>
                <div class="btn-minus">
                  <img data="color" src="images/icons/menos.svg" alt="">
                </div>
                <div class="btn-plus">
                  <img data="color" src="images/icons/mas.svg" alt="">
                </div>
              </div>
              <div class="options-wrapper options-color">
                <div class="option"><input type="radio" name="color"><div>Amarillo</div></div>
                <div class="option"><input type="radio" name="color"><div>Blanco</div></div>
                <div class="option"><input type="radio" name="color"><div>Hueso</div></div>
                <div class="option"><input type="radio" name="color"><div>Marrón</div></div>
                <div class="option"><input type="radio" name="color"><div>Negro</div></div>
                <div class="option"><input type="radio" name="color"><div>Nude</div></div>
                <div class="option"><input type="radio" name="color"><div>Plata</div></div>
                <div class="option"><input type="radio" name="color"><div>Rojo</div></div>
                <div class="option"><input type="radio" name="color"><div>Suela</div></div>
                <div class="option"><input type="radio" name="color"><div>Vision</div></div>
              </div>
            </div>

            <div class="filter-item">
              <div class="filter-title">
                <div>Precio</div>
                <div class="btn-minus">
                  <img data="price" src="images/icons/menos.svg" alt="">
                </div>
                <div class="btn-plus">
                  <img data="price" src="images/icons/mas.svg" alt="">
                </div>
              </div>
              <div class="options-wrapper options-price">
                <div class="option"><input type="radio" name="precio"><div>$2000 - $3000</div></div>
                <div class="option"><input type="radio" name="precio"><div>$3000 - $4000</div></div>
              </div>
            </div>

            <div class="filter-item">
              <div class="filter-title">
                <div>Temporada</div>
                <div class="btn-minus">
                  <img data="season" src="images/icons/menos.svg" alt="">
                </div>
                <div class="btn-plus">
                  <img data="season" src="images/icons/mas.svg" alt="">
                </div>
              </div>
              <div class="options-wrapper options-season">
                <div class="option"><input type="radio" name="temporada"><div>Primavera</div></div>
                <div class="option"><input type="radio" name="temporada"><div>Verano</div></div>
                <div class="option"><input type="radio" name="temporada"><div>Otoño</div></div>
                <div class="option"><input type="radio" name="temporada"><div>Invierno</div></div>
              </div>
            </div>

            <div class="filter-item">
              <div class="filter-title">
                <div>Material</div>
                <div class="btn-minus">
                  <img data="material" src="images/icons/menos.svg" alt="">
                </div>
                <div class="btn-plus">
                  <img data="material" src="images/icons/mas.svg" alt="">
                </div>
              </div>
              <div class="options-wrapper options-material">
                <div class="option"><input type="radio" name="material"><div>Algodón</div></div>
                <div class="option"><input type="radio" name="material"><div>Nylon</div></div>
                <div class="option"><input type="radio" name="material"><div>Cuero</div></div>
                <div class="option"><input type="radio" name="material"><div>Seda</div></div>
              </div>
            </div>

          </div>


          
          <div class="products-section">
            <div class="top-bar">
              <div class="product-amount">6 productos</div>
              <div class="sort-section">
                <label class="sort-label">Ordenar por:</label>
                <select name="" id="">
                  <option value="relevancia">Relevancia</option>
                  <option value="relevancia">Más vendido</option>
                  <option value="relevancia">Más nuevo</option>
                </select>
              </div>
            </div>

            <div class="products-wrapper">

              <?php include 'products.php';
              foreach ($items as $item) { ?>
                <div class="product-card">
                  <div class="card-img">
                    <img class="product-img-desktop" src="<?=$item['imageSrc']?>" alt="">
                    <img class="product-img-mobile" src="<?=$item['imageSrcMobile']?>" alt="">
                  </div>
                  <div class="card-text">
                    <div class="card-title"><?=$item['name']?></div>
                    <div class="card-price">
                      <div class="old-price"><?=$item['listPrice']?></div>
                      <div class="current-price"><?=$item['bestPrice']?></div>
                    </div>
                    <div class="card-small-text">Hasta <span class="mont-bold"><?=$item['fees']?> cuotas</span></div>
                  </div>
                </div>
              <?php } ?>

            </div>
            <div class="more-products">
              <button class="btn-more-products">Ver más productos</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>

      <div class="footer">
        <div class="footer-menu">
          <a href="#" class="menu-item">Cambios y devoluciones</a>
          <a href="#" class="menu-item">Envíos</a>
          <a href="#" class="menu-item">Medios de pago</a>
          <a href="#" class="menu-item">Preguntas frecuentes</a>
          <a href="#" class="menu-item">Venta mayorista</a>
        </div>

        <div class="news-section">
          <h3 class="news-title mont-bold">News</h3>
          <div class="news-subtitle">Suscribite y entérate de las promos!</div>
          <div class="news-input">
            <input type="email" placeholder="Escribí tu Mail">
          </div>
          <div class="news-btn">
            <button class="btn-subscribe">Suscribite</button>
          </div>
        </div>
      </div>
    </footer>

  </div>
</body>
</html>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script>

$(".btn-login").click(function(){
  $(".product-card").hide();
});

$(".close-wrapper").click(function(){
  $(".top-banner").hide();
});

$(".item-winter").mouseover(function(){
  $(".main-title").css("color", "red");
});
$(".item-winter").mouseleave(function(){
  $(".main-title").css("color", "black");
});

$(".filter-btn").click(function(){
  $(".filter-modal-mobile").addClass("modal-open");
});
$(".close-modal-btn").click(function(){
  $(".filter-modal-mobile").removeClass("modal-open");
});

$('.btn-minus').click(function() { 
    var data = $(this).children('img').attr('data');
    $(".options-" + data).css("display", "none");

    $(this).siblings('.btn-plus').css("display", "flex");
    $(this).css("display", "none");

});

$('.btn-plus').click(function() { 
    var data = $(this).children('img').attr('data');
    $(".options-" + data).css("display", "flex");

    $(this).siblings('.btn-minus').css("display", "flex");
    $(this).css("display", "none");

});

$('.btn-more-products').click(function() {

  // Fetchea los datos de products.json que está levantado en el port 5000 con JSON Server
  $.getJSON("http://localhost:5000/products", function (data) {
    var product = '';

    $.each(data, function (key, value) {

      product +=  '<div class="product-card">' +
                    '<div class="card-img">' +
                      '<img class="product-img-desktop" src="' + value.imageSrc + '" alt="">' +
                      '<img class="product-img-mobile" src="' + value.imageSrcMobile + '" alt="">' +
                    '</div>' +
                    '<div class="card-text">' +
                      '<div class="card-title">' + value.name + '</div>' +
                      '<div class="card-price">' +
                        '<div class="old-price">' + value.listPrice + '</div>' +
                        '<div class="current-price">' + value.bestPrice + '</div>' +
                      '</div>' +
                      '<div class="card-small-text">Hasta <span class="mont-bold">' + value.fees + ' cuotas</span></div>' +
                    '</div>' +
                  '</div>';

    });
      
    $('.products-wrapper').append(product);
  });
});

</script>