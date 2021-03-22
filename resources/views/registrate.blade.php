@extends('layouts.app')

<title>Obolobo:Registrate</title>

<div class="circulo2 color2">
    <img src="{{ asset('imagenes/enmascarar.png') }}" alt="#" class="enmascarar">
</div>
<div class="roboto">
    <button id="boton2">
        <h5>Iniciar sesión</h5>
    </button>
</div><br>

<nav class="navbar navbar-expand-lg navbar-light bg-light roboto">
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
                    <a class="nav-link active" aria-current="page" href="https://obolobo.tv/">
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

<div class="row roboto">
    <div class="col-sm-4">
        <h2 id="titulo">Regístrate</h2>
        <h5>¡Empieza a adquirir cupones con Obolobo!</h5>
        <form>
            <div class="form-group">
                <label class="gris" for="formGroupExampleInput">Nombres y apellidos</label>
                <center>
                    <input type="text" class="form-control" id="datos-input">
                </center>
            </div>
            <div class="form-group">
                <label class="gris" for="formGroupExampleInput2">Número de celular</label>
                <center>
                    <input type="text" class="form-control" id="datos-input">
                </center>
            </div>
            <div class="form-group">
                <label class="gris" for="formGroupExampleInput2">Correo electrónico (Usuario)</label>
                <center>
                    <input type="email" class="form-control" id="datos-input">
                </center>
            </div>
            <div class="form-group">
                <label class="gris" for="formGroupExampleInput2">Contraseña</label>
                <center>
                    <input type="password" class="form-control" id="datos-input">
                </center>
            </div>
            <div class="form-group">
                <center id="span">
                    <span class="gris ajusteFuente">Al crear una cuenta acepta las </span>
                    <span class="negrita ajusteFuente">Politicas y privacidad/Términos y condiciones</span>
                </center>
            </div>
            <div class="form-group">
                <center>
                    <button class="botonRegistrarte"><span>Regístrate</span></button>
                </center>
            </div>
        </form>
    </div>

    <div class="col-sm-8">
        <img class="imagen" src="{{ asset('imagenes/registrate.jpg') }}" alt="">
    </div>
</div>

<style>
    .enmascarar {
        margin-top: -5px;
        margin-left: -1px;
        height: 50px;
        width: 50px;
    }

    #bloque {
        background: #34b6a7;
        width: 100%;
        height: 33%;
        color: white;
        margin-top: 38px;
    }

    h2,
    h5 {
        font-weight: bold;
        margin-top: 110px;
        margin-left: 13%;
    }

    label {
        margin-left: 13%;
        margin-top: 8px;
    }


    #titulo {
        margin-top: 17px;
    }

    #span {
        margin-top: 4px;
    }

    #datos-input {
        width: 80%;
        border-radius: 7px;
        border-color: #707070;
        margin-left: 5%;
    }

    .ajusteFuente {
        font-size: 12px;
    }

    .negrita {
        font-weight: bold;
    }

    .gris-oscuro {
        color: #6D6D6D;
    }

    .botonRegistrarte {
        color: white;
        background: #34b6a7;
        width: 58%;
        height: 10%;
        text-align: center;
        border: none;
        border-radius: 7px;
        font-size: 15px;
        text-align: center;
        margin-top: 9px;
    }

    .imagen {
        margin-top: -8px;
        width: 66%;
        height: 81%;
        position: absolute;
    }


    .gris {
        color: #6D6D6D;
    }

    .sombras {
        box-shadow: 2px 2px 5px #999;
    }


    #navb {
        margin-left: 56px;
        color: white;
    }

    .color1 {
        background: #34b6a7;
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
        width: 10%;
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
