<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>

<body>
    @yield('content')
    <div id="bloque">
        <div class="container ">
            <div class="row align-items-center">
                <div class="col-sm">
                    <h5 class="paracss">
                        <p class=" font-weight-bold">Términos y condiciones</p>
                        <p><small>Políticas de privacidad</small></p>
                        <p><small>Términos y condiciones </small></p>
                        <p><small>Ayuda</small></p>
                    </h5>
                </div>
                <div class="col-sm">
                    <h5 class="paracss">
                        <p class=" font-weight-bold">Obolobo</p>
                        <p><small>¿Quiénes somos?</small></p>
                        <p><small>Obolobo TV</small></p>
                        <p><small>Empresas</small></p>

                    </h5>
                </div>
                <div class="col-sm ">
                    <h5 class="paracss">
                        <p class=" font-weight-bold">Información de contacto</p>
                        <p><small>+56 123456789</small></p>
                        <p><small>Calle 123 Comuna 123</small></p>
                        <p><small>soporte@obolobo.com</small></p>
                    </h5>
                </div>
                <div class="col-sm">
                    <div class="row align-items-center">
                        <img class="imagenlogo" src="{{ asset('imagenes/obolobo.jpeg') }}">
                    </div>
                    <div class="row align-items-center">
                        <div class="col-sm">
                            <img class="icono" src="{{ asset('imagenes/twitter.jpeg') }}">
                        </div>
                        <div class="col-sm">
                            <img class="icono" src="{{ asset('imagenes/insta.jpeg') }}">
                        </div>
                        <div class="col-sm">
                            <img class="icono" src="{{ asset('imagenes/fb.jpeg') }}">
                        </div>
                        <div class="col-sm">
                            <img class="icono" src="{{ asset('imagenes/youtube.jpeg') }}">
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-12 text-center">
                <h5 class="paracss"> Todos los derechos reservados - Obolobo</h5>
            </div>
        </div>
    </div>
</body>

</html>

<style>
    .icono {
        height: 50px;
        width: 50px;
    }

    .imagenLogo {
        height: 110px;
        width: 91%;
    }

    #product {
        height: 23px;
        margin-left: -1px;
        margin-top: 3px;
    }

    #plane {
        width: 27px;
        height: 18px;
        margin-top: 9px;
        margin-left: 3px;
    }

    .enmascarar {
        margin-left: -2px;
        margin-top: -3px;
        height: 55px;
        width: 55px;
    }

    #imagenes {
        height: 51px;
    }

    .gris {
        color: #D6D6D6;
        font-weight: bold;
    }

    .sombras {
        box-shadow: 2px 2px 5px #999;
    }

    .boton4 {
        margin-left: 76px;
        margin-top: -15px;
        text-align: center;
        color: #6D6D6D;
        background: white;
        border-radius: 8px;
        border: 0ch;
        width: 235px;
        height: 34px;
        font-size: 18px;
    }

    .boton6 {
        margin-left: 76px;
        margin-top: -22px;
        text-align: center;
        color: #6D6D6D;
        background: white;
        border-radius: 8px;
        border: 0ch;
        width: 235px;
        height: 34px;
        font-size: 18px;
    }

    #bloque {
        background: #34b6a7;
        width: 100%;
        height: 40%;
        color: white;
        font-family: Roboto;

    }

    .paracss {
        margin-top: 60px;
    }


    .circulo3 {
        width: 51px;
        height: 51px;
        border-radius: 50px;
        position: absolute;
        margin-left: 37px;
        margin-top: 47%;
        background: white;
    }

    .circulo4 {
        width: 51px;
        height: 51px;
        border-radius: 50px;
        position: absolute;
        margin-left: 38px;
        margin-top: 59%;
        background: white;
    }

    #boton1 {
        width: 100px;
        height: auto;
        margin-left: 255px;
        margin-top: -2px;
        position: absolute;
        color: white;
        background: #34b6a7;
    }

    #ver_mas {
        margin-left: 1082px;
        color: white;
        background: #34b6a7;
        font-size: 16px;
        border-radius: 5px;
        border: 0ch;
        width: 16%;
        height: 45px;
    }


    #navb {
        margin-left: 56px;
        color: white;
    }

    #titulo2 {
        margin-top: -20px;
        margin-left: 190px;
        color: grey;
        font-weight: bold;
    }

    .fuente {
        background: white;
    }

    .color1 {
        background: #34b6a7;
    }

    .color2 {
        background: white;
    }

    .circulo {
        width: 33px;
        height: 33px;
        border-radius: 50px;
        position: absolute;
        margin-left: 143px;
        margin-top: -18px;
    }

    .circulo2 {
        width: 45px;
        height: 45px;
        border-radius: 50px;
        position: absolute;
        margin-left: 1019px;
        margin-top: 27px;
        box-shadow: 2px 2px 5px #EBEBEB;
    }

    .linea {
        height: 5px;
        width: 11%;
    }

    #titulo {
        margin-top: 4px;
        margin-left: 66px;
        margin-bottom: 1rem;
        color: grey;
        font-weight: bold;
    }

    #boton2 {
        margin-left: 78%;
        text-align: center;
        margin-top: 35px;
        width: 216px;
        background: white;
        color: #34b6a7;
        border-radius: 10px;
        border: 0ch;
        box-shadow: 2px 2px 5px #EBEBEB;
    }

    #registrarse {
        margin-top: 4px;
        margin-left: 76%;
        width: 230px;
        font-weight: bold;
    }

    #restaurant {
        height: 23px;
        margin-top: 2px;
    }

</style>
