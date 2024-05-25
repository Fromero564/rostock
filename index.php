<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" type="text/css" href="./estilos/normalize.css" />
    <link rel="stylesheet" type="text/css" href="estilos/style.css" />
    <title>Rostock</title>
</head>
<body>
    <header class="header-rostock">
       <img src="./img/logo/logo.jpeg" alt="logo-rostock" class="logo-img">
        <form action="" class="busqueda-input">
            <input type="Busqueda" class="campo-busqueda">
            <button type="submit" class="boton-busqueda"><i class="fa-solid fa-magnifying-glass icono-busqueda"></i></button>
        </form>
        <nav>
        <ul class="nav-bar">
            <li>Home</li>
            <li>Ingresar</li>
            <li>Contacto</li>
            <li><i class="fa-solid fa-cart-shopping"></i></li>
        </ul>
        </nav>
    </header>
    <section class="seccion-portada">
    <article class="portada">
    <div class="texto-bienvenida">
          <div class="div-texto">
             <p id="fade-text">¡Bienvenidos a Rostock!</p> 
             </div>
     </div>
        <img src="./img/banner/Banner.jpeg" alt="FotoBannerRostock" class="img-1">
        <img src="./img/banner/Banner1.jpeg" alt="FotoBannerRostock" class="img-2">
        <img src="./img/banner/Banner2.jpeg" alt="FotoBannerRostock" class="img-1">
        <img src="./img/banner/Banner3.jpeg" alt="FotoBannerRostock" class="img-2">
   </article>
   <script>
        window.addEventListener('load', () => {
            document.getElementById('fade-text').style.opacity = '1';
        });
    </script>
    </section>
    <main style="display:flex">
     <section style="width:15vw;background-color:#325899;margin:25px;height:70vh">
        <p>Categorias</p>
     </section>
     <section style="width:80vw;margin:25px">
        <article style="display:flex;justify-content:space-around;align-items:center">
        <div class="card">
        <div class="card-img"><div class="img"></div></div>
        <div class="card-title">Product title</div>
        <div class="card-subtitle">Product description. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
        <hr class="card-divider">
        <div class="card-footer">
        <div class="card-price"><span>$</span> 123.45</div>
        <button class="card-btn">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="m397.78 316h-205.13a15 15 0 0 1 -14.65-11.67l-34.54-150.48a15 15 0 0 1 14.62-18.36h274.27a15 15 0 0 1 14.65 18.36l-34.6 150.48a15 15 0 0 1 -14.62 11.67zm-193.19-30h181.25l27.67-120.48h-236.6z"></path><path d="m222 450a57.48 57.48 0 1 1 57.48-57.48 57.54 57.54 0 0 1 -57.48 57.48zm0-84.95a27.48 27.48 0 1 0 27.48 27.47 27.5 27.5 0 0 0 -27.48-27.47z"></path><path d="m368.42 450a57.48 57.48 0 1 1 57.48-57.48 57.54 57.54 0 0 1 -57.48 57.48zm0-84.95a27.48 27.48 0 1 0 27.48 27.47 27.5 27.5 0 0 0 -27.48-27.47z"></path><path d="m158.08 165.49a15 15 0 0 1 -14.23-10.26l-25.71-77.23h-47.44a15 15 0 1 1 0-30h58.3a15 15 0 0 1 14.23 10.26l29.13 87.49a15 15 0 0 1 -14.23 19.74z"></path></svg>
        </button>
       </div>
        </div>
        <div class="card">
        <div class="card-img"><div class="img"></div></div>
        <div class="card-title">Product title</div>
        <div class="card-subtitle">Product description. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
        <hr class="card-divider">
        <div class="card-footer">
        <div class="card-price"><span>$</span> 123.45</div>
        <button class="card-btn">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="m397.78 316h-205.13a15 15 0 0 1 -14.65-11.67l-34.54-150.48a15 15 0 0 1 14.62-18.36h274.27a15 15 0 0 1 14.65 18.36l-34.6 150.48a15 15 0 0 1 -14.62 11.67zm-193.19-30h181.25l27.67-120.48h-236.6z"></path><path d="m222 450a57.48 57.48 0 1 1 57.48-57.48 57.54 57.54 0 0 1 -57.48 57.48zm0-84.95a27.48 27.48 0 1 0 27.48 27.47 27.5 27.5 0 0 0 -27.48-27.47z"></path><path d="m368.42 450a57.48 57.48 0 1 1 57.48-57.48 57.54 57.54 0 0 1 -57.48 57.48zm0-84.95a27.48 27.48 0 1 0 27.48 27.47 27.5 27.5 0 0 0 -27.48-27.47z"></path><path d="m158.08 165.49a15 15 0 0 1 -14.23-10.26l-25.71-77.23h-47.44a15 15 0 1 1 0-30h58.3a15 15 0 0 1 14.23 10.26l29.13 87.49a15 15 0 0 1 -14.23 19.74z"></path></svg>
        </button>
       </div>
        </div>
        <div class="card">
        <div class="card-img"><div class="img"></div></div>
        <div class="card-title">Product title</div>
        <div class="card-subtitle">Product description. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
        <hr class="card-divider">
        <div class="card-footer">
        <div class="card-price"><span>$</span> 123.45</div>
        <button class="card-btn">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="m397.78 316h-205.13a15 15 0 0 1 -14.65-11.67l-34.54-150.48a15 15 0 0 1 14.62-18.36h274.27a15 15 0 0 1 14.65 18.36l-34.6 150.48a15 15 0 0 1 -14.62 11.67zm-193.19-30h181.25l27.67-120.48h-236.6z"></path><path d="m222 450a57.48 57.48 0 1 1 57.48-57.48 57.54 57.54 0 0 1 -57.48 57.48zm0-84.95a27.48 27.48 0 1 0 27.48 27.47 27.5 27.5 0 0 0 -27.48-27.47z"></path><path d="m368.42 450a57.48 57.48 0 1 1 57.48-57.48 57.54 57.54 0 0 1 -57.48 57.48zm0-84.95a27.48 27.48 0 1 0 27.48 27.47 27.5 27.5 0 0 0 -27.48-27.47z"></path><path d="m158.08 165.49a15 15 0 0 1 -14.23-10.26l-25.71-77.23h-47.44a15 15 0 1 1 0-30h58.3a15 15 0 0 1 14.23 10.26l29.13 87.49a15 15 0 0 1 -14.23 19.74z"></path></svg>
        </button>
       </div>
        </div>
        <div class="card">
        <div class="card-img"><div class="img"></div></div>
        <div class="card-title">Product title</div>
        <div class="card-subtitle">Product description. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
        <hr class="card-divider">
        <div class="card-footer">
        <div class="card-price"><span>$</span> 123.45</div>
        <button class="card-btn">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="m397.78 316h-205.13a15 15 0 0 1 -14.65-11.67l-34.54-150.48a15 15 0 0 1 14.62-18.36h274.27a15 15 0 0 1 14.65 18.36l-34.6 150.48a15 15 0 0 1 -14.62 11.67zm-193.19-30h181.25l27.67-120.48h-236.6z"></path><path d="m222 450a57.48 57.48 0 1 1 57.48-57.48 57.54 57.54 0 0 1 -57.48 57.48zm0-84.95a27.48 27.48 0 1 0 27.48 27.47 27.5 27.5 0 0 0 -27.48-27.47z"></path><path d="m368.42 450a57.48 57.48 0 1 1 57.48-57.48 57.54 57.54 0 0 1 -57.48 57.48zm0-84.95a27.48 27.48 0 1 0 27.48 27.47 27.5 27.5 0 0 0 -27.48-27.47z"></path><path d="m158.08 165.49a15 15 0 0 1 -14.23-10.26l-25.71-77.23h-47.44a15 15 0 1 1 0-30h58.3a15 15 0 0 1 14.23 10.26l29.13 87.49a15 15 0 0 1 -14.23 19.74z"></path></svg>
        </button>
       </div>
        </div>
        </article>
     </section>
    </main>
</body>
<footer>

</footer>
</html>