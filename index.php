<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        
        <div class="menu container">
            <a href="#" class="logo">logo</a>
            <input type="checkbox" id="menu" />
            <label for="menu">
                <img src="img/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
        </div>

        <div class="header-content container">
            <div class="header-txt">
                <h1>Centro clinico</h1>
                <p>
                La Clínica José Gregorio Hernández es una institución médica comprometida con proporcionar atención médica integral, servicios de calidad, participación comunitaria, y contribución al bienestar general.
                 Su enfoque en el paciente, la calidad médica y la contribución social la convierten en un pilar importante en el sistema de salud local
                </p>
                <a href="#" class="btn-1">Informacion</a>
            </div>
            <div class="header-img">
                <img src="img/left.png" alt="">
            </div>
        </div>

    </header>

    <section class="about container">
        
        <div class="about-img">
            <img src="img/about.png" alt="">
        </div>
        <div class="about-txt">
            <h2>Nosotros</h2>
            <p>
            La Clínica Universitaria de la Universidad José Gregorio Hernández (UJGH) es una institución de salud comprometida con la excelencia en la atención médica, la formación de profesionales de la salud y la investigación científica. 
            Nuestro equipo médico altamente capacitado y nuestras instalaciones equipadas con tecnología de punta nos permiten ofrecer servicios de salud integrales y de alta calidad a nuestra comunidad universitaria y al público en general.
            </p>
            
        </div>

    </section>

    <main class="servicios">

        <h2>Servicios</h2>
        <div class="servicios-content container">
            
            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-hospital-user"></i>
                <h3>pediatra</h3>
            </div>

            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-stethoscope"></i>
                <h3>ginecologia</h3>
            </div>

            <div class="servicio-1">
                <i class="fa-solid fa-bed-pulse"></i>
                <h3>dermatologia</h3>
            </div>

            <div class="servicio-1">
                <i class="fa-solid fa-hospital"></i>
                <h3>cardiologia</h3>
            </div>
        </div>
    </main>

    <section class="formulario container">

        <form method="post" autocomplete="off">

            <h2>Registro de pacientes</h2>

            <div class="input-group">

                <div class="input-container">
                    <input type="text" name="name" placeholder="Nombre y Apellido">
                    <i class="fa-solid fa-user"></i>
                </div>

                <div class="input-container">
                    <input type="tel" name="phone" placeholder="Telefono Celular">
                    <i class="fa-solid fa-user"></i>
                </div>

                <div class="input-container">
                    <input type="email" name="email" placeholder="Correo">
                    <i class="fa-solid fa-envelope"></i>
                </div>

                <div class="input-container">
                    <textarea name="message" placeholder="Detalles de la consulta"></textarea>
                </div>
                <input type="submit" name="send" class="btn" onClick="myfuction()">
            </div>


        </form>
    </section>

    <footer class="footer">

        <div class="footer-content container">
            <div class="link">
                <a href="#" class="logo">logo</a>
            </div>

            <div class="link">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>

        </div>

    </footer>

    <?php
        include("send.php");
    ?>

    <script>
        function myFunction() {
            window.location.href="http://localhost/pagina"
        }
    </script>

</body>
</html>