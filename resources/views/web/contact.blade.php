<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">

    <title>Fenrir | Desarrollo y Diseño</title>

    <meta name="author" content="Fenrir">
    <meta name="description"
        content="En Fenrir, estamos comprometidos con la excelencia y la calidad en cada proyecto que emprendemos. Nos esforzamos por comprender a fondo la identidad de la empresa y sus valores, para reflejarlos de manera efectiva en el diseño de la interfaz. Nuestro objetivo es crear una experiencia de usuario impactante que genere una conexión emocional entre las empresas y sus clientes.">
    <meta name="keywords"
        content="Desarrollo web, Diseño web, Desarrollo de aplicaciones, Soluciones tecnológicas, Desarrollo backend, Desarrollo frontend, Experiencia de usuario, Diseño de interfaz, Diseño responsivo, Optimización On-page, Optimización Off-page, Optimización SEO, Generación de contenido, Análisis de datos, Informes de rendimiento, Optimización">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link rel="shortcut icon" href="img/favicon.png" />
    <link rel="apple-touch-icon" href="img/favicon.png" />


    <script src="https://www.google.com/recaptcha/api.js"></script>

</head>

<body data-barba="wrapper" data-cursor="true" data-header-sticky="true" data-menu-style="overlay"
    data-page-layout="dark" data-header-layout="light" data-menu-layout="dark" data-footer-layout="dark"
    data-page-loader="true">

    <div data-duration="5" class="alioth-page-loader" data-layout="dark">
        <span class="apl-background"></span>

        <div class="apl-count"></div>

    </div>


    <div class="alioth-page-transitions" data-layout="dark">

        <span class="apt-bg"></span>


        <div class="trans-text"><span class="fenrir-orange">Cargando,</span> Por favor espere..</div>

    </div>


    <div data-dark-circle="rgba(25,27,29,.6)" data-dark-dot="#191b1d" data-light-circle="hsla(0,0%,100%,.2)"
        data-light-dot="#fff" id="mouseCursor">
        <div id="cursor"></div>
        <div id="dot"></div>
    </div>


    <div class="site-header">
        <div class="header-wrapper">

            <div class="site-branding">

                <div class="site-logo">
                    <a href="/">
                        <img alt="Site Logo" class="dark-logo" src="img/site-logo.png">
                        <img alt="Site Logo Light" class="light-logo" src="img/site-logo-light.png">
                    </a>
                </div>

            </div>


            <div class="menu-toggle">
                <span class="toggle-line"></span>
                <span class="toggle-line"></span>
            </div>


            <div class="site-navigation">
                <span class="sub-back"><i class="icofont-long-arrow-left"></i></span>

                <ul class="menu main-menu">
                    <li class="menu-item"><a href="/">Inicio</a>
                    </li>
                    <li class="menu-item"><a href="about">Nosotros</a>
                    </li>
                    <li class="menu-item"><a href="our-services">Servicios</a>
                    </li>
                    <li class="menu-item"><a href="contact">Contacto</a>
                    </li>
                </ul>


                <div class="menu-widget menu-widget-left">
                    <ul class="social-list">
                        <li><a href="https://www.facebook.com/profile.php?id=61550778398159">Facebook</a></li>
                        <li><a href="#.">Instagram</a></li>
                        <li><a target="_blank" href="https://www.linkedin.com/company/fenrirdesarrollos/">LinkedIn</a></li>
                    </ul>
                </div>


                <div class="menu-widget menu-widget-right">
                    <div class="git-button">
                        <a href="contact">Contáctanos</a>
                    </div>
                </div>

            </div>


            <div class="header-widgets">

                <div class="header-widget">

                    <div class="header-cta-but">
                        <a data-hover="Contáctanos" href="contact">
                            Contáctanos
                        </a>
                    </div>

                </div>

            </div>

        </div>
    </div>


    <div id="page" data-barba="container">

        <div data-anim="true" class="page-header">
            <div class="page-header-wrap wrapper-small">

                <div class="page-title">
                    <h1 class="big-title">Contácta<span class="fenrir-orange">nos</span></h1>
                </div>

            </div>
        </div>


        <div id="content" class="page-content">

            <div class="section">

                <div class="wrapper">

                    <div style="z-index: 1; position: relative;" class="c-col-6">

                        <div class="text-wrapper">
                            <h3 class="has-anim" data-stagger="0.1" data-duration="1.5" data-delay=".1"
                                data-animation="linesUp">
                                Hola, cuentanos sobre tu proyecto.
                                <br>Completa el formulario.
                            </h3>
                        </div>


                        <div class="alioth-form">
                            <form action="{{ route('contact.send') }}" method="POST" id="contactForm">
                                @csrf

                                <div class="field-wrap">
                                    <label for="userName">Tu nombre</label>
                                    <input type="text" id="userName" name="userName" autocomplete="off" />
                                </div>
                                <div id="userNameError" class="error-message"></div>

                                <div class="field-wrap">
                                    <label for="userPhone">Teléfono</label>
                                    <input type="text" id="userPhone" name="userPhone" required autocomplete="off" />
                                </div>
                                <div id="userPhoneError" class="error-message"></div>

                                <div class="field-wrap">
                                    <label for="userEmail">E-mail</label>
                                    <input type="email" id="userEmail" name="userEmail" required autocomplete="off" />
                                </div>
                                <div id="userEmailError" class="error-message"></div>

                                <div class="message-wrap">
                                    <label for="userMessage">Mensaje</label>
                                    <textarea rows="8" id="userMessage" name="userMessage"></textarea>
                                </div>

                                <div class="send-wrap">
                                    <button type="submit" class="button button-block g-recaptcha">Enviar</button>
                                    {{-- <button
                                        type="submit"
                                        class="button button-block g-recaptcha"
                                        data-sitekey="6LdN-cQpAAAAAGNs_4vP4zL1Ctyc9MrmwTHkcqob"
                                        data-callback='onSubmit'
                                        data-action='submit'
                                        >Enviar</button> --}}
                                </div>

                            </form>
                        </div>

                    </div>


                    <div style="z-index: 0; position: relative;" class="c-col-6">

                        <div class="single-image">
                            <img class="has-anim" data-animation="slideUp" data-duration="2" data-delay="0"
                                alt="Single Image" src="img/contact-img.jpg">
                        </div>

                    </div>

                </div>

            </div>


            <div style="background: #131313; padding-top: 100px;padding-bottom: 30px" class="section no-margin">

                <div class="wrapper-small">

                    <div class="c-col-4">

                        <div class="text-wrapper">
                            <h2 style="margin-bottom: 0;">Conversemos</h2>
                            <p>Hablanos de tu próximo proyecto</p>
                            <span style="height: 50px" class="a-empty-space"></span>
                            <a class="inner-button light" href="tel:+56945213531"><span class="fenrir-orange">+569 4521
                                    3531</span></a>
                        </div>

                    </div>


                    <div class="c-col-4">

                        <div class="text-wrapper">
                            <h2 style="margin-bottom: 0">Escríbenos</h2>
                            <p>Hablanos de tu próximo proyecto</p>
                            <span style="height: 50px" class="a-empty-space"></span>
                            <a class="inner-button light" href="mailto:contacto@fenrir.cl" target="_blank"><span
                                    class="__cf_email__ fenrir-orange">contacto@fenrir.cl</span></a>
                        </div>

                    </div>


                    <div class="c-col-4">

                        <div class="text-wrapper">
                            <h2 style="margin-bottom: 0;">Nuestra Oficina</h2>
                            <p>Hablanos de tu próximo proyecto</p>
                            <span style="height: 50px" class="a-empty-space"></span>
                            <a class="inner-button light" href="#."><span class="fenrir-orange">Ver en el
                                    mapa</span></a>
                        </div>

                    </div>

                </div>

            </div>


            <div class="section">

                <div class="wrapper-full no-margin">

                    <div class="c-col-12 no-gap no-margin">

                        <div class="alioth-page-nav" style="background-color: #101010">

                            <a href="about">

                                <div class="page-title">Nosotros</div>


                                <div class="page-sub-title">Más sobre Fenrir.</div>

                            </a>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <div id="footer" class="site-footer section">

        <div class="wrapper">

            <div class="c-col-6 footer-widget footer_brand">

                <div class="footer-logo">
                    <img alt="Footer Logo" src="img/footer-logo-light.png">
                </div>


                <div class="copyright-text">
                    <span id="currentYear"></span>©
                </div>

            </div>


            <div class="c-col-3 footer-widget">

                <div class="social-list-widget">
                    <ul>
                        <li><a target="_blank" href="https://www.facebook.com/profile.php?id=61550778398159">Facebook</a></li>
                        <li><a target="_blank" href="https://www.instagram.com/fenrir_desarrollos_ti/">Instagram</a></li>
                        <li><a target="_blank" href="https://www.linkedin.com/company/fenrirdesarrollos/">LinkedIn</a></li>
                    </ul>
                </div>

            </div>


            <div class="c-col-3 footer-widget">

                <div class="alioth-text-box">
                    <h5 style="color: hsla(0, 0%, 100%, .4)">La Capitanía 80 Of 108 PS 1 108 - Las Condes
                        <br>Santiago de Chile
                        <br>
                        <br><a class="regular-links" href="tel:+56945213531">+56 9 4521 3531</a>
                    </h5>
                </div>

            </div>

        </div>


        <div class="wrapper">

            <div class="c-col-6 footer-widget footer_cta">

                <div class="big-button">
                    <a class="fenrir-orange" target="_blank"
                        href="mailto:contacto@fenrir.cl"><span>contacto@fenrir.cl</span></a>
                </div>

            </div>


            <div class="c-col-6 footer-widget footer_menu">

                <div class="footer-menu">
                    <ul>
                        <li><a href="about">Nosotros</a>
                        </li>
                        <li><a href="our-services">Servicios</a>
                        </li>
                        <li><a href="contact">Contacto</a></li>
                    </ul>
                </div>

            </div>

        </div>

    </div>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/barba.js"></script>
    <script src="js/locomotive-scroll.min.js"></script>
    <script src="js/gsap.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8/jquery.inputmask.min.js"></script>
    <script src="js/contact.js"></script>
    <script>
        function onSubmit(token) {
          document.getElementById("demo-form").submit();
        }
      </script>

</body>

</html>