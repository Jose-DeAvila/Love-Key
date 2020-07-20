<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaina+2:wght@400;700&family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/uikit.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="img/j-logo.png" type="image/x-icon">
    <title>Jose De Avila ~ Inicio</title>
</head>
<body onscroll="scroll()">
    <script>
    window.addEventListener('load', function(){
        let success = <?= $_GET['id']?>;
        if(success==1){
            let success_msg = document.getElementById('msg-success');
            success_msg.style.display="block";
        }
    });
    </script>
    <div class="wsp">
        <a  href="https://api.whatsapp.com/send?phone=573015243359&text=Me%20gustaría%20contratar%20sus%20servicios" uk-icon="whatsapp" class="wsp-icon uk-icon-button" target="_blank"></a>
        <span class="texto-wsp">Contáctanos</span>
    </div>
    <header id="inicio">
        <div class="header-init">
            <div class="nav">
                <nav uk-navbar id="navbar">
                    <li class="uk-logo"><a href="#">
                        <img src="img/j-logo.png" alt="" width="50" height="50">
                        <span class="text-brand">Jose De Avila</span>
                    </a></li>
                    <div class="menu">
                        <a class="uk-navbar-toggle" uk-navbar-toggle-icon onclick="mostrar()"></a>
                    </div>
                    <div class="links">
                        <ul class="list-menu" id="menu">
                            <li>
                                <a class="prueba no-scroll" href="#inicio" onclick="mostrar()">INICIO</a>
                            </li>
                            <li>
                                <a class="prueba no-scroll" href="#conocimientos" onclick="mostrar()">CONOCIMIENTOS</a>
                            </li>
                            <li>
                                <a class="prueba no-scroll" href="#relacionados" onclick="mostrar()">RELACIONADOS</a>
                            </li>
                            <li>
                                <a class="prueba no-scroll" href="#contacto" onclick="mostrar()">CONTACTO</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div><br>
        <br>
        <br>
        <div class="infor">
            <div class="img">
                <img src="img/foto.jpg" alt="">
            </div>
            <div class="descripcion">
                <p class="nombreCompleto">Jose Luis De Avila Mercado</p>
                <p class="descrip">
                    Estudiante de ingeniería informática, con más de 5 años de experiencia
                    en el desarrollo web. Conocimiento en varias ramas de las TIC. Me gusta
                    investigar, y siempre intentar buscar una solución rápida y eficaz a los problemas.
                </p>
            </div>
        </div>
        <span class="abajo"><a href="#conocimientos" uk-icon="icon: arrow-down; ratio: 3"></a></span>
    </header>
    <hr class="uk-divider-icon" id="conocimientos">
    <main>
        <section class="conocimientos">
            <div class="img-conocimientos">
                <img src="img/conocimientos.svg" alt="Imágen Conocimientos">
            </div>
            <div class="descrip-cono">
                <h1 class="titulo-sec">Conocimientos</h1>
                <p class="elementos"><span class="cono-element" uk-tooltip="Maquetación del sitio web.">HTML5</span>
                    <span class="cono-element" uk-tooltip="Estilos del sitio web.">CSS3</span>
                    <span class="cono-element" uk-tooltip="Programación en el sitio web.">JavaScript</span>
                    <span class="cono-element" uk-tooltip="Generar código del lado del servidor.">PHP</span>
                    <span class="cono-element" uk-tooltip="Gestor de bases de datos.">MySQL</span>
                    <span class="cono-element" uk-tooltip="Framework CSS para el diseño web responsive.">Bootstrap</span>
                    <span class="cono-element" uk-tooltip="Framework para acciones y eventos de la página.">UiKit</span>
                    <span class="cono-element" uk-tooltip="Framework CSS para el diseño web responsive.">Foundation</span>
                    <span class="cono-element" uk-tooltip="Biblioteca de JavaScript para el desarrollo de interfaces.">React</span>
                    <span class="cono-element" uk-tooltip="Lenguaje de programación utilizado principalmente para el desarrollo de videojuegos.">C#</span>
                    <span class="cono-element" uk-tooltip="Lenguaje de programación extendido de C, uno de los lenguajes de programación mas potentes.">C++</span>
                    <span class="cono-element" uk-tooltip="Lenguaje de programación utilizado principalmente para inteligencia artificial y Machine Learning.">Python</span>
                    <span class="cono-element" uk-tooltip="Lenguaje de programación en interfaces y basado en objetos. Utilizado principalmente en la creación de aplicaciones móviles.">Java</span></p>
            </div>
        </section>
        <hr class="uk-divider-icon" id="relacionados">
        <h1 class="titulo-sec">Relacionados</h1>
        <section class="relacionados">
            <section class="relacionado1">
                <div class="img-relacionado">
                    <img src="img/relacionado.jpg" alt="">
                </div>
                <div class="text-relacionado">
                    <h4 class="nombre">Jhesus Camilo Toledo Rangel</h4>
                    <p class="social"><a href="#" uk-icon="icon: world"></a><a href="#" uk-icon="icon: facebook"></a><a href="#" uk-icon="icon: twitter"></a><a href="#" uk-icon="icon: instagram"></a><a href="#" uk-icon="icon: linkedin"></a></p>
                </div>
            </section>
            <section class="relacionado2">
                <div class="img-relacionado">
                    <img src="img/no_foto.jpg" alt="">
                </div>
                <div class="text-relacionado">
                    <h4 class="nombre">Pedro Agamez Rocha</h4>
                    <p class="social"><a href="#" uk-icon="icon: world"></a><a href="#" uk-icon="icon: facebook"></a><a href="#" uk-icon="icon: twitter"></a><a href="#" uk-icon="icon: instagram"></a><a href="#" uk-icon="icon: linkedin"></a></p>
                </div>
            </section>
            <section class="relacionado3">
                <div class="img-relacionado">
                    <img src="img/no_foto.jpg" alt="">
                </div>
                <div class="text-relacionado">
                    <h4 class="nombre">Alfonso Teuta Leyton</h4>
                    <p class="social"><a href="#" uk-icon="icon: world"></a><a href="#" uk-icon="icon: facebook"></a><a href="#" uk-icon="icon: twitter"></a><a href="#" uk-icon="icon: instagram"></a><a href="#" uk-icon="icon: linkedin"></a></p>
                </div>
            </section>
            <section class="relacionado4">
                <div class="img-relacionado">
                    <img src="img/no_foto.jpg" alt="">
                </div>
                <div class="text-relacionado">
                    <h4 class="nombre">Jesus Valle Zarante</h4>
                    <p class="social"><a href="#" uk-icon="icon: world"></a><a href="#" uk-icon="icon: facebook"></a><a href="#" uk-icon="icon: twitter"></a><a href="#" uk-icon="icon: instagram"></a><a href="#" uk-icon="icon: linkedin"></a></p>
                </div>
            </section>
        </section>
        <section class="otras-pag"></section>
        <hr class="uk-divider-icon" id="contacto">
        <div class="uk-alert-success" uk-alert style="display: none;" id="msg-success">
            <a class="uk-alert-close" uk-close></a>
            <p>Su mensaje ha sido enviado correctamente. Responderemos lo más pronto posible. ¡Gracias por elegirnos!</p>
        </div>
        <h1 class="titulo-sec">Contacto</h1>
        <section class="contacto">
            <form action="enviar-form.php" method="POST">
                <div class="nombre">
                    <label for="nombre">Nombre Completo:</label>
                    <input type="text" class="uk-input uk-form-width-large" name="nombre" id="nombre" required />
                </div>
                <div class="email">
                    <label for="email">Correo electrónico:</label>
                    <input type="email" class="uk-input uk-form-width-large" name="email" id="email" required />
                </div>
                <div class="asunto">
                    <label for="asunto">Asunto:</label>
                    <input type="text" class="uk-input uk-form-width-large" name="asunto" id="asunto" required />
                </div>
                <div class="mensaje">
                    <label for="msg">Mensaje</label>
                    <textarea name="msg" class="uk-input input-msg" id="msg" cols="30" rows="10" required></textarea>
                </div>
                <div class="btn">
                    <input type="submit" value="¡Enviar!" class="btn-enviar">
                </div>
            </form>
        </section>
    </main>
    <footer>
        <div class="info-emp">
            <a href="#" class="logo"><img src="img/j-logo.png" width="100px" height="100px" alt="">Jose De Avila</a>
            <ul class="links-footer">
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#conocimientos">Conocimientos</a></li>
                <li><a href="#relacionados">Relacionados</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </div>
        <div class="social-footer">
            <h2>Redes sociales</h2>
            <ul>
                <li><a target="_blank" href="https://www.facebook.com/lmillons.wilder7" uk-icon="facebook"></a></li>
                <li><a target="_blank" href="https://www.linkedin.com/in/jose-luis-de-avila-mercado-2547471a4/" uk-icon="linkedin"></a></li>
                <li><a target="_blank" href="https://twitter.com/JoseLuisDeAvi13" uk-icon="twitter"></a></li>
            </ul>
        </div>
    </footer>
<script src="js/main.js"></script>
<script src="js/uikit.min.js"></script>
<script src="js/uikit-icons.min.js"></script>
<!--
</body>
</html>