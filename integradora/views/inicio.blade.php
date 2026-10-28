
@extends('/layouts/base')

@section('title', 'Inicio - Step Zone')

@section('content')

    <section id="inicio" class="seccion">
        <h1>Encuentra tus tenis, encuentra tu estilo</h1>

        <p>
            En Step Zone encontrarás tenis deportivos y casuales
            para diferentes estilos, ocasiones y necesidades.
        </p>
    </section>

    <section id="productos" class="seccion">
        <h2>Qué ofrecemos</h2>

        <div class="productos-lista">
            <article class="tarjeta">
                <h3>Tenis deportivos</h3>
                <p>Modelos pensados para el deporte, el estilo y la comodidad.</p>
            </article>

            <article class="tarjeta">
                <h3>Tenis casuales</h3>
                <p>Diseños para complementar diferentes estilos y ocasiones.</p>
            </article>

            <article class="tarjeta">
                <h3>Diferentes estilos</h3>
                <p>Variedad de diseños para cada gusto.</p>
            </article>

            <article class="tarjeta">
                <h3>Variedad de tallas</h3>
                <p>Encuentra una talla adecuada entre los modelos disponibles.</p>
            </article>
        </div>
    </section>

    <section id="contacto" class="seccion">
        <h2>Dónde encontrarnos</h2>
        <p>Dirección: Av. Las Américas</p>
        <p>Horario: lunes a sábado, de 8:00 a 20:00</p>
        <p>Contacto: Jhonatan Pastor Quispe Samo</p>
    </section>

@endsection
