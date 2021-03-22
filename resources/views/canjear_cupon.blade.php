@extends('layouts.app')

<title>Obolobo:comidas</title>

<div class="circulo2 color2">
    <img src="{{ asset('imagenes/enmascarar.png') }}" alt="#" class="enmascarar">
</div>
<div>
    <button id="boton2">
        <h5>Jefferson Linares</h5>
    </button>
</div><br>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid color1">
        <a class="navbar-brand" href=" {{ route('home') }}">
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
 
<div class="container">
    <form action="">
        <div class="row row-cols-4">
            <div class="col">
                <label for="buscador">Buscador</label>
                <input type="text" name="buscador" id="buscador" placeholder="Buscador">
            </div>
            <div class="col">
                <label for="comuna">Comuna</label>
                <select name="comuna" id="comuna">
                    <option value="#">Selecciona</option>
                </select>
            </div>
            <div class="col">
                <label for="establecimiento">Establecimiento</label>
                <select name="establecimiento" id="establecimiento">
                    <option value="#">Selecciona</option>
                </select>
            </div>
            <div class="col">
                <label for="precio">Precio (Desde - Hasta)</label>
                <select name="precio" id="precio">
                    <option value="#">Selecciona</option>
                </select>
            </div>
        </div>
        <center>
            <button id="buscar">buscar</button>
        </center>
    </form>
    <div id="bloque3Padre" >
        <div id="bloque3" class="row row-cols-3">
            
            <div class="col">
                <img id="principal" src="{{ asset('ham.jpg') }}" alt="">
            </div>
            <div class="col">
                <div class="container">
                    <div class="row row-cols-1">
                        <div class="col">
                            <img id="subham" src="{{ asset('ham.jpg') }}" alt="">
                        </div>
                        <div class="col">
                            <img id="subham" src="{{ asset('ham.jpg') }}" alt="">
                        </div>
                        <div class="col">
                            <img id="subham" src="{{ asset('ham.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
             
                <h2>Descripción del cupón</h2>
                <p>isfruta de una noche de amigos con una deliciosa
                    hamburguesa + gaseosa fría y relájate con unos
                    temas de tus artistas favoritos con nuestra música
                    en vivo.
                </p>
                <h2>Incluye</h2>
                <p>
                    Hamburguesas McDonalds + Gaseosa 350ml + papas
                    medianas
                </p>
                <h2>Términos y condiciones</h2>
                <p>
                    Cupón valida hasta el 25 de abril de 2021
                </p>
                <button id="adquirir_cupon">Adquirir cupón</button>
            </div>
        </div>
        </div>

    <div class="container my-5" >
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100 sombras">
                    <button id="boton1"><label>★ </label>4.5</button>
                    <a href="{{ route('canjear_cupon') }}"><img src="{{ asset('ham.jpg') }}" class="card-img-top"
                            alt="...">
                    </a>
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
                    <a href="#"><img src="{{ asset('ham.jpg') }}" class="card-img-top" alt="..."></a>
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
                    <a href="#"><img src="{{ asset('ham.jpg') }}" class="card-img-top" alt="..."></a>
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

    <div class="container my-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100 sombras">
                    <button id="boton1"><label>★ </label>4.5</button>
                    <a href="#"><img src="{{ asset('ham.jpg') }}" class="card-img-top" alt="..."></a>
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
                    <a href="#"><img src="{{ asset('ham.jpg') }}" class="card-img-top" alt="..."></a>
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
                    <a href="#"><img src="{{ asset('ham.jpg') }}" class="card-img-top" alt="..."></a>
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

    <div class="container my-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100 sombras">
                    <button id="boton1"><label>★ </label>4.5</button>
                    <a href="#"><img src="{{ asset('ham.jpg') }}" class="card-img-top" alt="..."></a>
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
                    <a href="#"><img src="{{ asset('ham.jpg') }}" class="card-img-top" alt="..."></a>
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
                    <a href="#"><img src="{{ asset('ham.jpg') }}" class="card-img-top" alt="..."></a>
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
</div>

<style>
    #subham {
        height: 116px;
    }

    #principal {
        height: 350px;
        width: 109%;
        border-radius: 8px;
    }

    #adquirir_cupon {
        background: #34b6a4;
        border-radius: 6px;
        border: none;
        color: white;
        width: 53%;
        height: 11%
    }
    #bloque3Padre{
        position: absolute;
        background: black;
        opacity:0.5;
        color: white;
        width: 100%; 
       padding: 10%;

  text-align:center;
  
    }

    #bloque3 {
     
        background-color: white;
  height: 500px;
  width: 90%;
  margin: 0 auto;/*esto fue lo que se agregó*/
    }

    .boton-head {
        color: #34b6a7;
        background: white;
        border-radius: 6px;
        border: none;
        box-shadow: 1px 2px 2px 2px #ebebeb;
        margin-left: 15px;
        margin-top: -9px;
        height: 21px;
        font-size: 15px;
        font-stretch: 100px;
        font-family: roboto;
    }

    #restaurant-head {
        background: #34b6a7;
        width: 92px;
        height: 59px;
        border-radius: 7px;
    }

    .circulo3 {
        width: 51px;
        height: 51px;
        border-radius: 50px;
        position: absolute;
        margin-left: 37px;
        margin-top: 57%;
        background: white;
    }

    #imagenes {
        height: 51px;
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

    #boton1 {
        width: 100px;
        height: auto;
        margin-left: 255px;
        margin-top: -2px;
        position: absolute;
        color: white;
        background: #34b6a7;
    }

    #buscar {
        color: white;
        background: #34b6a7;
        margin-top: 11px;
        width: 204px;
        height: 39px;
        border: 0ch;
        border-radius: 6px;
    }

    #precio {
        width: 204px;
        height: 39px;
        border-width: thin;
    }

    #establecimiento {
        width: 204px;
        height: 39px;
        border-width: thin;
    }

    #comuna {
        width: 204px;
        height: 39px;
        border-width: thin;
    }

    #buscador {
        border-radius: 4px;
        height: 39px;
        width: 204px;
        border-width: thin;
    }

    .enmascarar {
        margin-left: -2px;
        margin-top: -3px;
        height: 55px;
        width: 55px;
    }

    .gris {
        color: #D6D6D6;
        font-weight: bold;
    }

    .sombras {
        box-shadow: 2px 2px 5px #999;
    }



    #bloque {
        background: #34b6a7;
        width: 100%;
        height: 40%;
        color: white;
    }

    #navb {
        margin-left: 56px;
        color: white;
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

    .circulo2 {
        width: 45px;
        height: 45px;
        border-radius: 50px;
        position: absolute;
        margin-left: 1019px;
        margin-top: 27px;
        box-shadow: 2px 2px 5px #EBEBEB;
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

</style>
