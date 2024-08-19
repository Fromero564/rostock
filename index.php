
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
          <!-- <div class="div-texto">
             <p id="fade-text">¡Bienvenidos a Rostock!</p> 
             </div> -->
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
     <section style="width:80vw;margin:25px;display: flex;flex-wrap: wrap;gap: 20px;">
    <?php
    require_once 'login.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die("Fatal Error");
  
    
    $query = "SELECT * FROM productos";
    $result = $conn->query($query);

    if (!$result) die("Fatal Error");

    $rows = $result->num_rows;

    for ($j = 0; $j < $rows; ++$j) {
        $row = $result->fetch_array(MYSQLI_ASSOC);
        echo   '</article>';
        echo '<article class="card">';
        echo  ' <div class="card-int">';
        echo '<span class="card__span">'.htmlspecialchars($row['id']).'</span>';
        echo '<img src="img/productos/' . htmlspecialchars($row['foto']) . '" alt="Foto de ' . htmlspecialchars($row['nombre']) . '" class="img">';
        echo '<div class="card-data">';
        echo  '<h1 class="title">'.htmlspecialchars($row['nombre']).'</h1>';
        echo  '<p> $'.htmlspecialchars($row['precio']).'</p>';
        echo  '<p>'.htmlspecialchars($row['descripcion']).'</p>';
       
        echo   '<button class="button">Me interesa</button>';
        echo   '</div>';
        echo   '</div>';
        echo   '</article>';
    }

    $result->close();
    $conn->close();
    ?>
</section>

    </main>
</body>
<footer>

</footer>
</html>