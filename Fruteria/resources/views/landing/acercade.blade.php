@extends('layout')

@section('titulo', 'Acerca de')

@section('contenido')
    <div class="row" style="justify-content: center; padding-top: 70px">
        <div class="card" style="width: 500px; margin-right: 30px">
            <div class="card-body">
                <h5 class="card-title">Mision</h5>
                <p class="card-text">Distribución de frutas y verduras de calidad para que lleguen en el menor tiempo posible desde el productor hasta el consumidor final. Mejorar los hábitos alimenticios, favoreciendo el consumo diario de frutas y verduras necesario para conseguir una dieta saludable. Crear valor y marcar la diferencia en honradez, calidad y buen servicio.</p>
            </div>
        </div>
        <div class="card" style="width: 500px;">
            <div class="card-body">
                <h5 class="card-title">Vision</h5>
                <p class="card-text">Personas: Ser un buen lugar donde trabajar, que las personas se sientan motivadas para dar cada día lo mejor de sí mismas. Servicio: ser una organización de referencia por el buen trato y servicio dado a sus clientes. Preocupación real por las personas que atendemos. Productividad: Ser una organización eficaz y dinámica. Sociedad: Ayudar a las personas a mejorar su calidad de vida, mejorando su dieta alimenticia.</p>
            </div>
        </div>
    </div>
    <div class="row" style="justify-content: center; padding-top: 70px">
        <div class="card" style="width: 500px; margin-right: 30px">
            <div class="card-body">
                <h5 class="card-title">Datos de contacto</h5>
                <p class="card-text">
                    <div>
                        <strong>Frutas de Ensueño</strong>
                    </div>
                    <div>
                        <span><strong>Ciudad:</strong> Bogota D.C.</span>
                    </div>
                    <div>
                        <span><strong>Direccion:</strong> Cra 1 No. 77 - 66.</span>
                    </div>
                    <div>
                        <span><strong>Telefono:</strong> 7777777</span>
                    </div>
                </p>
            </div>
        </div>
    </div>
@endsection