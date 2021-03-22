@extends('layouts.app')
<title>Obolobo</title>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<div id="bloque1">
    <div class="container">
        <form action="" method="post">
            <center>
                <h2>¡Bienvenido de nuevo!</h2>
                <button id="salir">X</button>
                <div class="form-group">
                    <label id="credenciales_label" for="usuario">Usuario</label><br>
                    <img id="user" src="{{ asset('imagenes/user.png') }}" alt="">
                    <input id="credenciales_input" type="text" id="usuario">
                </div>
                <div class="form-group">
                    <label id="credenciales_label" for="contrasenia">Contraseña</label><br>
                    <img id="log" src="{{ asset('imagenes/log.png') }}" alt="">
                    <input id="credenciales_input" type="password" id="contrasenia" class=""><br>
                </div>
                <div class="form-group">
                    <button class="iniciar_sesion">Iniciar sesión</button>
                </div>
            </center>
        </form>
    </div>
</div>
<div class="circulo2 color2">
    <img src="{{ asset('imagenes/enmascarar.png') }}" alt="#" class="enmascarar">
</div>
<div>
    <button id="boton2">
        <h5>Iniciar sesión</h5>
    </button>
</div>
<p id="registrarse">¿No tienes cuenta? <a href="{{ route('registrate') }}">Regístrate</a></p>
<div class="my-5">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid color1">
            <a class="navbar-brand" href="{{ route('home') }}">
                <h5 id="navb">Inicio</h5>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
                            <h5 id="navb">Obolobo TV</h5>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <h5 id="navb">Cupones</h5>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <h5 id="navb">Categorias</h5>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <div class="row">
            <div class="col">
                <a href="{{ route('comidas') }}">
                    <img id="restaurant-head" src="{{ asset('imagenes/Enmascarargrupo.png') }}" alt="#">
                    {{-- <button class="boton-head">Comida</button> --}}
                </a>
            </div>
            <div class="col">
                <a href="{{ route('viajes') }}">
                    <img id="restaurant-head" src="{{ asset('imagenes/plane2.png') }}" alt="#">
                </a>
            </div>
            <div class="col">
                <a href="">
                    <img id="restaurant-head" src="{{ asset('imagenes/bienestar.png') }}" alt="#">
                </a>
            </div>
            <div class="col">
                <a href="{{ route('productos') }}">
                    <img id="restaurant-head" src="{{ asset('imagenes/productos.png') }}" alt="#">
                </a>
            </div>
            <div class="col">
                <a href="">
                    <img id="restaurant-head" src="{{ asset('imagenes/ocio.png') }}" alt="#">
                </a>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div>
        <div class="linea color1"></div>
        <div class="circulo color1">
            <img id="restaurant" src="{{ asset('imagenes/restaurant.png') }}" alt="">
        </div>
        <h3 id="titulo2">Comidas</h3>
        <button id="ver_mas">Ver más cupones ></button>
    </div>

    <div class="container my-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100 sombras">
                    <button id="boton1"><label>★</label>4.5</button>
                    <a href="#">
                        <img src="{{ asset('ham.jpg') }}" class="card-img-top" alt="...">
                    </a>
                    <div style="color: black;" class="circulo4 sombras">
                        <img id="imagenes" src="{{ asset('imagenes/mcdonalds.png') }}" alt="">
                    </div>
                    <button class="boton4 sombras">30% de descuento</button>
                    <div class="card-body">
                        <p class="card-text gris">Cupón de descuento en nuestros puntos de
                            comida Mc Donalds
                            Aplica términos y condiciones </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 sombras">
                    <button id="boton1"><label>★ </label>4.5</button>
                    <a href="#"><img src="{{ asset('ham.jpg') }}" class="card-img-top" alt="..."></a>
                    <div style="color: black;" class="circulo4 sombras">
                        <img id="imagenes" src="{{ asset('imagenes/mcdonalds.png') }}" alt="">
                    </div>
                    <button class="boton4 sombras">30% de descuento</button>
                    <div class="card-body">
                        <p class="card-text gris">This is a short card.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 sombras">
                    <button id="boton1"><label>★ </label>4.5</button>
                    <a href="#"><img src="{{ asset('ham.jpg') }}" class="card-img-top" alt="..."></a>
                    <div style="color: black;" class="circulo4 sombras">
                        <img id="imagenes" src="{{ asset('imagenes/mcdonalds.png') }}" alt="">
                    </div>
                    <button class="boton4 sombras">30% de descuento</button>
                    <div class="card-body">
                        <p class="card-text gris">This is a longer card with supporting text below as a natural lead-in
                            to
                            additional content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="linea color1"></div>
        <div class="circulo color1">
            <img id="plane" src="{{ asset('imagenes/plane.png') }}" alt="#">
        </div>
        <h3 id="titulo2">Viajes y turismo</h3>
        <button id="ver_mas">Ver más cupones ></button>
    </div>

    <div class="container my-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100 sombras">
                    <button id="boton1"><label>★ </label>4.5</button>
                    <a href="#"><img src="{{ asset('playa.jpg') }}" class="card-img-top" alt="..."></a>
                    <div style="color: black;" class="circulo3 sombras">
                        <img id="imagenes" src="{{ asset('imagenes/mcdonalds.png') }}" alt="">
                    </div>
                    <button class="boton6 sombras">30% de descuento</button>
                    <div class="card-body">
                        <p class="card-text gris">Cupón de descuento en nuestros puntos de
                            comida Mc Donalds
                            Aplica términos y condiciones </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 sombras">
                    <button id="boton1"><label>★ </label>4.5</button>
                    <a href="#"><img src="{{ asset('playa.jpg') }}" class="card-img-top" alt="..."></a>
                    <div style="color: black;" class="circulo3 sombras">
                        <img id="imagenes" src="{{ asset('imagenes/mcdonalds.png') }}" alt="">
                    </div>
                    <button class="boton6 sombras">30% de descuento</button>
                    <div class="card-body">
                        <p class="card-text gris">This is a short card.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 sombras">
                    <button id="boton1"><label>★ </label>4.5</button>
                    <a href="#"><img src="{{ asset('playa.jpg') }}" class="card-img-top" alt="..."></a>
                    <div style="color: black;" class="circulo3 sombras">
                        <img id="imagenes" src="{{ asset('imagenes/mcdonalds.png') }}" alt="">
                    </div>
                    <button class="boton6 sombras">30% de descuento</button>
                    <div class="card-body">
                        <p class="card-text gris">This is a longer card with supporting text below as a natural lead-in
                            to
                            additional content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="linea color1"></div>
        <div class="circulo color1">
            <img id="product" src="{{ asset('imagenes/product.png') }}" alt="#">
        </div>
        <h3 id="titulo2">Productos</h3>
        <button id="ver_mas">Ver más cupones ></button>
    </div>

    <div class="container my-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100 sombras">
                    <button id="boton1"><label>★ </label>4.5</button>
                    <a href="#"><img src="{{ asset('falabella.jpg') }}" class="card-img-top" alt="..."></a>
                    <div style="color: black;" class="circulo3 sombras">
                        <img id="imagenes" src="{{ asset('imagenes/mcdonalds.png') }}" alt="">
                    </div>
                    <button class="boton6 sombras">30% de descuento</button>
                    <div class="card-body">
                        <p class="card-text gris">Cupón de descuento en nuestros puntos de
                            comida Mc Donalds
                            Aplica términos y condiciones </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 sombras">
                    <button id="boton1"><label>★ </label>4.5</button>
                    <a href="#"><img src="{{ asset('falabella.jpg') }}" class="card-img-top" alt="..."></a>
                    <div style="color: black;" class="circulo3 sombras">
                        <img id="imagenes" src="{{ asset('imagenes/mcdonalds.png') }}" alt="">
                    </div>
                    <button class="boton6 sombras">30% de descuento</button>
                    <div class="card-body">
                        <p class="card-text gris">This is a short card.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 sombras">
                    <button id="boton1"><label>★ </label>4.5</button>
                    <a href="#"><img src="{{ asset('falabella.jpg') }}" class="card-img-top" alt="..."></a>
                    <div style="color: black;" class="circulo3 sombras">
                        <img id="imagenes" src="{{ asset('imagenes/mcdonalds.png') }}" alt="">
                    </div>
                    <button class="boton6 sombras">30% de descuento</button>
                    <div class="card-body">
                        <p class="card-text gris">This is a longer card with supporting text below as a natural lead-in
                            to
                            additional content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <img src="{{ asset('imagenes/promociones.png') }}" alt="#">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <img src="{{ asset('imagenes/15-2.png') }}" alt="#">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <img src="{{ asset('imagenes/promocion_ventas.png') }}" class="card-img-top" alt="#">
        </div>
    </div>
</div>

<div class="row">

</div>

<style>
    #salir {
        border-radius: 50%;
        background: white;
        border: none;
        margin-top: -3%;
        margin-left: 34%;
    }

    #log {
        margin-left: 7px;
        position: absolute;
        margin-top: 4px;
    }

    #user {
        margin-left: 7px;
        position: absolute;
        margin-top: 4px;
    }

    #credenciales_input {
        border-radius: 7px;
        width: 32%;
        height: 34px;
    }

    #credenciales_label {
        margin-left: -25%;
    }

    .iniciar_sesion {
        color: white;
        background: #34b6a7;
        font-size: 16px;
        border-radius: 5px;
        border: 0ch;
        width: 16%;
        height: 45px;
    }

    #bloque1 {
        background: #707070;
        height: 10%;
    }

    #restaurant-head {
        background: #34b6a7;
        width: 92px;
        height: 59px;
        border-radius: 7px;
    }

    .icono {
        height: 50px;
        width: 50px;
        border-radius: 8px;
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
        border-radius: 8px;
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

    body {
        background-color: black;
    }

</style>
