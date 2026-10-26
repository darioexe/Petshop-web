@extends('layouts.app')

@section('contenido')
    <section id="contacto" class="tarjeta">
        <h2>Donde encontrarnos</h2>
        <p>Direccion: Calle 1234</p>
        <p>Horario: Lunes a Sabado, de 10:00am a 10pm.</p>
        <p>WhatsApp: 12345678</p>

        <h2>Escribenos</h2>
        <form id="form-contacto" novalidate>
            <label for="nombre">Nombre completo</label>
            <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required>
            
            <label for="correo">Correo Electronico</label>
            <input type="email" id="correo" name="correo" placeholder="tu@gmail.com" required>
            
            <label for="telefono">Telefono</label>
            <input type="tel" id="telefono" name="telefono" placeholder="12345678">

            <label for="asunto">Asunto</label>
            <select name="asunto" id="asunto">
                <option value="pedido">Hacer un pedido</option>
                <option value="consulta">Consultar un producto</option>
                <option value="Otro">Otro</option>
            </select>

            <label for="mensaje">Mensaje</label>
            <textarea name="mensaje" id="mensaje" rows="4" placeholder="Escribenos"></textarea>
            <button type="submit">Enviar</button>

            <p id="mensaje-estado" class="aviso"></p>
        </form>
    </section>
@endsection