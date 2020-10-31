@extends('layout')

@section('titulo', 'Domicilio')

@section('contenido')
<div class="row" style="justify-content: center; padding-top: 70px">
    <div class="card" style="width: 500px; margin-right: 30px">
        <div class="card-body">
            <h5 class="card-title">Domicilios</h5>
            <p class="card-text">Los domicilios se realizan en la ciudad de bogota. Los horarios de atencion al cliente es de lunes a viernes de 07:00 a 17:00.</p>
        </div>
    </div>
    <div class="card" style="width: 500px;">
        <div class="card-body">
            <h5 class="card-title">Costes</h5>
            <p class="card-text">
                <div>
                    <strong>Compras mayores a $10.000: </strong> El costo de envio es de 5000
                </div>
                <div>
                    <strong>Compras mayores de $50:000: </strong> El costo de envio es de 2500
                </div>
                <div>
                    <strong>Compras mayores de $100:000: </strong> El costo de envio es gratis
                </div>
            </p>
        </div>
    </div>
</div>
@endsection