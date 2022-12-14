<?php
    // solicitar el archivo para coneccion de base de datos
include "includes/conecta.php";
?>


<!DOCTYPE html>
<!-- saved from url=(0037)https://runahandmade-cac.netlify.app/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
    <title>Delicias del Norte</title>
    <link rel="icon" href="./Tienda Online_files/cat-solid.svg">
    <link rel="stylesheet" href="./Tienda Online_files/style.css">
    <link rel="stylesheet" href="./Tienda Online_files/styleSlider.css">
    <link rel="stylesheet" href="./Tienda Online_files/all.min.css">
    <link rel="stylesheet" href="./Tienda Online_files/styleProducts.css">
    <link rel="stylesheet" href="./Tienda Online_files/styleFavorite.css">
    <link rel="stylesheet" href="./Tienda Online_files/styleFooter.css">
    <link rel="stylesheet" href="./Tienda Online_files/styleMenu.css">
    <link rel="stylesheet" href="./Tienda Online_files/form_busqueda.css">
    <!--link de font awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header class="main-header">
        <div class="container container--flex">
            <div class="main-header__container">
                <h1 class="main-header__title">Delicias del Norte</h1>
                <span class="icon-menu" id="btn-menu"><i class=" fa-solid fa-bars"></i></span>
                <nav class="main-nav" id="main-nav">
                    <ul class="menu">
                        <li class="menu__item"><a href="index.php" class="menu__link">Inicio</a></li>
                        <li class="menu__item"><a href="index.html" class="menu__link">Productos</a></li>
                        <li class="menu__item"><a href="index.html" class="menu__link">Pedidos</a></li>
                        <li class="menu__item"><a href="contacto.html" class="menu__link">Contacto</a></li>
                    </ul>
                </nav>
            </div>
            <div class="main-header__container">
                <a href="includes/iniciarsesion.php" class="main-header__link">Iniciar Sesi??n <i class="fa-solid fa-user"></i></a>
                <a href="" class="main-header__btn">Carrito <i class="fa-solid fa-cart-shopping"></i></a>
            </div>

            <div class="search-container">
                <form action="">
                  <input type="text" placeholder="Buscar productos..." name="search">
                  <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </header>

    <div class="container-slider">
        <div class="slider" id="slider"><div class="slider__section">
                <a href=""><img src="./Tienda Online_files/portada.jpeg" alt="" class="slider__img"></a>
            </div>
            <div class="slider__section">
                <img src="./Tienda Online_files/food6.jpeg" alt="" class="slider__img">
            </div>
            <div class="slider__section">
                <img src="./Tienda Online_files/food4.jpeg" alt="" class="slider__img">
            </div>
            <div class="slider__section">
                <img src="./Tienda Online_files/slice1.jpg" alt="" class="slider__img">
            </div>
            <div class="slider__section">
                <img src="./Tienda Online_files/slice2.jpg" alt="" class="slider__img">
            </div>
            <div class="slider__section">
                <img src="./Tienda Online_files/slice3.jpg" alt="" class="slider__img">
            </div>
            
        </div>
        <div class="slider__btn slider__btn--right" id="btn-right">&gt;</div>
        <div class="slider__btn slider__btn--left" id="btn-left">&lt;</div>
    </div>
    <main class="main">
        <div class="container">
            <h2 class="main-tittle">
                Nuestras Comidas!
            </h2>
            <section class="container-products">
                <div class="product">
                    <a href=""><img src="./Tienda Online_files/food0.jpeg" alt="" class="product__img"></a>
                    <div class="product__description">
                        <h3 class="product__tittle">Pack 1</h3>
                        <h5 class="product__info" >Informacion acerca del producto </h5>
                        <span class="product__price">$---</span>
                    </div>
                    <a href="" class="product__icon"><i class="fa-solid fa-cart-plus"></i></a>
                </div>
                <div class="product">
                    <a href=""><img src="./Tienda Online_files/food1.jpeg" alt="" class="product__img"></a>
                    <div class="product__description">
                        <h3 class="product__tittle">Pack 2</h3>
                        <span class="product__price">$---</span>
                    </div>
                    <a href="" class="product__icon "><i class="fa-solid fa-cart-plus"></i></a>
                </div>
                <div class="product">
                    <a href=""><img src="./Tienda Online_files/food2.jpeg" alt="" class="product__img"></a>
                    <div class="product__description">
                        <h3 class="product__tittle">Pack 3</h3>
                        <span class="product__price">$---</span>
                    </div>
                    <a href="" class="product__icon"><i class="fa-solid fa-cart-plus"></i></a>
                </div>
                <div class="product">
                    <a href=""><img src="./Tienda Online_files/food3.jpeg" alt="" class="product__img"></a>
                    <div class="product__description">
                        <h3 class="product__tittle">Pack 4</h3>
                        <span class="product__price">$---</span>
                    </div>
                    <link rel="icon" type="image/png" href="./Tienda Online_files/carrito-de-compras.png" class="product__icon "><i class="fa-solid fa-cart-plus"></i>
                </div>
                <div class="product">
                    <a href=""><img src="./Tienda Online_files/food7.jpeg" alt="" class="product__img"></a>
                    <div class="product__description">
                        <h3 class="product__tittle">Pack 5</h3>
                        <span class="product__price">$---</span>
                    </div>
                    <a href="" class="product__icon"><i class="fa-solid fa-cart-plus"></i></a>
                </div>
                <div class="product">
                    <a href=""><img src="./Tienda Online_files/food8.jpeg" alt="" class="product__img"></a>
                    <div class="product__description">
                        <h3 class="product__tittle">Pack 6</h3>
                        <span class="product__price">$---</span>
                    </div>
                    <link rel="icon" type="image/png" href="./Tienda Online_files/carrito-de-compras.png" class="product__icon "><i class="fa-solid fa-cart-plus"></i>
                </div>
                
            </section>

            
        </div>
    </main>
    <footer class="main-footer">
        <div class="footer__section">
            <h3 class="footer__tittle">Ubicaci??n</h3>
                <p class="footer__txt">Punta Alta</p>
                <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
                    <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
                    var setting = {"height":357,"width":804,"zoom":13,"queryString":"Punta Alta, Provincia de Buenos Aires, Argentina","place_id":"ChIJT7LKHeJ37ZURTzO5g4vZfpw","satellite":false,"centerCoord":[-38.87201074840813,-62.0691311994127],"cid":"0x9c7ed98b83b9334f","lang":"es","cityUrl":"/argentina/punta-alta-329565","cityAnchorText":"Mapa de Punta Alta, South Argentina, Argentina","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"799603"};
                    var d = document;
                    var s = d.createElement('script');
                    s.src = 'https://1map.com/js/script-for-user.js?embed_id=799603';
                    s.async = true;
                    s.onload = function (e) {
                      window.OneMap.initMap(setting)
                    };
                    var to = d.getElementsByTagName('script')[0];
                    to.parentNode.insertBefore(s, to);
                  })();</script><a href="https://1map.com/es/map-embed">1 Map</a></div>
        </div>

        


        <div class="footer__section">
            <h3 class="footer__tittle">Links</h3>
            <a class="footer__link" href="">Links a agregar..</a>
        </div>
        <p class="copy">?? 2022 Ikuro Soft - Lucia y Heber Alonso</p>
    </footer>
    <script src="./Tienda Online_files/slider.js.descarga"></script>
    <script src="./Tienda Online_files/menu.js.descarga"></script>


</body></html>