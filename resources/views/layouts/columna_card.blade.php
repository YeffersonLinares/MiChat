@section('content')

    @yield('columna')

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

@endsection
