<!DOCTYPE html>
<!-- saved from url=(0037)https://runahandmade-cac.netlify.app/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
    <title>Delicias del Norte</title>
    <link rel="icon" href="../Tienda Online_files/cat-solid.svg">
    <link rel="stylesheet" href="../Tienda Online_files/style.css">
    <link rel="stylesheet" href="../Tienda Online_files/styleSlider.css">
    <link rel="stylesheet" href="../Tienda Online_files/all.min.css">
    <link rel="stylesheet" href="../Tienda Online_files/styleProducts.css">
    <link rel="stylesheet" href="../Tienda Online_files/styleFavorite.css">
    <link rel="stylesheet" href="../Tienda Online_files/styleFooter.css">
    <link rel="stylesheet" href="../Tienda Online_files/styleMenu.css">
    <link rel="stylesheet" href="../Tienda Online_files/form_busqueda.css">
    <link rel="stylesheet" href="../Tienda Online_files/form_inicio.css">

    <!--link de font awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>  <!-- ENCABEZADO DE LA PAGINA DE INICIO DE SESION  -->
    <header class="main-header">
        <div class="container container--flex">
            <div class="main-header__container">
                <h1 class="main-header__title">Delicias del Norte</h1>
                <span class="icon-menu" id="btn-menu"><i class=" fa-solid fa-bars"></i></span>
                <nav class="main-nav" id="main-nav">
                    <ul class="menu">
                        <li class="menu__item"><a href="../index.php" class="menu__link">Inicio</a></li>
                        <li class="menu__item"><a href="../index.html" class="menu__link">Productos</a></li>
                        <li class="menu__item"><a href="../index.html" class="menu__link">Pedidos</a></li>
                        <li class="menu__item"><a href="../contacto.html" class="menu__link">Contacto</a></li>
                    </ul>
                </nav>
            </div>

            
        </div>
    </header> <!-- ENCABEZADO DEL FORMULARIO  -->
    <div class="wrapper">
      <div class="title-text">
        <div class="title login">
        Iniciar Sesión
        </div>
        <div class="title signup">
        Registrate
        </div>
    </div>
<div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Entrar</label>
          <label for="signup" class="slide signup">Registrarse</label>
          <div class="slider-tab">
</div>
</div>
<div class="form-inner">
          <form action="validar_inicio_sesion.php" method= "POST" class="login">   <!-- INICIO DEL FORMULARIO   -->
            <div class="field">
              <input type="text" placeholder="Usuario" name="ingreso_usuario"  required>
            </div>
<div class="field">
              <input type="password" placeholder="Contraseña"  name="ingreso_password" required>
            </div>
<div class="pass-link">
<a href="#">¿Olvidaste tu contraseña?</a></div>
<div class="field btn">
              <div class="btn-layer">
</div>
<input type="submit" value="Entrar">
            </div>
<div class="signup-link">
¿No eres miembro? <a href="">Registrate</a></div> <!-- INICIO DEL REGISTRO   -->
</form>
<form action="validar_registro_sesion.php" method= "POST" class="signup">
            <div class="field">
              <input type="text" placeholder="Nombre Usuario" name="registro_usuario" required>
            </div>
<div class="field">
              <input type="email" placeholder="Correo Electrónico" name="registro_email" required>
            </div>
<div class="field">
              <input type="password" placeholder="Contraseña" name="registro_contra" required>
            </div>
<div class="field">
              <input type="password" placeholder="Confirmar contraseña" name="registro_contra_confirma" required>
            </div>
<div class="field btn">
              <div class="btn-layer">
</div>
<input type="submit" value="Registrarse">
            </div>
</form>
</div>
</div>
</div>  <!-- LO QUE SIGUE NO SE QUE HACE  -->
<script>    
      const loginText = document.querySelector(".title-text .login");
      const loginForm = document.querySelector("form.login");
      const loginBtn = document.querySelector("label.login");
      const signupBtn = document.querySelector("label.signup");
      const signupLink = document.querySelector("form .signup-link a");
      signupBtn.onclick = (()=>{
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
      });
      loginBtn.onclick = (()=>{
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
      });
      signupLink.onclick = (()=>{
        signupBtn.click();
        return false;
      });
    </script>




            <!-- FOOTER PIE  DE PAGINA -->

    <footer class="footer_form_inicio_sesion"> 

        <p class="copy">© 2022 Ikuro Soft - Lucia y Heber Alonso</p>
    </footer>
    <script src="./Tienda Online_files/slider.js.descarga"></script>
    <script src="./Tienda Online_files/menu.js.descarga"></script>


</body></html>


