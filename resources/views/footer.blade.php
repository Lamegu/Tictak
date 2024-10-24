        <footer>
            <div class="footer-column">
                <img src="{{ asset('src/logo.jpg')}}" alt="Logo de Nosotros" style="width: 10%;">
                <p>Explora nuestra exclusiva selección de productos y servicios que están diseñados para hacerte la vida
                    más fácil y agradable. Desde artículos de moda hasta deliciosas comidas, tenemos todo lo que
                    necesitas. ¡No esperes más para mejorar tu vida y hacer una compra hoy! Tu satisfacción está
                    garantizada</p>
            </div>
            <div class="footer-column">
                <h2>Enlaces</h2>
                <ul class="footer-links">
                    <li><a href="#inicio" style="color: #f4fcc6;">Inicio</a></li>
                    <li><a href="#Nosotros" style="color: #f4fcc6;">Acerca de Nosotros</a></li>
                    <li><a href="https://wa.me/573016882553" style="color: #f4fcc6;">Contacto</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h2>Horarios y Redes Sociales</h2>
                <p>Horarios de atención virtual:</p>
                <p>Lunes a Domingo: 07:00 AM - 21:00 PM</p>
                <div class="social-icons">
                    <a class="custom-link" href="https://wa.me/573016882553"><img src="{{ asset('src/inconos/whatsapp.png') }}"
                            alt="whatsapp"></a>
                    <a class="custom-link" href="https://instagram.com/tictak_cocinafacil?igshid=NzZlODBkYWE4Ng=="><img
                            src="{{ asset('src/inconos/instagram.png') }}" alt="Instagram"></a>
                    <a class="custom-link" href="mailto:ec.tictak@gmail.com"><img src="{{ asset('src/inconos/email.png') }}"
                            alt="E-mail"></a>
                </div>
            </div>
        </footer>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>

<style>
    body {
        background-image: url('/src/8.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .btn-custom {
        background-color:#f4c296;
    }

    #vegetariano {
        text-align: center;
        padding: 20px;
        color: #3e602d;
        
    }

    #vegetariano h1 {
        font-size: 26px;
        margin-bottom: 20px;
    }

    .cardMenu {
        padding: 20px;
    }

            .btn-custom {
        background-color: #f4c296;
        /* Otros estilos según sea necesario */
    }

    .custom-link {
        color: beige;
        /* Establece el color beige para los enlaces */
        text-decoration: none;
        /* Elimina el subrayado predeterminado de los enlaces, si es necesario */
    }

    .section1 {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 100%;
        background: #f4fcc6;
    }

    .section1 img {
        max-width: 60%;
    }

    .section1 div {
        flex: 1;
        padding: 60px;
        text-align: center;

    }

    .section1 h1 {
        font-size: 52px;
        color: #3e602d;
    }

    .section1 p {
        font-size: 26px;
        color: #3e602d;
    }

    .section2 {
        background: #3e602d;
        padding: 2%;
    }

    .section2 h1 {
        font-size: 32px;
        color: #3e602d;
        padding: 20px;
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .section2 p {
        font-size: 25px;
        color: #3e602d;
        padding: 20px;
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .two-column-section {
        text-align: center;
        background-color: #f4fcc6;

    }

    .small-image {
        display: block;
        /* Para que la imagen quede en el medio de su columna */
        margin: 0 auto;
        /* Centrar horizontalmente la imagen */
        max-width: 100px;
        /* Ajusta el tamaño máximo de la imagen según tus necesidades */
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
        color: #3e602d;
        /* Espacio entre el título y las columnas */
    }

    .columns-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        /* Espacio entre las columnas */
    }

    .left-column,
    .right-column {
        flex-basis: calc(50% - 10px);
        padding-left: 13%;
        padding-right: 13%;
        padding-top: 5%;
        padding-bottom: 5%;
    }

    .confirmacion{
        background: rgba(244, 252, 198, .5);
        border-radius: 30px;
        margin: 0px 200px 0px 200px;
        padding: 1%;
    }
    

    footer {
        position: absolute;
        background: #3e602d;
        /* Color de fondo del footer */
        color: #f4fcc6;
        /* Color del texto en el footer */
        display: flex;
        justify-content: space-around;
        padding: 20px;
        width: 100%;
        /* El footer ocupa todo el ancho de la pantalla */
    }

    .footer-column {
        flex: 1;
        /* Cada columna ocupa la misma cantidad de espacio */
        padding: 10px;
        text-align: center;
        color: #f4fcc6;
    }

    .footer-column h2 {
        font-size: 18px;
        color: #f4fcc6;
    }

    .footer-links {
        list-style: none;
        padding: 0;
        color: #f4fcc6;

    }

    .footer-links li {
        margin: 5px 0;
        color: #f4fcc6;
    }

    .social-icons img {
        width: 30px;
        /* Ajusta el tamaño de los iconos de redes sociales según sea necesario */
    }
 </style>
