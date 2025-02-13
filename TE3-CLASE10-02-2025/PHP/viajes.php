<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agencia de Viajes</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/viajestyle.css">
</head>
<body>
    <?php include 'menu.php'; ?>
    <div class="hero">Explora el mundo con nosotros</div>
    <div id="home" class="section">
        <h2>Bienvenidos</h2>
        <p>Descubre los mejores destinos al mejor precio.</p>
    </div>
    <div id="viajes" class="section">
        <h2>Nuestros Viajes</h2>
        <div class="viaje-container">
            <div class="viaje">
                <img src="https://source.unsplash.com/300x200/?paris" alt="París">
                <h3>Descubre París</h3>
                <p>Precio: 899€</p>
                <p>Fechas: 10-17 Marzo 2025</p>
            </div>
            <div class="viaje">
                <img src="https://source.unsplash.com/300x200/?tokyo" alt="Tokio">
                <h3>Aventura en Tokio</h3>
                <p>Precio: 1299€</p>
                <p>Fechas: 5-12 Abril 2025</p>
            </div>
            <div class="viaje">
                <img src="https://source.unsplash.com/300x200/?newyork" alt="Nueva York">
                <h3>Vive Nueva York</h3>
                <p>Precio: 1499€</p>
                <p>Fechas: 20-27 Mayo 2025</p>
            </div>
            <div class="viaje">
                <img src="https://source.unsplash.com/300x200/?rome" alt="Roma">
                <h3>Historia en Roma</h3>
                <p>Precio: 799€</p>
                <p>Fechas: 15-22 Junio 2025</p>
            </div>
            <div class="viaje">
                <img src="https://source.unsplash.com/300x200/?cancun" alt="Cancún">
                <h3>Relax en Cancún</h3>
                <p>Precio: 1199€</p>
                <p>Fechas: 1-8 Julio 2025</p>
            </div>
            <div class="viaje">
                <img src="https://source.unsplash.com/300x200/?sydney" alt="Sídney">
                <h3>Explora Sídney</h3>
                <p>Precio: 1799€</p>
                <p>Fechas: 10-17 Agosto 2025</p>
            </div>
        </div>
        <h3>Otras opciones de viaje</h3>
        <ul>
            <li>Atenas - Grecia</li>
            <li>Bali - Indonesia</li>
            <li>Dubai - Emiratos Árabes</li>
            <li>Ámsterdam - Países Bajos</li>
            <li>Buenos Aires - Argentina</li>
            <li>Praga - República Checa</li>
        </ul>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
